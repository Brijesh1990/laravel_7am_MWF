<?php 
if(isset($_POST["sub"]))
{
    // file uload 
    $tmp_name=$_FILES["img"]["tmp_name"];
    $type=$_FILES["img"]["type"];
    $size=$_FILES["img"]["size"]/1024;
    $path="uploads/".$_FILES["img"]["name"];
    move_uploaded_file($tmp_name,$path);
    echo "<h2 align='center' style='color:green'>Your file Uploaded successfully</h2>";
    header("refresh:3,file_upload.php");

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<style>
    #heading
    {
        display: block;
        animation:fadeInLeft;
        animation-duration: 2s;
    }
</style>

</head>
<body>
    
    <h2 class="text-center text-danger mt-5" id="heading">Upload Your file here using php</h2>
    <hr class="border border-danger w-25 mx-auto" id="heading">
    <div class="container bg-dark mt-5 p-5 col-md-6" id="heading">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="img" placeholder="Upload image" class="form-control" required>
            </div>

            <div class="form-group mt-5">
                <input type="submit" name="sub" value="Upload File >>" class="btn btn-lg btn-info">
            </div>
            
        </form>
    </div>
    
</body>
</html>