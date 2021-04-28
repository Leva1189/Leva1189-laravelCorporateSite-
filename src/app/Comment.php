<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['name', 'text', 'site', 'email','parent_id', 'article_id', 'user_id'];

    public function article(){
        return $this->belongsTo('Corp\Article');
    }

    public function user(){
        return $this->belongsTo('Corp\User');
    }
}
