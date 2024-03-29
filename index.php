<?php
require('./admin/connection.php');
require('./admin/functions.inc.php');


       
		$query = "select * from profile";
		$result = mysqli_query($conn, $query);

    if(isset($_POST['submit']))
    {
        $name=($_POST['name']);
        $email=($_POST['email']);
        $place=($_POST['place']);
        $feedback=($_POST['feedback']);
        $query2="insert into feedback (name,email,place,msg) values('$name','$email','$place','$feedback')";
        $result2 = mysqli_query($conn, $query2);
        if(!$result2)
        {
            echo "<script>alert('error','error')</script>";
        }
        else
        {   
            echo "<script>alert('Thank you for your feedback');
            window.location.href='index.php#home';</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/87046583d9.js" crossorigin="anonymous"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<header>
<?php
        while ($data = mysqli_fetch_assoc($result)) {
		?>
    <div class="user">
        <a href="admin/admin.php"><img src="admin/image/profile/<?php echo $data['filename']; ?>" alt="image error"></a>
        <?php
		}
		?>
        <h3 class="name">Naveen</h3>
        <p class="post">Student at NMAMITE</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#skill">skills</a></li>
            <li><a href="#work">works</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<div id="menu" class="fas fa-bars"></div>

<!-- home-->

<section class="home" id="home" >

    <h3>HI THERE !</h3>
    <h1>I'M <span>Naveen</span></h1>
    <p>I am from Udupi ,currently pursuing Master's in computer Applications
        I am a Hobby photographer with bit of experience and digital illustrator.
        In my free time I like to read books that helps in decision making ,financial literacy.        
    </p>
 
        <!--<img src="images/user/bg_image.png" alt=""> -->
        <img src="images/bg_image2.png" alt="">
  
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>
    
</section>

<!-- about -->

<section class="about" id="about">

<h1 class="heading"> <span>about</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> name : </span> Naveen </h3>
        <h3> <span> age : </span> 21 </h3>
        <h3> <span> qualification : </span> MCA</h3>
        <h3> <span> language : </span> English Kannada Hindi Tulu </h3>
        <a href="Naveen_Resume_03-07-2022-17-54-51.pdf"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
    </div>
    <!--container for liks-->
    <div class="counter">

        <div class="box">
            <a href="https://github.com/naikNaveen757">
                <i class="fa-brands fa-github"></i>
            </a>
            <h2><b>github</b></h4>
        </div>

        <div class="box">
            
            <a href="https://www.instagram.com/pastime_snapper/">
                <i class="fa-brands fa-instagram"></i>
            </a>
             <h2><b>Social Media</b></h4>

        </div>
        <div class="box">
            <a href="https://www.linkedin.com/in/naveen-naik-a17a78241/">
                <i class="fa-brands fa-linkedin"></i>            
            </a>
            <h2><b>Linkedin</b></h4>
        </div>

        <div class="box">
            <a href="/Gallery/certificates.html">
                <i class="fa fa-university" aria-hidden="true"></i>
                        </a>
            <h2><b>Certificates</b></h4>
        </div>
    </div>

</div>
</section>
<!--education-->
<section class="education" id="education"> 
    <h1 class="heading">education</h1>
    <div class="counter">
        <div class="box">
            <h1 style="font-size: 30pt;">SSLC</h1>
            <h3  style="font-size: 20pt;">BM SCHOOL PARKALA</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio deserunt aspernatur fugiat minus enim ullam repudiandae sint sed magnam tenetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, at.</p>
            <h2>PERCENTAGE<br><span class="score">88.00% </span> </h2>
        </div>
        <div class="box">
            <h1 style="font-size: 30pt;">PUC</h1>
            <h3  style="font-size: 20pt;">MGM COLLEGE UDUPI</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio deserunt aspernatur fugiat minus enim ullam repudiandae sint sed magnam tenetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, at.</p>
            <h2>PERCENTAGE<br><span class="score">76.5% </span> </h2>
        </div>
        <div class="box">
            <h1 style="font-size: 30pt;">SSLC</h1>
            <h3  style="font-size: 20pt;">MGM COLLEGE UDUPI</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio deserunt aspernatur fugiat minus enim ullam repudiandae sint sed magnam tenetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, at.</p>
            <h2>PERCENTAGE<br><span class="score">79.36% </span> </h2>
        </div>
        
    </div>     
</section>
<!--Skills-->
    <section class="skill" id="skill">

        <h1 class="heading"> my <span>Skills</span> </h1>

        <div class="counter">

            <div class="box">
                <a href="Gallery/gallery.php" >
                    <i class="fa-solid fa-camera"></i>
                </a>
                <h2><b>photography</b></h4>
            </div>
    
            <div class="box">
                
                <a href="Gallery/illustration.php">
                    <i class="fa-solid fa-palette"></i>
                </a>
                 <h2><b>Digital Art</b></h4>
    
            </div>
            <div class="box">
                <a href="#work">
                    <i class="fa-brands fa-android"></i>     
                </a>
                <h2><b>applications</b></h4>
            </div>
    
            <div class="box">
                <a href="#work2">
                    <i class="fa-brands fa-php"></i>
                            </a>
                <h2><b>Web applications</b></h4>
            </div>
            
        <div class="counter">

            <div class="box">
                <a href="https://github.com/naikNaveen757">
                    <i class="fa-brands fa-github"></i>
                </a>
                <h2><b>github</b></h4>
            </div>
    
            <div class="box">
                
                <a href="https://www.instagram.com/pastime_snapper/">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                 <h2><b>Social Media</b></h4>
    
            </div>
            <div class="box">
                <a href="https://www.linkedin.com/in/naveen-naik-a17a78241/">
                    <i class="fa-brands fa-linkedin"></i>            
                </a>
                <h2><b>Linkedin</b></h4>
            </div>
    
            <div class="box">
                <a href="Gallery/certificates.html">
                    <i class="fa fa-university" aria-hidden="true"></i>
                            </a>
                <h2><b>Certificates</b></h4>
            </div>
        </div>
        </section>
 
<!--WORKS-->
<section id="work" class="work">
    
        <h1 class="heading">Android Application</h1>
        <h2>This is a android Application built for mini project using Flutter and firebase <br> following are the sample images</h2>
        
             <img src="images/android.JPG" alt="no images">
        
</section>
<section id="work2" class="work2">
    <h1 class="heading">Web Application</h1>
    <h2>This is a web Application built for BCA project using html,css,bootstrap,php and xamp <br> following are the sample images</h2>
    
         <img src="images/web/1.jpg">
         <img src="images/web/2.jpg">
         <img src="images/web/productfoort.jpg">
         <img src="images/web/whyuss.jpg">
         <img src="images/web/3.jpg">
         <img src="images/web/4.jpg">
    
</section>

<!--contact-->   
<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> me </h1>
    
    <div class="row">
    
        <div class="content">
    
            <h3 class="title">contact info</h3>
    
            <div class="info">
                <h3> <i class="fas fa-envelope"></i>4nm21mc054 @gmail.com </h3>
                <h3> <i class="fas fa-phone"></i> 7022499723 </h3>
                <h3> <i class="fas fa-phone"></i> 8073245367 </h3>
                <h3> <i class="fas fa-map-marker-alt"></i> udupi, india - 574108. </h3>
            </div>
    
        </div>
    
        <form method="post">
    
            <input type="text" placeholder="name" name="name" class="box" required>
            <input type="email" placeholder="email" name="email" class="box" required>
            <input type="text" placeholder="place" name="place" class="box" required>
            <textarea name="feedback" id="" cols="30" rows="10" class="box message" placeholder="message" name="feedback"></textarea required>
            <button type="submit" class="btn" name="submit" id="submit"> send <i class="fas fa-paper-plane"></i> </button>
    
        </form>
    
    </div>
    
    </section>         
 <!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>