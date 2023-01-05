<?php

namespace App\Http\Controllers;
use App\Studentfid;
use DB;
use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $staffs = Staff::orderBy('lastname')->orderBy('firstname')->orderBy('middlename');

        if ($request->has('key'))
            $staffs->searchStaffName($request->key);
        if ($request->has('sex'))
            $staffs->where('sex', $request->sex);

        return view('staff.index')
            ->withStaffs($staffs->paginate(15))
            ->withInputs([
                'key'        => $request->has('key') ? $request->key : '',
                'sex'        => $request->has('sex') ? $request->sex : '',
            ]);
    
    }

    public function create()
    {
        $studentfids = Studentfid::orderBy('fpid')->get();

        return view('staff.create')->withStudentfids($studentfids);
    }

    public function store(Request $request)
    {
        $staff = new Staff();

        $staff->staff_id          = $request->staff_id;
        $staff->firstname         = $request->firstname;
        $staff->studentfpid_id    = $request->studentfpid_id;
        $staff->middlename        = $request->middlename;
        $staff->lastname          = $request->lastname;
        $staff->sex               = $request->sex;
        $staff->age               = $request->age;
        $staff->bdate             = $request->bdate;
        $staff->address           = $request->address;
        $staff->email             = $request->email;
        $staff->contact           = $request->contact;

        $staff->save();

        return redirect()->route('staff.show', [$staff->id]);
    }

    public function show(Staff $staff)
    {
        return view('staff.show')->withStaff($staff);
    }

    public function edit(Staff $staff)
    {
        
        $studentfids = Studentfid::orderBy('fpid')->get();
        
        return view('staff.edit')->withStaff($staff)->withStudentfids($studentfids);
    }

    public function update(Request $request, Staff $staff)
    {
        $staff->staff_id          = $request->staff_id;
        $staff->firstname         = $request->firstname;
        $staff->studentfpid_id    = $request->studentfpid_id;
        $staff->middlename        = $request->middlename;
        $staff->lastname          = $request->lastname;
        $staff->sex               = $request->sex;
        $staff->age               = $request->age;
        $staff->bdate             = $request->bdate;
        $staff->address           = $request->address;
        $staff->email             = $request->email;
        $staff->contact           = $request->contact;

        $staff->save();

        return redirect()->route('staff.show', [$staff->id]);
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staff.index');
    }
}
