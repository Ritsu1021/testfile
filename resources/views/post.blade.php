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
           @include('header')
        <div class="row">
           @include('sidebar')
            <div class="main col-xs-9">
              <h2>新規投稿</h2>
              <form action="" method="post">
                    <div class="name"><sapn class="label">お名前:</sapn><input type="text" name="name" value="" placeholder="介護 太郎"></div>

                    <div class="honbun"><sapn class="label">本文:</sapn><textarea name="coment" cols="30" rows="3"placeholder="質問はこちらへどうぞ"></textarea></div>
                    <p><input type="submit" value="投稿"><br>
              </form>

            </div>
        </div>
      <!-- </div> -->


    </body>
</html>
