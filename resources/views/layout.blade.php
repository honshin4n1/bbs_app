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
        <h1 class="title"><a href="/" class="title-link">MyBBS</a></h1>
    </header>
    <main class="main-container">
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="exampleInputName">投稿者</label>
                    <input type="text" name="contributor" class="form-control" id="exampleInputName" placeholder="ニックネーム">
                </div>
                <div class="form-group">
                    <label for="inputText">本文</label>
                    <textarea name="message" class="form-control" id="inputText" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">投稿</button>
                </div>
            </form>
        </div>
        <ul class="list-unstyled">
            <li>
                @forelse($posts as $post)
                <div class="message">
                    <div class="message-flex">
                        <p class="contributor">{{$post->contributor}}</p>
                        <a href="{{ route('posts.show', $post->id)}}">
                            <button type="button" class="btn btn-info">返信</button>
                        </a>
                        <a href="{{ route('posts.edit', $post->id)}}">
                            <button type="button" class="btn btn-warning">編集</button>
                        </a>
                        <form method="POST" action="{{ route('posts.destroy', $post->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">削除</button>
                        </form>
                    </div>
                    <div class="message-info">
                        <div class="message-text">
                            <p class="text">{{$post->message}}</p>
                        </div>
                        <div class="datetime">
                            <p class="creat-datetime">{{$post->created_at->format('Y/m/ d H:i')}} 作成</p>
                            <p class="update-datetime">{{$post->updated_at->format('Y/m/    d H:i')}} 更新</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="message">
                    <p class="infomation">投稿はまだありません</p>
                </div>
                @endforelse
            </li>
        </ul>

    </main>
    <footer class="footer">
        <div class="toppage-link-box">
            <a href="/">トップページへ戻る</a>
        </div>
    </footer>
</body>
</html>
