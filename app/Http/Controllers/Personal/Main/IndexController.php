<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\PostUserLike;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke():View
    {
        $data = [
            'likesCount' => PostUserLike::all()->count(),
            'commsCount' => Comment::all()->count(),
        ];

        return view('personal.main.index', compact('data'));
    }
}
