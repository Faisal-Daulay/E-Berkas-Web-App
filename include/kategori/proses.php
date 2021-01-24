<?php

	$id = $_REQUEST['id'];
	$del = $_REQUEST['del'];
	$aksi = $_REQUEST['aksi'];
	$kategori = $_REQUEST['kategori'];

	if ($aksi == "tambah") {
		$sql = mysqli_query($db, "INSERT INTO kategori(nama_cat)
		 								VALUES ('$kategori') ");
		echo "
			<script>
				alert('Data berhasil di input');
				document.location.href='?page=kategori/kategori.php'
			</script>
		";
	}
	elseif ($aksi == "edit") {
		$sql2 = mysqli_query($db, "UPDATE kategori SET nama_cat ='$kategori'
		 									 	   WHERE id_cat ='$id' ");
		echo "
			<script>
				alert('Data berhasil di ubah');
				document.location.href='?page=kategori/kategori.php'
			</script>
		";
	}
	elseif ($del) {
		$delet = mysqli_query($db, "DELETE FROM kategori WHERE id_cat ='$del' ");
		echo "
			<script>
				alert('Data berhasil di hapus');
				document.location.href='?page=kategori/kategori.php'
			</script>
		";
	}
?>