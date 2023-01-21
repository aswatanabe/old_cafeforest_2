<?php
	$uploaddir = "../admin/img/";

	$upFile='../admin/img/'.basename($_FILES['coffeePic']['name']);
	move_uploaded_file($_FILES['coffeePic']['tmp_name'],$upFile);
	$upFile='../admin/img/'.basename($_FILES['cakePic']['name']);
	move_uploaded_file($_FILES['cakePic']['tmp_name'],$upFile);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>確認</title>
    <link rel="stylesheet" href="css/admin.css" />
    <script>
		window.addEventListener("load",() => {
			document.getElementById('back').addEventListener('click', () => {
				history.back();
			});
		});
	</script>
</head>
<body class="confirm">
	<header>

	</header>
	<main>
		<h1>今月のコーヒー＆ケーキ<br>確認ページ</h1>
		<p>以下の内容はまだ投稿されていません。<br>送信ボタンを押すことで投稿が完了します。</p>
		<p>以下の内容で投稿してよろしいですか？</p>
		<table>
			<tr><th>年（西暦）</th><td><?= $_POST['year']; ?></td></></tr>
			<tr><th>月</th><td><?= $_POST['month']; ?></td></></tr>
			<tr><th>コーヒーの名前</th><td><?= $_POST['coffeeName']; ?></td></></tr>
			<tr><th>コーヒーの値段</th><td><?= $_POST['coffeePrice']; ?></td></></tr>
			<tr><th>コーヒーの写真</th><td><img src="<?= $uploaddir.$_FILES['coffeePic']['name']; ?>" width="400px"></td></></tr>
			<tr><th>コーヒーの説明</th><td><?= $_POST['coffeeEx']; ?></td></></tr>
			<tr><th>ケーキの名前</th><td><?= $_POST['cakeName']; ?></td></></tr>
			<tr><th>ケーキの値段</th><td><?= $_POST['cakePrice']; ?></td></></tr>
			<tr><th>ケーキの写真</th><td><img src="<?= $uploaddir.$_FILES['cakePic']['name']; ?>" width="400px"></td></></tr>
			<tr><th>ケーキの説明</th><td><?= $_POST['cakeEx']; ?></td></></tr>
		</table>
		<!-- 入力フォームから送られてきた情報を次のページに引き継ぐ -->
		<div>
			<p><button id="back">修正する</button></p>
			<form action="createText.php" enctype="multipart/form-data" method="post">
				<input type="hidden" name="year" value="<?= $_POST['year']; ?>">
				<input type="hidden" name="month" value="<?= $_POST['month']; ?>">
				<input type="hidden" name="coffeeName" value="<?= $_POST['coffeeName']; ?>">
				<input type="hidden" name="coffeePrice" value="<?= $_POST['coffeePrice']; ?>">
				<input type="hidden" name="coffeePic" value="<?= $uploaddir.$_FILES['coffeePic']['name']; ?>">
				<input type="hidden" name="coffeeEx" value="<?= $_POST['coffeeEx']; ?>">
				<input type="hidden" name="cakeName" value="<?= $_POST['cakeName']; ?>">
				<input type="hidden" name="cakePrice" value="<?= $_POST['cakePrice']; ?>">
				<input type="hidden" name="cakePic" value="<?= $uploaddir.$_FILES['cakePic']['name']; ?>">
				<input type="hidden" name="cakeEx" value="<?= $_POST['cakeEx']; ?>">
				<input type="submit" value="投稿">
			</form>
		</div>
	</main>
	<footer>

	</footer>
</body>
<footer>
</footer>
</html>