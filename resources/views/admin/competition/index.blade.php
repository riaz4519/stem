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
            <h5 class="card-title">View all competition details</h5>
            @include('flash_message')
            <div class="table-responsive">
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th class="wd-25p">Title</th>
                            <th class="wd-20p">Edit</th>
                            <th class="wd-20p">Participants</th>
                            <th class="wd-20p">Objectives</th>
                            <th class="wd-20p">Photos</th>
                            <th class="wd-20p">Key Points</th>
                            <th class="wd-20p">Video</th>
                            <th class="wd-20p">Mentors</th>
                            <th class="wd-20p">Winner</th>
                            <th class="wd-20p">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($competitions as $row)
                        <tr>
                            <td>{{$row->title}}</td>
                            <td>
                                <a href="{{route('competition.edit',$row->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.create.participants',$row->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.add.objective',$row->id)}}" class="btn btn-xs btn-secondary"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.add.photos',$row->id)}}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.add.keypoints',$row->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.add.video',$row->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.add.mentor',$row->id)}}" class="btn btn-xs btn-dark text-white"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.add.winner',$row->id)}}" class="btn btn-xs btn-secondary text-dark"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <button type="button" value="{{ $row->id }}" class="btn btn-danger btn-xs competition_delete_btn">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="competitiondelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{route('competition.destroy','test')}}" id="competition_delete_form" method="POST">
                        {{method_field('delete')}}
                        {{csrf_field()}}
                        <div class="modal-body">
                          <p class="text-center">Are you sure you want to delete?</p>
                          <input type="hidden" name="competition_id" id="competition_id" >
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
        // competition delete btn
        $('.competition_delete_btn').on('click',function(){ 
            $("#competition_delete_form").trigger("reset");
            $('#competition_id').val($(this).val());
            $("#competitiondelete").modal('show');
        });
    });
</script>
@endsection