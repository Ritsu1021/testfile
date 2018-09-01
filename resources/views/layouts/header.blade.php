<header>

  <h1 class="maintitle">介護職 助け合い質問箱</h1>

  <div class="login">
    <form action="{{ route('login') }}" method="post">
      {{ csrf_field() }}
       <input type="text" name="email" placeholder="メールアドレス"/>
       <input type="text" name="password" placeholder="パスワード"/>
       <input type="submit" value="ログイン">
     </form>
  </div>

</header>
