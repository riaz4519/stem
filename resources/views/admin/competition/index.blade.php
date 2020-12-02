@extends('layout.backend_layout.backend_layout')

@section('backendcss')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<style>
</style>
@endsection

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            <h5 class="card-title">View all competition details</h5>
            @include('flash_message')
            <div class="table-responsive">
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th class="wd-25p">Title</th>
                            <th class="wd-20p">Edit</th>
                            <th class="wd-20p">Participants</th>
                            <th class="wd-20p">Objectives</th>
                            <th class="wd-20p">Event Photos</th>
                            <th class="wd-20p">Event Key Points</th>
                            <th class="wd-20p">Video</th>
                            <th class="wd-20p">Mentors</th>
                            <th class="wd-20p">Winner</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($competitions as $row)
                        <tr>
                            <td>{{$row->title}}</td>
                            <td>
                                <a href="{{route('competition.edit',$row->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.create.participants',$row->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.add.objective',$row->id)}}" class="btn btn-xs btn-secondary"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.add.photos',$row->id)}}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.add.keypoints',$row->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.add.video',$row->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.add.mentor',$row->id)}}" class="btn btn-xs btn-dark text-white"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>
                                <a href="{{route('competition.add.winner',$row->id)}}" class="btn btn-xs btn-danger text-dark"><i class="fa fa-plus"></i></a>
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