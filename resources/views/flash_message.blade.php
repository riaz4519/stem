@if(Session::has('error_message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{Session::get('error_message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
    @endif
@if(Session::has('success_message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('success_message')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    </div>
@endif
@if(Session::has('login_success_message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('login_success_message')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

