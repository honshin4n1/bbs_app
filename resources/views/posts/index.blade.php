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
        <div class="post-link-box">
            <a rel="new" href="#newpost" class="post-link">新規投稿</a>
        </div>
        <div class="messages">
            @forelse($posts as $post)
            <div class="message">
                <div class="message-flex">
                    <p class="contributor">{{$post->contributor}}</p>
                    <form method="POST" action="{{ route('posts.destroy', $post->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">削除</button>
                    </form>
                    <a href="/posts/{{$post->id}}/edit">
                        <button type="button" class="edit-btn">編集</button>
                    </a>
                    <a href="/posts/{{$post->id}}/show">
                        <button type="sumit" class="reply-btn">返信</button>
                    </a>
                </div>
                <div class="message-info">
                    <div class="message-text">
                        <p class="text">{{$post->message}}</p>
                    </div>
                    <div class="datetime">
                        <p class="creat-datetime">{{$post->created_at->format('Y/m/d H:i')}} 作成</p>
                        <p class="update-datetime">{{$post->updated_at->format('Y/m/d H:i')}} 更新</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="message">
                <p class="infomation">投稿はまだありません</p>
            </div>
            @endforelse
        </div>
        <div class="form-content" id="newpost">
            <form method="POST" action="{{ route('posts.store')}}">
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
                        <input type="submit" value="投稿" class="post-btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="toppage-link-box">
        <a href="#top">トップへ戻る</a>
    </div>
</body>
</html>
