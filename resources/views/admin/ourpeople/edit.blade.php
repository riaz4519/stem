@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    
                    <form action="{{route('ourpeople.update', $ourpeople->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('patch') }}
                            {{-- edit ourpeople --}}
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <label class="d-block">Edit Image</label>
                                <div class="text-center">
                                    <img class="w-50 mb-4" src="{{asset('storage/ourpeople/'.$ourpeople->image)}}" alt="Img">
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <label class="d-block">Name</label>
                                <input type="text" name="name" value="{{$ourpeople->name}}" class="form-control" id="" placeholder="Name">
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <select class="custom-select my-1 mr-sm-2" name="peoplecategory_id" id="inlineFormCustomSelectPref">
                                    @foreach($peoplecategories as $row)
                                        <option value="{{$row->id}}" @if($row->id == $ourpeople->peoplecategory->id) selected @endif>{{$row->name}}</option>
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