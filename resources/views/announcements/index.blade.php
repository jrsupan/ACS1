@extends('layouts.main')
<!-- Modal -->
<div id="addannouncement" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Announcement</h4>
      </div>                      
      <div class="modal-body">
        <form action="{{ route('announcement.store') }}" method="POST">
          {{csrf_field()}}
          <label>Announcement Name:</label>
          <input type="text" name="name" class="form-control">
          <label>Announcement content:</label>
          <textarea name="content" class="form-control"></textarea>
           <label>Announcement date :</label>
          <input type="date" name="date" class="form-control">
          <br>
          
        
      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-primary pull-right">Save</button>
      </div>
      </form>
    </div>

  </div>
</div>
</div>
@section('content')
<div class="container">
  <h4><b><mark>ANNOUNCEMENTS</mark></b></h4>
   <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#addannouncement">Add announcement</button>


  @if(Session::has('success'))
  <div class="alert alert-success">
      {{Session::get('success')}}
  </div>
  @endif
    <br><br>
    <div class="panel panel-default">
     <div class="table-responsive">
  <table class="table table-condense">
    <thead>
      <tr>
        <th>Name</th>
        <th>Content</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    @foreach($announcement as $key => $value)
    <tr>
    	<td>{{$value->name}}</td>
      <!--  	<td>{{$value->content}}</td>
 -->        <td>{{(strlen($value['content'])>20) ? substr($value['content'], 0,20).'...':$value['content']}}</td>
       	<td>{{$value->date}}</td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
</div>
<div class="panel-body text-center">
                    {{ $announcement->links() }}
                </div>
@endsection