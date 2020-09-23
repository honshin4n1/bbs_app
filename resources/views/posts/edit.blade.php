<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyBBS</title>
    <!-- BootstrapのCSS読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <header class="header">
    <div class="title">
        <a href="/" class="title-link">My BBS</a>
    </div>
  </header>
  <div class="main-content">
    <div class="messages">
          <div class="message"></div>
          <div class="form-content">
            <form method="POST" action="{{ route('posts.update', $post->id)}}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$post->id}}">
                <div class="field-box">
                    <label>投稿者</label>
                    <input type="text" name="contributor" value="{{$post->contributor }}" class="field-user">
                </div>
                <div class="field-box">
                    <label>本文</label>
                    <br>
                    <textarea name="message" rows="4" cols="40" class="field-message">{{$post->message}}</textarea>
                </div>
                <div class="field-box">
                    <div class="btn-box">
                        <input type="submit" value="編集する" class="post-btn">
                    </div>
                </div>
            </form>
          </div>
    </div>
  </div>
  <footer class="footer">
      <div class="toppage-link-box">
          <a href="/">トップページへ戻る</a>
      </div>
  </footer>
</body>
</html>
