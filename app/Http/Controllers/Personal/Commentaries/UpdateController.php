<?php

namespace App\Http\Controllers\Personal\Commentaries;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comment\UpdateRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Comment $comment):RedirectResponse
    {
//        $data = [
//            'usersCount' => User::all()->count(),
//            'postsCount' => Post::all()->count(),
//            'categoriesCount' => Comment::all()->count(),
//            'tagsCount' => Tag::all()->count()
//        ];
        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('personal.comments');
    }
}
