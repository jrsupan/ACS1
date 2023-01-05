@extends('layouts.main')

@section('content')
<div class="container">
    <h4><b><mark>STUDENTS</mark></b></h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading text-capitalize clearfix">
                    {{ $student->fname . ($student->mname == '' ? '' : ' ' . $student->mname) . ' ' . $student->lname }}
                    <a href="{{ route('student.edit', [$student->id]) }}" class="btn btn-primary btn-xs pull-right">Edit</a>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset>
                                <legend>Student Basic Information</legend>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>First Name</dt>
                                            <dd class="text-capitalize">{{ $student->fname }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Middle Name</dt>
                                            <dd class="text-capitalize">{{ $student->mname or '-' }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Last Name</dt>
                                            <dd class="text-capitalize">{{ $student->lname }}</dd>
                                        </dl>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Sex</dt>
                                            <dd class="text-capitalize">{{ $student->sex }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Birth Date</dt>
                                            <dd>{{ $student->bdate }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Birth Place</dt>
                                            <dd class="text-capitalize">{{ $student->bplace }}</dd>
                                        </dl>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Address</dt>
                                            <dd class="text-capitalize">{{ $student->address }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Contact Number</dt>
                                            <dd>{{ $student->contactno }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>E-mail Address</dt>
                                            <dd>{{ $student->email }}</dd>
                                        </dl>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Provincial Address</dt>
                                            <dd class="text-capitalize">{{ $student->paddress }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Religion</dt>
                                            <dd class="text-capitalize">{{ $student->religion or '-' }}</dd>
                                        </dl>
                                    </div>
                                     <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Age</dt>
                                            <dd class="text-capitalize">{{ $student->age }}</dd>
                                        </dl>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Grade Level</dt>
                                            <dd>{{ $student->level->description }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>School Year</dt>
                                            <dd>{{ $student->schoolyear->description }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Fingerprint ID</dt>
                                            <dd>{{ $student->studentfpid_id }}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </fieldset>
                        </div> {{-- .col-sm-12 --}}
                    </div> {{-- .row --}}

                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset>
                                <legend>Student's Father Information</legend>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <dl class="dl-horizontal">
                                            <dt>First Name</dt>
                                            <dd class="text-capitalize">{{ $student->father_fname or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Middle Name</dt>
                                            <dd class="text-capitalize">{{ $student->father_mname or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Last Name</dt>
                                            <dd class="text-capitalize">{{ $student->father_lname or '-' }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Occupation</dt>
                                            <dd class="text-capitalize">{{ $student->father_occupation or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Contact Number</dt>
                                            <dd>{{ $student->father_contactno or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Office Address</dt>
                                            <dd class="text-capitalize">{{ $student->father_oaddress or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Office/Business Name</dt>
                                            <dd>{{ $student->father_office or '-' }}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </fieldset>
                        </div> {{-- .col-sm-12 --}}
                    </div> {{-- .row --}}

                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset>
                                <legend>Student's Mother Information</legend>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <dl class="dl-horizontal">
                                            <dt>First Name</dt>
                                            <dd class="text-capitalize">{{ $student->mother_fname or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Middle Name</dt>
                                            <dd class="text-capitalize">{{ $student->mother_mname or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Last Name</dt>
                                            <dd class="text-capitalize">{{ $student->mother_lname or '-' }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Occupation</dt>
                                            <dd class="text-capitalize">{{ $student->mother_occupation or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Contact Number</dt>
                                            <dd>{{ $student->mother_contactno or '-' }}</dd>
                                        </dl>
                                         <dl class="dl-horizontal">
                                            <dt>Office Address</dt>
                                            <dd class="text-capitalize">{{ $student->mother_oaddress or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Office/Business Name</dt>
                                            <dd>{{ $student->mother_office or '-' }}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </fieldset>
                        </div> {{-- .col-sm-12 --}}
                    </div> {{-- .row --}}

                     <div class="row">
                        <div class="col-sm-12">
                            <fieldset>
                                <legend>Brother's & Sister's</legend>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <dl class="dl-horizontal">
                                            <dt>Brother's Name</dt>
                                            <dd class="text-capitalize">{{ $student->brother_name1 or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt></dt>
                                            <dd class="text-capitalize">{{ $student->brother_name2 or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt></dt>
                                            <dd class="text-capitalize">{{ $student->brother_name3 or '-' }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                       <dl class="dl-horizontal">
                                            <dt>Age</dt>
                                            <dd class="text-capitalize">{{ $student->age1 or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt></dt>
                                            <dd class="text-capitalize">{{ $student->age2 or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt></dt>
                                            <dd class="text-capitalize">{{ $student->age3 or '-' }}</dd>
                                        </dl>
                                    </div>
                                </div>
                                <br>
                                  <div class="row">
                                    <div class="col-sm-8">
                                        <dl class="dl-horizontal">
                                            <dt>Sister's Name</dt>
                                            <dd class="text-capitalize">{{ $student->sister_name1 or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt></dt>
                                            <dd class="text-capitalize">{{ $student->sister_name2 or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt></dt>
                                            <dd class="text-capitalize">{{ $student->sister_name3 or '-' }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                       <dl class="dl-horizontal">
                                            <dt>Age</dt>
                                            <dd class="text-capitalize">{{ $student->ages1 or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt></dt>
                                            <dd class="text-capitalize">{{ $student->ages2 or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt></dt>
                                            <dd class="text-capitalize">{{ $student->ages3 or '-' }}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </fieldset>
                        </div> {{-- .col-sm-12 --}}
                    </div> {{-- .row --}}

                     <div class="row">
                        <div class="col-sm-12">
                            <fieldset>
                                <legend>Guardian</legend>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <dl class="dl-horizontal">
                                            <dt>Name</dt>
                                            <dd class="text-capitalize">{{ $student->contact_name or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Address</dt>
                                            <dd class="text-capitalize">{{ $student->contact_address or '-' }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Relationship</dt>
                                            <dd class="text-capitalize">{{ $student->relationship or '-' }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Tel. No.</dt>
                                            <dd>{{ $student->contact_info or '-' }}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </fieldset>
                        </div> {{-- .col-sm-12 --}}
                    </div> {{-- .row --}}

                   <!--     <div class="row">
                        <div class="col-sm-12">
                            <fieldset>
                                <legend>Made of Payment</legend>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <dl class="dl-horizontal">
                                            <dt>Type of Payment</dt>
                                            <dd class="text-capitalize">{{ $student->payment or '-' }}</dd>
                                        </dl>
                                    </div>
                                     <div class="col-sm-8">
                                        <dl class="dl-horizontal">
                                            <dt>Initial Tuition Fee:</dt>
                                            <dd class="text-capitalize">{{ $student->itfee  }}</dd>
                                        </dl>
                                         <dl class="dl-horizontal">
                                            <dt>Miscellaneous:</dt>
                                            <dd class="text-capitalize">{{ $student->miscellaneous  }}</dd>
                                        </dl>
                                         <dl class="dl-horizontal">
                                            <dt>Books:</dt>
                                            <dd class="text-capitalize">{{ $student->books  }}</dd>
                                        </dl>
                                         <dl class="dl-horizontal">
                                            <dt>Aircon:</dt>
                                            <dd class="text-capitalize">{{ $student->aircon  }}</dd>
                                        </dl>
                                         <dl class="dl-horizontal">
                                            <dt>School Service:</dt>
                                            <dd class="text-capitalize">{{ $student->schoolservice  }}</dd>
                                        </dl>
                                         <dl class="dl-horizontal">
                                            <dt>Total:</dt>
                                            <dd class="text-capitalize">{{ $student->total1  }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                         <dl class="dl-horizontal">
                                            <dt>Polo/Blouse:</dt>
                                            <dd class="text-capitalize">{{ $student->polo_blouse  }}</dd>
                                        </dl>
                                         <dl class="dl-horizontal">
                                            <dt>Pants:</dt>
                                            <dd class="text-capitalize">{{ $student->pants  }}</dd>
                                        </dl>
                                         <dl class="dl-horizontal">
                                            <dt>Jumper:</dt>
                                            <dd class="text-capitalize">{{ $student->jumper  }}</dd>
                                        </dl>
                                         <dl class="dl-horizontal">
                                            <dt>T-Shirt:</dt>
                                            <dd class="text-capitalize">{{ $student->tshirt  }}</dd>
                                        </dl>
                                         <dl class="dl-horizontal">
                                            <dt>Jogging Pants:</dt>
                                            <dd class="text-capitalize">{{ $student->joggingpants  }}</dd>
                                        </dl>
                                         <dl class="dl-horizontal">
                                            <dt>Total:</dt>
                                            <dd class="text-capitalize">{{ $student->total2  }}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </fieldset>
                        </div> {{-- .col-sm-12 --}}
                    </div> {{-- .row --}} -->

                </div> {{-- .panel-body --}}
            </div> {{-- .panel --}}
        </div> {{-- .col-sm-12 --}}
    </div> {{-- .row --}}
</div> {{-- .container --}}
@endsection
