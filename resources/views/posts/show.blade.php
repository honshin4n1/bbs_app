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
      <div class="message">
        <div class="message-flex">
            <p class="contributor">{{$post->contributor}}</p>
            <div>
                <p class="creat-datetime">{{ $post->created_at->format('Y/m/d H:i')}} 作成</p>
                <p class="update-datetime">{{ $post->updated_at->format('Y/m/d H:i')}} 更新</p>
            </div>
        </div>
        <div class="message-info">
            <div class="message-text">
                <p class="text"><?= $post["message"] ?></p>
            </div>
        </div>
      </div>
      <div class=message>
        {{-- @forelse($comments as $comment)
        <div class="comment">
          <p class="comment-text"><?= $comment["body"] ?></p>
          <div class="replyer-info">
            <p class="replyer"><?= $comment["replyer"] ?> /</p>
            <p class="comment-created"><?= $comment["created_at"] ?></p>
          </div>
        </div>
        @empty

        @endforelse --}}
      </div>
    </div>
    <div class="form-content" id="newpost">
      <form method="post" action="/honda/mybbs/posts/show.php">
        <div class="field-box">
          <label>ニックネーム</label>
          <input type="text" name="replyer" class="field-user">
        </div>
        <div class="field-box">
          <label>コメント</label>
          <br>
          <textarea name="body" rows="4" cols="40" class="field-message"></textarea>
        </div>
        <div class="field-box">
          <div class="btn-box">
            <input type="submit" value="返信する" class="post-btn">
          </div>
        </div>
        <input type="hidden" name="post_id" value="<?= $post["id"] ?>">
      </form>
    </div>
  </div>
  <div class="toppage-link-box">
    <a href="/honda/mybbs/posts/index.php">トップページへ戻る</a>
  </div>
</body>
</html>
