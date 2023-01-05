<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
     use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function schoolyear()
    {
        return $this->belongsTo(Schoolyear::class);
    }
    public function studentfid()
    {
        return $this->belongsTo(Studentfid::class);
    }

    public function attendance()
    {
      return $this->hasMany(Attendance::class);
    }
    public function scopeSearchName($query, $key)
    {
      return $query
        ->where('fname', 'LIKE', '%' . $key . '%')
        ->orWhere('mname', 'LIKE', '%' . $key . '%')
        ->orWhere('lname', 'LIKE', '%' . $key . '%')
        ->orWhere(DB::raw('\'' . $key . '\''), 'LIKE', DB::raw('CONCAT("%", fname, "%")'))
        ->orWhere(DB::raw('\'' . $key . '\''), 'LIKE', DB::raw('CONCAT("%", mname, "%")'))
        ->orWhere(DB::raw('\'' . $key . '\''), 'LIKE', DB::raw('CONCAT("%", lname, "%")'));
    }
}
