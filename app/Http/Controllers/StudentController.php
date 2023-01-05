<?php

namespace App\Http\Controllers;

use App\Student;
use App\Level;
use App\Schoolyear;
use App\Studentfid;
use DB;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
         $levels = Level::all();
        $schoolyears = Schoolyear::all();

        $students = Student::orderBy('lname')->orderBy('fname')->orderBy('mname');

        if ($request->has('key'))
            $students->searchName($request->key);
        if ($request->has('sex'))
            $students->where('sex', $request->sex);
        if ($request->has('schoolyear'))
            $students->where('schoolyear_id', $request->schoolyear);
        if ($request->has('level'))
            $students->where('level_id', $request->level);

        return view('student.index')
            ->withStudents($students->paginate(15))
            ->withLevels($levels)
            ->withSchoolyears($schoolyears)
            ->withInputs([
                'key'        => $request->has('key') ? $request->key : '',
                'sex'        => $request->has('sex') ? $request->sex : '',
                'schoolyear' => $request->has('schoolyear') ? $request->schoolyear : '',
                'level'      => $request->has('level') ? $request->level : '',
            ]);
    
    }

    public function create()
    {
        $levels = Level::orderBy('description')->get();
        $schoolyears = Schoolyear::orderBy('description')->get();
        $studentfids = Studentfid::orderBy('fpid')->get();

        return view('student.create')->withLevels($levels)->withSchoolyears($schoolyears)->withStudentfids($studentfids);
    }

    public function store(Request $request)
    {
        $student = new Student();

        $student->level_id          = $request->level_id;
        $student->schoolyear_id     = $request->schoolyear_id;
        $student->student_id        = $request->student_id;
        $student->studentfpid_id    = $request->studentfpid_id;
        $student->fname             = $request->fname;
        $student->mname             = $request->mname;
        $student->lname             = $request->lname;
        $student->sex               = $request->sex;
        $student->bdate             = $request->bdate;
        $student->bplace            = $request->bplace;
        $student->paddress          = $request->paddress;
        $student->address           = $request->address;
        $student->contactno         = $request->contactno;
        $student->email             = $request->email;
        $student->religion          = $request->religion;
        $student->age               = $request->age;
        $student->father_fname      = $request->father_fname;
        $student->father_mname      = $request->father_mname;
        $student->father_lname      = $request->father_lname;
        $student->father_occupation = $request->father_occupation;
        $student->father_contactno  = $request->father_contactno;
        $student->father_office     = $request->father_office;
        $student->father_oaddress   = $request->father_oaddress;
        $student->mother_fname      = $request->mother_fname;
        $student->mother_mname      = $request->mother_mname;
        $student->mother_lname      = $request->mother_lname;
        $student->mother_occupation = $request->mother_occupation;
        $student->mother_contactno  = $request->mother_contactno;
        $student->mother_office     = $request->mother_office;
        $student->mother_oaddress   = $request->mother_oaddress;
        $student->brother_name1     = $request->brother_name1;
        $student->age1              = $request->age1;
        $student->brother_name2     = $request->brother_name2;
        $student->age2              = $request->age2;
        $student->brother_name3     = $request->brother_name3;
        $student->age3              = $request->age3;
        $student->sister_name1      = $request->sister_name1;
        $student->ages1             = $request->ages1;
        $student->sister_name2      = $request->sister_name2;
        $student->ages2             = $request->ages2;
        $student->sister_name3      = $request->sister_name3;
        $student->ages3             = $request->ages3;
        $student->contact_name      = $request->contact_name;
        $student->relationship      = $request->relationship;
        $student->contact_address   = $request->contact_address;
        $student->contact_info       = $request->contact_info;

        $student->save();

        return redirect()->route('student.show', [$student->id]);
    }

    public function show(Student $student)
    {
        return view('student.show')->withStudent($student);
    }

    public function edit(Student $student)
    {
        $levels      = Level::orderBy('description')->get();
        $schoolyears = Schoolyear::orderBy('description')->get();
        $studentfids = Studentfid::orderBy('fpid')->get();
        
        return view('student.edit')->withStudent($student)->withLevels($levels)->withSchoolyears($schoolyears)->withStudentfids($studentfids);
    }

    public function update(Request $request, Student $student)
    {
        
        $student->level_id          = $request->level_id;
        $student->schoolyear_id     = $request->schoolyear_id;
        $student->student_id        = $request->student_id;
        $student->studentfpid_id    = $request->studentfpid_id;
        $student->fname             = $request->fname;
        $student->mname             = $request->mname;
        $student->lname             = $request->lname;
        $student->sex               = $request->sex;
        $student->bdate             = $request->bdate;
        $student->bplace            = $request->bplace;
        $student->paddress          = $request->paddress;
        $student->address           = $request->address;
        $student->contactno         = $request->contactno;
        $student->email             = $request->email;
        $student->religion          = $request->religion;
        $student->age               = $request->age;
        $student->father_fname      = $request->father_fname;
        $student->father_mname      = $request->father_mname;
        $student->father_lname      = $request->father_lname;
        $student->father_occupation = $request->father_occupation;
        $student->father_contactno  = $request->father_contactno;
        $student->father_office     = $request->father_office;
        $student->father_oaddress   = $request->father_oaddress;
        $student->mother_fname      = $request->mother_fname;
        $student->mother_mname      = $request->mother_mname;
        $student->mother_lname      = $request->mother_lname;
        $student->mother_occupation = $request->mother_occupation;
        $student->mother_contactno  = $request->mother_contactno;
        $student->mother_office     = $request->mother_office;
        $student->mother_oaddress   = $request->mother_oaddress;
        $student->brother_name1     = $request->brother_name1;
        $student->age1              = $request->age1;
        $student->brother_name2     = $request->brother_name2;
        $student->age2              = $request->age2;
        $student->brother_name3     = $request->brother_name3;
        $student->age3              = $request->age3;
        $student->sister_name1      = $request->sister_name1;
        $student->ages1             = $request->ages1;
        $student->sister_name2      = $request->sister_name2;
        $student->ages2             = $request->ages2;
        $student->sister_name3      = $request->sister_name3;
        $student->ages3             = $request->ages3;
        $student->contact_name      = $request->contact_name;
        $student->relationship      = $request->relationship;
        $student->contact_address   = $request->contact_address;
        $student->contact_info       = $request->contact_info;

        $student->save();

        return redirect()->route('student.show', [$student->id]);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('student.index');
    }
 
  
}