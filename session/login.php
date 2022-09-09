<?php 
session_start();
// logoin here
if(isset($_POST["log"]))
{
    $em=$_POST["email"];
    $pwd=$_POST["password"];
    if($em=='brijesh1990@gmail.com' && $pwd=='brij123')
    {
        $_SESSION["email"]=$_POST["email"];
        
        echo "<h3 align='center' style='color:green'>You are Logged In Successfully</h3>";
        header('refresh:3,profile.php');
    }

    else 
    {
        echo "<h3 align='center' style='color:red'>Your email and password are Incorrect try again</h3>";
        header('refresh:3,login.php');

    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>   
    <script src="js/bootstrap.bundle.min.js"></script>   

</head>
<body>
    <div class="container  w-50 p-5 mt-5">
    
        <h1 class="text-center text-danger mt-5">Login Form</h1>
        <hr class="border border-lg border-white w-25 mx-auto">
        <form method="post">
        <div class="form-group mt-1">
            <input type="text" name="email" placeholder="Email *" required class="form-control">
        </div>
        
        <div class="form-group mt-4">
            <input type="password" name="password" placeholder="Password *" required class="form-control">
        </div>

        
        <div class="form-group mt-4">
            <input type="submit" name="log" value="Sign In!" class="btn btn-lg btn-dark text-white">
            <b><a href="#">Forget Password</a></b>
        </div>

        <div class="form-group mt-4">
            <b>Don't have an account ?<a href="#">Create Account ?</a></b>
        </div>
        
        </form>
    </div> 
    
</body>
</html>