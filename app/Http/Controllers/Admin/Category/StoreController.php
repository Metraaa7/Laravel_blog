<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request):RedirectResponse
    {
        Category::create($request->validated());
        return redirect()->route('admin.category.index');
    }
}
