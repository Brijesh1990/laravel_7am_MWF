
  <!--content start here-->
  <div class="container mt-5">
    <a href="register.html"><button type="button" class="btn btn-lg text-white mt-1" id="btn">Create Account <i
          class="bi bi-person"></i></button></a>

    <h2 class="text-success mt-5 line1">Create Your Account <i class="bi bi-person"></i></h2>
   
    <div class="row">
      <div class="col-md-5  line">
        <img src="<?php echo $baseurl;?>images/create.gif" class="img-fluid" style="width: 85%">
      </div>

      <div class="col-md-7">
      
        <form method="post" name="frm" id="frm" action="welcome.html" onsubmit="return valid(this.value)">
          <div class="form-group mt-2">
            <input type="text" name="fname" class="form-control" placeholder="Enter FirstName *">
          </div>
          <div id="error"></div>
          <div class="form-group mt-2">
            <input type="text" name="lname" class="form-control" placeholder="Enter LastName *">
          </div>
          <div class="form-group mt-2">
            <input type="text" name="email" class="form-control" placeholder="Enter Email *">
          </div>
          <div class="form-group mt-2">
            <input type="password" name="pass" class="form-control" placeholder="Enter Password *">
          </div>

          <div class="form-group mt-2">
            <input type="submit" name="reg" class="btn btn-lg" id="btn" placeholder="Enter FirstName *"
              value="Register">

            <input type="reset" name="res" class="btn btn-lg btn-danger" placeholder="Enter FirstName *" value="Reset">

          </div>
          <div class="form-group mt-2">
            <b>Already have an account ? <a href="" data-bs-toggle="modal" data-bs-target="#log">Login here</a></b>
          </div>
        </form>
      </div>
    </div>
  </div>

