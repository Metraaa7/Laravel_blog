<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\View\View;
use function dd;

class CreateController extends BaseController
{
    public function __invoke():View
    {
        $categories = Category::all();
        $tags = Tag::all();
       return view('admin.posts.create', compact('categories', 'tags'));
    }
}
