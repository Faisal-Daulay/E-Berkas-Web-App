<?php

	$id = $_REQUEST['id'];
	$del = $_REQUEST['del'];
	$aksi = $_REQUEST['aksi'];
	$nosurat = $_REQUEST['nosurat'];
	$agenda = $_REQUEST['agenda'];
	$perihal = $_REQUEST['perihal'];
	$nama = $_REQUEST['nama'];
	$sifat = $_REQUEST['sifat'];
	$tgl = $_REQUEST['tgl'];
	$tuju = $_REQUEST['tuju'];
	$kategori = $_REQUEST['kategori'];
	$pengirim = $_REQUEST['pengirim'];
	$penerima = $_REQUEST['penerima'];
	$isi = $_REQUEST['isi'];

	$lokasi_file = $_FILES['upload']['tmp_name'];
   	$tipe_file   = $_FILES['upload']['type'];
   	$nama_file   = $_FILES['upload']['name'];
   	$size		 = $_FILES['upload']['size'];
   	$direktori 	 = "img/$nama_file";

	if ($aksi == "tambah") {
        $upload = move_uploaded_file($lokasi_file, $direktori);
		$sql = mysqli_query($db, "INSERT INTO data_surat (id_cat, id_pegawai, no_surat, agenda, perihal, nama, tgl, sifat, tuju, penerima, isi, pengirim, file) VALUES ('$kategori', '$penerima', '$nosurat', '$agenda', '$perihal', '$nama', '$tgl', '$sifat', '$tuju', '$penerima', '$isi', '$pengirim', '$nama_file')");
		echo "
			<script>
				alert('Data berhasil di input');
				document.location.href='?page=surat/surat.php'
			</script>
		";
	}
	elseif ($aksi == "edit") {
        $upload = move_uploaded_file($lokasi_file, $direktori);
		$sql2 = mysqli_query($db, "UPDATE data_surat SET id_cat = '$kategori',
						                                 id_pegawai = '$penerima', 
						                                 no_surat = '$nosurat', 
						                                 agenda = '$agenda', 
						                                 perihal = '$perihal', 
						                                 nama = '$nama', 
						                                 tgl = '$tgl', 
						                                 sifat = '$sifat', 
						                                 tuju = '$tuju', 
						                                 penerima = '$penerima', 
						                                 isi = '$isi', 
						                                 pengirim = '$pengirim', 
						                                 file = '$nama_file' 
						                                 WHERE id_surat = '$id' ");
		echo "
			<script>
				alert('Data berhasil di ubah');
				document.location.href='?page=surat/surat.php'
			</script>
		";
	}
	elseif ($del) {
		$delet = mysqli_query($db, "DELETE FROM data_surat WHERE id_surat ='$del' ");
		echo "
			<script>
				alert('Data berhasil di hapus');
				document.location.href='?page=surat/surat.php'
			</script>
		";
	}
?>