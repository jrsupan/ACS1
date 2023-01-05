@extends('layouts.main')

@section('content')
<div class="container">
    <h4><b><mark>SCHOOL YEAR</mark></b></h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <strong>{{ $schoolyear->description }}</strong> students <span class="badge">{{ $schoolyear->students->count() }}</span>
                    <a href="{{ route('student.create') }}" class="btn btn-xs btn-default pull-right">New Student</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condense">
                        <thead>
                            <tr>
                                <th>ID No.</th>
                                <th>Name</th>
                                <th>Sex</th>
                                <th>Grade Level</th>
                                <th>School Year</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($schoolyear->students as $student)
                                <tr>
                                    <th>{{ $student->student_id }}</th>
                                    <td>
                                        <a href="{{ route('student.show', [$student->id]) }}">
                                            {{ $student->lname . ', ' . $student->fname . ($student->mname == '' ? '' : ' ' . $student->mname) }}
                                        </a>
                                    </td>
                                    <td class="text-capitalize">
                                        @if ($student->sex == 'male')
                                            <span class="label label-success">{{ $student->sex }}</span>
                                        @elseif($student->sex == 'female')
                                            <span class="label label-warning">{{ $student->sex }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $student->level->description }}</td>
                                    <td>{{ $student->schoolyear->description }}</td>
                                    <td>
                                        <a href="{{ route('student.edit', [$student->id]) }}" class="btn btn-xs btn-primary">Edit</a>
                                        <form action="{{ route('student.destroy', [$student->id]) }}" method="POST" style="display: inline-block;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="5"><strong>No student records!</strong> Add one <a href="{{ route('student.create') }}">here</a></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
              <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xlink:href="#chart" />
            </svg>
        </div>
    </div>
</div>
@endsection
