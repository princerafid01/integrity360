<?php

namespace App;

use App\PCategory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    protected $guarded =[];
    public function cat()
    {
	    return $this->hasOne(PCategory::class,'id','p_category_id');
    }
    
}
