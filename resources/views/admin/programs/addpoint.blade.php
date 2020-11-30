@extends('layout.backend_layout.backend_layout')
@section('title','Create program')
@section('backendcss')
<style></style>
@endsection

@section('content')
    <div class="col-12 mt-4">
        <div class="card ">
            <div class="card-body">
                @include('flash_message')
                <form action="{{route('program.addpoint.store')}}" method="post">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12">
                            <div class="after-add-more">
                                <div class="form-group">
                                    <input type="hidden" name="program_id" value="{{$program_id}}">
                                    <input type="text" class="form-control" placeholder="Enter Key points" name="points[]" />
                                </div>
                                <div class="form-group change">
                                    <a class="btn btn-success add-more">+ Add More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info text-white btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('backend_custom_script')
    <script>
        $(document).ready(function(){
            $("body").on("click",".add-more",function(){ 
                var html = $(".after-add-more").first().clone();
                $(html).find(".change").html("<a class='btn btn-danger remove'>X</a>");            
                $(".after-add-more").last().after(html);
            });

            $("body").on("click",".remove",function(){ 
                $(this).parents(".after-add-more").remove();
            });
                
        });
    </script>
@endsection
