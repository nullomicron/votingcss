<?php
	// membuat koneksi dengan database
	$conn = mysqli_connect("localhost","root","toor","voting");

	// cek koneksi
	if(mysqli_connect_errno()) {
		echo "Koneksi database gagal : ".mysqli_connect_errno();
	}

	function query($query) {
		global $conn;

		// ambil data dari tabel database
		$voting = mysqli_query($conn,$query);
		$rows = [];

		// keluarkan data
		while($row = mysqli_fetch_assoc($voting)) {
			$rows[] = $row;
		}
		return $rows;
	}

	function update() {
		global $conn;

		if(isset($_GET['submit'])) {
			$nama = $_GET['fm_css'];
			$update = "UPDATE framework SET minat = minat+1 WHERE fm_css = '$nama'";
			mysqli_query($conn,$update);
		}
	}
?>
