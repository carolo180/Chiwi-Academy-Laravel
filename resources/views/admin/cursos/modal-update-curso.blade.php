                     <div class="modal fade" id="modal-update-curso-{{$curso->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-default">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Update Event</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                            </div>

                                            <form action="{{ route('admin.cursos.update', $curso->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="name">Masterclass</label>
                                                    <input type="text" placeholder="Name of the event" name="name" class="form-control" id="category" value="{{$curso->name}}">
                                                    <input type="date" placeholder="Event date" name="date" class="form-control" id="date" value="{{$curso->start_date}}">
                                                    <input type="text" placeholder="Description" name="description" class="form-control" id="description" value="{{$curso->description}}">

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