<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\user;;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';


    protected $fillable = [
        'post_id',
        'user_id',
        'comment_body'
    ];


    public function post(){
    //JOIN
    return $this->belongsTo(Post::class,'post_id','id');
    }

    public function user(){
    //JOIN
    return $this->belongsTo(User::class,'user_id','id');
    }
}