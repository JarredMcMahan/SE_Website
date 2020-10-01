<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Online Store</title>

  
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
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
        </div>
        <div class="input-group">
			<label>Address 1</label>
			<input type="text" name="address_1">
        </div>
        <div class="input-group">
			<label>Address 2</label>
			<input type="text" name="address_2">
        </div>
        <div class="input-group">
			<label>City</label>
			<input type="text" name="city">
        </div>
        <div class="input-group">
			<label>State</label>
			<input type="text" name="state">
        </div>
        <div class="input-group">
			<label>ZIP Code </label>
			<input type="text" name="zipcode">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>