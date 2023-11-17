<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
</head>
<body>
    <h1>{{$kaisetu_today}} お問い合わせフォーム</h1>
    <form action="confirmation.html" method="POST">
        <label for="name">名前：</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">メールアドレス：</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="subject">件名：</label>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">お問い合わせ内容：</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <input type="submit" value="確認する">
    </form>


</body>
</html>