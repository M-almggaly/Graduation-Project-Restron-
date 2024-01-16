<?php
require_once '../connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="bootstrap/js/jquery-3.6.1.min.js" rel="stylesheet">
	<link href="bootstrap/js/bootstrap.js" rel="stylesheet">
	<link href="bootstrap/js/popper.min.js">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="particles-js">
 <div class="container">
	<div class="mohammed">
 	<div class="header">
 		<h1>login</h1>
 	</div>
 	<div class="main">
 		<form method="POST">
 			<span>
 				<i class="fa fa-user" id="icon"></i>
 				<input type="text" name="username" required>
				<label class="user">Username</label>
 			</span><br>
 			<span>
 				<i class="fa fa-lock" id="icon"></i>
 				<input type="password" name="password" id="password" required>
				 <label class="user">password</label>
				 <i class="fa fa-eye" id="show-password"></i>
 			</span><br>
 				<button type="submit" name="submit">SIGN IN</button>

 		   </form>
 	    </div>
     </div>
 </div>
 </div>
 <script src="particles.js"></script>
 <script src="app.js"></script>
 <script src="script.js"></script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $enter = $db->prepare("SELECT * FROM system_users WHERE username = :name AND password = :pass");
    $enter->bindParam("name",$_POST['username']);
    $enter->bindParam("pass",$_POST['password']);
    $enter->execute();
    if($enter->rowCount() == 1){
        session_start();
        $_SESSION['user'] = $enter->fetchObject();
        header("Location:index.php");
    }
    else{
        echo '<h1>Wrong username and password</h1>';
    }
}
?>