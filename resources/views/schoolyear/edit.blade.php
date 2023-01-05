@extends('layouts.main')

@section('content')
<div class="container">
    <h4><b><mark>SCHOOL YEAR</mark></b></h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit <strong>{{ $schoolyear->description }}</strong>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('schoolyear.update', [$schoolyear->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input
                                        id="description"
                                        class="form-control"
                                        type="text"
                                        name="description"
                                        value="{{ old('description') ? old('description') : $schoolyear->description }}"
                                        placeholder="Description"
                                        required>
                                </div> {{-- .form-group --}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ route('schoolyear.show', [$schoolyear->id]) }}" class="btn btn-block btn-default">Cancel</a>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-block btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
             <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xlink:href="#chart" />
            </svg>
        </div>
    </div>
</div>
@endsection
