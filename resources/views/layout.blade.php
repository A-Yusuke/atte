<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="../../css/style.css">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="header-wrapper">
      <h1 class="header-ttl">
        <a href="">Atte</a>
      </h1>
      <nav class="header-nav">
        <ul class="header-nav-list">
          <li class="header-nav-item"><a href=" ">ホーム</a></li>
          <li class="header-nav-item"><a href="">日付一覧</a></li>
          <li class="header-nav-item"><a href=" ">ログアウト</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main class="content">
    @yield('content')
  </main>
  <footer>
     <div class="footer-ttl">
      <a href="">
        Atte,inc.
      </a>
    </div>
  </footer>
</body>
</html>