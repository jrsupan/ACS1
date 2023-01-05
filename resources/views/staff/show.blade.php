@extends('layouts.main')

@section('content')
<div class="container">
    <h4><b><mark>STAFF</mark></b></h4>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading text-capitalize clearfix">
                    {{ $staff->firstname . ($staff->middlename == '' ? '' : ' ' . $staff->middlename) . ' ' . $staff->lastname }}
                    <a href="{{ route('staff.edit', [$staff->id]) }}" class="btn btn-primary btn-xs pull-right">Edit</a>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset>
                                <legend>Staff Basic Information</legend>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>First Name</dt>
                                            <dd class="text-capitalize">{{ $staff->firstname }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Middle Name</dt>
                                            <dd class="text-capitalize">{{ $staff->middlename or '-' }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Last Name</dt>
                                            <dd class="text-capitalize">{{ $staff->lastname }}</dd>
                                        </dl>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Staff ID</dt>
                                            <dd class="text-capitalize">{{ $staff->staff_id }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Sex</dt>
                                            <dd class="text-capitalize">{{ $staff->sex }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Birth Date</dt>
                                            <dd>{{ $staff->bdate }}</dd>
                                        </dl>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Address</dt>
                                            <dd class="text-capitalize">{{ $staff->address }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>Contact Number</dt>
                                            <dd>{{ $staff->contact }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal">
                                            <dt>E-mail Address</dt>
                                            <dd>{{ $staff->email }}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </fieldset>
                        </div> {{-- .col-sm-12 --}}
                    </div> {{-- .row --}}

                </div> {{-- .panel-body --}}
            </div> {{-- .panel --}}
        </div> {{-- .col-sm-12 --}}
    </div> {{-- .row --}}
</div> {{-- .container --}}
@endsection
