<?php

	$id = $_REQUEST['id'];
	$del = $_REQUEST['del'];
	$aksi = $_REQUEST['aksi'];
	$nama = $_REQUEST['nama'];
	$alamat = $_REQUEST['alamat'];
	$agama = $_REQUEST['agama'];
	$jk = $_REQUEST['jk'];
	$tlpn = $_REQUEST['tlpn'];
	$email = $_REQUEST['email'];
	$jabatan = $_REQUEST['jabatan'];
	$status = $_REQUEST['status'];

	if ($aksi == "tambah") {
		$sql = mysqli_query($db, "INSERT INTO pegawai (id_jabatan, nama_pegawai, alamat, agama, jk, telpn, email, status) 
								  VALUES ('$jabatan', '$nama', '$alamat', '$agama', '$jk', '$tlpn', '$email', '$status')");
		echo "
			<script>
				alert('Data berhasil di input');
				document.location.href='?page=pegawai/pegawai.php'
			</script>
		";
	}
	elseif ($aksi == "edit") {
		$sql2 = mysqli_query($db, "UPDATE pegawai SET nama_pegawai = '$nama', 
													  id_jabatan = '$jabatan', 
													  alamat = '$alamat', 
													  agama = '$agama', 
													  jk = '$jk', 
													  telpn = '$tlpn', 
													  email = '$email',
													  status = '$status'
													  WHERE id_pegawai = '$id' ");
		echo "
			<script>
				alert('Data berhasil di ubah');
				document.location.href='?page=pegawai/pegawai.php'
			</script>
		";
	}
	elseif ($del) {
		$delet = mysqli_query($db, "DELETE FROM pegawai WHERE id_pegawai ='$del' ");
		echo "
			<script>
				alert('Data berhasil di hapus');
				document.location.href='?page=pegawai/pegawai.php'
			</script>
		";
	}
?>