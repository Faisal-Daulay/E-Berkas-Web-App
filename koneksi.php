<?php
	$db = mysqli_connect("localhost","root","","e_berkas");
	if (mysqli_connect_errno($db)) {
		echo "gagal konek".mysqli_connect_errno();
	}
?>
