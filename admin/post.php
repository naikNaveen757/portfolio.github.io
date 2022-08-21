<?php
require('connection.php');
require('functions.inc.php');

$userId = $_SESSION['id'];   
$query = "SELECT * FROM user where id=$userId";
$result = mysqli_query($conn, $query);
$res=mysqli_fetch_assoc($result);


if (isset($_POST['upload']))
 {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "image/". $filename;


	$sql = "INSERT INTO image (filename) VALUES ('$filename')";
	mysqli_query($conn, $sql);

	if (move_uploaded_file($tempname, $folder)) {
		echo '<script>alert("Image uploaded successfully!")</script>';
    header("location: post.php");	
	} else {
		echo '<script>alert("Failed to upload image!")</script>';	
	}
}
?>

<html>
  <head>
    <title>web page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" />
  </head>
 <body>
  <div class="banner">
    <div class="navbar">
          <ul>
          <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
            <li><a href="profile.php"></i class="fa fa-caret-down"></i>Profile</a></li>
             <li><a href="post.php"><i class="fa fa-product-hunt"></i>Post</a></li>
              <li><a href="post2.php"><i class="fa fa-clone"></i>post2</a></li>
               <li><a href="feedback.php"><i class="fa fa-user"></i>Feedback</a></li>

           <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">welcome <?php echo $res['name']?></button>
                <div id="myDropdown" class="dropdown-content">
                      <a href="logout.php">Logout</a>
           </div>
                </div>

              <script>
              function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
              }
              window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                  var dropdowns = document.getElementsByClassName("dropdown-content");
                  var i;
                  for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                      openDropdown.classList.remove('show');
                    }
                  }
                }
              }
              </script>

          </ul>
        </div>
        <!-- post page -->
        <section class="post" id="post" >
          <h1 style="text-align: center;"><b>POST IMAGE<b></h1>
        <div id="content">
		    <form method="POST" action="" enctype="multipart/form-data">
			  <div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" required />
			  </div>
			  <div class="form-group">
				<center><button class="btn btn-primary" type="submit" name="upload" >UPLOAD</button></center>
			  </div>
		  </form>
	      </div>
        <?php
      $query = " select * from image ";
		    $result = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_assoc($result)) 
        {
         echo   $data['filename']; ?><br>
         <?php
        }
		  ?>
    
    
        </section>



       
  
</body>
</html>
