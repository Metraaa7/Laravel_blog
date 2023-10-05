<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke():View
    {
        $posts = Post::paginate(6);
        $getRandPosts = Post::get()->random(4);
        $likedPosts = Post::withCount('likedByUsers')->orderBy('liked_by_users_count', 'DESC')->get()->take(4);
        return view('main.index', compact('posts', 'getRandPosts', 'likedPosts'));
    }
}
