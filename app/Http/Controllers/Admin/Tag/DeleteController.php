<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;

use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class DeleteController extends Controller
{
    public function __invoke(Tag $tag):RedirectResponse
    {
        $tag->delete();
        return redirect()->route('admin.tag.index');
    }
}
