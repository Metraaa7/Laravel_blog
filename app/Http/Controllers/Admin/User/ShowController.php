<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\View\View;
use function dd;

class ShowController extends Controller
{
    public function __invoke(User $user):View
    {
       return view('admin.users.show', compact('user'));
    }
}
