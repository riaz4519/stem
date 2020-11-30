@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    
                    <form action="{{route('ourwork.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="d-block">Upload Image</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <label class="d-block">Title</label>
                        <input type="text" name="title" class="form-control" id="" placeholder="title">
                        <br>
                        <label class="d-block">Description</label>
                        <textarea type="text" name="description" class="form-control" rows="20"></textarea>
                        
                        <button class="mt-4 btn btn-sm btn-primary submit_cls" type="submit">Submit</button>
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