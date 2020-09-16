<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>MyBBS</title>
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
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
    <div class="toppage-link-box">
        <a href="/">トップページへ戻る</a>
    </div>
  </div>
</body>
</html>
