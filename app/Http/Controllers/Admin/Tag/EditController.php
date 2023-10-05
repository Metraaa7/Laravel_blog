<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\View\View;
use function dd;

class EditController extends Controller
{
    public function __invoke(Tag $tag):View
    {
       return view('admin.tags.edit', compact('tag'));
    }
}
