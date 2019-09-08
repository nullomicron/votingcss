<?php
	include 'fungsi.php';
	$pilihan = query("SELECT * FROM framework");
	update();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aplikasi Voting Sederhana</title>
</head>
<body>
	<h1>Pilih Framework CSS Terbaik Menurut Anda</h1>
	<hr>
	<form action="" method="get">
			<ul>
				<?php foreach($pilihan as $row) : ?>
					<li>
						<input type="radio" name="fm_css" id="<?= $row['no']; ?>" value="<?= $row['fm_css']; ?>">
						<label for="<?= $row['no']; ?>"><?= $row['fm_css']; ?></label>
					</li>
				<?php endforeach; ?>
			</ul>
		<button type="submit" name="submit" style="margin-left: 10px;">Kirim Data</button>
		<a href="hasil.php" target="_blank" style="border: 1px solid black;padding: 1px 6px;background: #EBEBEB">Lihat Hasil</a>
	</form>
</body>
</html>