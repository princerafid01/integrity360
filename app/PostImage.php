<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PostImage extends Model
{
    protected $guarded =[];
    public function cat()
    {
	    return $this->hasOne(PostImageCategory::class,'id','post_images_category_id');
    }
    
}
