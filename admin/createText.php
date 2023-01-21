<?php
$backnumber = "backnumber.txt";
$uploaddir = "../admin/img/";

$year = $_POST['year'] . ",";
$month = $_POST['month'] . ",";
$coffeeName = $_POST['coffeeName'] . ",";
$coffeePrice = $_POST['coffeePrice'] . ",";
$coffeePic = $_POST['coffeePic'] . ",";
$coffeeEx = $_POST['coffeeEx'] . ",";
$cakeName = $_POST['cakeName'] . ",";
$cakePrice = $_POST['cakePrice'] . ",";
$cakePic = $_POST['cakePic'] . ",";
$cakeEx = $_POST['cakeEx'] . "\n";

$fp = fopen($backnumber, "a");
fwrite($fp, $year);
fwrite($fp, $month);
fwrite($fp, $coffeeName);
fwrite($fp, $coffeePrice);
fwrite($fp, $coffeePic);
fwrite($fp, $coffeeEx);
fwrite($fp, $cakeName);
fwrite($fp, $cakePrice);
fwrite($fp, $cakePic);
fwrite($fp, $cakeEx);
fclose($fp);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>完了</title>
	<link rel="stylesheet" href="css/admin.css" />
</head>

<body class="createText">
	<header>

	</header>
	<main>
		<h1>今月のコーヒー＆ケーキ<br>投稿しました！</h1>
		<p><a href="../monthly/monthly.php">投稿したページを確認する</a></p>
		<p><a href="../index.html">店のTOPページへ</p>
	</main>
	<footer>

	</footer>
</body>
<footer>
</footer>

</html>