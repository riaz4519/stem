@extends('layout.backend_layout.backend_layout')
@section('title','Create program')
@section('backendcss')
<style></style>
@endsection

@section('content')
    <div class="col-12 mt-4">
        <div class="card ">
            <div class="card-body">
                @include('flash_message')
                <form action="{{route('event.addobjective.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-md-8">
                            <input type="hidden" name="event_id" value="{{$event_id}}">
                            <label class="d-block">Objective</label>
                            <textarea  type="text" class="form-control" rows="18" name="description" required></textarea>
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
