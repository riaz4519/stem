
{{--header script--}}

@include('layout.partials.header_script')

{{--end of header script--}}

@include('layout.partials.header')


@yield('content')



{{--footer--}}

@include('layout.partials.footer')

{{--end footer--}}

{{--footer script--}}
@include('layout.partials.footer_script')
{{--end of footer script--}}
