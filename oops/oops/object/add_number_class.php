
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>

<?php

class A 
{
    public function display()
    {
        if(isset($_POST["add"]))
        {
            $n1=$_POST["n1"];
            $n2=$_POST["n2"];
            $n3=$n1+$n2;
            echo "<h3 align='center' style='color:green'>Additions of numbers is :".$n3."<h3>";

            // $msg="<h3 align='center' style='color:green'>Additions of numbers is :".$n3."<h3>";

        }
    }

}
$obj=new A; 
$obj->display();

?>
    <div class="container col-md-6 bg-secondary p-5 mt-5 mx-auto">
        <h1 class="text-center">Add two numbers</h1>
        <hr class="border border-2 w-50 mx-auto border-white">
     
        <form method="post">
   
       
        <div class="form-group col-md-7 mx-auto">
            <label>Enter N1 number :</label>
            <input type="text" name="n1" placeholder="Enter N1 number *" required class="form-control">
        </div>
        <div class="form-group col-md-7 mx-auto">
            <label>Enter N2 number :</label>
            <input type="text" name="n2" placeholder="Enter N2 number *" required class="form-control">
        </div>

        <div class="form-group mt-2 col-md-7 mx-auto">
          
            <input type="submit" name="add" value="Add Here" placeholder="Enter N2 number *" required class="btn btn-lg btn-danger">
        </div>


        </form>
    </div>


</body>
</html>