@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    
                    <form action="{{route('event.video.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="d-block">Upload Video</label>
                        <input type="text" name="video" class="form-control" placeholder="Enter video link (iframe)" required>
                        <input type="hidden" name="event_id" value="{{$event_id}}">
                        <button class="mt-4 btn btn-sm btn-primary submit_cls" type="submit">Submit</button>
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
    
  });
</script>
@endsection