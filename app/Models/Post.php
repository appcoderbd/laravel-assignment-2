<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [

        'category_id','title','content','post_images'
    ];


    public function category(){

        return $this->belongsTo(Categorie::class);
    }
}
