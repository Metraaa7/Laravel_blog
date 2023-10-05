<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\View\View;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag):View
    {
        $tag->update($request->validated());
        return view('admin.tags.show', compact('tag'));
    }
}
