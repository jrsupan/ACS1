<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Studentfid extends Model
{
     use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
}
