<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>MyBBS</title>
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
</head>
<body>
  <header class="header">
    <div class="title">My BBS</div>
  </header>
  <div class="main-content">
    <div class="messages">
          <div class="message"></div>
          <div class="form-content">
            <form method="post" action="{{ url('/posts/create')}}">
            @csrf
                <div class="field-box">
                    <label>投稿者</label>
                    <input type="text" name="contributor" class="field-user">
                </div>
                <div class="field-box">
                    <label>本文</label>
                    <br>
                    <textarea name="message" rows="4" cols="40" class="field-message"></textarea>
                </div>
                <div class="field-box">
                    <div class="btn-box">
                        <input type="submit" value="編集する" class="post-btn">
                    </div>
                </div>
            </form>
          </div>
    </div>
    <div class="toppage-link-box">
        <a href="#top">トップへ戻る</a>
    </div>
  </div>
</body>
</html>
