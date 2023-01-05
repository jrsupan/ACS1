 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add a Grade Level</h4>
      </div>
      <div class="modal-body">
                    <form role="form" method="POST" action="{{ route('level.store') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input
                                        id="description"
                                        class="form-control"
                                        type="text"
                                        name="description"
                                        value="{{ old('description') }}"
                                        placeholder="Description"
                                        required>
                                </div> {{-- .form-group --}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ route('level.index') }}" class="btn btn-block btn-default">Cancel</a>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-block btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

