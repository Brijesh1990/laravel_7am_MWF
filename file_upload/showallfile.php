

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
    
    <h2 class="text-center text-danger mt-5" id="heading">Display Gallery</h2>
    <hr class="border border-danger w-25 mx-auto" id="heading">
    <div class="container bg-light mt-5 p-5 col-md-12" id="heading">
    <table align="center" class="table table-responsive">

    <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Action</th>
    </tr>
    <tr>
     <td>1001</td>
     <td><img src="uploads/a1.jpg" class="img-fluid" style="width:100px; height: 100px"></td>
     <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
 
    </tr>
    <tr>
        <td>1002</td>
        <td><img src="uploads/a6.jpg" class="img-fluid" style="width:100px; height: 100px"></td>
        <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
    
       </tr>

       <tr>
        <td>1003</td>
        <td><img src="uploads/cc2.jpg" class="img-fluid" style="width:100px; height: 100px"></td>
        <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
    
       </tr>
    </table>
   </div>
    
</body>
</html>