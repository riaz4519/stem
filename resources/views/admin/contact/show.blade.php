@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <h4 class="font-weight-bold mt-2">Name</h4>
                    <div class="mt-2">
                        {{$contact->name}}
                    </div>
                    <h4 class="font-weight-bold mt-2">Phone</h4>
                    <div class="mt-2">
                        {{$contact->phone}}
                    </div>
                    <h4 class="font-weight-bold mt-2">Email</h4>
                    <div class="mt-2">
                        {{$contact->email}}
                    </div>
                    <h4 class="font-weight-bold mt-2">Message</h4>
                    <div class="mt-2">
                        {{$contact->message}}
                    </div>
                    
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