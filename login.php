<?php 
session_start();

if( isset($_SESSION["login"]) ) {
	header("Location: admin.php");
	exit;
}

require 'connection.php';

if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' && password= '$password'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {
			// set session
			$_SESSION["login"] = true;
			header("Location: admin.php");
			exit;
		
	}

	$error = true;

}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SkuyFutsal</title>
    <link href="img/logonew.png" rel="icon">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- my style -->
    <link rel="stylesheet" href="style-login.css" />
    <!-- googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet" />
  </head>
  <body>
        <div class="login-form">
            <form method="post" action="">
                <h1>Login Admin</h1>
                <div class="form-input">
                    <input type="text" name="username" id="username" placeholder=""
                    class="form-control-material" required>
                    <label for="username">username</label>
                </div>
                <div class="form-input">
                    <input type="password" name="password" id="password" required>
                    <label for="password">Password</label>
                </div>
                <?php if( isset($error)): ?>
                <p style="color:red;">Username / Password Salah, Coba lagi!!!</p> 
                <?php endif; ?>
                <button class="btn btn-primary btn-ghost" type="submit" name="login">  Login</button>    
            </form>
        </div>

    
    <footer class="bg-primary footer-section py-3  fixed-bottom">
        <div class="text-center">
            <p class="mb-0 text-light">Copyright &copy;
                 2023 Developed by
                <a class="text-white text-decoration-none" href="https://wa.me/6281224429692">Dimas & Natan</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
