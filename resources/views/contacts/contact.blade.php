@extends('layout.main')

@section('title','Contact US')

@section('content')

    <!-- map section -->
    <div id="map"></div>
    <!-- end map section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-box">
                <h1>Get in Touch</h1>
                <p>Someone finds it difficult to understand your creative idea? There is a better visualisation. Share your views with us, we’re looking forward to hear from you.</p>
                <form id="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Your Name (required)</label>
                            <input name="name" id="name" type="text">
                        </div>
                        <div class="col-md-6">
                            <label for="mail">Your Email (required)</label>
                            <input name="mail" id="mail" type="text">
                        </div>
                    </div>
                    <label for="tel-number">Your Phone Number</label>
                    <input name="tel-number" id="tel-number" type="text">
                    <label for="comment">Your Message (required)</label>
                    <textarea name="comment" id="comment"></textarea>
                    <button type="submit" id="submit_contact">Submit Message</button>
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
