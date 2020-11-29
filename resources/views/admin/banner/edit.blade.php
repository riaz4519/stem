@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    
                    @if(!empty($banner)>0)
                        <form action="{{route('banner.update', $banner->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('patch') }}
                                {{-- create banner --}}
                                <label class="d-block">Edit Banner</label>
                                <div class="text-center">
                                    <img class="w-50 mb-4" src="{{asset('storage/banner/'.$banner->image)}}"  alt="Img">
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <button class="mt-4 mb-4 btn btn-sm btn-primary submit_cls" type="submit">Update Banner </button>
                        </form>
                    @endif
                    
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