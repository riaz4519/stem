@extends('layout.main')

@section('title','Contact US')

@section('content')

<section class="contact-section">
    <div class="container">
        <div class="contact-box">
            @include('flash_message')
            <h1>Volunteer Opportunities</h1>
           
            <form action="{{route('career.store')}}" id="contact-form" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Your Name (required)</label>
                        <input name="name" id="name" type="text" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Your Email (required)</label>
                        <input name="email" id="email" type="text" required>
                    </div>
                </div>
                <label for="phone">Your Phone Number</label>
                <input name="phone" id="phone" type="text" required>
                <label for="comment">Your Message (required)</label>
                <textarea name="message" id="comment"></textarea>
                <button type="submit">Submit Message</button>
                <div id="msg" class="message"></div>
            </form>
        </div>
    </div>
</section>

@endsection
@section('script')

    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en"></script>
    <script src="{{ asset('stem/js/gmap3.min.js') }}"></script>
    <script src="{{ asset('stem/js/script.js') }}"></script>
@endsection
