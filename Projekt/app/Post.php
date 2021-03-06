<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Post extends Model 
{
 

    public function User()
    {
        return $this->belongsTo('User');
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Post';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['message', 'category_id', 'fname'];

 
}
