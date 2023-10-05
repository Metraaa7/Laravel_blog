<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class DeleteController extends Controller
{
    public function __invoke(User $user):RedirectResponse
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
