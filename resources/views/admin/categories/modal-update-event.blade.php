                     <div class="modal fade" id="modal-update-category-{{$event->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-default">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Update Event</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                            </div>

                                            <form action="{{ route('admin.categories.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="name">Event</label>
                                                    <input type="text" placeholder="Name of the event" name="name" class="form-control" id="category" value="{{$event->name}}">
                                                   
                                                    <label for="date">Event's Date</label>
                                                    <input type="date" placeholder="Event date" name="date" class="form-control" id="date" value="{{$event->date}}">
                                                  
                                                    <label for="description">Event's Featured</label>
                                                    <input type="text" placeholder="Description" name="description" class="form-control" id="description" value="{{$event->description}}">
                                               
                                                    <label for="featured">Event's Image</label>
                                                    <input type="file" placeholder="Upload Event image" name="featured" class="form-control" id="featured">
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