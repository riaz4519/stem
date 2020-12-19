@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    
                    @if(!empty($competition)>0)
                        <form action="{{route('competition.update', $competition->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('patch') }}
                                {{-- edit competition --}}
                                <label class="d-block">Edit Image</label>
                                @if(isset($competition->image))
                                <div class="text-center">
                                    <img class="w-50 mb-4" src="{{asset('storage/competition/'.$competition->image)}}" alt="Img">
                                </div>
                                @endif
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div class="row mt-4">
                                    <label class="d-block">Title</label>
                                    <input type="text" name="title" value="{{$competition->title}}" class="form-control" id="" placeholder="title">
                                </div>
                                <div class="row mt-4">
                                    <label class="d-block">Description</label>
                                    <textarea type="text" name="about" class="form-control" rows="20">{{$competition->about}}</textarea>
                                </div>

                                <div class="row mt-4">
                                    <label class="d-block">Program </label>
                                    <select name="program_id" id="program_id" class="form-control select2">
                                        <option label="Program"></option>
                                        @foreach($programs as $program)
                                            <option value="{{$program->id}}" {{$competition->program_id == $program->id ? 'selected': ''}}>{{$program->title}}</option>
                                        @endforeach
                                    </select>
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
    $('.select2').select2({
        placeholder: 'Choose one',
        searchInputPlaceholder: 'Search options'
    });
});
</script>
@endsection