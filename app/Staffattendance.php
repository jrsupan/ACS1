<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Staffattendance extends Model
{
    public function staffs()
    {
    	return $this->belongTo(Staff::class);
    }
    public function scopeSearchSid($query, $key)
    {
      return $query
        ->where('staff_id', 'LIKE', '%' . $key . '%')
        ->orWhere(DB::raw('\'' . $key . '\''), 'LIKE', DB::raw('CONCAT("%", staff_id, "%")'));
    }
}
