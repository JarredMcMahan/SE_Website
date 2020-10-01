<?php include('server.php') ?>
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
	<!--------Header-->
	<!-----------Main Section-->
	<main>
		<div class="container">
			<!--Puts to the middle-->
			<div class="row">
				<!--Inserts each item into row-->

				<div class="col-md-2 newitem pt-md-5">

					<img src="./assets/PS4.png" class="img-fluid" alt="PS4" />
					<div class="carts-details">
						<h6 class="pro-title p-0">PS4</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$255.00</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>210.00$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>

				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/XboxOne.png" class="img-fluid" alt="XboxOne" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Xbox One</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$275.00</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>220.00$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/NintendoSwitch.png" class="img-fluid" alt="NintendoSwitch" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Nintendo Switch</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$300.00</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>270.00$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/PS4Controller.png" class="img-fluid" alt="PS4Controller" />
					<div class="carts-details">
						<h6 class="pro-title p-0">PS4 Controller</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$60</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>45$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/XboxOneController.png" class="img-fluid" alt="XboxOneController" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Xbox One Controller</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$60</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>45$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/NintendoSwitchController.png" class="img-fluid" alt="NintendoSwitchController" />
					<div class="carts-details">
						<h6 class="pro-title p-0">NintendoSwitchController</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$60</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>45$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>

			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/SonyNX.png" class="img-fluid" alt="Sony NX" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Sony NX</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$519.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>499$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/SonyX950G.png" class="img-fluid" alt="Sony X950G" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Sony X950G</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$799.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>699.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/SamsungQ60.png" class="img-fluid" alt="SamsungQ60" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Samsung Q60</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$1299.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>1099.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/SamsungNU6900.png" class="img-fluid" alt="SamsungNU6900" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Samsung NU6900</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$650.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>550.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/LGOLED.png" class="img-fluid" alt="LGOLED" />
					<div class="carts-details">
						<h6 class="pro-title p-0">LG OLED</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$1343.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>1213.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/LGUltraHD.png" class="img-fluid" alt="LGUltraHD" />
					<div class="carts-details">
						<h6 class="pro-title p-0">LG UltraHD</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$899.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>735.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/Powerbeats.png" class="img-fluid" alt="Powerbeats" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Power Beats</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$89.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>75.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/Beats.png" class="img-fluid" alt="Beats" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Beats</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$199.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>185.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/SonyWIXB400.png" class="img-fluid" alt="WIXB400" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Sony WIXB400</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$99.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>85.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/BoseSoundSport.png" class="img-fluid" alt="BoseSoundSport" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Bose SoundSport</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$89.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>75.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/AppleAirPodPro.png" class="img-fluid" alt="AppleAirPodsPro" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Apple AirPods Pro</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$199.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>185.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>

				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/AppleAirPods.png" class="img-fluid" alt="AppleAirPods" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Apple AirPods</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/CanonEOS.png" class="img-fluid" alt="CanoeEOS" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Canon EOS</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/CanonT7i.png" class="img-fluid" alt="CanonT7i" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Canon T7i</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/NikonD5600.png" class="img-fluid" alt="NikonD5600" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Nikon D5600 </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/NikonD7500.png" class="img-fluid" alt="NikonD7500" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Nikon D7500 </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/CanonRebel.png" class="img-fluid" alt="CanonRebel" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Canon Rebel </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/NikonD3500.png" class="img-fluid" alt="NikonD3500" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Nikon D3500 </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/DellGaming.png" class="img-fluid" alt="DellGaming" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Dell Gaming</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/DellInspiron.png" class="img-fluid" alt="DellInspiron" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Dell Inspiron</h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/HPEnvy.png" class="img-fluid" alt="HPEnvy" />
					<div class="carts-details">
						<h6 class="pro-title p-0"> HP Envy </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/HPGaming.png" class="img-fluid" alt="HPGaming" />
					<div class="carts-details">
						<h6 class="pro-title p-0"> HP Gaming </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/ASUSGaming.png" class="img-fluid" alt="ASUSGaming" />
					<div class="carts-details">
						<h6 class="pro-title p-0">ASUS Gaming </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/LenovoS145.png" class="img-fluid" alt="LenovoS145" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Lenovo S145 </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class=" row">
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/GooglePixel4XL.png" class="img-fluid" alt="GooglePixel4XL" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Google Pixel 4XL </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/GooglePixel3A.png" class="img-fluid" alt="GooglePixel3A" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Google Pixel 3A </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/IphoneXS.png" class="img-fluid" alt="IphoneXS" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Iphone XS </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/Iphone11Pro.png" class="img-fluid" alt="Iphone11Pro" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Iphone 11 Pro </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/SamsungGalaxy10.png" class="img-fluid" alt="SamsungGalaxy10" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Samsung Galaxy 10 </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 newitem pt-md-5">
					<img src="./assets/SamsungGalaxyS20.png" class="img-fluid" alt="SamsungGalaxyS20" />
					<div class="carts-details">
						<h6 class="pro-title p-0">Samsung Galaxy S20 </h6>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="pro-price py-2">
							<h5>
								<small><s class="text-secondary">$109.99</s></small><!----<s> means to add a line to the price 125.99$-->
								<span>89.99$</span><!--Creates new price-->
							</h5>
						</div>
						<div class="add-cart mt-4">
							<button class="border site-btn btn-span">Add to Cart</button>
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
						<img src="./assets/256_n.jpg" alt="Instagram 1" class="img-fluid">
						<img src="./assets/792_n.jpg" alt="Instagram 2" class="img-fluid">
						<img src="./assets/392_n.jpg" alt="Instagram 3" class="img-fluid">
					</div>
					<div class="d-flex flex-row">
						<img src="./assets/664_n.jpg" alt="Instagram 1" class="img-fluid">
						<img src="./assets/088_n.jpg" alt="Instagram 2" class="img-fluid">
						<img src="./assets/896_n.jpg" alt="Instagram 3" class="img-fluid">
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
	<script src="./js/cart.js"></script><!---cart js-->
	<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>
</html>