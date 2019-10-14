<!DOCTYPE html>
<html>
<head>
	<title>Gambar</title>
</head>
<body>
	<form action="" method="">
		<input type="file" name="foto">
		<button type="submit" name="simpan"></button>
	</form>



	<?php 
		if (isset($_FILES["foto"])) {
			$upload_dir = './uploads';
			$foto 		= $_FILES['foto'];
			$tmp_nama 	= $foto["tmp_name"];

			$name 		= basename($foto["name"]);
			if (move_uploaded_file($tmp_name, "$upload_dir/name")) {
				echo "Upload Berhasil";
			} else {
				echo "Upload Gagal";
			}
		} else {
			echo "Silahkan Pilih File";
		}
	 ?>
</body>
</html>