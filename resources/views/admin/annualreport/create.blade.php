@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    
                    <form action="{{route('annualreport.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                              {{-- create annualreport --}}
                                <label class="d-block">Upload Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label class="d-block">Title</label>
                            <input type="text" name="report_title" class="form-control" id="" placeholder="title">
                        </div>
                        <div class="row mt-4">
                            <label class="d-block">Date</label>
                            <input type="date" name="date" class="form-control" id="" placeholder="date">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                              {{-- create annualreport --}}
                                <label class="d-block">Upload file (Optional)</label>
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="customFile2">
                                    <label class="custom-file-label" for="customFile2">Choose file</label>
                                </div>
                            </div>
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