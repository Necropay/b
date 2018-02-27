<html>
<head>
	<title>Form Register</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
			<form action ='' method='post'>
			  <div class="form-group">
			    <label for="formGroupExampleInput">Username</label>
    			<input type="text" name= 'nama' class="form-control" id="formGroupExampleInput" placeholder="Your Name">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Retype Password</label>
			    <input type="password" name="repass" class="form-control" id="exampleInputPassword1" placeholder="Retype password">
			  </div>
			  <div class="form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" name="cek" for="exampleCheck1">Check me out</label>
			  </div>
			  <button type="submit" name="daftar" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</body>
</html>
<?php 
include('koneksi.php');
error_reporting(0);

$nama = $_POST['nama'];
$password = $_POST['pass'];
$repassword = $_POST['repass'];

if (isset($_POST['daftar'])) {
	if ($nama == '') {
		echo "<div class='alert alert-warning' role='alert'>Nama tidak boleh kosong!!!!</div>";
	}elseif ($password == '') {
		echo "<div class='alert alert-warning' role='alert'>Password tidak boleh kosong!!!!</div>";
	}elseif ($repassword == '') {
		echo "<div class='alert alert-warning' role='alert'>Mohon ketik ulang password!!!!</div>";
	}else{
		$sql = "INSERT INTO admin (username,password) VALUES ('$nama','$password')";
		$query = mysql_query($sql);

		if ($query) {
			echo "<div class='alert alert-success' role='alert'>Data berhasil masuk</div>";
		}
	}
}
?>