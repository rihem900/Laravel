<?php

namespace App;

use App\Postes;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable=[
        'comment','user_id','post_id'
    ];

    public function post(){
        
        return $this->belongsTo(Postes::class);

    }
}
