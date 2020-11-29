@extends('layout.backend_layout.backend_layout')

@section('backendcss')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('content')
<div class="row">
    <div class="col-12 mt-4">
        <h4>Banner Details</h4>

        <div class="card">
            <div class="card-body">
                <h5>Banner</h5>
                <div class="text-center">
                    <img class="w-50" src="{{asset('storage/banner/'.$banner->image)}}"  alt="Img">
                </div>
                <a href="{{route('banner.index')}}" class="mt-4 btn btn-primary btn-xs">Back</a>
            </div>
            
        </div>
        
    </div>
</div>
@endsection

@section('backend_custom_script')
<script>
    $(document).ready(function(){
    // 
    });
</script>
@endsection