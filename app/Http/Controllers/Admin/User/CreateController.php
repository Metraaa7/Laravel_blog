<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;
use function dd;

class CreateController extends Controller
{
    public function __invoke():View
    {
        $roles = User::getRoles();
        return view('admin.users.create', compact('roles'));
    }
}
