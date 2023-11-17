<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
</head>
<body>
    <h1>確認画面</h1>
                
    <form action="{{ route('taniwaki_thanks') }}" method="POST">
        @csrf
        <label for="name">名前：</label>
        {{ $param["name"] }}
        <input type="hidden" class="form-control" name="name" id="name" value="{{ $param['name'] }}" /><br><br>

        <label for="email">メールアドレス：</label>
        {{ $param["email"] }}
        <input type="hidden" class="form-control" name="email" id="email" value="{{ $param['email'] }}" /><br><br>

        <label for="subject">件名：</label>
        {{ $param["subject"] }}
        <input type="hidden" class="form-control" name="subject" id="subject" value="{{$param['subject']}}" /><br><br>

        <label for="message">お問い合わせ内容：</label><br>
        {{ $param["message"] }}
        <input type="hidden" class="form-control" name="message" id="message" value="{{$param['message'] }}" /><br><br>

        <input type="submit" value="送信">
    </form>

</body>
</html>