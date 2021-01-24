<?php
	session_start();
	include 'koneksi.php';

	$user=$_REQUEST['user'];
	$pass=$_REQUEST['pass'];

if($user!=="" && $pass!=="") {
	$sql=mysqli_query($db,"SELECT * FROM user WHERE username='$user' AND password='$pass' ");
	$cek=mysqli_num_rows($sql);

	if ($cek > 0) {
		$ambil = mysqli_fetch_array($sql);
		$status = $ambil['status'];
		$user = $ambil['username'];
      	
		$_SESSION['username']=$user;
		$_SESSION['status']=$status;

		if ($status=="admin") {
			echo "
				<script>
					window.location.href= 'index.php'
				</script>
			";
		}
		
	} else {
		echo "
			<script>
				alert('Username Dan Password Salah');
				window.location.href='login.php'
			</script>
		";
	}

} else {
	echo "
		<script>
			alert('Login Gagal');
			window.location.href='login.php'
		</script>
	";
}
?>
