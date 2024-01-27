<?php require("login.class.php") ?>
<?php 
	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['username'], $_POST['password']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles.css">
	<title>Log in form</title>
</head>
<body>
	<section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input placeholder="Username" type="text" name="username" required>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input placeholder="Password" type="password" name="password" required>
                    </div>
 
                    <button type="submit" name="submit">Log in</button>
                    <div class="register">
                        <p>Don't have an account? <a href="http://localhost:3000/HTML/CSS/index.php">Register</a></p>
                    </div>
					<p class="error"><?php echo @$user->error ?></p>
					<p class="success"><?php echo @$user->success ?></p>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>