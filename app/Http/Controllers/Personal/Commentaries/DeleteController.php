<?php

namespace App\Http\Controllers\Personal\Commentaries;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DeleteController extends Controller
{
    public function __invoke(Comment $comment):RedirectResponse
    {
//        $data = [
//            'usersCount' => User::all()->count(),
//            'postsCount' => Post::all()->count(),
//            'categoriesCount' => Comment::all()->count(),
//            'tagsCount' => Tag::all()->count()
//        ];
        $comment->delete();
        return redirect()->route('personal.comments');
    }
}
