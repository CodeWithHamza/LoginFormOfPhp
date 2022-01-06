<?php 
include 'include/connection.php';
$msg;
$logincheck;
if(isset($_POST['submit'])){ //Targeting name=submit in the last input line in form
    $username=$_POST['user']; //Targeting name=user line#
    $password=$_POST['pass']; //Targeting name=pass

    $query="Select * From tbluserdata1 where username='$username' 
    and password='$password'";
    $check=mysqli_query($connection,$query);
    $login=mysqli_num_rows($check);
    if($login>0){
        $msg="Login Success";
        $logincheck=1;
    }else{
        $msg="Login Failed";
        $logincheck=0;
    }



}

























?>


















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling/style.css">
</head>
<body>
    

<h1>Login Here</h1>
<form method="post">
<label for="Username">Your Employee UserName</label> <br> <br>
<input type="text" name="user" id="username" placeholder="Enter Here"> <br> <br>
<label for="Password">Password Here</label> <br> <br>
<input type="Password" name="pass" id="Password" placeholder="Password Here"> <br>
<input type="submit" name="submit" value="login">


</form>

<?php 
if($logincheck>0){ 
?>

<h2 class="loginsuccess"> <?php echo $msg; ?></h2>

<?php }else{ ?>
    <h2 class="loginfailed"> <?php echo $msg; ?></h2>
 <?php } ?>

















</body>
</html>