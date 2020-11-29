@extends('layout.backend_layout.backend_layout')

@section('backendcss')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('content')
<div class="col-12 mt-4">
    <div class="card ">
        <div class="card-body">
            <h5 class="card-title">View all of our stories</h5>
            @include('flash_message')
            <div class="table-responsive">
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th class="wd-25p">Title</th>
                            <th class="wd-25p">Date</th>
                            <th class="wd-20p">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($ourstories as $row)
                        <tr>
                            <td>{{$row->title}}</td>
                            <td>{{$row->date}}</td>
                            <td>
                              <a href="{{route('ourstory.edit',$row->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
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