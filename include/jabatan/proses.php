<?php

	$id = $_REQUEST['id'];
	$del = $_REQUEST['del'];
	$aksi = $_REQUEST['aksi'];
	$jabatan = $_REQUEST['jabatan'];

	if ($aksi == "tambah") {
		$sql = mysqli_query($db, "INSERT INTO jabatan(nama_jabatan)
		 								VALUES ('$jabatan') ");
		echo "
			<script>
				alert('Data berhasil di input');
				document.location.href='?page=jabatan/jabatan.php'
			</script>
		";
	}
	elseif ($aksi == "edit") {
		$sql2 = mysqli_query($db, "UPDATE jabatan SET nama_jabatan ='$jabatan'
		 									 	   WHERE id_jabatan ='$id' ");
		echo "
			<script>
				alert('Data berhasil di ubah');
				document.location.href='?page=jabatan/jabatan.php'
			</script>
		";
	}
	elseif ($del) {
		$delet = mysqli_query($db, "DELETE FROM jabatan WHERE id_jabatan ='$del' ");
		echo "
			<script>
				alert('Data berhasil di hapus');
				document.location.href='?page=jabatan/jabatan.php'
			</script>
		";
	}
?>