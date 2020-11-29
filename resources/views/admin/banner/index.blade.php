@extends('layout.backend_layout.backend_layout')

@section('backendcss')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            <h5 class="card-title">View all banners</h5>
            @include('flash_message')
            <div class="table-responsive">
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th class="wd-20p">ID</th>
                            <th class="wd-25p">Image</th>
                            <th class="wd-20p">Status</th>
                            <th class="wd-15p">Change Status</th>
                            <th class="wd-20p">View</th>
                            <th class="wd-20p">Edit</th>
                            <th class="wd-20p">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($banners as $banner)
                        <tr>
                            <td>{{$banner->id}}</td>
                            <td><img style="width: 50px; height: 50px;"  src="{{asset('storage/banner/'.$banner->image)}}"  alt="Img"></td>
                            <td>
                              @if($banner->activitystatus==1)
                                  <p class="text-success">
                                    Active
                                  </p>
                              @else
                                  <p class="text-danger">
                                    InActive
                                  </p>
                              @endif
                            </td>
                            <td>
                              @if($banner->activitystatus==1)
              
                                    <button type="submit" class="btn btn-xs btn-danger banner_changestatus_btn" value="{{$banner->id}}">
                                      <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                    </button>
              
                                  @else
              
                                    <button type="submit" class="btn btn-xs btn-success banner_changestatus_btn" value="{{$banner->id}}">
                                      <i class="fa fa-thumbs-up " aria-hidden="true"></i>
                                    </button>
              
                              @endif
                            </td>
                            <td>
                              <a href="{{route('banner.show',$banner->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                            </td>
                            <td>
                              <a href="{{route('banner.edit',$banner->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td>
                              <button type="button" value="{{ $banner->id }}" class="btn btn-danger btn-xs banner_delete_btn">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <form action="{{route('banner.destroy','test')}}" id="banner_delete_form" method="POST">
                      {{method_field('delete')}}
                      {{csrf_field()}}
                      <div class="modal-body">
                        <p class="text-center">Are you sure you want to delete?</p>
                        <input type="hidden" name="banner_id" id="ban_id" >
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

        // banner change status btn
        $('.banner_changestatus_btn').on('click',function(){
        
          $.ajax({
              type: 'post',
              url:"{{url('/banner/changestatus')}}"+"/"+$(this).val(),
              
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success:function(resp){
                  location.reload();
              },error: function(){
                  alert("Error");
              }
          });

        });

         // banner delete btn
          $('.banner_delete_btn').on('click',function(){ 
            $("#banner_delete_form").trigger("reset");
            $('#ban_id').val($(this).val());
            $("#delete").modal('show');
          });

    });
</script>
@endsection