@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <h4 class="text-center">Update</h4>
                    <form action="{{route('event.eventphoto.update', $event_eventphoto->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('patch') }}
                            {{-- edit event_eventphoto --}}
                            <div class="text-center">
                                <img src="{{asset('storage/event/photos/'.$event_eventphoto->image)}}" class="w-50" alt="" srcset="">
                            </div>

                            <label class="d-block">Upload Image</label>
                            
                            <div class="custom-file mt-4">
                                <input type="file" name="image" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>

                            <button class="mt-4 btn btn-sm btn-primary submit_cls" type="submit">Update</button>
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