<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Styles -->
        <style>
            .wrapper {
                margin: 0 auto;
                max-width: 500px;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                height: 100vh;
            }

            h1{
                text-align:center;
            }



        </style>
    </head>
    <body>

<div class="wrapper">
    <h1>Proteus - index</h1>
        
    <table class="table table-bordered table-dark">
        <colgroup>
            <col width="10%">
            <col width="60%">
            <col width="30%">
        </colgroup>
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Index</th>
            <th scope="col">Links</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Style Guide</td>
            <td><a href="{!! url('/style-guide'); !!}">Click Here</a></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>webix Datatable</td>
            <td>Click Here</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Webix Tree</td>
            <td>Click Here</td>
            </tr>
        </tbody>
    </table>

    </div>


    </body>
</html>
