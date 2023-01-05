@extends('layouts.main')
@section('content')

<div class="container">
    <h4><b><mark>ATTENDANCE FOR STAFF</mark></b></h4>
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <form action="{{ route('staffattendance.index') }}" class="form-inline" method="GET">
            <div class="row">
              <div class="col-sm-12">
                <label for="staff_id">Staff ID</label>
                <input
                id="staff_id"
                class="form-control"
                type="text"
                name="staff_id"
                value="{{ $inputs['staff_id'] }}"
                placeholder="Staff ID">

                   <label for="staff_id">Date</label>
                        <input
                            id="date"
                            class="form-control"
                            type="date"
                            name="date"
                            value="{{ $inputs['date'] }}"
                            placeholder="YYYY-MM-DD">
                            <label for="staff_id">Time Out</label>
                   <input
                            id="time_out"
                            class="form-control"
                            type="time_out"
                            name="time_out"
                            value="{{ $inputs['time_out'] }}"
                            placeholder="Time Out">

                <button class="btn btn-success" type="submit">Filter</button>
              </div>
            </div>
          </form>
        </div>
      </div>

            <div class="panel panel-default">
               <div class="panel-heading clearfix">
                <a href="{{ route('staffattendance.index') }}" class="btn btn-xs btn-default pull-right">Staff</a>
                <a href="{{ route('attendance.index') }}" class="btn btn-xs btn-default pull-right">Student</a>

            </div>
    
                <div class="table-responsive">
                    <table class="table table-condense">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Staff ID</th>
                                <th>Name</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Working Hours</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($staffattendances as $staffattendance)
                                <tr>
                                    <td>
                                        {{ $staffattendance->date }}
                                    </td>
                                    <td>{{ $staffattendance->staff_id }}</td>
                                    <td>
                                        {{ $staffattendance->firstname }}
                                    </td>
                                    <td>
                                        {{ $staffattendance->time_in }}
                                    </td>
                                     <td>
                                        {{ $staffattendance->time_out }}
                                    </td>
                                    <td>
                                        {{ $staffattendance->working_hour }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="5"><strong>No records of attendance</strong></td>
                                </tr>
                            @endforelse 
                        </tbody>
                    </table>
                </div>
                <div class="panel-body text-center">
                    {{ $staffattendances->links() }}
                </div>
            
            </div>
             <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xlink:href="#chart" />
            </svg>
        </div>
    </div>
</div>
 
@endsection
