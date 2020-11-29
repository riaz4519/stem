@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    
                    @if(!empty($singlenews)>0)
                        <form action="{{route('news.update', $singlenews->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('patch') }}
                                {{-- edit news --}}
                                <label class="d-block">Edit Image</label>
                                <div class="text-center">
                                    <img class="w-50 mb-4" src="{{asset('storage/news/'.$singlenews->image)}}" alt="Img">
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div class="row mt-4">
                                    <label class="d-block">Title</label>
                                    <input type="text" name="news_title" value="{{$singlenews->news_title}}" class="form-control" id="" placeholder="title">
                                </div>
                                <div class="row mt-4">
                                    <label class="d-block">Description (Optional)</label>
                            <textarea type="text" name="news_desc" class="form-control" rows="20">{{$singlenews->news_desc}}</textarea>
                                </div>
                                <div class="row mt-4">
                                    <label class="d-block">Date</label>
                                    <input type="date" name="date" value="{{$singlenews->date}}" class="form-control" id="" placeholder="date">
                                </div>

                                <div class="row mt-4">
                                    <label class="d-block">Edit File</label>
                                
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="customFile2">
                                        <label class="custom-file-label" for="customFile2">Choose file</label>
                                    </div>
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