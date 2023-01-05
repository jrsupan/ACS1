<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $attendances = Attendance::join('students','attendances.student_id','=','students.student_id')->select('attendances.*','students.fname');  
        if ($request->has('student_id'))
             $attendances->where('attendances.student_id',$request->student_id);
        if ($request->has('date'))
            $attendances->where('date', $request->date);
        if ($request->has('time_out'))
            $attendances->where('time_out', $request->time_out);


        return view('attendance.index')

        ->withAttendances($attendances->paginate(15))
        ->withInputs([   'student_id'  => $request->has('student_id') ? $request->student_id : '',
                         'date'        => $request->has('date') ? $request->date : '',
                         'time_out'        => $request->has('time_out') ? $request->time_out : '',]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
