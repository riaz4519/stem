@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    
                    @if(!empty($program)>0)
                        <form action="{{route('program.update', $program->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('patch') }}
                                {{-- edit program --}}
                                <label class="d-block">Edit Image</label>
                                @if(isset($program->image))
                                <div class="text-center">
                                    <img class="w-50 mb-4" src="{{asset('storage/program/'.$program->image)}}" alt="Img">
                                </div>
                                @endif
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div class="row mt-4">
                                    <label class="d-block">Title</label>
                                    <input type="text" name="title" value="{{$program->title}}" class="form-control" id="" placeholder="title">
                                </div>
                                <div class="row mt-4">
                                    <label class="d-block">Description</label>
                                    <textarea type="text" name="about" class="form-control" rows="20">{{$program->about}}</textarea>
                                </div>
                                
                                
                                <button class="mt-4 mb-4 btn btn-sm btn-primary submit_cls" type="submit">Update </button>
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
    
});
</script>
@endsection