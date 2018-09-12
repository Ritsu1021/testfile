<header>
  <div class="mainbox">
    <a href="/">
     <h1 class="maintitle">介護職 助け合い質問箱</h1>
    </a>
  </div>

  <div class="login">
    <form class="loginbutton"action="{{ route('login') }}" method="post">
      {{ csrf_field() }}
       <input type="text" name="email" placeholder="メールアドレス"/>
       <input type="text" name="password" placeholder="パスワード"/>
       @if(!$user)
       <input type="submit" value="ログイン">
       @else

       <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">ログアウト</a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           {{ csrf_field() }}
       </form>
       @endif
     </form>

      @if(\Auth::user())
      <p class="loginname">こんにちは{{\Auth::user()->name}}さん</p>
      @else
      <p class="loginname">こんにちはゲストさん</p>
      @endif
  </div>
</header>
