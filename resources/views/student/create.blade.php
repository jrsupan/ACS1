@extends('layouts.main')

@section('content')

<div class="container">
    <h4><b><mark>STUDENTS</mark></b></h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Register a new student</div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('student.store') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="level_id">Grade Level</label>
                                    <select name="level_id" id="level_id" class="form-control" required>
                                        <option value="" hidden {{ !old('level_id') ? 'selected' : '' }}>Grade Level</option>
                                        @forelse ($levels as $level)
                                            <option value="{{ $level->id }}" {{ old('level_id') == $level->id ? 'selected' : '' }}>{{ $level->description }}</option>
                                        @empty
                                            <option value="" disabled>--</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="schoolyear_id">School Year</label>
                                    <select name="schoolyear_id" id="schoolyear_id" class="form-control">
                                        <option value="" hidden {{ !old('schoolyear_id') ? 'selected' : '' }}>School Year</option>
                                        @forelse ($schoolyears as $schoolyear)
                                            <option value="{{ $schoolyear->id }}" {{ old('schoolyear_id') == $schoolyear->id ? 'selected' : '' }}>{{ $schoolyear->description }}</option>
                                        @empty
                                            <option value="" disabled>--</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fname">Student No.</label>
                                                <input
                                                    id="student_id"
                                                    class="form-control"
                                                    type="text"
                                                    name="student_id"
                                                    value="{{ old('student_id') }}"
                                                    placeholder="Student No."
                                                    required>
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}                            
                                

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="studentfpid_id">Fingerprint ID</label>
                                    <select name="studentfpid_id" id="studentfpid_id" class="form-control">
                                        <option value="" hidden {{ !old('studentfpid_id') ? 'selected' : '' }}>Fingerprint ID</option>
                                        @forelse ($studentfids as $studentfid)
                                            <option value="{{ $studentfid->fpid }}" {{ old('studentfpid_id') == $studentfid->fpid ? 'selected' : '' }}>{{ $studentfid->fpid }}</option>
                                        @empty
                                            <option value="" disabled>--</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <fieldset>

                                    <legend>Student Basic Information</legend>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="fname">First Name</label>
                                                <input
                                                    id="fname"
                                                    class="form-control"
                                                    type="text"
                                                    name="fname"
                                                    value="{{ old('fname') }}"
                                                    placeholder="First Name"
                                                    required>
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="mname">Middle Name</label>
                                                <input
                                                    id="mname"
                                                    class="form-control"
                                                    type="text"
                                                    name="mname"
                                                    value="{{ old('mname') }}"
                                                    placeholder="Middle Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="lname">Last Name</label>
                                                <input
                                                    id="lname"
                                                    class="form-control"
                                                    type="text"
                                                    name="lname"
                                                    value="{{ old('lname') }}"
                                                    placeholder="Last Name"
                                                    required>
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="sex">Sex</label>
                                                <div class="radio">
                                                    <label for="male">
                                                        <input
                                                            id="male"
                                                            type="radio"
                                                            name="sex"
                                                            value="male"
                                                            required
                                                            {{ old('sex') == 'male' ? 'checked' : '' }}>Male
                                                    </label>
                                                    <label for="female">
                                                        <input
                                                            id="female"
                                                            type="radio"
                                                            name="sex"
                                                            value="female"
                                                            required
                                                            {{ old('sex') == 'female' ? 'checked' : '' }}>Female
                                                    </label>
                                                </div> {{-- .radio --}}
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="bdate">Birth Date</label>
                                                <input
                                                    id="bdate"
                                                    class="form-control"
                                                    type="date"
                                                    name="bdate"
                                                    value="{{ old('bdate') }}"
                                                    placeholder="YYYY-MM-DD">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="bplace">Birth Place</label>
                                                <input
                                                    id="bplace"
                                                    class="form-control"
                                                    type="text"
                                                    name="bplace"
                                                    value="{{ old('bplace') }}"
                                                    placeholder="Birth Place">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}
                                    </div> {{-- .row --}}

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input
                                                    id="address"
                                                    class="form-control"
                                                    type="text"
                                                    name="address"
                                                    value="{{ old('address') }}"
                                                    placeholder="Address">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="contactno">Contact Number</label>
                                                <input
                                                    id="contactno"
                                                    class="form-control"
                                                    type="text"
                                                    name="contactno"
                                                    value="{{ old('contactno') }}"
                                                    placeholder="Contact Number">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="email">E-mail Address</label>
                                                <input
                                                    id="email"
                                                    class="form-control"
                                                    type="email"
                                                    name="email"
                                                    value="{{ old('email') }}"
                                                    placeholder="E-mail Address">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-md-4 --}}
                                    </div> {{-- .row --}}

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="paddress">Provincial Address</label>
                                                <input
                                                    id="paddress"
                                                    class="form-control"
                                                    type="text"
                                                    name="paddress"
                                                    value="{{ old('paddress') }}"
                                                    placeholder="Provincial Address">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-md-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="religion">Religion</label>
                                                <input
                                                    id="religion"
                                                    class="form-control"
                                                    type="text"
                                                    name="religion"
                                                    value="{{ old('religion') }}"
                                                    placeholder="Religion">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-md-4 --}}  

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="age">Age</label>
                                                <input
                                                    id="age"
                                                    class="form-control"
                                                    type="text"
                                                    name="age"
                                                    value="{{ old('age') }}"
                                                    placeholder="Age">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-md-4 --}}
                                    </div> {{-- .row --}}

                                </fieldset>
                            </div> {{-- .col-sm-12 --}}
                        </div> {{-- .row --}}

                        <div class="row">
                            <div class="col-sm-12">
                                <fieldset>

                                    <legend>Student's Father Information</legend>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="father_fname">First Name</label>
                                                <input
                                                    id="father_fname"
                                                    class="form-control"
                                                    type="text"
                                                    name="father_fname"
                                                    value="{{ old('father_fname') }}"
                                                    placeholder="First Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="father_mname">Middle Name</label>
                                                <input
                                                    id="father_mname"
                                                    class="form-control"
                                                    type="text"
                                                    name="father_mname"
                                                    value="{{ old('father_mname') }}"
                                                    placeholder="Middle Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="father_lname">Last Name</label>
                                                <input
                                                    id="father_lname"
                                                    class="form-control"
                                                    type="text"
                                                    name="father_lname"
                                                    value="{{ old('father_lname') }}"
                                                    placeholder="Last Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="father_occupation">Occupation</label>
                                                <input
                                                    id="father_occupation"
                                                    class="form-control"
                                                    type="text"
                                                    name="father_occupation"
                                                    value="{{ old('father_occupation') }}"
                                                    placeholder="Occupation">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="father_contactno">Contact Number</label>
                                                <input
                                                    id="father_contactno"
                                                    class="form-control"
                                                    type="text"
                                                    name="father_contactno"
                                                    value="{{ old('father_contactno') }}"
                                                    placeholder="Contact Number">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}
                                    </div> {{-- .row --}}

                                      <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="father_oaddress">Office Address</label>
                                                <input
                                                    id="father_oaddress"
                                                    class="form-control"
                                                    type="text"
                                                    name="father_oaddress"
                                                    value="{{ old('father_oaddress') }}"
                                                    placeholder="Office Address">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="father_office">Office/Business Name</label>
                                                <input
                                                    id="father_office"
                                                    class="form-control"
                                                    type="text"
                                                    name="father_office"
                                                    value="{{ old('father_office') }}"
                                                    placeholder="Office/Business Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}
                                    </div> {{-- .row --}}

                                </fieldset>
                            </div> {{-- .col-sm-12 --}}
                        </div> {{-- .row --}}

                        <div class="row">
                            <div class="col-sm-12">
                                <fieldset>

                                    <legend>Student's Mother Information</legend>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="mother_fname">First Name</label>
                                                <input
                                                    id="mother_fname"
                                                    class="form-control"
                                                    type="text"
                                                    name="mother_fname"
                                                    value="{{ old('mother_fname') }}"
                                                    placeholder="First Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="mother_mname">Middle Name</label>
                                                <input
                                                    id="mother_mname"
                                                    class="form-control"
                                                    type="text"
                                                    name="mother_mname"
                                                    value="{{ old('mother_mname') }}"
                                                    placeholder="Middle Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="mother_lname">Last Name</label>
                                                <input
                                                    id="mother_lname"
                                                    class="form-control"
                                                    type="text"
                                                    name="mother_lname"
                                                    value="{{ old('mother_lname') }}"
                                                    placeholder="Last Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="mother_occupation">Occupation</label>
                                                <input
                                                    id="mother_occupation"
                                                    class="form-control"
                                                    type="text"
                                                    name="mother_occupation"
                                                    value="{{ old('mother_occupation') }}"
                                                    placeholder="Occupation">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="mother_contactno">Contact Number</label>
                                                <input
                                                    id="mother_contactno"
                                                    class="form-control"
                                                    type="text"
                                                    name="mother_contactno"
                                                    value="{{ old('mother_contactno') }}"
                                                    placeholder="Contact Number">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}
                                    </div> {{-- .row --}}

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="mother_oaddress">Office Address</label>
                                                <input
                                                    id="mother_oaddress"
                                                    class="form-control"
                                                    type="text"
                                                    name="mother_oaddress"
                                                    value="{{ old('mother_oaddress') }}"
                                                    placeholder="Office Address">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="mother_office">Office/Business Name</label>
                                                <input
                                                    id="mother_office"  
                                                    class="form-control"
                                                    type="text"
                                                    name="mother_office"
                                                    value="{{ old('mother_office') }}"
                                                    placeholder="Office/Business Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}
                                    </div> {{-- .row --}}

                                </fieldset>
                            </div> {{-- .col-sm-12 --}}
                        </div> {{-- .row --}}

                         <div class="row">
                            <div class="col-sm-12">
                                <fieldset>

                                    <legend>Brother's & Sister's</legend>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="brother_name1">Brother's Name</label>
                                                <input
                                                    id="brother_name1"
                                                    class="form-control"
                                                    type="text"
                                                    name="brother_name1"
                                                    value="{{ old('brother_name1') }}"
                                                    placeholder="Brother Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="age1">Age</label>
                                                <input
                                                    id="age1"
                                                    class="form-control"
                                                    type="text"
                                                    name="age1"
                                                    value="{{ old('age1') }}"
                                                    placeholder="Age">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-2 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="sister_name1">Sister's Name</label>
                                                <input
                                                    id="sister_name1"
                                                    class="form-control"
                                                    type="text"
                                                    name="sister_name1"
                                                    value="{{ old('sister_name1') }}"
                                                    placeholder="Sister Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="ages1">Age</label>
                                                <input
                                                    id="ages1"
                                                    class="form-control"
                                                    type="text"
                                                    name="ages1"
                                                    value="{{ old('ages1') }}"
                                                    placeholder="Age">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-2 --}}
                                    </div> {{-- .row --}}

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input
                                                    id="brother_name2"
                                                    class="form-control"
                                                    type="text"
                                                    name="brother_name2"
                                                    value="{{ old('brother_name2') }}"
                                                    placeholder="Brother Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input
                                                    id="age2"
                                                    class="form-control"
                                                    type="text"
                                                    name="age2"
                                                    value="{{ old('age2') }}"
                                                    placeholder="Age">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-2 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input
                                                    id="sister_name2"
                                                    class="form-control"
                                                    type="text"
                                                    name="sister_name2"
                                                    value="{{ old('sister_name2') }}"
                                                    placeholder="Sister Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input
                                                    id="ages2"
                                                    class="form-control"
                                                    type="text"
                                                    name="ages2"
                                                    value="{{ old('ages2') }}"
                                                    placeholder="Age">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-2 --}}
                                    </div> {{-- .row --}}

                                     <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input
                                                    id="brother_name3"
                                                    class="form-control"
                                                    type="text"
                                                    name="brother_name3"
                                                    value="{{ old('brother_name3') }}"
                                                    placeholder="Brother Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input
                                                    id="age3"
                                                    class="form-control"
                                                    type="text"
                                                    name="age3"
                                                    value="{{ old('age3') }}"
                                                    placeholder="Age">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-2 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input
                                                    id="sister_name3"
                                                    class="form-control"
                                                    type="text"
                                                    name="sister_name3"
                                                    value="{{ old('sister_name3') }}"
                                                    placeholder="Sister Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input
                                                    id="ages3"
                                                    class="form-control"
                                                    type="text"
                                                    name="ages3"
                                                    value="{{ old('ages3') }}"
                                                    placeholder="Age">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-2 --}}
                                    </div> {{-- .row --}}

                                </fieldset>
                            </div> {{-- .col-sm-12 --}}
                        </div> {{-- .row --}}

                         <div class="row">
                            <div class="col-sm-12">
                                <fieldset>

                                    <legend>Guardian</legend>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contact_name">Name</label>
                                                <input
                                                    id="contact_name"
                                                    class="form-control"
                                                    type="text"
                                                    name="contact_name"
                                                    value="{{ old('contact_name') }}"
                                                    placeholder="Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="relationship">Relationship</label>
                                                <input
                                                    id="relationship"  
                                                    class="form-control"
                                                    type="text"
                                                    name="relationship"
                                                    value="{{ old('relationship') }}"
                                                    placeholder="relationship">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}
                                    </div> {{-- .row --}}

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contact_address">Address</label>
                                                <input
                                                    id="contact_address"
                                                    class="form-control"
                                                    type="text"
                                                    name="contact_address"
                                                    value="{{ old('contact_address') }}"
                                                    placeholder="Address">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contact_info">E-mail Address</label>
                                                <input
                                                    id="contact_info"  
                                                    class="form-control"
                                                    type="text"
                                                    name="contact_info"
                                                    value="{{ old('contact_info') }}"
                                                    placeholder="E-mail Address">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-6 --}}
                                    </div> {{-- .row --}}

                                </fieldset>
                            </div> {{-- .col-sm-12 --}}
                        </div> {{-- .row --}}

                    <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ route('student.index') }}" class="btn btn-block btn-default">Cancel</a>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-block btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection