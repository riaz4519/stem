@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <h4 class="text-center">Update</h4>
                    <form action="{{route('event.eventobjective.update', $event_eventobjective->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('patch') }}
                            {{-- edit event_eventobjective --}}
                            <label class="d-block">Objective</label>
                            <textarea  type="text" class="form-control" rows="10" name="description" required>{{$event_eventobjective->description}}</textarea>
                            
                            <button class="mt-4 mb-4 btn btn-sm btn-primary submit_cls" type="submit">Update </button>
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