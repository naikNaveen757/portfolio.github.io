<?php
require('connection.php');
require('functions.inc.php');

$userId = $_SESSION['id'];   
$query = "SELECT * FROM user where id=$userId";
$result = mysqli_query($conn, $query);
$res=mysqli_fetch_assoc($result);


if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "image/" . $filename;


	$sql = "INSERT INTO image (filename) VALUES ('$filename')";
	mysqli_query($conn, $sql);

	if (move_uploaded_file($tempname, $folder)) {
		echo '<script>alert("Image uploaded successfully!")</script>';	 
	} else {
		echo '<script>alert("Failed to upload image!")</script>';	
	}
}


$query2="select * from feedback order by id desc ";
$result2=mysqli_query($conn, $query2);

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
            <div class="row">
            <?php
            if(mysqli_num_rows($result2) > 0)
	            {
                while($row = mysqli_fetch_array($result2))
		{?>
  
  
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row["name"]; ?></h5>
        <h6 class="card-title"><?php echo $row["email"]; ?></h6>
        <h6 class="card-title"><?php echo $row["place"]; ?></h6>
        <p class="card-text"><?php echo $row["msg"]; ?></p>
        <a href="#" class="btn btn-primary">Reply</a>

      </div>
    </div>
  </div>
  <?php }?>
</div>

              <?php }
              else
              
             
              ?>
</body>
</html>
