<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category):View
    {
        $category->update($request->validated());
        return view('admin.categories.show', compact('category'));
    }
}
