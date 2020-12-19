@extends('layout.backend_layout.backend_layout')

@section('backendcss')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<style>
</style>
@endsection

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            <h5 class="card-title">View all events</h5>
            @include('flash_message')
            <div class="table-responsive">
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th class="wd-25p">Title</th>
                            <th class="wd-20p">Edit</th>
                            <th class="wd-20p">Participants</th>
                            <th class="wd-20p">Objectives</th>
                            <th class="wd-20p">Event Photos</th>
                            <th class="wd-20p">Event Key Points</th>
                            <th class="wd-20p">Video</th>
                            <th class="wd-20p">Mentors</th>
                            <th class="wd-20p">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($events as $row)
                        <tr>
                            <td>{{$row->title}}</td>
                            <td>
                              <a href="{{route('event.edit',$row->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td>
                                <a href="{{route('event.create.participants',$row->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('event.add.objective',$row->id)}}" class="btn btn-xs btn-secondary"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('event.add.photos',$row->id)}}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('event.add.keypoints',$row->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('event.add.video',$row->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('event.add.mentor',$row->id)}}" class="btn btn-xs btn-dark text-white"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <button type="button" value="{{ $row->id }}" class="btn btn-danger btn-xs event_delete_btn">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="eventdelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{route('event.destroy','test')}}" id="event_delete_form" method="POST">
                        {{method_field('delete')}}
                        {{csrf_field()}}
                        <div class="modal-body">
                          <p class="text-center">Are you sure you want to delete?</p>
                          <input type="hidden" name="event_id" id="event_id" >
                        </div>
                    
                        <div class="modal-footer">
                          <button type="button" class="btn btn-xs btn-success" data-dismiss="modal">No, Cancel</button>
                          <button type="submit" class="btn btn-xs btn-warning">Yes, DELETE</button>
                        </div>
                      </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('backend_custom_script')
<script>
    $(document).ready(function(){
        // event delete btn
        $('.event_delete_btn').on('click',function(){ 
            $("#event_delete_form").trigger("reset");
            $('#event_id').val($(this).val());
            $("#eventdelete").modal('show');
        });
    });
</script>
@endsection