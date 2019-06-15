<?php
if (!empty($_POST['sex']) && !empty($_POST['weight'])) {
	$sex = $_POST['sex'];
	$weight = $_POST['weight'];
} else {
	echo 'データが入力されていません、再度入力し直してください<br>';
	echo '<a href="./m_form.php">入力画面へ戻る</a>';
}

//メッセージ入れる
//フォーム画面リンク入れる
if ($sex == '男') {
	$result = $weight * 40;
	echo 'あなたの基礎代謝は' . $result . 'kcalです！';
} else {
	$result = $weight * 30;
	echo 'あなたの基礎代謝は' . $result . 'kcalです！';
}
?>
