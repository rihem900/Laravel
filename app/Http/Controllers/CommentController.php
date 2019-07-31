<?php

namespace App\Http\Controllers;

use App\Postes;

use App\User;
use App\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   public function index(Postes $poste){
    
    //$id = auth()->user()->id;
    //all comment where user_id is 2
     //$postes = postes::where('user_id','=',$id)->get();

    dd($poste->id);
  //  return view('/postes.post_view', compact('comments',$comments));

   }
   

    public function store(Postes $post)
    {
        $attributes = $this->validateComment();

        $post->addComment($attributes);
    }

   
    public function validateComment(){

        $attribute= $this->request()->validate([
            'comment'=>['required','min:3','max:255'],
            'user_id'=>['required'],
            'post_id'=>['required']
        ]);

    }
}
