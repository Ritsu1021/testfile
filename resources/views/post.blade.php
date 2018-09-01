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
              <h2>新規投稿</h2>
              <form action="/post" method="post">
                {{ csrf_field() }}
                    <div class="name"><sapn class="label">お名前:</sapn><input type="text" name="name" value="{{$user->name}}" placeholder="介護 太郎"></div>
                    <div class="honbun"><sapn class="label">タイトル:</sapn><textarea name="title" cols="30" rows="1"placeholder="タイトルはこちらへ"></textarea></div>
                    <div class="honbun"><sapn class="label">本文:</sapn><textarea name="coment" cols="60" rows="6"placeholder="質問はこちらへ"></textarea></div>
                    <input type="submit" value="投稿"><br>
              </form>
              @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif

            </div>
        </div>
      <!-- </div> -->


    </body>
</html>
