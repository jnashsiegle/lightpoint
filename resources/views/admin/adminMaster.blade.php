<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Set Viewport for Responsiveness-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="pragma" content="no-cache" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <meta name="robots" CONTENT="NOARCHIVE NOINDEX, NOFOLLOW">
        <meta name = "author" content = "Jana Nash-Siegle">
        <!--favicon-->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/png">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/png">
        <!-- Opera Speed Dial Favicon -->
      <link rel="icon" type="image/png" href="favicon-16x16.png" />

      <!-- Standard Favicon -->
      <link rel="icon" type="image/x-icon" href="favicon-32x32.png" />

      <!-- For iPhone 4 Retina display: -->
      <link rel="apple-touch-icon-precomposed" sizes="192x192" href="/android-chrome-192x192.png">

      <!-- For iPad: -->
      <link rel="apple-touch-icon-precomposed" sizes="180x180" href="/apple-touch-icon.png">

      <!-- For iPhone: -->
      <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57x57-precomposed.png">

      <!-- Bootstrap CDN -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">


      <!-- Font Awesome CDN -->
      <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- Customized and minified stylesheet from SASS -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

      <!--Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,500" rel="stylesheet">
        <!--Necessary shims-->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js">
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script></script>
        <![endif]-->
            <script>
              window.Laravel = {!! json_encode([
              'csrfToken' => csrf_token(),
              ]) !!};
            </script>
    </head>
        <body>
        @yield('content')
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" async="async" defer = "defer"></script>
    <!-- Required for bootstrap tooltips -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
     <!--modernizr CDN-->
     <script src = "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" async = "async" defer = "defer"></script>
    <!--my javascripts | arrow is for animated arrow on landing, miscellaneous others in all.min.js-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
    <script type = "text/javascript" src = "{{ asset('/js/app.js') }}"></script>
    <script type = "text/javascript" src = "{{ asset('/js/smoothscroll.js') }}"></script>
    <script type = "text/javascript" src = "{{ asset('/js/fade.js') }}"></script>
    </body>
</html>
