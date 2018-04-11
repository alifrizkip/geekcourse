<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courses() {
        return $this->hasMany('App\Course');
    }

    public function wishlists() {
        return $this->belongsToMany('App\Course', 'wishlists', 'user_id', 'course_id');
    }

    public function enrolledCourses() {
        return $this->belongsToMany('App\Course', 'course_user', 'user_id', 'course_id');
    }
}
