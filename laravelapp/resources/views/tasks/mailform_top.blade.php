<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
</head>
<body>
<div class="panel-body">
  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $message)
          <li>{{ $message }}</li>
        @endforeach
      </ul>
    </div>
  @endif

          <h1>お問い合わせフォーム</h1>
    <form action="{{ route('taniwaki_kakunin') }}" method="POST">
        @csrf
        <label for="name">名前：</label>
        <input type="text" id="name" name="name" required value="{{ old('name') }}"><br><br>

        <label for="email">メールアドレス：</label>
        <input type="email" id="email" name="email" required value="{{ old('email') }}"><br><br>

        <label for="subject">件名：</label>
        <input type="text" id="subject" name="subject" required value="{{ old('subject') }}"><br><br>

        <label for="message">お問い合わせ内容：</label><br>
        <textarea id="message" name="message" rows="4" required >{{ old('message') }}</textarea><br><br>

        <input type="submit" value="確認する">
    </form>

</body>
</html>