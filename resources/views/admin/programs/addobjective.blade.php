@extends('layout.backend_layout.backend_layout')
@section('title','Create program')
@section('backendcss')
<style>
    .ellipsis {
        text-overflow: ellipsis;
        white-space: nowrap;
        display: block;
        overflow: hidden;
        width: 20em;
    }
  </style>
@endsection

@section('content')
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body">
                @include('flash_message')
                <form action="{{route('program.addobjective.store')}}" method="post">
                    @csrf
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-md-8">
                            <input type="hidden" name="program_id" value="{{$program_id}}">
                            <label class="d-block">Create Objective</label>
                            <textarea  type="text" class="form-control" rows="10" name="description" required></textarea>
                            <button type="submit" class="btn btn-info text-white mt-4">Submit</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="mt-2 mb-2 text-center">All Objectives of Program</h4>
                <div class="table-responsive">
                    <table id="example1" class="table">
                        <thead>
                            <tr>
                                <th class="wd-25p">Program Name</th>
                                <th class="wd-25p">Description</th>
                                <th class="wd-20p">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($program->programobjectives as $programobjective)
                            <tr>
                                <td>{{$programobjective->program->title}}</td>
                                <td class="ellipsis">{{$programobjective->description}}</td>
                                <td>
                                  <a href="{{route('program.objective.edit',$programobjective->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
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
