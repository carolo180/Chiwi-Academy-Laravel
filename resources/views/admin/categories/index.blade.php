@extends('adminlte::page')
@section('title', 'Admin-Dashboard')
@section('css')
   <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop
@section('content_header')
<h1>Events
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
        Crear
    </button>
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Events List</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name Event</th>
                            <th>Date Event</th>
                            <th>Description</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach($evento as $event)
                        <tr>
                            <td>{{$event->id}}</td>
                            <td>{{$event->name}}</td>
                            <td>{{$event->date}}</td>
                            <td>{{$event->description}}</td>
                            <td>{{$event->created_at}}</td>
                            <td>{{$event->updaded_at}}</td>
                            <td>
                               <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-update-category-{{$event->id}}">Edit</button>
                            </td>
                            <td>
                                <form action="{{ route('admin.categories.delete', $event->id) }}" method="POST">
                                    {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                        <!-- Update modal -->
                           @include('admin.categories.modal-update-event')
                            <!-- /.Update modal -->
                        @endforeach
                      
                    </tbody>
                  
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<!-- modal -->
<div class="modal fade" id="modal-create-category">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Crear Evento</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>

                <form action="{{ route('admin.categories.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                       <div class="form-group">
                           <label for="name">Evento</label>
                           <input type="text" placeholder="Name of the event" name="name" class="form-control" id="category">
                           <input type="date" placeholder="Event date" name="date" class="form-control" id="date">
                           <input type="text" placeholder="Description" name="description" class="form-control" id="description">
                       </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-primary">Save changes</button>
                    </div>
                </form>
         
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


@endsection

@section('js')
<script>
$(document).ready(function() {
    $('#categories').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop