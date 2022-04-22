@extends('adminlte::page')
@section('title', 'Admin-Dashboard')
@section('css')
   <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop
@section('content_header')
<h1>Masterclass
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-curso">
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
                    <h3 class="card-title">Masterclasses List</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="cursos" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name Masterclass</th>
                            <th>Date Masterclass</th>
                            <th>Description</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach($cursos as $curso)
                        <tr>
                            <td>{{$curso->id}}</td>
                            <td>{{$curso->name}}</td>
                            <td>{{$curso->start_date}}</td>
                            <td>{{$curso->description}}</td>
                            <td>{{$curso->created_at}}</td>
                            <td>{{$curso->updaded_at}}</td>
                            <td>
                               <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" 
                               data-target="#modal-update-curso-{{$curso->id}}">Edit</button>
                            </td>
                            <td>
                                <form action="{{ route('admin.cursos.delete', $curso->id) }}" method="POST">
                                    {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                        <!-- Update modal -->
                           @include('admin.cursos.modal-update-curso')
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
<div class="modal fade" id="modal-create-curso">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Create Masterclass</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>

                <form action="{{ route('admin.cursos.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                       <div class="form-group">
                           <label for="name">Masterclass</label>
                           <input type="text" placeholder="Name of the masterclaa" name="name" class="form-control" id="curso">
                           <input type="date" placeholder="Date" name="date" class="form-control" id="date">
                           <textarea type="text" placeholder="Description" name="description" class="form-control" id="description"></textarea>
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
    $('#cursos').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop