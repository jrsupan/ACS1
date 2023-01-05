@extends('layouts.main')
@include('level.create')
@section('content')

<div class="container">
    <h4><b><mark>GRADE LEVEL</mark></b></h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    Grade Levels <span class="badge">{{ $levels->count() }}</span>
                    <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-default pull-right">New Grade Level</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condense">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Number of Students</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($levels as $level)
                                <tr>
                                    <td>
                                        <a href="{{ route('level.show', [$level->id]) }}">{{ $level->description }}</a>
                                    </td>
                                    <td>{{ $level->students->count() }}</td>
                                    <td>
                                        <a href="{{ route('level.edit', [$level->id]) }}" class="btn btn-xs btn-primary">Edit</a>
                                        <form action="{{ route('level.destroy', [$level->id]) }}" method="POST" style="display: inline-block;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="5"><strong>No grade level records!</strong> Add one <a href="{{ route('level.create') }}">here</a></td>
                                </tr>
                            @endforelse 
                        </tbody>
                    </table>
                </div>
                <div class="panel-body text-center">
                    {{ $levels->links() }}
                </div>
            
            </div>
             <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xlink:href="#chart" />
            </svg>
        </div>
    </div>
</div>
 
@endsection
