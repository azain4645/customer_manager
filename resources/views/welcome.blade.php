<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>顧客情報管理システム</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style type="text/css">
  /*
 * 全体の設定
 */

/* リンク */
a,
a:focus,
a:hover {
  color: #fff;
}

/* カスタムデフォルトボタン */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* `body`からの継承を防ぐ */
  background-color: #fff;
  border: .05rem solid #fff;
}

/*
 * ベース構造
 */

html,
body {
  height: 100%;
  background-image: url("/image/startup-593327_1920.jpg");
}
body {
  display: -ms-flexbox;
  display: flex;
  color: #fff;
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  max-width: 42em;
}

/*
 * ヘッダ
 */

.masthead {
  margin-bottom: 2rem;
}

.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}


/*
 * カバー
 */
.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


/*
 * フッタ
 */
.mastfoot {
  color: rgba(255, 255, 255, .5);
}
</style>
</head>

<body class="text-center">
  <div class="cover-container d-flex w-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand">顧客情報管理システム</h3>
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link active" href="#">ホーム</a>
          <a class="nav-link" href="{{ route('customer.index') }}">ログイン</a>
        </nav>
      </div>
    </header>
    <main role="main" class="inner cover">
      <h1 class="cover-heading">顧客情報管理システム</h1>
      <p class="lead">あなたの会社では、「顧客」のニーズを把握する仕組みをどのように作り上げていますか？Excelで顧客情報を管理している会社もあれば、社長や社員1人1人の頭や経験だけに頼っている会社もあります。しかしそれではいけないことを知っていますか？
      <br>
      そこで必須になる顧客管理システムです。</p>
      <p class="lead">
        <a href="#" class="btn btn-secondary">もっと詳しく知る</a>
      </p>
      <p class="lead">※このシステムは、Laravelの学習の為に作られました</p>
      <p>メールアドレス test@gmail.com</p>
      <p>パスワード　test</p>
    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">

      </div>
    </footer>
  </div><!-- /.cover-container -->

</body>

</html>