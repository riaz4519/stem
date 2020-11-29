@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <h4 class="card-title">Write Content for 'What we do'</h4>
                    <form action="{{route('whatwedo.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="d-block">Title</label>
                        <input type="text" name="title" class="form-control" id="" placeholder="title">
                        <br>
                        <label class="d-block">Description</label>
                        <textarea name="description" rows="10" style="width: 100%;"></textarea>
                        <br>
                        <label class="d-block">Icon</label>
                        <input type="text" name="icon" class="form-control" id="" placeholder="icon">

                        <button type="submit" class="btn btn-info w-lg mt-4 btn-block mb-4">Save</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('backend_custom_script')
<script>
</script>
@endsection