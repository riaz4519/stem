@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <h4>Categories of People (Ex: Management)</h4>
                    <form action="{{route('peoplecategory.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                              {{-- create peoplecategory --}}
                                <label class="d-block">Title</label>
                                <input type="text" name="name" class="form-control" id="" placeholder="Management" required>
                            </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-6">
                              <button class="mt-4 btn btn-sm btn-primary submit_cls" type="submit">Submit</button>
                          </div>
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