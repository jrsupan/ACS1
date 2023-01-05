@extends('layouts.main')

@section('content')
<div class="container">
    <h4><b><mark>STAFF</mark></b></h4>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit <strong>{{ $staff->firstname . ' ' . $staff->lastname }}</strong>
                    {{-- <a href="{{ route('staff.edit', [$staff->id]) }}" class="btn btn-primary btn-xs pull-right">Edit</a> --}}
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('staff.update', [$staff->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}


                          <div class="row">
                            <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="staff_id">Staff ID</label>
                                                <input
                                                    id="staff_id"
                                                    class="form-control"
                                                    type="text"
                                                    name="staff_id"
                                                    value="{{ old('staff_id') ? old('staff_id') : $staff->staff_id }}"
                                                    placeholder="Staff ID"
                                                    required>
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}                            
                                

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="schoolyear_id">Fingerprint ID</label>
                                    <select name="studentfpid_id" id="studentfpid_id" class="form-control" required>
                                        <option value="" hidden {{ !old('studentfpid_id') ? 'selected' : '' }}>Fingerprint ID</option>
                                        @forelse ($studentfids as $studentfid)
                                             <option value="{{ $studentfid->id }}" {{ old('studentfpid_id') == $studentfid->id ? 'selected' : ($staff->studentfpid_id == $studentfid->id ? 'selected' : '') }}>{{ $studentfid->fpid }}</option>
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
                                                <label for="firstname">First Name</label>
                                                <input
                                                    id="firstname"
                                                    class="form-control"
                                                    type="text"
                                                    name="firstname"
                                                    value="{{ old('firstname') ? old('firstname') : $staff->firstname }}"
                                                    placeholder="First Name"
                                                    required>
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="middlename">Middle Name</label>
                                                <input
                                                    id="middlename"
                                                    class="form-control"
                                                    type="text"
                                                    name="middlename"
                                                    value="{{ old('middlename') ? old('middlename') : $staff->middlename }}"
                                                    placeholder="Middle Name">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="lastname">Last Name</label>
                                                <input
                                                    id="lastname"
                                                    class="form-control"
                                                    type="text"
                                                    name="lastname"
                                                    value="{{ old('lastname') ? old('lastname') : $staff->lastname }}"
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
                                                            {{ old('sex') == 'male' ? 'checked' : ($staff->sex == 'male' ? 'checked' : '') }}>Male
                                                    </label>
                                                    <label for="female">
                                                        <input
                                                            id="female"
                                                            type="radio"
                                                            name="sex"
                                                            value="female"
                                                            required
                                                            {{ old('sex') == 'female' ? 'checked' : ($staff->sex == 'female' ? 'checked' : '') }}>Female
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
                                                    value="{{ old('bdate') ? old('bdate') : $staff->bdate }}"
                                                    placeholder="YYYY-MM-DD">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}
                                    

                                    
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input
                                                    id="address"
                                                    class="form-control"
                                                    type="text"
                                                    name="address"
                                                    value="{{ old('address') ? old('address') : $staff->address }}"
                                                    placeholder="Address">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="contactno">Contact Number</label>
                                                <input
                                                    id="contactno"
                                                    class="form-control"
                                                    type="text"
                                                    name="contactno"
                                                    value="{{ old('contactno') ? old('contactno') : $staff->contactno }}"
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
                                                    value="{{ old('email') ? old('email') : $staff->email }}"
                                                    placeholder="E-mail Address">
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
                                                    value="{{ old('age') ? old('age') : $staff->age }}"
                                                    placeholder="Age">
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-md-4 --}}
                                    </div> {{-- .row --}}

                                </fieldset>
                            </div> {{-- .col-sm-12 --}}
                        </div> {{-- .row --}}

                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ route('staff.show', [$staff->id]) }}" class="btn btn-block btn-default">Cancel</a>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-block btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
