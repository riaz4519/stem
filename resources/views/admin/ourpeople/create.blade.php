@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    
                    <form action="{{route('ourpeople.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                              {{-- create banner --}}
                                <label class="d-block">Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <label class="d-block">Name</label>
                                <input type="text" name="name" class="form-control" id="" placeholder="Name">
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <select class="custom-select my-1 mr-sm-2" name="peoplecategory_id" id="inlineFormCustomSelectPref">
                                    <option selected>Choose...</option>
                                    @foreach($peoplecategories as $peoplecategory)
                                        <option value="{{$peoplecategory->id}}">{{$peoplecategory->name}}</option>
                                    @endforeach
                                </select>
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