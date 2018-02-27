
<html>
<head>
	<title>Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body>
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
			  <div class="form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" name="cek" for="exampleCheck1">Check me out</label>
			  </div>
			  <button type="submit" name="login" class="btn btn-primary">LOGIN</button>
			</form>
		</div>
</body>
</html>
<?php 
	include('koneksi.php');
	error_reporting(0);
	$username = $_POST['nama'];
	$password = $_POST['pass'];

	$sql = mysql_query("SELECT * FROM admin WHERE username = '$username', password = '$password'");

	$cek = mysql_fetch_array($sql);
	$data = mysql_num_rows($sql);

	if (isset($_POST['login'])) {
		if ($cek > 0) {
			echo $data;
		}
	}
?>