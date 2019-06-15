<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>マッスル入力フォーム</title>
</head>
<body>
<!--あとで男女別フォーム作る(簡易的に)-->
<form method="POST" action="./m_cal.php">
<p>性別を選んでください<br>
<input type="radio" name="sex" value="男">男
<input type="radio" name="sex" value="女">女
</p>
<p>体重を入力してください<br>
<input type="num1" name="weight">kg
</p>
<input type="submit" value="入力">
</form>
</body>
</html>
