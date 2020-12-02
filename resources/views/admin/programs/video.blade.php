@extends('layout.backend_layout.backend_layout')

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            @include('flash_message')
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    
                    <form action="{{route('program.video.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="d-block">Write Full Iframe Tag</label>
                        <input type="text" name="video" class="form-control" placeholder="Enter video link (iframe)" required>
                        <input type="hidden" name="program_id" value="{{$program_id}}">
                        <button class="mt-4 btn btn-sm btn-primary submit_cls" type="submit">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="mt-2 mb-2">All Videos of Program</h4>
            <div class="table-responsive">
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th class="wd-25p">Program Name</th>
                            <th class="wd-25p">Video</th>
                            <th class="wd-20p">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($program->programvideos as $programvideo)
                        <tr>
                            <td>{{$programvideo->program->title}}</td>
                            <td class="ellipsis">
                                <div>
                                    {!!$programvideo->video!!}
                                </div>
                            </td>
                            <td>
                              <a href="{{route('program.video.edit',$programvideo->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
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