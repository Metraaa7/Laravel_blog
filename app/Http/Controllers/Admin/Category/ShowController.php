<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\View\View;
use function dd;

class ShowController extends Controller
{
    public function __invoke(Category $category):View
    {
       return view('admin.categories.show', compact('category'));
    }
}
