@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    
                    <form action="{{route('program.popularcourse.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="d-block">Upload Image</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <input type="hidden" name="program_id" value="{{$program_id}}">
                        <button class="mt-4 btn btn-sm btn-primary submit_cls" type="submit">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="mt-2 mb-2">All Photos of Program</h4>
            <div class="table-responsive">
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th class="wd-25p">Program Name</th>
                            <th class="wd-25p">Image</th>
                            <th class="wd-20p">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($program->popularcourses as $popularcourse)
                        <tr>
                            <td>
                                {{$popularcourse->program->title}}
                            </td>
                            <td>
                                <img src="{{asset('storage/program/popularcourse/'.$popularcourse->image)}}" style="width: 60px; height: 60px;" alt="" srcset="">
                            </td>
                            <td>
                              <a href="{{route('program.popularcourse.edit',$popularcourse->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
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