<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class DeleteController extends Controller
{
    public function __invoke(Category $category):RedirectResponse
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
