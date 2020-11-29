@extends('layout.backend_layout.backend_layout')

@section('backendcss')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            <h5 class="card-title">View all partners</h5>
            @include('flash_message')
            <div class="table-responsive">
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th class="wd-25p">Image</th>
                            <th class="wd-25p">Name</th>
                            <th class="wd-20p">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($partners as $row)
                        <tr>
                            <td><img style="width: 150px; height: 150px;"  src="{{asset('storage/partners/'.$row->image)}}"  alt="Img"></td>
                            <td>{{$row->name}}</td>
                            <td>
                              <a href="{{route('ourpartner.edit',$row->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
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