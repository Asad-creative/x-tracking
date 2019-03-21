
<<<<<<< HEAD:resources/views/dashboard.blade.php
@component('partials.titles')
Dashboard Title
@endcomponent
<!-- NAVIGATION -->
@include('partials.nav')
<!-- NAVIGATION -->
=======
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/proteus.css') }}">
        <script src="{{ asset('js/webix.js') }}"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content container">
                <div class="title m-b-md">Proteus</div>

                <div class="links">
                    <!-- <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->

                    <a href="{{ url('/webix/datatable') }}">Webix Datatable</a>
                    <a href="">Webix Tree</a>
                    <a href="{{ url('/webix/organogram') }}">Webix Organogram</a>
                    <a href="{{ url('/webix/gantt') }}">Webix Gantt</a>

                </div>
            </div>
        </div>
    </body>
</html>
>>>>>>> bf8e9828d4e5b1fbd7c8753405b3bf76ec45ac5b:resources/views/Proteus.blade.php
