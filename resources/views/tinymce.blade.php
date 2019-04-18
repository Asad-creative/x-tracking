<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/proteus.css') }}">
        <!-- <script src="{{ asset('js/tinymce.min.js') }}"></script> -->
        <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
        <script type="text/javascript">
    tinymce.init({
    selector: '#mytextarea'
  });
  </script>
    </head>
    <body>
    

           <h1>TinyMCE</h1>


           <form method="post">
    <textarea id="mytextarea">Hello, World!</textarea>
  </form>






    </body>


</html>
