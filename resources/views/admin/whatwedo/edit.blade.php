@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <h4 class="card-title">Update contents of 'what we do'</h4>
                    <form action="{{route('whatwedo.update', $whatwedo->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('patch') }}
                        <label class="d-block">Title</label>
                        <input type="text" name="title" value="{{$whatwedo->title}}" class="form-control" id="" placeholder="title">
                        <br>
                        <label class="d-block">Description</label>
                        <textarea name="description" rows="10" style="width: 100%;">{{$whatwedo->description}}</textarea>
                        <br>
                        <label class="d-block">Link Title</label>
                        <input type="text" name="icon" value="{{$whatwedo->icon}}" class="form-control" id="" placeholder="link title">
                        
                        
                        <button type="submit" class="btn btn-info w-lg mt-4 btn-block mb-4">Update</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('backend_custom_script')
<script>
</script>
@endsection