<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Staff extends Model
{
    public function staffattendance()
    {
      return $this->hasMany(Staffattendance::class);
    }
    public function studentfid()
    {
        return $this->belongsTo(Studentfid::class);
    }
     public function scopeSearchStaffName($query, $key)
    {
      return $query
        ->where('firstname', 'LIKE', '%' . $key . '%')
        ->orWhere('middlename', 'LIKE', '%' . $key . '%')
        ->orWhere('lastname', 'LIKE', '%' . $key . '%')
        ->orWhere(DB::raw('\'' . $key . '\''), 'LIKE', DB::raw('CONCAT("%", firstname, "%")'))
        ->orWhere(DB::raw('\'' . $key . '\''), 'LIKE', DB::raw('CONCAT("%", middlename, "%")'))
        ->orWhere(DB::raw('\'' . $key . '\''), 'LIKE', DB::raw('CONCAT("%", lastname, "%")'));
    }
}
