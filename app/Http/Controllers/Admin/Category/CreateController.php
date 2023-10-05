<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use function dd;

class CreateController extends Controller
{
    public function __invoke():View
    {
       return view('admin.categories.create');
    }
}
