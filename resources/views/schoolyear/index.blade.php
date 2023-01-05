@extends('layouts.main')
@include('schoolyear.create')
@section('content')

<div class="container">
    <h4><b><mark>SCHOOL YEAR</mark></b></h4>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    School Years <span class="badge">{{ $schoolyears->count() }}</span>
                    <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-default pull-right">New School Year</a>
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
                            @forelse ($schoolyears as $schoolyear)
                                <tr>
                                    <td>
                                        <a href="{{ route('schoolyear.show', [$schoolyear->id]) }}">{{ $schoolyear->description }}</a>
                                    </td>
                                    <td>{{ $schoolyear->students->count() }}</td>
                                    <td>
                                        <a href="{{ route('schoolyear.edit', [$schoolyear->id]) }}" class="btn btn-xs btn-primary">Edit</a>
                                        <form action="{{ route('schoolyear.destroy', [$schoolyear->id]) }}" method="POST" style="display: inline-block;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="5"><strong>No school year records!</strong> Add one <a href="{{ route('schoolyear.create') }}">here</a></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="panel-body text-center">
                    {{ $schoolyears->links() }}
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection
