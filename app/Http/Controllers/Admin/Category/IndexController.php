<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\View\View;
use function dd;

class IndexController extends Controller
{
    public function __invoke():View
    {
        $categories = Category::all();
       return view('admin.categories.index', compact('categories'));
    }
}
