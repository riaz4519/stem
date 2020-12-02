@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <h4 class="text-center">Update</h4>
                    <form action="{{route('program.countlist.update', $program_countlist->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('patch') }}
                            {{-- edit program_countlist --}}
                            <label class="d-block">No. of Participants (optional)</label>
                            <input type="number" name="no_of_participants" value="{{$program_countlist->no_of_participants}}" class="form-control" id="" placeholder="no_of_participants">
                            <br>
                            <label class="d-block">No. of Applicants (optional)</label>
                            <input type="number" name="no_of_applicants" value="{{$program_countlist->no_of_applicants}}" class="form-control" id="" placeholder="no_of_applicants">
                            <br>
                            <label class="d-block">No. of Mentors (optional)</label>
                            <input type="number" name="no_of_mentors" value="{{$program_countlist->no_of_mentors}}" class="form-control" id="" placeholder="no_of_mentors">
                            <br>
                            <label class="d-block">No. of Case Studies (optional)</label>
                            <input type="number" name="no_of_casestudies" value="{{$program_countlist->no_of_casestudies}}" class="form-control" id="" placeholder="no_of_casestudies">
                            
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