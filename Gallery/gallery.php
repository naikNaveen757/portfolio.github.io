<?php
require('../admin/connection.php');

		$query = " select * from image ";
		$result = mysqli_query($conn, $query);

		?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="gallery.css">

    <title>photography(htmlcss)</title>
</head>
<body>
    <a href="../index.html#skill">&laquo;BACK</a>
     <h1>PHOTOGRAPHY GALLERY</h1>
    <div class="gallery" id="gallery">
        <?php
        while ($data = mysqli_fetch_assoc($result)) {
		?>
           
        <div class="gallery-item">
            <div class="content"><img src="../admin/image/<?php echo $data['filename']; ?>" alt="image error"></div>
        </div>

		<?php
		}
		?>
        
       
    </div>
    <script src="js.js"></script>
     
</body>
</html>