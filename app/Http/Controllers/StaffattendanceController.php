<?php

namespace App\Http\Controllers;

use App\Staffattendance;
use Illuminate\Http\Request;

class StaffattendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
    {

        $staffattendances = Staffattendance::join('staff','staffattendances.staff_id','=','staff.staff_id')->select('staffattendances.*','staff.firstname'); 

        if ($request->has('staff_id'))
            $staffattendances->where('staffattendances.staff_id',$request->staff_id);
        if ($request->has('date'))
            $staffattendances->where('date', $request->date);
        if ($request->has('time_out'))
            $staffattendances->where('time_out', $request->time_out);


        return view('staffattendance.index')
        ->withStaffattendances($staffattendances->paginate(15))
        ->withInputs([   'staff_id'  => $request->has('staff_id') ? $request->staff_id : '',
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
