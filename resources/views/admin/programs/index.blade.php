@extends('layout.backend_layout.backend_layout')

@section('backendcss')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            <h5 class="card-title">View all programs</h5>
            @include('flash_message')
            <div class="table-responsive">
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th class="wd-25p">Title</th>
                            <th class="wd-20p">Edit</th>
                            <th class="wd-20p">Points</th>
                            <th class="wd-20p">Objectives</th>
                            <th class="wd-20p">Total Counts</th>
                            <th class="wd-20p">Photos</th>
                            <th class="wd-20p">Video</th>
                            <th class="wd-20p">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($programs as $row)
                        <tr>
                            <td>{{$row->title}}</td>
                            <td>
                              <a href="{{route('program.edit',$row->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td>
                              <a href="{{route('program.addpoints',$row->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                              <a href="{{route('program.addobjective',$row->id)}}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                              <a href="{{route('program.countlists',$row->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                              {{-- photos --}}
                              <a href="{{route('program.popularcourse',$row->id)}}" class="btn btn-xs btn-secondary text-dark"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                              <a href="{{route('program.video',$row->id)}}" class="btn btn-xs btn-dark text-white"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                              <button type="button" value="{{ $row->id }}" class="btn btn-danger btn-xs program_delete_btn">
                                <i class="fa fa-minus"></i>
                              </button>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="programdelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <form action="{{route('program.destroy','test')}}" id="program_delete_form" method="POST">
                      {{method_field('delete')}}
                      {{csrf_field()}}
                      <div class="modal-body">
                        <p class="text-center">Are you sure you want to delete?</p>
                        <input type="hidden" name="program_id" id="program_id" >
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
      // program delete btn
      $('.program_delete_btn').on('click',function(){ 
            $("#program_delete_form").trigger("reset");
            $('#program_id').val($(this).val());
            $("#programdelete").modal('show');
        });
    });
</script>
@endsection