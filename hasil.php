<?php
	include 'fungsi.php';
	$pilihan = query("SELECT * FROM framework");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hasil Voting</title>
	<style>
	  caption {
	  	font-weight: bold;
	  	font-size: 17px;
	  }
		table,td {
			border: 1px solid black;
			border-spacing: 0px;
		}
		td {
			padding: 5px;
			text-align: center;
		}
	</style>
</head>
<body>
	<table>
		<caption>Hasil Voting Sementara</caption>
		<tr>
			<td>No</td>
			<td>Nama Framework</td>
			<td>Jumlah Peminat</td>
		</tr>
		<?php foreach($pilihan as $row) : ?>
			<tr>
				<td><?= $row['no']; ?></td>
				<td><?= $row['fm_css']; ?></td>
				<td><?= $row['minat']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>