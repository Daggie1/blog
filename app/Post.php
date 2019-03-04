<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['author'
    ,'title'
    ,'description'
    ];
    protected $guarded=['id'];
    public function user(){
        return $this->belongsTo('App\User','author','id');
    }
}
