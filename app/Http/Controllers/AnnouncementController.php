<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\Student;
use App\Mail\sendAnnouncements;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.   
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {   
       $announcement = Announcement::distinct('content','name')->paginate(10);
        return view('announcements.index')->with('announcement',$announcement);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $dateAnnounce = date('Y-m-d',strtotime($request->date));

        $announce = Announcement::create([
        'name' => $request->name,
        'content' => $request->content,
        'date' => $dateAnnounce,
         ]);
        $request->session()->flash('success','You have added an announcement');
         $student = Student::all();
         foreach ($student as $key => $value) {
             $email = new sendAnnouncements($value,$announce);
             \Mail::to($value->contact_info)->send($email);
         }
       
        return redirect()->back();
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
