{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Build v{{ Illuminate\Foundation\Application::VERSION }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
--}}


    <!doctype html>


<html lang="en" class="no-js">
<head>
    <title>Studiare</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('stem/css/studiare-assets.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stem/css/fonts/font-awesome/font-awesome.min.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('stem/css/fonts/elegant-icons/style.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('stem/css/fonts/iconfont/material-icons.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('stem/css/style.css') }}">


</head>
<body>

<!-- Container -->
<div id="container">
    <!-- Header
        ================================================== -->
    <header class="clearfix">

        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p><i class="material-icons">phone</i> <span>+01 2334 853</span></p>
                        <p><i class="material-icons">email</i> <span>email@mycourse.com</span></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-top-line">
                            <ul class="top-menu">
                                <li><a href="#">Purchase Now</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog.html">News</a></li>
                            </ul>
                            <button class="search-icon">
                                <i class="material-icons open-search">search</i>
                                <i class="material-icons close-search">close</i>
                            </button>
                            <button class="shop-icon">
                                <i class="material-icons">shopping_cart</i>
                                <span class="studiare-cart-number">0</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form class="search_bar">
            <div class="container">
                <input type="search" class="search-input" placeholder="What are you looking for...">
                <button type="submit" class="submit">
                    <i class="material-icons">search</i>
                </button>
            </div>
        </form>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">

                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.svg" alt="">
                </a>

                <a href="#" class="mobile-nav-toggle">
                    <span></span>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="drop-link">
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li class="drop-link">
                            <a href="about.html">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="pricing.html">Pricing Packages</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="single-project.html">Portfolio Single</a></li>
                                <li><a href="teachers.html">Teachers</a></li>
                                <li><a href="single-teacher.html">Teacher Single</a></li>
                                <li class="drop-link">
                                    <a href="#">Submenu Level 1</a>
                                    <ul class="dropdown level2">
                                        <li><a href="#">Submenu Level 2</a></li>
                                        <li class="drop-link">
                                            <a href="#">Submenu Level 2</a>
                                            <ul class="dropdown level2">
                                                <li><a href="#">Submenu Level 3</a></li>
                                                <li><a href="#">Submenu Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Submenu Level 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="drop-link">
                            <a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown">
                                <li class="drop-link">
                                    <a href="blog-list.html">Blog List</a>
                                    <ul class="dropdown level2">
                                        <li><a href="blog-list-leftsidebar.html">Blog List - Sidebar Left</a></li>
                                        <li><a href="blog-list-rightsidebar.html">Blog List - Sidebar Right</a></li>
                                        <li><a href="blog-list.html">No Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="drop-link">
                                    <a href="blog-grid-3.html">Blog Grid</a>
                                    <ul class="dropdown level2">
                                        <li><a href="blog-grid-3.html">3 Column</a></li>
                                        <li><a href="blog-grid-4.html">4 Column</a></li>
                                        <li><a href="blog-grid-leftsidebar.html">Sidebar Left</a></li>
                                        <li><a href="blog-grid-rightsidebar.html">Sidebar Right</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog Classic</a></li>
                                <li><a href="single-post.html">Post Single</a></li>
                            </ul>
                        </li>
                        <li class="drop-link">
                            <a href="courses.html">Courses</a>
                        </li>
                        <li><a href="events.html">Events</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <a href="#" class="register-modal-opener login-button"><i class="material-icons">perm_identity</i> Get Started</a>
                </div>
            </div>
        </nav>

        <div class="mobile-menu">
            <div class="search-form-box">
                <form class="search-form">
                    <input type="search" class="search-field" placeholder="Enter keyword...">
                    <button type="submit" class="search-submit">
                        <i class="material-icons open-search">search</i>
                    </button>
                </form>
            </div>
            <div class="shopping-cart-box">
                <a class="shop-icon" href="cart.html">
                    <i class="material-icons">shopping_cart</i>
                    Cart
                    <span class="studiare-cart-number">0</span>
                </a>
            </div>
            <nav class="mobile-nav">
                <ul class="mobile-menu-list">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="drop-link">
                        <a href="#">Pages</a>
                        <ul class="drop-level">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="pricing.html">Pricing Packages</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="single-project.html">Portfolio Single</a></li>
                            <li><a href="teachers.html">Teachers</a></li>
                            <li><a href="single-teacher.html">Teacher Single</a></li>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="single-teacher.html">Teacher Single</a></li>
                            <li class="drop-link">
                                <a href="#">Submenu Level 1</a>
                                <ul class="drop-level">
                                    <li><a href="#">Submenu Level 2</a></li>
                                    <li class="drop-link">
                                        <a href="#">Submenu Level 2</a>
                                        <ul class="drop-level">
                                            <li><a href="#">Submenu Level 3</a></li>
                                            <li><a href="#">Submenu Level 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Submenu Level 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="drop-link">
                        <a href="blog.html">Blog</a>
                        <ul class="drop-level">
                            <li class="drop-link">
                                <a href="blog-list.html">Blog List</a>
                                <ul class="drop-level">
                                    <li><a href="blog-list-leftsidebar.html">Blog List - Sidebar Left</a></li>
                                    <li><a href="blog-list-rightsidebar.html">Blog List - Sidebar Right</a></li>
                                    <li><a href="blog-list.html">No Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="drop-link">
                                <a href="blog-grid-3.html">Blog Grid</a>
                                <ul class="drop-level">
                                    <li><a href="blog-grid-3.html">3 Column</a></li>
                                    <li><a href="blog-grid-4.html">4 Column</a></li>
                                    <li><a href="blog-grid-leftsidebar.html">Sidebar Left</a></li>
                                    <li><a href="blog-grid-rightsidebar.html">Sidebar Right</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog Classic</a></li>
                            <li><a href="single-post.html">Post Single</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="courses.html">Courses</a>
                    </li>
                    <li>
                        <a href="events.html">Events</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>

    </header>
    <!-- End Header -->

    <!-- home-section
        ================================================== -->
    <section id="home-section">
        <div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper" data-alias="concept1" style="background-color:#000000;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
            <div id="rev_slider_202_1" class="rev_slider" data-version="5.1.1RC">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-672" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="upload/slider/slider-image-1.jpg" data-rotate="0" data-saveperformance="off" data-title="unique" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="upload/slider/slider-image-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                             id="slide-672-layer-1"
                             data-x="['left','left','left','left']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']"
                             data-voffset="['130','130','130','130']"
                             data-width="['530','530','430','420']"
                             data-height="330"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="500"
                             data-responsive_offset="on"
                             style="z-index: 5;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Woo-TitleLarge tp-resizeme"
                             id="slide-672-layer-2"
                             data-x="['left','left','left','left']"
                             data-hoffset="['40','40','40','35']"
                             data-y="['top','top','top','top']"
                             data-voffset="['170','170','170','170']"
                             data-width="450"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="700"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; min-width: 370px; max-width: 450px; white-space: normal;text-align:left;">Self-Paced Learning Courses Online
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-line-shape tp-resizeme"
                             id="slide-672-layer-3"
                             data-x="['left','left','left','left']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']"
                             data-voffset="['165','165','165','165']"
                             data-width="['3','3','3','3']"
                             data-height="100"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="700"
                             data-responsive_offset="on"
                             style="z-index: 6;">
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption Woo-Rating tp-resizeme"
                             id="slide-672-layer-4"
                             data-x="['left','left','left','left']"
                             data-hoffset="['40','40','40','35']"
                             data-y="['top','top','top','top']"
                             data-voffset="['286','286','286','286']"
                             data-width="450"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="800"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 8; min-width: 370px; max-width: 450px; white-space: normal; text-align:left;">
                            We are long past the online coursework and training that involves video lectures, unit plans and quizes!
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-resizeme"
                             id="slide-672-layer-5"
                             data-x="['left','left','left','left']"
                             data-hoffset="['407','407','407','407']"
                             data-y="['top','top','top','top']"
                             data-voffset="['337','337','337','337']"
                             data-width="120"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="1100"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 10; min-width: 100px; max-width: 100px; white-space: normal; text-align:center;">
                            <img src="upload/slider/price-1.png" alt="">
                        </div>

                        <!-- LAYER NR. 6 -->
                        <a class="tp-caption Woo-ProductInfo rev-btn tp-resizeme"
                           href="http://server.local/revslider/product/premium-computer-hardware/"
                           target="_self"
                           id="slide-672-layer-6"
                           data-x="['left','left','left','left']"
                           data-hoffset="['40','40','40','35']"
                           data-y="['top','top','top','top']"
                           data-voffset="['370','370','370','370']"
                           data-width="none"
                           data-height="none"
                           data-whitespace="nowrap"
                           data-transform_idle="o:1;"
                           data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:200;e:Power1.easeInOut;"
                           data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(221, 221, 221, 1.00);cursor:pointer;"
                           data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                           data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                           data-start="1100"
                           data-splitin="none"
                           data-splitout="none"
                           data-actions=''
                           data-responsive_offset="on">
                            Learn More
                        </a>

                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-673" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="upload/slider/slider-image-2.jpg" data-rotate="0" data-saveperformance="off" data-title="ideas" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="upload/slider/slider-image-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                             id="slide-673-layer-1"
                             data-x="['left','left','left','left']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']"
                             data-voffset="['130','130','130','130']"
                             data-width="['530','530','430','420']"
                             data-height="330"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="500"
                             data-responsive_offset="on"
                             style="z-index: 5;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Woo-TitleLarge tp-resizeme"
                             id="slide-673-layer-2"
                             data-x="['left','left','left','left']"
                             data-hoffset="['40','40','40','35']"
                             data-y="['top','top','top','top']"
                             data-voffset="['170','170','170','170']"
                             data-width="450"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="700"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; min-width: 370px; max-width: 450px; white-space: normal;text-align:left;">Credit Courses <br> Toward Degrees
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-line-shape tp-resizeme"
                             id="slide-673-layer-3"
                             data-x="['left','left','left','left']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']"
                             data-voffset="['165','165','165','165']"
                             data-width="['3','3','3','3']"
                             data-height="100"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="700"
                             data-responsive_offset="on"
                             style="z-index: 6;">
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption Woo-Rating tp-resizeme"
                             id="slide-673-layer-4"
                             data-x="['left','left','left','left']"
                             data-hoffset="['40','40','40','35']"
                             data-y="['top','top','top','top']"
                             data-voffset="['286','286','286','286']"
                             data-width="450"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="800"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 8; min-width: 370px; max-width: 450px; white-space: normal; text-align:left;">
                            We are long past the online coursework and training that involves video lectures, unit plans and quizes!
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-resizeme"
                             id="slide-673-layer-5"
                             data-x="['left','left','left','left']"
                             data-hoffset="['407','407','407','407']"
                             data-y="['top','top','top','top']"
                             data-voffset="['337','337','337','337']"
                             data-width="120"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="1100"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 10; min-width: 100px; max-width: 100px; white-space: normal; text-align:center;">
                            <img src="upload/slider/price-2.png" alt="">
                        </div>

                        <!-- LAYER NR. 6 -->
                        <a class="tp-caption Woo-ProductInfo rev-btn tp-resizeme"
                           href="http://server.local/revslider/product/premium-computer-hardware/"
                           target="_self"
                           id="slide-673-layer-6"
                           data-x="['left','left','left','left']"
                           data-hoffset="['40','40','40','35']"
                           data-y="['top','top','top','top']"
                           data-voffset="['370','370','370','370']"
                           data-width="none"
                           data-height="none"
                           data-whitespace="nowrap"
                           data-transform_idle="o:1;"
                           data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:200;e:Power1.easeInOut;"
                           data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(221, 221, 221, 1.00);cursor:pointer;"
                           data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                           data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                           data-start="1100"
                           data-splitin="none"
                           data-splitout="none"
                           data-actions=''
                           data-responsive_offset="on">
                            Learn More
                        </a>

                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-674" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="upload/slider/slider-image-3.jpg" data-rotate="0" data-saveperformance="off" data-title="ideas" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="upload/slider/slider-image-3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                             id="slide-674-layer-1"
                             data-x="['left','left','left','left']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']"
                             data-voffset="['130','130','130','130']"
                             data-width="['530','530','430','420']"
                             data-height="330"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="500"
                             data-responsive_offset="on"
                             style="z-index: 5;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Woo-TitleLarge tp-resizeme"
                             id="slide-674-layer-2"
                             data-x="['left','left','left','left']"
                             data-hoffset="['40','40','40','35']"
                             data-y="['top','top','top','top']"
                             data-voffset="['170','170','170','170']"
                             data-width="450"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="700"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; min-width: 370px; max-width: 450px; white-space: normal;text-align:left;">Self-Paced Learning Courses Online
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-line-shape tp-resizeme"
                             id="slide-674-layer-3"
                             data-x="['left','left','left','left']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']"
                             data-voffset="['165','165','165','165']"
                             data-width="['3','3','3','3']"
                             data-height="100"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="700"
                             data-responsive_offset="on"
                             style="z-index: 6;">
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption Woo-Rating tp-resizeme"
                             id="slide-674-layer-4"
                             data-x="['left','left','left','left']"
                             data-hoffset="['40','40','40','35']"
                             data-y="['top','top','top','top']"
                             data-voffset="['286','286','286','286']"
                             data-width="450"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="800"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 8; min-width: 370px; max-width: 450px; white-space: normal; text-align:left;">
                            We are long past the online coursework and training that involves video lectures, unit plans and quizes!
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-resizeme"
                             id="slide-674-layer-5"
                             data-x="['left','left','left','left']"
                             data-hoffset="['407','407','407','407']"
                             data-y="['top','top','top','top']"
                             data-voffset="['337','337','337','337']"
                             data-width="120"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="1100"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 10; min-width: 100px; max-width: 100px; white-space: normal; text-align:center;">
                            <img src="upload/slider/price-3.png" alt="">
                        </div>

                        <!-- LAYER NR. 6 -->
                        <a class="tp-caption Woo-ProductInfo rev-btn tp-resizeme"
                           href="http://server.local/revslider/product/premium-computer-hardware/"
                           target="_self"
                           id="slide-674-layer-6"
                           data-x="['left','left','left','left']"
                           data-hoffset="['40','40','40','35']"
                           data-y="['top','top','top','top']"
                           data-voffset="['370','370','370','370']"
                           data-width="none"
                           data-height="none"
                           data-whitespace="nowrap"
                           data-transform_idle="o:1;"
                           data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:200;e:Power1.easeInOut;"
                           data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(221, 221, 221, 1.00);cursor:pointer;"
                           data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                           data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                           data-start="1100"
                           data-splitin="none"
                           data-splitout="none"
                           data-actions=''
                           data-responsive_offset="on">
                            Learn More
                        </a>

                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-675" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="upload/slider/slider-image-4.jpg" data-rotate="0" data-saveperformance="off" data-title="ideas" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="upload/slider/slider-image-4.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                             id="slide-675-layer-1"
                             data-x="['left','left','left','left']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']"
                             data-voffset="['130','130','130','130']"
                             data-width="['530','530','430','420']"
                             data-height="330"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="500"
                             data-responsive_offset="on"
                             style="z-index: 5;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Woo-TitleLarge tp-resizeme"
                             id="slide-675-layer-2"
                             data-x="['left','left','left','left']"
                             data-hoffset="['40','40','40','35']"
                             data-y="['top','top','top','top']"
                             data-voffset="['170','170','170','170']"
                             data-width="450"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="700"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; min-width: 370px; max-width: 450px; white-space: normal;text-align:left;">Credit Courses <br> Toward Degrees
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-line-shape tp-resizeme"
                             id="slide-675-layer-3"
                             data-x="['left','left','left','left']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']"
                             data-voffset="['165','165','165','165']"
                             data-width="['3','3','3','3']"
                             data-height="100"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="700"
                             data-responsive_offset="on"
                             style="z-index: 6;">
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption Woo-Rating tp-resizeme"
                             id="slide-675-layer-4"
                             data-x="['left','left','left','left']"
                             data-hoffset="['40','40','40','35']"
                             data-y="['top','top','top','top']"
                             data-voffset="['286','286','286','286']"
                             data-width="450"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="800"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 8; min-width: 370px; max-width: 450px; white-space: normal; text-align:left;">
                            We are long past the online coursework and training that involves video lectures, unit plans and quizes!
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-resizeme"
                             id="slide-675-layer-5"
                             data-x="['left','left','left','left']"
                             data-hoffset="['407','407','407','407']"
                             data-y="['top','top','top','top']"
                             data-voffset="['337','337','337','337']"
                             data-width="120"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="1100"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 10; min-width: 100px; max-width: 100px; white-space: normal; text-align:center;">
                            <img src="upload/slider/price-3.png" alt="">
                        </div>

                        <!-- LAYER NR. 6 -->
                        <a class="tp-caption Woo-ProductInfo rev-btn tp-resizeme"
                           href="http://server.local/revslider/product/premium-computer-hardware/"
                           target="_self"
                           id="slide-675-layer-6"
                           data-x="['left','left','left','left']"
                           data-hoffset="['40','40','40','35']"
                           data-y="['top','top','top','top']"
                           data-voffset="['370','370','370','370']"
                           data-width="none"
                           data-height="none"
                           data-whitespace="nowrap"
                           data-transform_idle="o:1;"
                           data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:200;e:Power1.easeInOut;"
                           data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(221, 221, 221, 1.00);cursor:pointer;"
                           data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                           data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                           data-start="1100"
                           data-splitin="none"
                           data-splitout="none"
                           data-actions=''
                           data-responsive_offset="on">
                            Learn More
                        </a>

                    </li>

                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </section>
    <!-- End home section -->

    <!-- feature-section
        ================================================== -->
    <section class="feature-section">
        <div class="container">
            <div class="feature-box">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-post">
                            <div class="icon-holder">
                                <i class="fa fa-umbrella"></i>
                            </div>
                            <div class="feature-content">
                                <h2>
                                    Online Learn Courses Management
                                </h2>
                                <p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-post">
                            <div class="icon-holder color2">
                                <i class="fa fa-id-card-o"></i>
                            </div>
                            <div class="feature-content">
                                <h2>
                                    Learn from the masters of the field online
                                </h2>
                                <p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-post">
                            <div class="icon-holder color3">
                                <i class="fa fa-handshake-o"></i>
                            </div>
                            <div class="feature-content">
                                <h2>
                                    An Introduction-Skills For Learners
                                </h2>
                                <p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature section -->

    <!-- collection-section
        ================================================== -->
    <section class="collection-section">
        <div class="container">
            <div class="title-section">
                <div class="left-part">
                    <span>Categories</span>
                    <h1>Trending Collection</h1>
                </div>
                <div class="right-part">
                    <a class="button-one" href="#">View All Courses</a>
                </div>
            </div>
            <div class="collection-box">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="collection-post">
                            <div class="inner-collection">
                                <img src="upload/collection/web-development.jpg" alt="">
                                <a href="#" class="hover-post">
                                    <span class="title">Web Development</span>
                                    <span class="numb-courses">3 Courses</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="collection-post">
                            <div class="inner-collection">
                                <img src="upload/collection/web-design.jpg" alt="">
                                <a href="#" class="hover-post">
                                    <span class="title">Web Design</span>
                                    <span class="numb-courses">2 Courses</span>
                                </a>
                            </div>
                        </div>
                        <div class="collection-post">
                            <div class="inner-collection">
                                <img src="upload/collection/technology.jpg" alt="">
                                <a href="#" class="hover-post">
                                    <span class="title">Technology</span>
                                    <span class="numb-courses">3 Courses</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="collection-post">
                            <div class="inner-collection">
                                <img src="upload/collection/photography.jpg" alt="">
                                <a href="#" class="hover-post">
                                    <span class="title">Photography</span>
                                    <span class="numb-courses">3 Courses</span>
                                </a>
                            </div>
                        </div>
                        <div class="collection-post">
                            <div class="inner-collection">
                                <img src="upload/collection/design.jpg" alt="">
                                <a href="#" class="hover-post">
                                    <span class="title">Design</span>
                                    <span class="numb-courses">3 Courses</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End collection section -->

    <!-- countdown-section
        ================================================== -->
    <section class="countdown-section">
        <div class="container">
            <div class="countdown-box">
                <h1>Limited Time: Get My Book For Free!</h1>
                <p>Learn anytime, anywhere. Best Courses. Top Instituion.</p>
                <div class="countdown-item" data-date="2019/12/14">
                    <div class="countdown-col">
							<span class="countdown-unit countdown-days">
								<span class="number" id="days"></span>
								<span class="text">days</span>
							</span>
                    </div>
                    <div class="countdown-col">
							<span class="countdown-unit countdown-hours">
								<span class="number" id="hours"></span>
								<span class="text">hours</span>
							</span>
                    </div>
                    <div class="countdown-col">
							<span class="countdown-unit countdown-min">
								<span class="number" id="minutes"></span>
								<span class="text">minutes</span>
							</span>
                    </div>
                    <div class="countdown-col">
							<span class="countdown-unit countdown-sec">
								<span class="number" id="seconds"></span>
								<span class="text">seconds</span>
							</span>
                    </div>
                </div>
                <p>We offer professional SEO services that help websites increase their organic search score drastically in order to compete for the highest rankings.</p>
                <a class="button-two" href="#">Get my free book</a>
            </div>
        </div>
    </section>
    <!-- End countdown section -->

    <!-- popular-courses-section
        ================================================== -->
    <section class="popular-courses-section">
        <div class="container">
            <div class="title-section">
                <div class="left-part">
                    <span>Education</span>
                    <h1>Popular Courses</h1>
                </div>
                <div class="right-part">
                    <a class="button-one" href="#">View All Courses</a>
                </div>
            </div>
            <div class="popular-courses-box">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="course-post">
                            <div class="course-thumbnail-holder">
                                <a href="single-course.html">
                                    <img src="upload/courses/1.jpg" alt="">
                                </a>
                            </div>
                            <div class="course-content-holder">
                                <div class="course-content-main">
                                    <h2 class="course-title">
                                        <a href="single-course.html">Introduction Web Design with HTML</a>
                                    </h2>
                                    <div class="course-rating-teacher">
                                        <div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												<span style="width:100%">
													<span class="rating">5.00</span>
													<span class="votes-number">1 Votes</span>
												</span>
                                        </div>
                                        <a href="#" class="course-loop-teacher">Duha Samra</a>
                                    </div>
                                </div>
                                <div class="course-content-bottom">
                                    <div class="course-students">
                                        <i class="material-icons">group</i>
                                        <span>64</span>
                                    </div>
                                    <div class="course-price">
                                        <span>£244</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="course-post">
                            <div class="course-thumbnail-holder">
                                <a href="single-course.html">
                                    <img src="upload/courses/2.jpg" alt="">
                                </a>
                            </div>
                            <div class="course-content-holder">
                                <div class="course-content-main">
                                    <h2 class="course-title">
                                        <a href="single-course.html">Special Education Needs Teaching</a>
                                    </h2>
                                    <div class="course-rating-teacher">
                                        <div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												<span style="width:100%">
													<span class="rating">3.50</span>
													<span class="votes-number">2 Votes</span>
												</span>
                                        </div>
                                        <a href="#" class="course-loop-teacher">Leon Redding</a>
                                    </div>
                                </div>
                                <div class="course-content-bottom">
                                    <div class="course-students">
                                        <i class="material-icons">group</i>
                                        <span>134</span>
                                    </div>
                                    <div class="course-price">
                                        <span>£74.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="course-post">
                            <div class="course-thumbnail-holder">
                                <a href="single-course.html">
                                    <img src="upload/courses/3.jpg" alt="">
                                </a>
                            </div>
                            <div class="course-content-holder">
                                <div class="course-content-main">
                                    <h2 class="course-title">
                                        <a href="single-course.html">Environmental Science BTEC Course</a>
                                    </h2>
                                    <div class="course-rating-teacher">
                                        <div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												<span style="width:100%">
													<span class="rating">No Votes</span>
												</span>
                                        </div>
                                        <a href="#" class="course-loop-teacher">Linda Castello</a>
                                    </div>
                                </div>
                                <div class="course-content-bottom">
                                    <div class="course-students">
                                        <i class="material-icons">group</i>
                                        <span>0</span>
                                    </div>
                                    <div class="course-price">
                                        <span>£18.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="course-post">
                            <div class="course-thumbnail-holder">
                                <a href="single-course.html">
                                    <img src="upload/courses/4.jpg" alt="">
                                </a>
                            </div>
                            <div class="course-content-holder">
                                <div class="course-content-main">
                                    <h2 class="course-title">
                                        <a href="single-course.html">Distance Learning MBA Management</a>
                                    </h2>
                                    <div class="course-rating-teacher">
                                        <div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												<span style="width:100%">
													<span class="rating">4.50</span>
													<span class="votes-number">2 Votes</span>
												</span>
                                        </div>
                                        <a href="#" class="course-loop-teacher">Michael Arnett</a>
                                    </div>
                                </div>
                                <div class="course-content-bottom">
                                    <div class="course-students">
                                        <i class="material-icons">group</i>
                                        <span>263</span>
                                    </div>
                                    <div class="course-price">
                                        <span>£29.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End popular-courses section -->

    <!-- events-section
        ================================================== -->
    <section class="events-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-section">
                        <div class="left-part">
                            <span>Events</span>
                            <h1>Upcoming Events</h1>
                        </div>
                    </div>

                    <div class="events-box">

                        <div class="events-post">
                            <div class="event-inner-content">
                                <div class="top-part">
                                    <div class="date-holder">
                                        <div class="date">
                                            <span class="date-day">22</span>
                                            <span class="date-month">Oct</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 6:00 am - 12:00 pm
												</span>
                                            <span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
                                        </div>
                                        <h2 class="title"><a href="#">Summer High School Journalism Camp Registration Form</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="events-post">
                            <div class="event-inner-content">
                                <div class="top-part">
                                    <div class="date-holder">
                                        <div class="date">
                                            <span class="date-day">14</span>
                                            <span class="date-month">Dec</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 2:00 am - 5:00 am
												</span>
                                            <span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
                                        </div>
                                        <h2 class="title"><a href="#">Board of Regents Campus Live and Community Forum</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="events-post">
                            <div class="event-inner-content">
                                <div class="top-part">
                                    <div class="date-holder">
                                        <div class="date">
                                            <span class="date-day">17</span>
                                            <span class="date-month">Dec</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 2:00 am - 8:00 am
												</span>
                                            <span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
                                        </div>
                                        <h2 class="title"><a href="#">May Professional Development Diversity and Inclusion Series</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="title-section">
                        <div class="left-part">
                            <span>Watch Video</span>
                            <h1>Learn Anywhere</h1>
                        </div>
                    </div>

                    <div class="video-box">
                        <div class="video-post">
                            <img src="upload/video/video-poster-1.jpg" alt="">
                            <div class="hover-post">
                                <h2>Marketing, Media and Advertising</h2>
                                <p>About Studioare</p>
                            </div>
                            <a class="video-link iframe" href="https://vimeo.com/97447862"><span><i class="fa fa-play"></i></span></a>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="video-post small-post">
                                    <img src="upload/video/video-poster-2.jpg" alt="">
                                    <div class="hover-post">
                                        <h2>Limitless learning</h2>
                                    </div>
                                    <a class="video-link iframe" href="https://vimeo.com/97447862"><span><i class="fa fa-play"></i></span></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="video-post small-post">
                                    <img src="upload/video/video-poster-3.jpg" alt="">
                                    <div class="hover-post">
                                        <h2>Learn by Doing</h2>
                                    </div>
                                    <a class="video-link iframe" href="https://vimeo.com/97447862"><span><i class="fa fa-play"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End events section -->

    <!-- news-section
        ================================================== -->
    <section class="news-section">
        <div class="container">
            <div class="title-section">
                <div class="left-part">
                    <span>Blog</span>
                    <h1>Latest News</h1>
                </div>
                <div class="right-part">
                    <a class="button-one" href="#">View All Posts</a>
                </div>
            </div>
            <div class="news-box">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a href="single-post.html"><img src="upload/blog/blog-image-1.jpg" alt=""></a>
                            <div class="post-content">
                                <a class="category" href="#">Academics</a>
                                <h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>
                                <div class="post-meta date">
                                    <i class="material-icons">access_time</i> June 13, 2018
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a href="single-post.html"><img src="upload/blog/blog-image-2.jpg" alt=""></a>
                            <div class="post-content">
                                <a class="category" href="#">Government</a>
                                <h2><a href="single-post.html">Tips to Developing a Quality Discussion</a></h2>
                                <div class="post-meta date">
                                    <i class="material-icons">access_time</i> June 13, 2018
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a href="single-post.html"><img src="upload/blog/blog-image-3.jpg" alt=""></a>
                            <div class="post-content">
                                <a class="category" href="#">Design</a>
                                <h2><a href="single-post.html">Reflections for the Season of Advent</a></h2>
                                <div class="post-meta date">
                                    <i class="material-icons">access_time</i> June 13, 2018
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a href="single-post.html"><img src="upload/blog/blog-image-4.jpg" alt=""></a>
                            <div class="post-content">
                                <a class="category" href="#">Business</a>
                                <h2><a href="single-post.html">It’s Wonderful to see the Friendships that Develop</a></h2>
                                <div class="post-meta date">
                                    <i class="material-icons">access_time</i> June 13, 2018
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End news section -->

    <!-- testimonial-section
        ================================================== -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-box owl-wrapper">

                <div class="owl-carousel" data-num="1">

                    <div class="item">
                        <div class="testimonial-post">
                            <p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
                            <div class="profile-test">
                                <div class="avatar-holder">
                                    <img src="upload/testimonials/testimonial-avatar-1.jpg" alt="">
                                </div>
                                <div class="profile-data">
                                    <h2>Nicole Alatorre</h2>
                                    <p>Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial-post">
                            <p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
                            <div class="profile-test">
                                <div class="avatar-holder">
                                    <img src="upload/testimonials/testimonial-avatar-2.jpg" alt="">
                                </div>
                                <div class="profile-data">
                                    <h2>Nicole Alatorre</h2>
                                    <p>Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial-post">
                            <p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
                            <div class="profile-test">
                                <div class="avatar-holder">
                                    <img src="upload/testimonials/testimonial-avatar-3.jpg" alt="">
                                </div>
                                <div class="profile-data">
                                    <h2>Nicole Alatorre</h2>
                                    <p>Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial-post">
                            <p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
                            <div class="profile-test">
                                <div class="avatar-holder">
                                    <img src="upload/testimonials/testimonial-avatar-4.jpg" alt="">
                                </div>
                                <div class="profile-data">
                                    <h2>Nicole Alatorre</h2>
                                    <p>Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial section -->

    <!-- footer
        ================================================== -->
    <footer>
        <div class="container">

            <div class="up-footer">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget text-widget">
                            <a href="index.html" class="footer-logo"><img src="images/logo_light.svg" alt=""></a>
                            <p>We named our theme Studiare because to us,<br> the best brands are simple ones. Brands thrive<br> on their ability to be understood.</p>
                            <ul>
                                <li>
                                    <div class="contact-info-icon">
                                        <i class="material-icons">location_on</i>
                                    </div>
                                    <div class="contact-info-value">127 Elizabeth Street, NY New York</div>
                                </li>
                                <li>
                                    <div class="contact-info-icon">
                                        <i class="material-icons">phone_android</i>
                                    </div>
                                    <div class="contact-info-value">+55-11-3097-0508</div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget quick-widget">
                            <h2>Quick Links</h2>
                            <ul class="quick-list">
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="pricing.html">Pricing Packages</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="blog.html">News</a></li>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Sample Page</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget subscribe-widget">
                            <h2>Newsletter</h2>
                            <p>Don’t miss anything, sign up now and keep informed about our company.</p>
                            <div class="newsletter-form">
                                <input class="form-control" type="email" name="EMAIL" placeholder="Enter Your E-mail" required="">
                                <input type="submit" value="Subscribe">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="footer-copyright copyrights-layout-default">
            <div class="container">
                <div class="copyright-inner">
                    <div class="copyright-cell"> &copy; 2019 <span class="highlight">Studiare</span>. Created by CodeBean Team.</div>
                    <div class="copyright-cell">
                        <ul class="studiare-social-links">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End footer -->

</div>
<!-- End Container -->


<script src="{{ asset('stem/js/studiare-plugins.min.js') }}"></script>
<script src="{{ asset('stem/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('stem/js/popper.js') }}"></script>
<script src="{{ asset('stem/js/bootstrap.min.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en"></script>
<script src="{{ asset('stem/js/gmap3.min.js') }}"></script>
<script src="{{ asset('stem/js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('stem/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('stem/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('stem/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('stem/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('stem/js/extensions/revolution.extension.parallax.min.js') }}"></script>

<script>
    var tpj=jQuery;
    var revapi202;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_202_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_202_1");
        } else {
            revapi202 = tpj("#rev_slider_202_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "js/",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    arrows: {
                        enable: true,
                        style: 'gyges',
                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: -60
                        },

                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: -60
                        }
                    },
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    bullets: {

                        enable: false,
                        style: 'persephone',
                        tmp: '',
                        direction: 'horizontal',
                        rtl: false,

                        container: 'slider',
                        h_align: 'center',
                        v_align: 'bottom',
                        h_offset: 0,
                        v_offset: 55,
                        space: 7,

                        hide_onleave: false,
                        hide_onmobile: false,
                        hide_under: 0,
                        hide_over: 9999,
                        hide_delay: 200,
                        hide_delay_mobile: 1200
                    }
                },
                responsiveLevels: [1210, 1024, 778, 480],
                visibilityLevels: [1210, 1024, 778, 480],
                gridwidth: [1210, 1024, 778, 480],
                gridheight: [700, 700, 600, 600],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                    type: "scroll",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0px",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>


</body>
</html>
