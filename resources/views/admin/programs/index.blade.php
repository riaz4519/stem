@extends('layout.backend_layout.backend_layout')

@section('backendcss')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            <h5 class="card-title">View all programs</h5>
            @include('flash_message')
            <div class="table-responsive">
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th class="wd-25p">Title</th>
                            <th class="wd-20p">Edit</th>
                            <th class="wd-20p">Add Points</th>
                            <th class="wd-20p">Add Objectives</th>
                            <th class="wd-20p">Add Total Counts</th>
                            <th class="wd-20p">Add Popular Course</th>
                            <th class="wd-20p">Add Video</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($programs as $row)
                        <tr>
                            <td>{{$row->title}}</td>
                            <td>
                              <a href="{{route('program.edit',$row->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td>
                              <a href="{{route('program.addpoints',$row->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                              <a href="{{route('program.addobjective',$row->id)}}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                              <a href="{{route('program.countlists',$row->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                              <a href="{{route('program.popularcourse',$row->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                              <a href="{{route('program.video',$row->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i></a>
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