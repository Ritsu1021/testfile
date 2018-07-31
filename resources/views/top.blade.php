<!doctype html>
{{ dd($questions) }}
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>介護職 助け合い質問箱</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    </head>

    <body>
      <!-- <div class=“wrapper”> -->
           @include('layouts.header')
        <div class="row">
           @include('sidebar')
            <div class="main col-xs-9">
              メイン
              @include('partial.feed')
            </div>
        </div>
      <!-- </div> -->

    </body>
</html>
