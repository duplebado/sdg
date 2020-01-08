<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    /**
     *  Get the images in the project
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
