@extends('layouts.main')

@section('content')

<div class="container">
    <h4><b><mark>STAFF</mark></b></h4>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Register a new staff</div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('staff.store') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="staff_id">Staff ID</label>
                                                <input
                                                    id="staff_id"
                                                    class="form-control"
                                                    type="text"
                                                    name="staff_id"
                                                    value="{{ old('staff_id') }}"
                                                    placeholder="Staff ID"
                                                    required>
                                            </div> {{-- .form-group --}}
                                        </div> {{-- .col-sm-4 --}}                            
                                

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="studentfpid_id">Fingerprint ID</label>
                                    <select name="studentfpid_id" id="studentfpid_id" class="form-control">
                                        <option value="" hidden {{ !old('studentfpid_id') ? 'selected' : '' }}>Fingerprint ID</option>
                                        @forelse ($studentfids as $studentfid)
                                            <option value="{{ $studentfid->id }}" {{ old('studentfpid_id') == $studentfid->id ? 'selected' : '' }}>{{ $studentfid->fpid }}</option>
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

                                    <legend>Staff Basic Information</legend>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="firstname">First Name</label>
                                                <input
                                                    id="firstname"
                                                    class="form-control"
                                                    type="text"
                                                    name="firstname"
                                                    value="{{ old('firstname') }}"
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
                                                    value="{{ old('middlename') }}"
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
                                                    value="{{ old('lastname') }}"
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
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="contact">Contact Number</label>
                                                <input
                                                    id="contact"
                                                    class="form-control"
                                                    type="text"
                                                    name="contact"
                                                    value="{{ old('contact') }}"
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
                                    </div>

                                </fieldset>
                            </div> {{-- .col-sm-12 --}}
                        </div> {{-- .row --}}          
                      
                    <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ route('staff.index') }}" class="btn btn-block btn-default">Cancel</a>
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