<?php

namespace App\Http\Controllers\Personal\Commentaries;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EditController extends Controller
{
    public function __invoke(Comment $comment):View
    {
        return view('personal.comments.edit', compact('comment'));
    }
}
