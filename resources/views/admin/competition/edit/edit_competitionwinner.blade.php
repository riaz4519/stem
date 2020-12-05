@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <h4 class="text-center">Update</h4>

                    <form action="{{route('competition.winner.update', $competition_winner->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('patch') }}
                            {{-- edit competition_winner --}}
                            <div class="text-center">
                                <img src="{{asset('storage/competition/winner/'.$competition_winner->image)}}" class="w-50" alt="" srcset="">
                            </div>

                            <label class="d-block">Upload Image</label>
                            
                            <div class="custom-file mt-4">
                                <input type="file" name="image" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>

                            <div class="row mt-4">
                                <label class="d-block">Name</label>
                                <input type="text" name="name" value="{{$competition_winner->name}}" class="form-control" id="" placeholder="name" required>
                            </div>

                            <div class="row mt-4">
                                <label class="d-block">Reason why</label>
                                <input type="text" name="why" value="{{$competition_winner->why}}" class="form-control" id="" placeholder="reason to win">
                            </div>

                            <div class="row mt-4">
                                <label class="d-block">Position</label>
                                <input type="text" name="position" value="{{$competition_winner->position}}" class="form-control" id="" placeholder="position">
                            </div>

                            <button class="mt-4 btn btn-sm btn-primary submit_cls" type="submit">Update</button>
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