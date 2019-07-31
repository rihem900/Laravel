<?php

namespace App;

use App\User;
use App\Comments;
use Illuminate\Database\Eloquent\Model;

class Postes extends Model
{

    protected $fillable=[
        'user_id', 'title', 'message','privacy','comments'
    ];

    public function owner(){
        
        return $this->belongsTo(User::class);

    }

    public function comments(){
        return $this->hasMany(Comments::class,["user_id",'user_id']);
    }

    public function addComment($comment){
        $this->comments()->create($comment);
    }
}


