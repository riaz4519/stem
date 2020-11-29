@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    
                    @if(!empty($ourstory)>0)
                        <form action="{{route('ourstory.update', $ourstory->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('patch') }}
                                {{-- edit ourstory --}}
                                <label class="d-block">Edit Image</label>
                                <div class="text-center">
                                    <img class="w-50 mb-4" src="{{asset('storage/ourstory/'.$ourstory->image)}}" alt="Img">
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div class="row mt-4">
                                    <label class="d-block">Title</label>
                                    <input type="text" name="title" value="{{$ourstory->title}}" class="form-control" id="" placeholder="title">
                                </div>
                                <div class="row mt-4">
                                    <label class="d-block">Date</label>
                                    <input type="date" name="date" value="{{$ourstory->date}}" class="form-control" id="" placeholder="date">
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <label class="d-block">From time</label>
                                        <input type="text" name="fromtime" value="{{$ourstory->fromtime}}" class="form-control" id="" placeholder="start time">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="d-block">To time</label>
                                        <input type="text" name="totime" value="{{$ourstory->totime}}" class="form-control" id="" placeholder="end time">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label class="d-block">Location</label>
                                    <input type="text" name="location" value="{{$ourstory->location}}" class="form-control" id="" placeholder="Enter location">
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