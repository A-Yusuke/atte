@extends('layout')

@section('content')

<main>
    <div class="main-wrapper">
      <h1 class="main-ttl">ログイン</h1>
      <form class="form" action="">
        <div class="form-item">
          <input type="email" name="email" class="form-item-input" placeholder="メールアドレス">
        </div>
        <div class="form-item">
          <input type="password" name="password" class="form-item-input" placeholder="パスワード">
        </div>
        <input type="submit" class="form-btn" value="会員登録">
      </form>
      <div>
        <p class="register-txt">アカウントをお持ちでない方はこちらから</p>
        <a href="#" class="register">会員登録</a>
      </div>
    </div>
  </main>

  @endsection