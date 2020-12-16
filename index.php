
<?php
session_start();

$con=mysqli_connect("localhost","root","","oas");
if(!isset($con))
{
    die("Database Not Found");
}


if(isset($_REQUEST["u_sub"]))
{
    
 $id=$_POST['u_id'];
 $pwd=$_POST['u_ps'];
 if($id!=''&&$pwd!='')
 {
   $query=mysqli_query($con ,"select * from t_user_data where s_id='".$id."' and s_pwd='".$pwd."'");
   $res=mysqli_fetch_row($query);
   $query1=mysqli_query($con ,"select * from t_user where s_id='".$id."'");
   $res1=mysqli_fetch_row($query1);

   if($res)
   {
    $_SESSION['user']=$id;
    header('location:admsnform.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }
   
   if($res1)
   {
    $_SESSION['user']=$id;
    header('location:homepageuser.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }
  }
 else
 {
     echo '<script>';
    echo 'alert("Enter both username and password")';
    echo '</script>';
 
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>LTCE - Lokmanya Tilak College of Engineering </title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="css/login.css"></link>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to Lokmanya Tilak College of Engineering </p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> +91-022-27541005</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 9:00 AM - 5:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">principal.ltce@ltjss.net</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <img src="images/logo2.png" alt="" width="500" height="100">
               </div>
               <p>
               

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         
                         
                         <li><a href="#news" class="smoothScroll">Admission</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         <li><a href="adminlogin.php" class="smoothScroll">Admin Login</a></li>
                         <li><a href="#Sign_in" class="smoothScroll">Sign in</a></li>
                         <li><a href="signup.php"class="smoothScroll">>Register</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Admission 2020</h3>
                                             <h1>Build Your Carrer Your Self</h1>
                                             <a href="signup.php" class="section-btn btn btn-default smoothScroll">Register</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>AUDITORIUM|CANTEEN|COMPUTER-CENTRE|LAWN|LIBRARY|SEMINAR|HALLs</h3>
                                             <h1> Facilities </h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Central Library - A Bouquet Of Knowledge</h3>
                                             <h1>Library</h1>
                                             <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Admission</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


   
 


     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>ADMISSION</h2>
                         </div>
                    </div>
               </div>
          </div>
          <div class="container">
               <div class="row">

                    

                    <h3>The Institute Highlights</h3>
                         <br>
                    <p>Accredited by National Assessment and Accreditation.</p>
                    <p> Council (NAAC) Bangalore.</p>
                    <p> Over 10,000 successful Alumni worldwide.</p>
                    <p> Excellent placements and 100% internship assistance</p>
                    <p> for AY 2019 20</p>
                    <p> Placement with highest package of Rs 12 Lakh P. A. and avg package 3.2 Lakh P. A.</p>
                    <p> Highly Qualified and Experienced Faculty.</p>
                    <p> Excellent infrastructure and facilities.</p>
                    <p> Toppers with 10 CGPA and rank holders in University of Mumbai.</p>
                    <p> Scholarship / Awards for eligible students.</p>
                    <p> MoU signed with 15+ industry for projects/Consultancies / internships/ research work.</p>
                            
               </div>  
          </div>  
          <div class="container">
               <div class="row">
                                     

                    <h3>Bachelor of Engineering (B.E.)</h3>
                         <br>
                    <p>Computer Engineering    <b> intake 120</b></p>
                    <p> Computer Science and Engineering (Data Science)   <b> intake 60</b></p>
                    <p> Computer Science and Engineering (Artificial Intelligence and Machine Learning) <b> intake 60</b></p>
                    <p> Computer Science and Engineering (IoT and Cyber Security including Block Chain Tech)<b> intake 60</b></p>
                    <p> Electrical Engineering<b> intake 60</b></p>
                    <p> Electronics & Telecommunication Engineering<b> intake 60</b></p>
                    <p> Mechanical Engineering <b> intake 120</b> </p>
                    <br>
                    <h3>Master of Engineering (M.E.)</h3>
                    <br>
               <p>Computer Engineering    <b> intake 18</b></p>
               <p> Mechanical Engineering <b> intake 18</b> </p>
              

               </div>  
          </div>  
     </section>

     <section id="Sign_in" >
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                         <h2 class="wow fadeInUp" data-wow-delay="0.6s"> <p><h2>Sign In</h2></p>
                         </div>
                    </div>
               </div>
          </div>
          <div class="container">
               <div class="row">

             <!-- Sign in -->        



        


     
        <form id="index" action="index.php" method="post">
            
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                  <div class="wow fadeInUp" data-wow-delay="0.8s">
                        
                  </div>
               </div>
               </div>    
             
        
            
            
                
                            <div id="dmain" style="margin-left:600px; margin-top:30px;"> 
                                <br>
                                <div class="wow fadeInUp" data-wow-delay="1s">
                                                                  
                                <h4 style="width:300px; margin-left: 66px;">Log in</h4>
                                    <input type="text" id="u_id" name="u_id" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your User ID"><br>
                                    <h4 style="width:300px; margin-left: 66px;">Password</h4>  
                                    <input type="password" id="u_ps" name="u_ps" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your Password"><br>
                                    <input type="submit" id="u_sub" name="u_sub" value="Sign in" class="toggle btn btn-primary" style="width:100px; margin-left: 160px;"><br>
                                    <a href="signup.php" style="margin-left: 180px; color:black;">Sign Up </a>

                                  
                                    </div>
                     </div>
                    </div>
               </div>
            </div>  
            </div>
        </form>  
      

               </div>  
          </div>  
     </section>


       <!-- ABOUT -->
       <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s"> <p><h2>Our Vision</h2></p>
                                   To create technically competent and ethically responsible professionals capable of providing efficient solutions to the contemporary world.</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p><h2>Our Mission</h2></p>                             
We aim to excel in our continual efforts, towards being one of the most recognized institutions, by:
Providing a conducive environment comprising high-end infrastructure and state-of-the-art laboratory facilities wherein the students, faculty and staff can collectively enhance their technical potential.
Encouraging innovation through research activities for the benefit of society.
Developing competent professionals responsive to change in technology.
                                   
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/author-image.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Satish Chaturvedi</h3>
                                        <p>Founder & Chairman,
                                        <br>Lokmanya Tilak Jankalyan Shikshan Sanstha</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>
</br>
</br>
</br>

    
     <!-- GOOGLE MAP -->
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
     -->
     
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.0428964687253!2d73.00510221461407!3d19.105773987070847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c0da59d0a01b%3A0x56642a54a185f894!2sLokmanya%20Tilak%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1607448432699!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
     </section>           


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Our Contact</p>
                              <p> Sector 4, Vikas Nagar, </p>
                               <p> Koparkhairane,</p>
                               <p>  Navi Mumbai - 400 079</p>
                
                

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i>+91-022-27541005, +91-022-27541006</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">principal.ltce@ltjss.net</a></p>
                              </div>
                         </div>
                    </div>

                   

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>9:00 AM - 5:00 PM</span></p>
                                  
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 Lokmanya Tilak College of Engineering. All Rights Reserved. 
                                   
                                   | Design: HMS SCA</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="#">Library</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>