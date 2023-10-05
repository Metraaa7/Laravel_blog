<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class DeleteController extends BaseController
{
    public function __invoke(Post $post):RedirectResponse
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
