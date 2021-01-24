<?php

	$id = $_REQUEST['id'];
	$del = $_REQUEST['del'];
	$aksi = $_REQUEST['aksi'];
	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];

	if ($aksi == "tambah") {
		$sql = mysqli_query($db, "INSERT INTO user(username, password, status)
		 								VALUES ('$user','$pass', '') ");
		echo "
			<script>
				alert('Data berhasil di input');
				document.location.href='?page=user/user.php'
			</script>
		";
	}
	elseif ($aksi == "edit") {
		$sql2 = mysqli_query($db, "UPDATE user SET username ='$user',
		 									 	   password ='$pass',
		 									 	   status = ''
		 									 	   WHERE id_user ='$id' ");
		echo "
			<script>
				alert('Data berhasil di ubah');
				document.location.href='?page=user/user.php'
			</script>
		";
	}
	elseif ($del) {
		$delet = mysqli_query($db, "DELETE FROM user WHERE id_user ='$del' ");
		echo "
			<script>
				alert('Data berhasil di hapus');
				document.location.href='?page=user/user.php'
			</script>
		";
	}
?>