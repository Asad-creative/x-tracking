<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Module</th>
                      <th scope="col">Java Script</th>
                      <th scope="col">React JS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Webix Datatable</td>
                      <td><a href="{{ url('/webix/datatable') }}">Click Here</a></td>
                      <td><a href="{{ url('/react/webix/datatable') }}">Click Here</a></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Webix Gantt</td>
                      <td><a href="{{ url('/webix/gantt') }}">Click Here</a></td>
                      <td><a href="{{ url('/react/webix/gantt') }}">Click Here</a></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>CK Editor</td>
                      <td><a href="{{ url('/ck-editor') }}">Click Here</a></td>
                      <td><a href="{{ url('/react/ck-editor') }}">Click Here</a></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Webix Schedular</td>
                      <td><a href="{{ url('/webix/schedular') }}">Click Here</a></td>
                      <td><a href="{{ url('/react/webix/schedular') }}">Click Here</a></td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Webix Calender</td>
                      <td><a href="{{ url('/webix/calender') }}">Click Here</a></td>
                      <td><a href="{{ url('/react/webix/calender') }}">Click Here</a></td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Highchart Progress Bar</td>
                      <td><a href="{{ url('/gauge') }}">Click Here</a></td>
                      <td><a href="{{ url('/react/gauge') }}">Click Here</a></td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Webix Organogram</td>
                      <td>-</td>
                      <td>-</td>
                    </tr>
                  </tbody>
                </table>
                <!-- <div class="title m-b-md">Proteus</div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>

                    <a href="{{ url('/webix/datatable') }}">Webix Datatable</a>
                    <a href="">Webix Tree</a>
                    <a href="{{ url('/webix/organogram') }}">Webix Organogram</a>
                    <a href="{{ url('/webix/gantt') }}">Webix Gantt</a>
                    <a href="{{ url('/webix/datatable-react') }}">Webix Datatable React</a>

                </div> -->
            </div>
        </div>
    </body>
</html>
