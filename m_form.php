<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>マッスル入力フォーム</title>
</head>
<body>
<h2>基礎代謝計算用フォーム</h2>
<form method="POST" action="./m_cal.php">
<p>性別を選んでください<br>
<input type="radio" name="sex" value="男">男
<input type="radio" name="sex" value="女">女
</p>
<p>体重を入力してください<br>
<input type="num1" name="weight">kg
</p>
<p>体脂肪率を入力してください<br>
分からなければ「0」と入力してください<br>
<input type="num2" name="body_fat">%
<input type="submit" value="入力">
</form>
</body>
</html>
