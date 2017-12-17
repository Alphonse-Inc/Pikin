<?php
session_start();
include ("dbconnection.php");

if (isset($_POST ["search"]) && !empty ($_POST ["search"]));
$postcode = $_POST ['postcode'];
$sql = "SELECT * from educators where postcode ='$postcode'";

$result = mysqli_query ($connection, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc ($result)) {
    ?>

    



<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Pikin Listing Page</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  
  <!-- Google Font -->
  <link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

  <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
  <![endif]-->
</head>

<body>
  <div id="main-wrapper" class="listing right pull-right">

    <!-- Start Header -->
    <header id="header">
      <div class="header-inner">

        <!-- Start Login-Shadow -->
        <div id="login-shadow"></div>
        <!-- End Login-Shadow -->

        <div class="container">

          <!-- Start Utility-Nav-->
          <nav class="utility-nav clearfix">
            <ul class="utility-user custom-list">
              <li id="login">
                <a href="#" id="login-link" class="btn btn-default">
                  <i class="fa fa-power-off"></i>
                  <span>Login</span>
                </a>
                <form id="login-form" action="#" class="login-form default-form" method="post">
                  <div class="login-form-container">
                    <p class="form-row">
                      <input type="text" placeholder="Login">
                    </p>
                    <p class="form-row">
                      <input type="password" placeholder="Password">
                    </p>
                    <p class="form-row">
                      <p class="form-row">
                        <button class="submit-btn btn">Login</button>
                      </p>
                      <a href="#" class="password btn btn-default">Forgot Password</a>
                    </div>
                  </form>
                </li>

                <li id="register">
                  <a href="#pricing" class="btn btn-default">
                    <i class="fa fa-plus-circle"></i>
                    <span>Register</span>
                  </a>
                </li>
              </ul>

              <div class="utility-social">
                <ul class="social-inner custom-list">
                  <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </nav>
            <!-- End Utility Nav -->

            <!-- Start Search Nav -->
            <nav class="search-nav">
              <button class="advanced-search-button">
                <i class="fa fa-align-justify"></i>
              </button>

              <ul class="sub-menu custom-list">
                <li><a href="#"><i class="fa fa-globe"></i>General Search</a></li>
                <li><a href="#"><i class="fa fa-file-o"></i>Search for Keywords</a></li>
              </ul>

              <form action="index.html" class="default-form">
                <input type="text" placeholder="Search...">
                <button><i class="fa fa-search"></i></button>
              </form>
            </nav>
            <!-- End Search Nav -->

            <!-- Start Menu Nav -->
            <div class="menu-nav row">

              <!-- Start Logo -->
              <div class="logo col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <a href="index.php"><img src="img/logo.png" alt="logo"></a>
              </div>
              <!-- End Logo -->


              <!-- Start Search Nav Mobile -->
              <nav class="search-nav mobile col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                <button class="advanced-search-button">
                  <i class="fa fa-align-justify"></i>
                </button>

                <ul class="sub-menu custom-list">
                  <li><a href="#"><i class="fa fa-globe"></i>General Search</a></li>
                  <li><a href="#"><i class="fa fa-file-o"></i>Search for Keywords</a></li>
                </ul>

                <form action="index.php" class="default-form">
                  <input type="text" placeholder="Search...">
                  <button><i class="fa fa-search"></i></button>
                </form>
              </nav>
              <!-- End Search Nav Mobile -->

              <!-- Start Nav-Wrapper Mobile -->
              <nav class="nav-wrapper-mobile col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="utility-user custom-list">
                  <li class="login">
                    <a href="#" class="login-link btn btn-default">
                      <i class="fa fa-power-off"></i>
                      <span>Login</span>
                    </a>
                    <form action="#" class="login-form default-form" method="post">
                      <div class="login-form-container">
                        <p class="form-row">
                          <input type="text" placeholder="Login">
                        </p>
                        <p class="form-row">
                          <input type="password" placeholder="Password">
                        </p>
                        <p class="form-row">
                          <p class="form-row">
                            <button class="submit-btn btn">Login</button>
                          </p>
                          <a href="#" class="password btn btn-default">Forgot Password</a>
                        </div>
                      </form>
                    </li>

                    <li class="register">
                      <a href="#pricing" class="btn btn-default">
                        <i class="fa fa-plus-circle"></i>
                        <span>Register</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- End Nav-Wrapper Mobile -->

              </div>
              <!-- End Menu Nav -->

              <!-- Responsive Menu Buttons -->
              <button class="search-toggle button"><i class="fa fa-search"></i></button>

              <button class="navbar-toggle button"><i class="fa fa-bars"></i></button>
              <!-- End Responsive Menu Buttons -->

            </div>
          </div>
        </header>
        <!-- End Header -->

        <!-- Start Map-Wrapper -->
        <div class="map-wrapper">

          <!-- Start Map Search -->
          <div class="map-search">
            <div class="container">

              <!-- Start Search-Shadow -->
              <div class="search-shadow"></div>
              <!-- End Search-Shadow -->

              <!-- Start Select-Button -->
              <span class="select-button">
                <button class="advanced-search-button">
                  <i class="fa fa-align-justify"></i>
                </button>
              </span>
              <!-- End Select-Button -->

              <p>You c Select this option button to redefine your search</p>
            </div>

            <!-- Start Advanced-Search -->
            <div class="advanced-search">

              <div class="container">
                <div class="advanced-search-inner">
                  <form action="index.php" class="default-form">
                    <div class="distance form-row clearfix">
                      <div class="label-section">
                        <label>Distance around my position:</label>
                      </div>
                      <div class="action-section">
                        <div id="slider-distance-search" class="slider"></div>
                      </div>
                      <div class="value-section">
                        <input type="text" id="distance-search" class="value" readonly> 
                      </div>
                    </div>

                    <div class="location form-row clearfix">
                      <div class="label-section">
                        <label>Location:</label>
                      </div>
                      <div class="action-section">
                        <span class="country select-box">
                          <select name="country" data-placeholder="Country">
                            <option>Country</option>
                            <option value="1">France</option>
                            <option value="2">Germany</option>
                            <option value="3">Romania</option>
                          </select>
                        </span>
                        <span class="region">
                          <input type="text" placeholder="Region">
                        </span>
                        <span class="address">
                          <input type="text" placeholder="Address">
                        </span>
                      </div>
                    </div>

                    <div class="founded form-row clearfix">
                      <div class="label-section">
                        <label>Special Keywords:</label>
                      </div>
                      <div class="action-section">
                        <input type="text" placeholder="Founded">
                        <button class="btn btn-secondary pull-right"><i class="fa fa-search"></i>Search Now</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- End Advanced-Search-Inner -->
          </div>
          <!-- End Map Search -->

          <!-- Start Map Canvas -->
          <div id="map_canvas_wrapper">
            <div id="map_canvas"></div>
          </div>
          <!-- End Map Canvas -->

          <!-- Start Map Control -->
          <div class="map-control">
            <a href="#" class="btn btn-secondary full-width"><i class="fa fa-chevron-circle-up"></i><span>Hide Map</span></a>
          </div>
          <!-- End Map Control -->



        </div>
        <!-- End Map-Wrapper -->

        <!-- Start Main-Content -->
        <div id="listing-page" class="main-content">
          <div class="container">

            <!-- Start Page-Content -->
            <div class="page-content">

              <h5 class="listing-title">Here's what we've found</h5>
              <div class="row">
                <div class="listing-box col-lg-4 col-md-4 col-sm-4">
                  <div class="company-rating">
                    <ul class="custom-list">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="overlay">
                    <img src="img/company-thumb2.jpg" alt="">
                    <div class="overlay-shadow">
                      <div class="overlay-content">
                        <a href="#" class="btn"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="gray-bottom">
                    <h6 class="company-title"><a href="#"> <?php echo $row["firstname"]." ".$row["lastname"]; ?> </a></h6>
                    <ul class="company-tags custom-list clearfix">
                      <li><a href="#"><?php echo $row["suburb"]; ?></a></li>
                    </ul>
                  </div>
                </div>
                <div class="listing-box col-lg-4 col-md-4 col-sm-4">
                  <div class="company-rating">
                    <ul class="custom-list">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="overlay">
                    <img src="img/company-thumb3.jpg" alt="">
                    <div class="overlay-shadow">
                      <div class="overlay-content">
                        <a href="#" class="btn"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="gray-bottom">
                    <h6 class="company-title"><a href="#">Company name goes here</a></h6>
                    <ul class="company-tags custom-list clearfix">
                      <li><a href="#">Category</a></li>
                    </ul>
                  </div>
                </div>
                <div class="listing-box col-lg-4 col-md-4 col-sm-4">
                  <div class="company-rating">
                    <ul class="custom-list">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="overlay">
                    <img src="img/company-thumb4.jpg" alt="">
                    <div class="overlay-shadow">
                      <div class="overlay-content">
                        <a href="#" class="btn"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="gray-bottom">
                    <h6 class="company-title"><a href="#">Company name goes here</a></h6>
                    <ul class="company-tags custom-list clearfix">
                      <li><a href="#">Category</a></li>
                    </ul>
                  </div>
                </div>
                <div class="listing-box col-lg-4 col-md-4 col-sm-4">
                  <div class="company-rating">
                    <ul class="custom-list">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="overlay">
                    <img src="img/company-thumb5.jpg" alt="">
                    <div class="overlay-shadow">
                      <div class="overlay-content">
                        <a href="#" class="btn"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="gray-bottom">
                    <h6 class="company-title"><a href="#">Company name goes here</a></h6>
                    <ul class="company-tags custom-list clearfix">
                      <li><a href="#">Category</a></li>
                    </ul>
                  </div>
                </div>
                <div class="listing-box col-lg-4 col-md-4 col-sm-4">
                  <div class="company-rating">
                    <ul class="custom-list">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="overlay">
                    <img src="img/company-thumb6.jpg" alt="">
                    <div class="overlay-shadow">
                      <div class="overlay-content">
                        <a href="#" class="btn"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="gray-bottom">
                    <h6 class="company-title"><a href="#">Company name goes here</a></h6>
                    <ul class="company-tags custom-list clearfix">
                      <li><a href="#">Category</a></li>
                    </ul>
                  </div>
                </div>
                <div class="listing-box col-lg-4 col-md-4 col-sm-4">
                  <div class="company-rating">
                    <ul class="custom-list">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="overlay">
                    <img src="img/company-thumb7.jpg" alt="">
                    <div class="overlay-shadow">
                      <div class="overlay-content">
                        <a href="#" class="btn"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="gray-bottom">
                    <h6 class="company-title"><a href="#">Company name goes here</a></h6>
                    <ul class="company-tags custom-list clearfix">
                      <li><a href="#">Category</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Page-Content -->

          </div>
        </div>
        <!-- End Main-Content -->

        <!-- Start Footer -->
        <footer id="footer">

          <!-- End Container -->

          <!-- Start Footer Copyrights -->
          <div class="footer-copyrights">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"><p>Copyright © 2017 Pikin</p></div>
                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                  <ul class="social pull-right custom-list">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php
    
  }
}
mysqli_free_result ($result);
mysqli_close ($connection);

else 
  die(header("location:index.php?searchFailed=true&reason=postcode"));
?>
          <!-- End Footer Copyrights -->

        </footer>
        <!-- End Footer -->

      </div>
      <!-- End Main-Wrapper -->

      <!-- Start Back-To-Top Button -->
      <a href="#" id="back-to-top"><i class="fa fa-chevron-up"></i></a>
      <!-- End Back-To-Top Button -->

      <!-- Scripts -->
      <script src="js/jquery-1.9.1.min.js"></script>
      <script src="//maps.google.com/maps/api/js?sensor=true"></script>
      <script src="js/gomap.js"></script>
      <script src="js/scripts.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/jquery.tweet.js"></script>
      <script src="js/jflickrfeed.min.js"></script>
      <script src="js/jquery.matchHeight-min.js"></script>
      <script src="js/jquery.ba-outside-events.min.js"></script>
      <script src="js/gmap3.min.js"></script>


      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script>

  </body>
  </html>