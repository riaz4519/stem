@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <h4 class="text-center">Update</h4>
                    <form action="{{route('program.video.update', $program_video->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('patch') }}
                            {{-- edit program_video --}}
                            <div class="text-center">
                                {!! $program_video->video !!}
                            </div>

                            <label class="d-block mt-4">Write Full Iframe Tag</label>
                            
                            <div class="custom-file mt-4">
                                <input type="text" name="video" value="{{$program_video->video}}" class="form-control" placeholder="Enter video link (iframe)" required>
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