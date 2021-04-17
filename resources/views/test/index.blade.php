<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="/create" method="post">
    @csrf
    <p>名前</p>
    <input type="text" name="name">
    <p>メールアドレス</p>
    <input type="email" name="email">
    <button>送信する</button>
  </form>
</body>

</html>