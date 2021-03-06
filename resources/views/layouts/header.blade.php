<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aviators - serviced offices</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="row pull-left logo">
            <div class="col-md-6">
                <img src="{{ asset('images/logo.svg')  }}" width="178" height="75" alt="" data-mu-svgfallback="images/logo_poster_.png"/>
            </div>
            <div class="col-md-6" style="margin-top: 10%;">
               <span class="row_p">
                Let your business fly
            </span>
            </div>
        </div>
         {{--<p class="row_p">Let your business fly</p>--}}
        <div class="pull-right social-icons">
            <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>
            <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
            <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
        </div>
    </div>
</div>