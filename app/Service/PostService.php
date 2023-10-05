<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data) {
        try {
            Db::beginTransaction();
            if (isset($data['tag_idx'])) {
                $tags = $data['tag_idx'];
                unset($data['tag_idx']);
            }

            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);

            $post = Post::create($data);
            if (isset($tags)) {
                $post->tags()->attach($tags);
            }
            Db::commit();
        } catch(\Exception $exception) {
            Db::rollBack();
            abort(500);
        }
    }

    public function update($data, $post) {
        try {
            Db::beginTransaction();
            if (isset($data['tag_idx'])) {
                $tags = $data['tag_idx'];
                unset($data['tag_idx']);
            } else {
                $tags = [];
            }

            if(isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            if(isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }

            $post->update($data);
            if (!empty($tags)) {
                $post->tags()->sync($tags);
            } else {
                $post->tags()->detach();
            }
            Db::commit();
        } catch(\Exception $exception) {
            Db::rollBack();
            abort(500);
        }

        return $post;
    }
}