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
                        <p class="text">{{$post->message}}</p>
                    </div>
                </div>
            </div>
            <table class="table table-striped">
                @forelse($comments as $comment)
                <tr>
                    <td></td>
                    <td><p class="replyer">{{$comment->replayer}} </p></td>
                    <td><p class="comment-text">{{$comment->body}}</p></td>
                    <td><p class="comment-created">{{$comment->created_at->format('Y/m/d H:i')}}</p></td>
                    {{-- <td><button>削除</button></td> --}}
                </tr>
                @empty
                <tr>
                    <td></td>
                    <td><p class="comment-info">返信はありません</p></td>
                </tr>
                @endforelse
            </table>
            {{-- <div class="message">
            </div> --}}

            <form method="POST" action="{{route('posts.comments.store', $post->id)}}">
                @csrf
                <div class="form-group">
                    <label for="inputName">　　　　　　　　</label>
                    <input type="text" name="replayer" class="form-control" id="inputName" placeholder="ニックネーム">
                </div>
                <div class="form-group">
                    <label for="inputText">　　　　　　　　</label>
                    <textarea name="body" rows="3" cols="40" class="form-control" id="inputText" placeholder="コメント"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <button type="sumit" class="btn btn-info">返信</button>
                </div>
            </form>
        </div>
    </main>
    <footer class="footer">
        <div class="toppage-link-box">
            <a href="/">トップページへ戻る</a>
        </div>
    </footer>
</body>
</html>
