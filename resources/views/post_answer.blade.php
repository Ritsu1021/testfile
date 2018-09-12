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

              @if($_GET)
              <div class="alert alert-success" role="alert">回答ありがとうございます！！
              </div>
              @endif

              <div class="question-content">
                 <span class="box-title">質問内容</span>
                  <!-- 質問内容 -->
                <h3>{{ $questions->title }}</h3>
                <p>{{ $questions->body }}</p>
                <p>{{ $questions->created_at }}</p>
                <p>{{ $questions->name }}</p>


              </div>
              <div class="answer-content">
                <div class="minna">
                  <h2>みんなの回答</h2>
                </div>
                <!-- 回答内容 -->
                @foreach($answers as $answer)
                  <!-- TODO: 回答Viewをパーシャル化 & CSS整える -->
                  @include ('partial.answer')
                @endforeach

              </div>
              <!-- ログインしていた場合 -->
              @if($user)
                <div class="post-answer">
                  <h2 class="post-answer2">質問に答える</h2>
                  <form action="/question/{{$questions->id}}/post" method="post">
                    {{ csrf_field() }}
                        <div class="name"><sapn class="label">お名前:</sapn><input type="text" name="name" value="{{$user->name}}" placeholder="介護 太郎"></div>

                        <div class="honbun"><sapn class="label">本文:</sapn><textarea name="coment" cols="60" rows="6"placeholder="回答はこちらへ"></textarea></div>
                        <input type="submit" value="回答">
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
              @else
              <!-- ログインしていない場合 -->
                <h4 class="point1">※回答する場合はログインしてください。</h4>

              @endif
            </div>
        </div>
      <!-- </div> -->


    </body>
</html>
