@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    
                    <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                              {{-- create banner --}}
                              <label class="d-block">Banner Image</label>
                              <div class="custom-file">
                                  <input type="file" name="image" class="custom-file-input" id="customFile" required>
                                  <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                              <label class="d-block mt-4">Status</label>
                              <div class="input-group mb-4">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <div class="custom-control custom-checkbox pd-l-15">
                                        <input name="activitystatus" type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Active Status</label>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                          <button class="mt-4 btn btn-sm btn-primary submit_cls" type="submit">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('backend_custom_script')
<script>
  $(document).ready(function(){
    $(".titlewarning").hide();
    $(".subtitlewarning").hide();
    $(".title").on('keyup',function(){
      if($(this).val().length > 20)
      {
        $('.submit_cls').attr("disabled",true);
        $(".titlewarning").show();
      }else{
        $('.submit_cls').attr("disabled",false);
        $(".titlewarning").hide();
      }
    });

    $(".description").on('keyup',function(){
      if($(this).val().length > 25)
      {
        $('.submit_cls').attr("disabled",true);
        $(".subtitlewarning").show();
      }else{
        $('.submit_cls').attr("disabled",false);
        $(".subtitlewarning").hide();
      }
    });
  });
</script>
@endsection