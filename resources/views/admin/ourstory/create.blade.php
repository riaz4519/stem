@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    
                    <form action="{{route('ourstory.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                              {{-- create banner --}}
                                <label class="d-block">Story Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label class="d-block">Title</label>
                            <input type="text" name="title" class="form-control" id="" placeholder="title">
                        </div>
                        <div class="row mt-4">
                            <label class="d-block">Date</label>
                            <input type="date" name="date" class="form-control" id="" placeholder="date">
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <label class="d-block">From time</label>
                                <input type="text" name="fromtime" class="form-control" id="" placeholder="start time">
                            </div>
                            <div class="col-md-6">
                                <label class="d-block">To time</label>
                                <input type="text" name="totime" class="form-control" id="" placeholder="end time">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label class="d-block">Location</label>
                            <input type="text" name="location" class="form-control" id="" placeholder="Enter location">
                        </div>
                        <div class="row">
                          <button class="mt-4 btn btn-sm btn-primary submit_cls" type="submit">Submit</button>
                        </div>
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