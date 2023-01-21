<?php
function h($s)
{
	return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}
?>

<!DOCTYPE HTML>
<html lang="ja">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>お問い合わせ内容の確認 | Cafe Forest</title>
	<link rel="stylesheet" href="../css/general.css" type="text/css">
	<link rel="stylesheet" href="../css/pages.css" type="text/css">
</head>

<body class="contact confirm result">
	<header>
		<p><a href="../index.html"><img src="../images/logo_maru.svg" width="auto" height="170px" alt="ロゴ"></a></p>
		<p></p>
		<div class="openbtn"><span></span><span></span><span></span></div>
		<nav id="g-nav">
			<h2>ナビゲーション</h2>
			<ul>
				<li><a href="../index.html">トップページ</a></li>
				<li><a href="../menu/index.html">Cafeメニュー</a></li>
				<li><a href="../monthly/monthly.php">今月のコーヒー＆ケーキ</a></li>
				<li><a href="../online/index.html">通販</a></li>
				<li><a href="../coupon/index.html">クーポン</a></li>
			</ul>
		</nav>
		<div class="circle-bg"></div>
	</header>
	<main>
		<h1>お問い合わせ<br>確認画面</h1>
		<p>入力内容をご確認の上、「送信」ボタンをクリックもしくはタップして下さい。</p>
		<table>
			<tr>
				<th>お名前</th>
				<td><?php echo h($_POST['name']); ?></td>
			</tr>
			<tr>
				<th>メールアドレス</th>
				<td><?= $_POST['email01']; ?></td>
			</tr>
			<tr>
				<th>メールアドレス確認</th>
				<td><?= $_POST['email02']; ?></td>
			</tr>
			<tr>
				<th>電話番号</th>
				<td><?= $_POST['tel']; ?></td>
			</tr>
			<tr>
				<th>お問い合わせタイトル</th>
				<td><?= $_POST['querytitle']; ?></td>
			</tr>
			<tr>
				<th>お問い合わせ内容</th>
				<td><?= $_POST['query']; ?></td>
			</tr>
		</table>
		<div>
			<p><button id="back">修正する</button></p>
			<form action="result.php" enctype="multipart/form-data" method="POST">
				<input type="hidden" name="name" value="<?= $_POST['name']; ?>">
				<input type="hidden" name="email01" value="<?= $_POST['email01']; ?>">
				<input type="hidden" name="email02" value="<?= $_POST['email02']; ?>">
				<input type="hidden" name="tel" value="<?= $_POST['tel']; ?>">
				<input type="hidden" name="querytitle" value="<?= $_POST['querytitle']; ?>">
				<input type="hidden" name="query" value="<?= $_POST['query']; ?>">
				<div class="btn_wrap"><input type="submit" value="送信" class="btn"></div>
			</form>
		</div>
	</main>
	<footer id="footer">
		<h2>リンク</h2>
		<ul>
			<li><a href="../contact/index.html">お問い合わせ</a></li>
			<li><a href="../access/index.html">アクセス</a></li>
			<li><a href="#">会社概要</a></li>
			<li><a href="#">特定商取引法に基づく表示</a></li>
			<li><a href="#">プライバシーポリシー</a></li>
		</ul>
		<div id="page-top"><a href="#"></a></div>
		<div><small>© 2022 Asuka Watanabe</small></div>
	</footer>
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../js/script.js"></script>
</body>

</html>