<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;
use function dd;

class IndexController extends BaseController
{
    public function __invoke():View
    {
        $posts = Post::all();
       return view('admin.posts.index', compact('posts'));
    }
}
