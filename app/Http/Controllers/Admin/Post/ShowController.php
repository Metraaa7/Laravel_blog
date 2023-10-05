<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;
use function dd;

class ShowController extends BaseController
{
    public function __invoke(Post $post):View
    {
       return view('admin.posts.show', compact('post'));
    }
}
