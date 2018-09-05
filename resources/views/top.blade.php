<!doctype html>

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
            
              <h1>質問箱</h1>
              <h2>投稿一覧</h2>
              @foreach($questions as $question)
              @include('partial.feed')
              @endforeach
            </div>
        </div>
      <!-- </div> -->

    </body>
</html>
