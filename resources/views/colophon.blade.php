<!DOCTYPE html>
<html lang = "en" class = "no-js">
<head>
        
      <title>Colophon</title>        
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
      <!-- Customized and minified stylesheet from SASS -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <!--Necessary shims-->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js">
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script></script>
        <![endif]--> 
</head>
@section ('title', 'Colophon')
  
  <div class="colophon container-fluid">
    <div class="row-fluid col-xs-12">
        <div class="panel panel-default">
          <div class="panel-heading mycontainer"> 
              <span><a href="/"><img src="../images/smallLighthouseFeathered.png" class = "hidden-xs" alt = "LightPoint Development" /></a></span>
              <span><h1 class = "panel-title text-right">Colophon</h1></span>
          </div><!--end of panel-heading-->
        <div class="panel-body">
        <div class = "col-xs-12">
        <p>This site was built using the following languages, frameworks and libraries.</a></p>
        <div id = "colophon-list" class = "table-responsive">
                <table class = "table table-striped table-responsive table-bordered">
                    <thead>
                      <tr>
                        <th align = "left">Languages and Frameworks</th>
                        <th align = "left">Tools</th>
                        <th align = "left">Server Software</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>HTML5</td>
                          <td>Sublime 3 Text Editor</td>
                          <td>Digital Ocean for Server Setup</td>
                        </tr>
                        <tr>
                          <td>CSS3</td>
                          <td>Vagrant/Homestead</td>
                          <td>Ubuntu 14.04 x 64</td>
                        </tr>
                        <tr>
                          <td>Laravel 5.4/Webpack Mix</td>
                          <td>Adobe Photoshop &amp; Illustrator</td>
                          <td>Nginx 1.11.3</td>
                        </tr>
                        <tr>
                          <td>Jquery 2.2.4</td>
                          <td>Google Analytics</td>
                          <td>PHP</td>
                        </tr>
                        <tr>
                          <td>Bootstrap 4 | Modernizr 2.8.3</td>
                          <td>Virtual Box | mySql Pro</td>
                          <td>MySql</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Git CLI | GitHub </td>
                          <td>Laravel Forge</td>
                        </tr>
                        <tr>
                        <td></td>
                        <td>Trello</td>
                        <td></td>
                     </tbody>
                </table>
                      




    