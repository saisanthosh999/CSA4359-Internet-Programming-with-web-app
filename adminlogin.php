<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<style>
    form{
        border-radius: 25px;
        background-image: "back.jpg";
        width: 300px;
        height: 300px;
        border: 2px solid#000;
        padding: 20px;
        margin: 100px;
        }
</style>

</head>

<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
  $con = mysqli_connect ("localhost", "root","","travel");
 
  $sql = "INSERT INTO `login` (`sai`, `santhosh`) VALUES ('$username', '$password');";

  
  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Data inserted successfully";

  } else {
    echo "Data not inserted successfully";
  }
}
?>
	<header><h1>travel blog</h1>
	</header>
	<form action="login.php" method="post">
	username:<input type="text" id="user" name="user" ><br>
	password:<input type="password" id="pass" name="pass" ><br><br>
	dont have an account:<a href="signup.php">signup</a><br>


  <input type="submit" value="Submit">
</form> 

</body>
</html>
