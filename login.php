<?php

session_start();
$db = mysqli_connect("sql202.epizy.com","epiz_24538736","tsapics123","epiz_24538736_login");
if(isset($_POST['submit_btn'])){
	
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $sql = "SELECT * FROM valid WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db,$sql);
    if(mysqli_num_rows($result)== 1){
		
      $_SESSION['message'] ="you are now logged in";
      $_SESSION['username']=$username;
      header('location: viewdata.php');
      
    }
    
    else{
      header('location: login.php');
      
    }}

?>

<!DOCTYPE html>
<html>
<head>

<title> TSA PHOTOGRAPHY</title>

<?php include 'links.php'  ?>
<link  rel="stylesheet" type="text/css" href="log.css">

</head>

<body onload="myfunction()">
<div id="loading">

</div>




<h1>TSA PHOTOGRAPHY</h1>
<form  method="POST" action="login.php">

  <div class="form-group ">  
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="username" value="" class="form-control"  placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" value="" class="form-control"  placeholder="Password">
  </div>
  
  <input type="submit" class="btn btn-primary" name="submit_btn" value="LOGIN">
  
</form>
<script >
 var preloader = document.getElementById('loading');
 function myfunction(){
  preloader.style.display = 'none';
 }
</script>
</body>
</html>