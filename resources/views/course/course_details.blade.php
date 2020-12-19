
@extends('layout.main')

@section('title','Coming soon')

@section('content')


    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <ul class="page-depth">
                <li><a href="{{ url('/') }}">Stem</a></li>
            </ul>

            <div class="d-flex justify-content-center mb-4">
                <img src="{{asset('/stem/images/comingsoon.png')}}" alt="">
            </div>
        </div>
    </section>
    <!-- End page-banner-section -->


@endsection
