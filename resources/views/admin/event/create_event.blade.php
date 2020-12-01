@extends('layout.backend_layout.backend_layout')
@section('title','Create program')
@section('content')
    <div class="col-12 mt-4">
        <div class="card ">
            <div class="card-body">
                @include('flash_message')
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">

                        <form action="{{route('event.new.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-4">
                                <select class="custom-select my-1 mr-sm-2" name="program_id" id="inlineFormCustomSelectPref">
                                    <option selected>Choose...</option>
                                    @foreach($programs as $program)
                                        <option value="{{$program->id}}">{{$program->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row mt-4">
                                <label class="d-block">Event Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <label class="d-block">Event Title</label>
                                <input type="text" name="title" class="form-control" id="" placeholder="title" required>
                            </div>

                            <div class="row mt-4">
                                <label class="d-block">About Event</label>
                                <textarea rows="10"  name="about" placeholder="Enter program details" class="form-control" required></textarea>
                            </div>
                            <div class="row">
                                <button class="mt-4 btn btn-sm btn-primary submit_cls" type="submit">Submit</button>
                            </div>
                        </form>

                    </div>
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
