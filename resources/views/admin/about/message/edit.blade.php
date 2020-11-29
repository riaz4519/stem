@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <h4 class="card-title">Update about message</h4>
                    <form action="{{route('aboutmessage.update', $aboutmessage->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('patch') }}
                        <label class="d-block">Title</label>
                        <input type="text" name="title" value="{{$aboutmessage->title}}" class="form-control" id="" placeholder="title">
                        <br>
                        <label class="d-block">Description</label>
                        <textarea name="description" rows="10" style="width: 100%;">{{$aboutmessage->description}}</textarea>
                        <br>
                        <label class="d-block">Link Title</label>
                        <input type="text" name="link_title" value="{{$aboutmessage->link_title}}" class="form-control" id="" placeholder="link title">
                        <br>
                        <label class="d-block">Link</label>
                        <input type="text" name="link" value="{{$aboutmessage->link}}" class="form-control" id="" placeholder="link">
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