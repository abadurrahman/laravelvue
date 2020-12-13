<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

     public function store(Request $request,$product)
    {
        $this->validate($request,[
            'comment' => 'required'
        ]);

        $comment = new Comment();
        $comment->product_id = $product;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();
       
        return redirect()->back();
    }


}
