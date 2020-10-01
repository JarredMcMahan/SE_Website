<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		// header('location: index.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		// header("location: index.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Online Store</title>

    <!----Ion icon-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--  Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>

    <!-- Slick Slider -->
    <link rel="stylesheet"
          type="text/css"
          href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>

    <!--------Header-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12 ">
                    <!---width sm equal mobile md for medium device-->
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle my-md-4 my-2 text-white"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-hasexpanded="false">
                            <!--drop down menu for USD-->
                            USD

                        </button><!----Button system above-->
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">ERU-Euro</a><!---drop down menu that shows EURO under USD and ahref is a reference where link will go-->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <h2 class="my-md-3 site-title text-white">Online Store</h2>
                </div>
                <div class="col-md-4 col-12 text-right">
                    <p class="my-md-4 header-links">
						<a href="login.php" class="px-2">Sign in </a>
                        <a href="register.php" class="px-1">Create an Account</a>
                    </p>
                </div>
            </div>

        </div>
        <!-----------------------------Navigation menu bar BootStrap------------------->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">

                <button class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acc_info.php">account
                            </a>
                        </li>

                    </ul>
                </div>
                <!-------------search bar-------------->
                <div class="navbar-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item rounded-circle mx-2 search-icon">
                            <i class="fas fa-search p-2"></i>
                        </li>
                        <li class="cart border rounded-circle mx-2 basket-icon">
                            <a href="cart.php">
                                <i class="fas fa-shopping-basket p-2"></i><span>0</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </header>
    <head>
        <div class="container">
            <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <?php endif ?>
        </div>
    </head>
    <!--------Header-->
    <!-----------Main Section-->
    <main>
        <!------------First Slider----------------->
        <div class="container-fluid p-0">
            <div class="site-slider">
                <div class="site-slider-one">

                    <div>
                        <img src="./assets/banner-6.jpg" class="img-fluid" alt="Banner 1" width="1920" height="750"/>
                    </div>
                    <div>
                        <img src="./assets/banner-7.jpg" class="img-fluid" alt="Banner 2" />
                    </div>
                    <div>
                        <img src="./assets/banner-8.jpg" class="img-fluid" alt="Banner 3" />
                    </div>
                </div>
                <!-----------------Slider------------------>
                <div class="slider-btn">
                    <span class="prev position-top">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="next position-top right-0">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </div>
                <!--------------------------------------------->
            </div>
        </div>


        <!---------/First Slider-------------------->
        <!-----------------2nd Slider-------------------->
        <div class="container-fluid">

            <div class="site-slider-two px-md-4">
                <div class="row slider-two text-center">
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/SonyNXTV.jpg" alt="Product 1" />
                        <span class="border site-btn btn-span">Televisions</span>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/PS4.png" alt="Product 2" />
                        <span class="border site-btn btn-span">Video Games</span>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/Powerbeats.png" alt="Product 3" />
                        <span class="border site-btn btn-span">Sound</span>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/IphoneXS.png" alt="Product 4" />
                        <span class="border site-btn btn-span">Cell Phones</span>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/DellGaming.png" alt="Product 5" />
                        <span class="border site-btn btn-span">Computers</span>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/NikonD5600.png" alt="Product 3" />
                        <span class="border site-btn btn-span">Cameras</span>
                    </div>
                </div>
                <div class="slider-btn">
                    <span class="prev position-top">
                        <i class="fas fa-chevron-left fa-2x text-secondary"></i>
                    </span>
                    <span class="next position-top right-0">
                        <i class="fas fa-chevron-right fa-2x text-secondary"></i>
                    </span>
                </div>
            </div>
        </div>
        <!-------------------/2nd slider-------------->

        <hr class="hr" />

        <!-- /New, Best and Features sellers -->
        <!-- Brand -->

        <div class="container-fluid">
            <div class="slider-brand">
                <div class="slider-five px-5">
                    <div>
                        <img src="./assets/SonyLogo.png" alt="Brand 1" class="img-fluid">
                    </div>
                    <div>
                        <img src="./assets/LGBrand.png" alt="Brand 2" class="img-fluid">
                    </div>
                    <div>
                        <img src="./assets/SamsungBrand.png" alt="Brand 3" class="img-fluid">
                    </div>
                    <div>
                        <img src="./assets/DellBrand.png" alt="Brand 4" class="img-fluid">
                    </div>
                    <div>
                        <img src="./assets/HPBrand.png" alt="Brand 5" class="img-fluid">
                    </div>
                    <div>
                        <img src="./assets/LenovoBrand.png" alt="Brand 6" class="img-fluid">
                    </div>
                    <div>
                        <img src="./assets/AppleBrand.png" alt="Brand 3" class="img-fluid">
                    </div>
                </div>
                <div class="slider-btn">
                    <span class="prev position-top">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="next position-top right-0">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </div>
            </div>
        </div>

        <!-- /Brand -->
        <!-- Facilities -->

        <div class="container-fluid p-0">
            <div class="site-info">
                <div class="row text-center py-3 bg-primary-color m-0">
                    <div class="col-md-4 col-sm-12 my-md-0 my-4">
                        <div class="row justify-content-center text-light">
                            <i class="fas fa-rocket fa-4x px-4"></i>
                            <div class="py-2 font-roboto text-left">
                                <h6 class="m-0">Free Shipping & Return</h6>
                                <small>Free Shipping on order over $49</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 my-md-0 my-4">
                        <div class="row justify-content-center text-light">
                            <i class="fas fa-hand-holding-usd fa-4x px-4"></i>
                            <div class="py-2 font-roboto text-left">
                                <h6 class="m-0">Money Guarantee</h6>
                                <small>30 days money back guarantee</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 my-md-0 my-4">
                        <div class="row justify-content-center text-light">
                            <i class="fas fa-headphones-alt fa-4x px-4"></i>
                            <div class="py-2 font-roboto text-left">
                                <h6 class="m-0">Online Support</h6>
                                <small>We support online 24 hours a day</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /Facilities -->

    </main>
    <!-- /Main Section   -->
    <footer>
        <div class="container-fluid px-5">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h4>Contact Us</h4>
                    <div class="row pl-md-1 text-secondary">
                        <div class="col-12">
                            <i class="fa fa-home px-md-2"></i>
                            <small>No 40 Baria Sreet 133/2 NewYork City, NY, United States</small>
                        </div>
                    </div>
                    <div class="row pl-md-1 text-secondary py-4">
                        <div class="col-12">
                            <i class="fa fa-paper-plane px-md-2"></i>
                            <small>www.dailywebtuition.com</small>
                        </div>
                    </div>
                    <div class="row pl-md-1 text-secondary">
                        <div class="col-12">
                            <i class="fa fa-phone-volume px-md-2"></i>
                            <small>(888) 123456789</small>
                        </div>
                    </div>

                    <div class="row social text-secondary">
                        <div class="col-12 py-3">
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-google-plus-g"></i>
                            <i class="fab fa-skype"></i>
                            <i class="fab fa-pinterest-p"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <h4>Our Services</h4>
                    <div class="d-flex flex-column pl-md-3">
                        <small class="pt-0">New York</small>
                        <small>London SF</small>
                        <small>Cockfosters BP</small>
                        <small>Los Angeles</small>
                        <small>Chicago</small>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <h4>Extras</h4>
                    <div class="d-flex flex-column pl-md-3">
                        <small class="pt-0">About Store</small>
                        <small>New Collection</small>
                        <small>Contact Us</small>
                        <small>Latest News</small>
                        <small>Our Sitemap</small>
                    </div>
                </div>
                <div class="col-md-4 follow-us col-sm-12">
                    <h4>Follow Instagram</h4>
                    <div class="d-flex flex-row">
                        <img src="./assets/ig_1.jpg" alt="Instagram 1" class="img-fluid">
                        <img src="./assets/ig_2.jpg" alt="Instagram 2" class="img-fluid">
                        <img src="./assets/ig_3.jpg" alt="Instagram 3" class="img-fluid">
                    </div>
                    <div class="d-flex flex-row">
                        <img src="./assets/ig_4.jpg" alt="Instagram 1" class="img-fluid">
                        <img src="./assets/ig_5.jpg" alt="Instagram 2" class="img-fluid">
                        <img src="./assets/ig_6.jpg" alt="Instagram 3" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid news pt-5">
            <div class="row">
                <div class="col-md-6 col-12 pl-5">
                    <h4 class="primary-color font-roboto m-0 p-0">
                        Need Help? Call Our Award-Warning
                    </h4>
                    <p class="m-0 p-0 text-secondary">
                        Support Team 24/7 At (844) 5555-8324
                    </p>
                </div>
                <div class="col-md-4 col-12 my-md-0 my-3 pl-md-0 pl-5">
                    <input type="text" class="form-control border-0 bg-light" placeholder="Enter Your email Address">
                </div>
                <div class="col-md-2 col-12 my-md-0 my-3 pl-md-0 pl-5">
                    <button class="btn bg-primary-color text-white">Subscribe</button>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <p class="pt-5">
                <img src="./assets/payment.png" alt="payment image" class="img-fluid">
            </p>
            <small class="text-secondary py-4">Daily Tuition © 2019 Tutorial Store. All Rights Reserved. Designed by Daily Tuition</small>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./js/main.js"></script><!--Links to directory-->
</body>
</html>