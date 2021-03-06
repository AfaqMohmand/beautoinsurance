<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Vendor Css -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i"
    rel="stylesheet">
    
       <script src="
https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    
    <!-- End Vendor Css -->
    <link rel="stylesheet" href="assets/css/get-appointment.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Be Auto Insurance</title>

    <style>
        @media screen and (max-width:766px) {
            .icons{
                    display: none;
            }
        }

        @media screen and (max-width:425px) {
            .bartext{
                    
                    margin-top: 10% !important;
            }
            
            .form-pic{
                    height: auto !important;
                    margin-top: -10px;
                    margin-bottom: 5px;
                    /*min-width: 330px !important;*/
                    /*margin-left: -25px !important;   */

                }   

                /* #foote{         
                        margin-top: -150px !important;
                } */
        }


        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap');
        
        
         @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans:wght@300;400;500&family=Poppins:wght@500&family=Sanchez&display=swap');
    .callNowBtnNavigation{
        font-family: 'Montserrat', sans-serif !important;
    }
    @media screen and (min-width:769px){
        .callNowBtnNavigation{
            margin-left:25px !important; 
            padding:7px !important; 
            margin-right:5px !important;
        }
    }
    @media screen and (min-width:991px){
        .bartext{
            margin-top:80px !important;
        }
    }
    </style>


</head>
<body>
    <?php 
    
    // if (isset($_POST['submit'])){
    //     $_SESSION["zip_code"] = $_POST['zip_code'];
    // }
    // $zip_code = $_SESSION["zip_code"];
    
    if (isset($_POST['submit'])){
        $zip_code = $_POST['zip_code'];
    }
    
    ?>
     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <p class="d-flex justify-content-center align-items-center text-align-center"><a href="index.php" class="logo"><img src="assets/img/logo/logo.png" alt="" height="70px" width="70px" class="img-fluid"> <span style="color:#D02229; font-size:20px; padding-left:10px; font-weight:700;"> AUTO INSURANCE</span></a></p>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="who_we_are.php">Who We Are</a></li>
          <li><a class="nav-link scrollto" href="guide.php">Guide</a></li>
          <!-- <li><a class="nav-link scrollto" href="#">Blog</a></li> -->
          <li><a class="nav-link scrollto active" href="appointment-step2.php">Get A Quote</a></li>
          <li><a class="nav-link scrollto" href="blog.php">Blog</a></li>
          <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
          
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          <li><a class="nav-link callNowBtnNavigation scrollto btn btn-danger text-light" style="" href="tel:+18446570231">Call now</a></li>
        </ul>
        <i  class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar --><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <div class="container-fluid" style="margin-top:60px;">
        <div class="row">
                <div class="col-12 text-center" style= "background-color:#cad2de;" > 
                <p class="bartext" style="color:#000; font-size: 20px;  margin-top: 100px; height: 100hv; font-family:'Open Sans', sans-serif;"><strong>Need Best Auto Insurance Coverage?  We helps you compare auto insurance
                    quotes in seconds ??? for FREE!</strong> </p>
            </div>
        </div>
        <div class="container ">
            <div class="row mt-3">
            <div class="col-lg-1"> </div>
            <div class="col-lg-6">
                <img src="assets/img/f5.jpeg" class="img-fluid form-pic" style="height: 400px; width: 100%;" alt="">
                <div class="row mt-4 icons">
                    
                    <div class="container brandCarouselSection forLg " style="height:20vh; margin-top:-10px;">
                        <div id="carouselExampleSlidesOnly " class="carousel slide" data-ride="carousel">
                          <p class="text-center " style="font-size: 20px; font-family:'Open Sans', sans-serif;"><strong>Compare Auto Insurance Plans Instantly from Over 20+ Top Rated Companies! </strong> </p> 
                          <div class="carousel-inner">
                              <div class="carousel-item active">
                                <div class="d-flex flex-row" style="margin-top:2px;">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2 col-xs-4">
                                        <img src="assets/img/clients/1.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-md-2 col-xs-4">
                                        <img src="assets/img/clients/2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-md-2 col-xs-4">
                                        <img src="assets/img/clients/3.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-md-2 col-sm-3 ">
                                        <img src="assets/img/clients/4.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-md-2 col-sm-3">
                                        <img src="assets/img/clients/5.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="d-flex flex-row"  style="margin-top:2px;">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                      <img src="assets/img/clients/6.png" class="d-block w-100" alt="...">
                                        <!-- <img src="img/clints/logo-img-06.png" class="d-block w-100" alt="..."> -->
                                    </div>
                                    <div class="col-md-2">
                                        <img src="assets/img/clients/7.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-md-2">
                                        <img src="assets/img/clients/8.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-md-2">
                                        <img src="assets/img/clients/1.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-md-2">
                                        <img src="assets/img/clients/2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4"  style=" color: #ffffff; height:75% ; background-color:#cad2de;">
              
                <form action="get-appointment.php" method="POST" class="">
               

                     <h2 style="font-size: 25px; font-family:'Open Sans', sans-serif; color:#000;"><strong> Get Instant Quote</strong> </h2>
             
                    <div class="row">
                        <div class="col-sm-12">
                            <?php 
                                if ($zip_code) {
                            ?>
                            <div class="form-group">
                                <label><strong style="font-family:'Open Sans', sans-serif; color:#000;">Zip_Code</strong> </label>
                                <input class="form-control mb-3" type="text" name="zip_code" value="<?php echo $zip_code; ?>" placeholder="Zip Code" minlength="5" maxlength="5" pattern="[0-9]{5}"  required> 
                            </div>
                            <?php 
                                    
                                }
                                else {
                                
                            ?>
                            
                            <div class="form-group">
                                <label><strong style="font-family:'Open Sans', sans-serif; color:#000;">Zip_Code</strong> </label>
                                <input class="form-control mb-3" type="text" name="zip_code" placeholder="Zip Code" minlength="5" maxlength="5" pattern="[0-9]{5}"  required> 
                            </div>
                            <?php 
                            
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label ><strong style="font-family:'Open Sans', sans-serif; color:#000;">  Vehicle_Make</strong></label>
                         <input class="form-control" name="vehicle_make" type="text" placeholder="Vehicle Make" required></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <div class="">
                                    <label ><strong style="font-family:'Open Sans', sans-serif; color:#000;">Vehicle_Year</strong></label>
                                    <input class="form-control" type="text" name="vehicle_year" placeholder="Vehicle Year" required> </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <div class=""> 
                                    <label ><strong style="font-family:'Open Sans', sans-serif; color:#000;">Vehicle_Model</strong></label>
                                    <input class="form-control" type="text" name="vehicle_model" placeholder="Vehicle Model" required> </div>
                            </div>
                        </div>
                  
                    </div>
                    
                    <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text" style="font-family:'Open Sans', sans-serif; color:#000;"> By Clicking you agree to the</small> <a href="#" class="terms" style="color: #000;font-family:'Open Sans', sans-serif; " >Terms & Conditions</a> </div>
                     <p style="text-align:center;"><input type="submit" value="Next" name="next" style="width: 180px; ;" class="btn btn-danger btn-block confirm-button"></p>
                    </form>
                </div>
            </div>
        </div>

           
    </div>


            <!-- for mobile -->
            <div class="row mt-4  d-md-none d-lg-none d-xl-none" >
                    
                <div class="container brandCarouselSection forLg " style="height:20vh; margin-top:-10px;">
                    <div id="carouselExampleSlidesOnly " class="carousel slide" data-ride="carousel">
                      <p class="text-center " style="font-size: 16px; font-family:'Open Sans', sans-serif;"><strong>Compare Auto Insurance Plans Instantly from Over 20+ Top Rated Companies! </strong> </p> 
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="d-flex flex-row" style="margin-top:2px;">
                                <div class="col-md-1"></div>
                                <div class="col-md-2 col-xs-4">
                                    <img src="assets/img/clients/1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-md-2 col-xs-4">
                                    <img src="assets/img/clients/2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-md-2 col-xs-4">
                                    <img src="assets/img/clients/3.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-md-2 col-sm-3 ">
                                    <img src="assets/img/clients/4.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <img src="assets/img/clients/5.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="d-flex flex-row"  style="margin-top:2px;">
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                  <img src="assets/img/clients/6.png" class="d-block w-100" alt="...">
                                    <!-- <img src="img/clints/logo-img-06.png" class="d-block w-100" alt="..."> -->
                                </div>
                                <div class="col-md-2">
                                    <img src="assets/img/clients/7.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-md-2">
                                    <img src="assets/img/clients/8.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-md-2">
                                    <img src="assets/img/clients/1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-md-2">
                                    <img src="assets/img/clients/2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>

            </div>

            <!-- end for mobile -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

 
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3 style="color:#D02229;">Be Auto Insurance</h3>
                        <p>

                            <strong>Phone:</strong> <a style="text-decoration:none; color:#000;"
                                href="tel:+18446570231">(844) 657-0231</a><br>
                            <!-- <strong>Email:</strong> info@example.com<br> -->
                        </p>
                    </div>

                     <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;"
                                    href="index.php">Home</a></li>
                            <!-- <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;" href="appointment-step2.php">Get A Quote</a></li> -->
                            <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;"
                                    href="guide.php">Guide</a></li>
                            <!-- <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;" href="who_we_are.php">Who We Are</a></li> -->
                            <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;"
                                    href="terms-and-conditions.php">Terms & Conditions</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Important Pages</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;"
                                    href="appointment-step2.php">Get A Quote</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;"
                                    href="who_we_are.php">Who We Are?</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;" href="privacy-policy.php">Privacy
                                    Policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Follow us on social media.</p>
                        <div class="social-links mt-3">
                            <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <!-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Be Auto Insurance</span></strong>. All Rights Reserved

            </div>

            <div class="credits">

                Designed by <a href="#">BeAutoInsurance</a>
            </div>
        </div>
    </footer><!-- End Footer -->
    
         <script>
        $(function() {
		$("input[name='zipcode']").on('input', function(e) {
			$(this).val($(this).val().replace(/[^0-9]/g, ''));
		});
	});
    </script>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="assets/js/main.js"></script>
</body>
</html>