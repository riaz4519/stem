@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    
                    <form action="{{route('event.keypoint.update', $event_key_point->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('patch') }}
                            {{-- edit event_key_point --}}
                            <label class="d-block">Point</label>
                            <input type="text" name="points" value="{{$event_key_point->points}}" class="form-control" id="" placeholder="name" required>
                            
                            <button class="mt-4 mb-4 btn btn-sm btn-primary submit_cls" type="submit">Update </button>
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