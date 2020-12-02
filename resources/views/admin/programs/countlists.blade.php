@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <h4 class="text-center">Create Program Count List</h4>
                    <form action="{{route('program.countlist.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="program_id" value="{{$program_id}}">
                        <label class="d-block">No. of Participants (optional)</label>
                        <input type="number" name="no_of_participants" class="form-control" id="" placeholder="no_of_participants">
                        <br>
                        <label class="d-block">No. of Applicants (optional)</label>
                        <input type="number" name="no_of_applicants" class="form-control" id="" placeholder="no_of_applicants">
                        <br>
                        <label class="d-block">No. of Mentors (optional)</label>
                        <input type="number" name="no_of_mentors" class="form-control" id="" placeholder="no_of_mentors">
                        <br>
                        <label class="d-block">No. of Case Studies (optional)</label>
                        <input type="number" name="no_of_casestudies" class="form-control" id="" placeholder="no_of_casestudies">
                        <br>
                        
                        <button class="mt-4 btn btn-sm btn-primary submit_cls" type="submit">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="mt-2 mb-2">All Count Lists of Program</h4>
            <div class="table-responsive">
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th class="wd-25p">Program Name</th>
                            <th class="wd-20p">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($program->programcases as $programcase)
                        <tr>
                            <td class="ellipsis">{{$programcase->program->title}}</td>
                            <td>
                              <a href="{{route('program.countlist.edit',$programcase->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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