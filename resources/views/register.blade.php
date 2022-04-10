@extends('layout')

@section('content')

<main>
  <div class="main-wrapper">
    <h1 class="main-ttl">会員登録</h1>
    <form class="form" action="">
      <div class="form-item">
        <input type="text" name="name" class="form-item-input" placeholder="名前">
      </div>
      <div class="form-item">
        <input type="email" name="email" class="form-item-input" placeholder="メールアドレス">
      </div>
      <div class="form-item">
        <input type="password" name="password" class="form-item-input" placeholder="パスワード">
      </div>
      <div class="form-item">
        <input type="password" name="password" class="form-item-input" placeholder="確認用パスワード">
      </div>
      <input type="submit" class="form-btn" value="会員登録">
    </form>
    <div>
      <p class="login-txt">アカウントをお持ちの方はこちらから</p>
      <a href="#" class="login">ログイン</a>
    </div>
  </div>
</main>

  @endsection