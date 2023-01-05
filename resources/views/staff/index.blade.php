@extends('layouts.main')

@section('content')
<div class="container">
    <h4><b><mark>STAFF</mark></b></h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
        <div class="panel-body">
          <form action="{{ route('staff.index') }}" class="form-inline" method="GET">
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
                    Staffs <span class="badge">{{ $staffs->count() }}</span>
                    <a href="{{ route('staff.create') }}" class="btn btn-xs btn-default pull-right">New Staff</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condense">
                        <thead>
                            <tr>
                                <th>ID No.</th>
                                <th>Name</th>
                                <th>Sex</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($staffs as $staff)
                                <tr>
                                    <th>{{ $staff->staff_id }}</th>
                                    <td>
                                        <a href="{{ route('staff.show', [$staff->id]) }}">
                                            {{ $staff->lastname . ', ' . $staff->firstname . ($staff->middlename == '' ? '' : ' ' . $staff->middlename) }}
                                        </a>
                                    </td>
                                    <td class="text-capitalize">
                                        @if ($staff->sex == 'male')
                                            <span class="label label-success">{{ $staff->sex }}</span>
                                        @elseif($staff->sex == 'female')
                                            <span class="label label-warning">{{ $staff->sex }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('staff.edit', [$staff->id]) }}" class="btn btn-xs btn-primary">Edit</a>
                                        <form action="{{ route('staff.destroy', [$staff->id]) }}" method="POST" style="display: inline-block;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="5"><strong>No student records!</strong> Add one <a href="{{ route('staff.create') }}">here</a></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="panel-body text-center">
                    {{ $staffs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
