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
                <form action="{{route('competition.addphotos.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-md-8">
                            <input type="hidden" name="competition_id" value="{{$competition_id}}">
                            <div class="row mt-4">
                                <label class="d-block">Name</label>
                                <input type="text" name="name" class="form-control" id="" placeholder="name" required>
                            </div>

                            <div class="row mt-4">
                                <label class="d-block">Competition Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info text-white btn-block mt-4">Submit</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="mt-2 mb-2">All Photos of Competition</h4>
                <div class="table-responsive">
                    <table id="example1" class="table">
                        <thead>
                            <tr>
                                <th class="wd-25p">Competition Name</th>
                                <th class="wd-25p">Image</th>
                                <th class="wd-20p">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($competition->competitionphotos as $competitionphoto)
                            <tr>
                                <td>
                                    {{$competitionphoto->competition->title}}
                                </td>
                                <td>
                                    <img src="{{asset('storage/competition/photos/'.$competitionphoto->image)}}" style="width: 60px; height: 60px;" alt="" srcset="">
                                </td>
                                <td>
                                  <a href="{{route('competition.competitionphoto.edit',$competitionphoto->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
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