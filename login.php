<?php 
include("connection.php");
if(isset($_POST['submit'])){
    $username =$_POST['user'];
    $password =$_POST['pass'];

    $sql = "select * from login where username =$'$username' and password ='$password'";
    $result = mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count==1){
        header ("Location:welcome.php");

    }else{
        echo '<script>
        window.location.href = "index.php";
        alert("Login failed.Invalid username or password !!!")
        
        </script>';
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" method="POST">
            <label for="#">Username</label>
            <input type="text" id="user" name="user"><br></br>
            <label for="#">Password</label>
            <input type="password" id="pass" name="pass"><br></br>
            <input type="submit" id="btn" value="Login" name="submit"/>




        </form>


    </div>
    
</body>
</html>