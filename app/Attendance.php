<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Attendance extends Model
{
      

    public function students()
    {
    	return $this->belongTo(Student::class);
    }

    public function scopeSearchId($query, $key)
    {
      return $query
        ->where('student_id', 'LIKE', '%' . $key . '%')
        ->orWhere(DB::raw('\'' . $key . '\''), 'LIKE', DB::raw('CONCAT("%", student_id, "%")'));
    }
}
