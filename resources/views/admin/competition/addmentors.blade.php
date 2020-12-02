@extends('layout.backend_layout.backend_layout')
@section('title','Create program')
@section('backendcss')
<style>
    
</style>
@endsection

@section('content')
    <div class="col-12 mt-4">
        <div class="card ">
            <div class="card-body">
                @include('flash_message')
                <form action="{{route('competition.addmentors.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-md-8">
                            <input type="hidden" name="competition_id" value="{{$competition_id}}">
                            <div class="row mt-4">
                                <label class="d-block">Name</label>
                                <input type="text" name="name" class="form-control" id="" placeholder="name" required>
                            </div>

                            <div class="row mt-4">
                                <label class="d-block">Profession (Optional)</label>
                                <input type="text" name="profession" class="form-control" id="" placeholder="profession">
                            </div>

                            <div class="row mt-4">
                                <label class="d-block">Mentor's Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info text-white btn-block mt-4">Submit</button>
                </form>
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
