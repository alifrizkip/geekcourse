<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function videos() {
        return $this->hasMany('App\Video');
    }
}
