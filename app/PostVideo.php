<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PostVideo extends Model
{
    protected $guarded =[];
    public function cat()
    {
	    return $this->hasOne(PostVideosCategory::class,'id','post_video_category_id');
    }
}
