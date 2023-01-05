@extends('layouts.main')
@section('content')

<div class="container">
    <h4><b><mark>ATTENDANCE FOR STUDENTS</mark></b></h4>
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <form action="{{ route('attendance.index') }}" class="form-inline" method="GET">
            <div class="row">
              <div class="col-sm-12">
                <label for="student_id">Student ID</label>
                <input
                id="student_id"
                class="form-control"
                type="text"
                name="student_id"
                value="{{ $inputs['student_id'] }}"
                placeholder="Student No.">

                   <label for="key">Date</label>
                        <input
                            id="date"
                            class="form-control"
                            type="date"
                            name="date"
                            value="{{ $inputs['date'] }}"
                            placeholder="YYYY-MM-DD">
                    <label for="key">Time Out</label>
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
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($attendances as $attendance)
                                <tr>
                                    <td>
                                        {{ $attendance->date }}
                                    </td>
                                    <td>{{ $attendance->student_id }}</td>
                                    <td>{{ $attendance->fname}}</td>
                                    <td>
                                        {{ $attendance->time_in }}
                                    </td>
                                     <td>
                                        {{ $attendance->time_out }}
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
                    {{ $attendances->links() }}
                </div>
            
            </div>
             <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xlink:href="#chart" />
            </svg>
        </div>
    </div>
</div>
 
@endsection
