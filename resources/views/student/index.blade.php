@extends('layouts.main')

@section('content')
<div class="container">
    <h4><b><mark>STUDENTS</mark></b></h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
        <div class="panel-body">
          <form action="{{ route('student.index') }}" class="form-inline" method="GET">
            <div class="row">
              <div class="col-sm-12">
                <label for="key">Filter</label>
                <input
                id="key"
                class="form-control"
                type="text"
                name="key"
                value="{{ $inputs['key'] }}"
                placeholder="Search name">

                <select name="level" id="level" class="form-control">
                  <option value="" {{ $inputs['level'] == '' ? 'selected' : '' }}>Grade Level</option>
                  @forelse ($levels as $level)
                  <option value="{{ $level->id }}" {{ $inputs['level'] == $level->id ? 'selected' : '' }}>{{ $level->description }}</option>
                  @empty
                  <option value="" disabled>--</option>
                  @endforelse
                </select>

                <select name="schoolyear" id="schoolyear" class="form-control">
                  <option value="" {{ $inputs['schoolyear'] == '' ? 'selected' : '' }}>School Year</option>
                  @forelse ($schoolyears as $schoolyear)
                  <option value="{{ $schoolyear->id }}" {{ $inputs['schoolyear'] == $schoolyear->id ? 'selected' : '' }}>{{ $schoolyear->description }}</option>
                  @empty
                  <option value="" disabled>--</option>
                  @endforelse
                </select>

                <select name="sex" id="sex" class="form-control">
                  <option value="" {{ $inputs['sex'] == '' ? 'selected' : '' }}>Sex</option>
                  <option value="male" {{ $inputs['sex'] == 'male' ? 'selected' : '' }}>Male</option>
                  <option value="female" {{ $inputs['sex'] == 'female' ? 'selected' : '' }}>Female</option>
                </select>

                <button class="btn btn-success" type="submit">Filter</button>
              </div>
            </div>
          </form>
        </div>
      </div>


            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    Students <span class="badge">{{ $students->count() }}</span>
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
                            @forelse ($students as $student)
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
                <div class="panel-body text-center">
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
