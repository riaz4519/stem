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
        <div class="card ">
            <div class="card-body">
                @include('flash_message')
                <form action="{{route('program.addpoint.store')}}" method="post">
                    @csrf
                    <div class="wrapper">
                        <div>
                            <input type="hidden" name="program_id" value="{{$program_id}}">
                            <input type="text" name="points[]" class="form-control" placeholder="Enter Key Points" />
                        </div>
                    </div>
                    <p><button class="add_fields btn btn-success mt-2">Add More Fields</button></p>
                    <input type="submit" class="btn btn-primary btn-block" value="Submit" />
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="mt-2 mb-2">All Key Points of Program</h4>
                <div class="table-responsive">
                    <table id="example1" class="table">
                        <thead>
                            <tr>
                                <th class="wd-25p">Title</th>
                                <th class="wd-20p">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($program->programkeypoints as $programkeypoint)
                            <tr>
                                <td class="ellipsis">{{$programkeypoint->points}}</td>
                                <td>
                                  <a href="{{route('program.keypoint.edit',$programkeypoint->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
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
            var max_fields = 10; //Maximum allowed input fields 
                var wrapper    = $(".wrapper"); //Input fields wrapper
                var add_button = $(".add_fields"); //Add button class or ID
                var x = 1; //Initial input field is set to 1
            
                //When user click on add input button
                $(add_button).click(function(e){
                    e.preventDefault();
                //Check maximum allowed input fields
                    if(x < max_fields){ 
                        x++; //input field increment
                //add input field
                        $(wrapper).append('<div><input type="text" name="points[]" class="form-control mt-2" placeholder="Enter Key Points" /> <a href="javascript:void(0);" class="remove_field btn btn-danger mt-2">X</a></div>');
                    }
                });
            
                //when user click on remove button
                $(wrapper).on("click",".remove_field", function(e){ 
                    e.preventDefault();
                    $(this).parent('div').remove(); //remove inout field
                    x--; //inout field decrement
                })
                
        });
    </script>
@endsection
