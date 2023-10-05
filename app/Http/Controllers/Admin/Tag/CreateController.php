<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use function dd;

class CreateController extends Controller
{
    public function __invoke():View
    {
       return view('admin.tags.create');
    }
}
