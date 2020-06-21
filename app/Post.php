<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected  $fillable = ['title', 'content', 'thumbnail', 'slug', 'user_id'];
    protected $dates = ['created_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function asaDi()
    {
        if (!$this->thumbnail) {
            return asset('img/pantai.jpg');
        }
        return asset('img/' . $this->thumbnail);
    }
}
