<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Student;
use DB;
use App\Level;
use App\Staff;
use Session;
use Excel;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $levels = DB::table('levels')
                ->select('description')
                ->get();;
        $staffs = DB::table('staff')
                ->select('staff_id')
                ->get();;
        $students = Student::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $chart = Charts::database($students,'bar', 'highcharts')
            ->title('Monthly New Student')
            ->elementlabel('Total Students')
            ->dimensions(1000,500)
            ->responsive(false)
            ->groupByMonth(date('Y'),true);
      
        return view('home',compact('chart','students','levels','staffs'));
    }
    public function import(Request $request){
    //validate the xls file
    $this->validate($request, array(
        'file'      => 'required'
    ));
 
    if($request->hasFile('file')){
        $extension = File::extension($request->file->getClientOriginalName());
        if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
 
            $path = $request->file->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
 
                foreach ($data as $key => $value) {
                    $insert[] = [        
                    'address' => $value->address,
                    'age' => $value->age,
                    'paddress' => $value->paddress,
                    'bdate' => $value->bdate,
                    'bplace' => $value->bplace,
                    'student_id' => $value->student_id,
                    'studentfpid_id' => $value->studentfpid_id,
                    'contactno' => $value->contactno,
                    'email' => $value->email,
                    'fname' => $value->fname,
                    'level_id' => $value->level_id,
                    'lname' => $value->lname,
                    'mname' => $value->mname,
                    'religion' => $value->religion,
                    'schoolyear_id' => $value->schoolyear_id,
                    'sex' => $value->sex,
                    'father_fname' => $value->father_fname,
                    'father_mname' => $value->father_mname,
                    'father_lname' => $value->father_lname,
                    'father_oaddress' => $value->father_oaddress,
                    'father_occupation' => $value->father_occupation,
                    'father_contactno' => $value->father_contactno,
                    'father_office' => $value->father_office,
                    'mother_fname' => $value->mother_fname,
                    'mother_mname' => $value->mother_mname,
                    'mother_lname' => $value->mother_lname,
                    'mother_oaddress' => $value->mother_oaddress,
                    'mother_occupation' => $value->mother_occupation,
                    'mother_contactno' => $value->mother_contactno,
                    'mother_office' => $value->mother_office,
                    'brother_name1' => $value->brother_name1,
                    'age1' => $value->age1,
                    'brother_name2' => $value->brother_name2,
                    'age2' => $value->age2,
                    'brother_name3' => $value->brother_name3,
                    'age3' => $value->age3,
                    'sister_name1' => $value->sister_name1,
                    'ages1' => $value->ages1,
                    'sister_name2' => $value->sister_name2,
                    'ages2' => $value->ages2,
                    'sister_name3' => $value->sister_name3,
                    'ages3' => $value->ages3,
                    'contact_name' => $value->contact_name,
                    'relationship' => $value->relationship,
                    'contact_address' => $value->contact_address,
                    'contact_info' => $value->contact_info,
                    'created_at' => $value->created_at,
                    ];
                }
 
                if(!empty($insert)){
 
                    $insertData = DB::table('students')->insert($insert);
                    if ($insertData) {
                        Session::flash('success', 'Your Data has successfully imported');
                    }else {                        
                        Session::flash('error', 'Error inserting the data..');
                        return back();
                    }
                }
            }
 
            return back();
 
        }else {
            Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
            return back();
        }
    }
  }
  public function excel()
  {
    $customer_data = DB::table('students')->get()->toArray();
     $customer_array[] = array( 'address','age','paddress','bdate','bplace','student_id','studentfpid_id','contactno','email','fname','level_id','lname','mname','religion','schoolyear_id','sex','father_fname','father_mname','father_lname','father_oaddress','father_occupation','father_contactno','father_office','mother_fname','mother_mname','mother_lname','mother_oaddress','mother_occupation','mother_contactno','mother_office','brother_name1','age1','brother_name2','age2','brother_name3','age3','sister_name1','ages1','sister_name2','ages2','sister_name3','ages3','contact_name','relationship','contact_address','contact_info','created_at',);
     foreach($customer_data as $value)
     {
      $customer_array[] = array(
       'address' => $value->address,
                    'age' => $value->age,
                    'paddress' => $value->paddress,
                    'bdate' => $value->bdate,
                    'bplace' => $value->bplace,
                    'student_id' => $value->student_id,
                    'studentfpid_id' => $value->studentfpid_id,
                    'contactno' => $value->contactno,
                    'email' => $value->email,
                    'fname' => $value->fname,
                    'level_id' => $value->level_id,
                    'lname' => $value->lname,
                    'mname' => $value->mname,
                    'religion' => $value->religion,
                    'schoolyear_id' => $value->schoolyear_id,
                    'sex' => $value->sex,
                    'father_fname' => $value->father_fname,
                    'father_mname' => $value->father_mname,
                    'father_lname' => $value->father_lname,
                    'father_oaddress' => $value->father_oaddress,
                    'father_occupation' => $value->father_occupation,
                    'father_contactno' => $value->father_contactno,
                    'father_office' => $value->father_office,
                    'mother_fname' => $value->mother_fname,
                    'mother_mname' => $value->mother_mname,
                    'mother_lname' => $value->mother_lname,
                    'mother_oaddress' => $value->mother_oaddress,
                    'mother_occupation' => $value->mother_occupation,
                    'mother_contactno' => $value->mother_contactno,
                    'mother_office' => $value->mother_office,
                    'brother_name1' => $value->brother_name1,
                    'age1' => $value->age1,
                    'brother_name2' => $value->brother_name2,
                    'age2' => $value->age2,
                    'brother_name3' => $value->brother_name3,
                    'age3' => $value->age3,
                    'sister_name1' => $value->sister_name1,
                    'ages1' => $value->ages1,
                    'sister_name2' => $value->sister_name2,
                    'ages2' => $value->ages2,
                    'sister_name3' => $value->sister_name3,
                    'ages3' => $value->ages3,
                    'contact_name' => $value->contact_name,
                    'relationship' => $value->relationship,
                    'contact_address' => $value->contact_address,
                    'contact_info' => $value->contact_info,
                    'created_at' => $value->created_at,
      );
     }
     Excel::create('Database', function($excel) use ($customer_array){
      $excel->setTitle('Database');
      $excel->sheet('Database', function($sheet) use ($customer_array){
       $sheet->fromArray($customer_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }

}
