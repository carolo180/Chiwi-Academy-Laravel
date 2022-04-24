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
            <!-- /.table-header -->
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
                            <th>Images</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        
                    </thead>
                    <!-- /.table-content -->
                    <tbody>
                        @foreach($cursos as $curso)
                        <tr>
                            <td>{{$curso->id}}</td>
                            <td>{{$curso->name}}</td>
                            <td>{{$curso->start_date}}</td>
                            <td>{{$curso->description}}</td>
                            <td>{{$curso->created_at}}</td>
                            <td>{{$curso->updated_at}}</td>
                            <td> <img src="{{asset($curso->featured)}}" alt="{{$curso->name}}" 
                                class="img-fluid img-thumbnail" width="100px"></td>
                            <td>
                               <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" 
                               data-target="#modal-update-curso-{{$curso->id}}">Edit</button>
                            </td>
                            <td>
                                <form action="{{ route('admin.cursos.delete', $curso->id) }}" class="form_eliminar" method="POST">
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

<!-- modal create register -->
<div class="modal fade" id="modal-create-curso">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Create Masterclass</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>

                <form action="{{ route('admin.cursos.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                       <div class="form-group">
                           <label for="name">Masterclass Name</label>
                           <input type="text" placeholder="Name of the masterclaa" name="name" class="form-control" id="curso">
                          
                           <label for="date">Masterclass's Date</label>
                           <input type="date" placeholder="Date" name="date" class="form-control" id="date">
                          
                           <label for="description">Masterclass Featured</label>
                           <textarea type="text" placeholder="Description" name="description" class="form-control" id="description"></textarea>
                          
                           <label for="featured">Masterclass Image</label>
                           <input type="file" placeholder="Upload Materclass image" name="featured" class="form-control" id="date">
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

<!-- /.config datatable-->
@section('js')
<script>
$(document).ready(function() {
    $('#cursos').DataTable( {
        "order": [[ 3, "desc" ]],
        paging: true,
        scrollX: 900
    } );
} );
</script>

<!-- /config sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    $('.form_eliminar').submit(function(e){
        e.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {

            this.submit()
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
            }
            })
    });
  
</script>
@stop