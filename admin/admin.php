<?php
require('connection.php');
require('functions.inc.php');

if(isset($_POST['submit'])){
	$username=get_safe_value($conn,$_POST['username']);
	$password=get_safe_value($conn,$_POST['password']);
	$sql="select * from user where email='$username' and pass='$password'";
	$res=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($res);
	$row = mysqli_fetch_assoc($res);
	if($count>0){
		$_SESSION['user_login']='yes';
		$_SESSION['id']=$row['id'];
		$_SESSION['name'];
		$userId = $row['id'];

		header('location:dashboard.php?id='.$userId);
		die();
	}else{
		echo '<script>alert("Invalid Master")</script>';	
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Bootstrap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      </head>
<body>
    <section class="vh-100" style="background-color: #88BDBc;;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="bg.jpg" alt="image error" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form method="post" >
      
                                <div class="d-flex align-items-center mb-3 pb-1">
                                  <i class="fas fa-cubes fa-2x me-3" style="color: #ff6229;"></i>
                                  <span class="h1 fw-bold mb-0">MASTER LOGIN</span>
                                </div>
              
                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
              
                                <div class="form-outline mb-4">
                                  <input type="email" name="username" class="form-control form-control-lg" required/>
                                  <label class="form-label" for="form2Example17">Email address</label>
                                </div>
              
                                <div class="form-outline mb-4">
                                  <input type="password" name="password" class="form-control form-control-lg" required/>
                                  <label class="form-label" for="form2Example27">Password</label>
                                </div>
              
                                <div class="pt-1 mb-4">
                                  <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit">Login</button>
								  <a href=".index.php" button class="btn btn-dark btn-lg btn-block" type="button" >Home</button></a>
                                </div>
                               
                      </form>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
</body>
</html>