<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Web</title>

    <!-- Boostrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- Navbar Section-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-fixed w-100">
        <div class="container cont-nav">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo-white.png" height="30px" alt="" class="me-1">
                Just Do It.
            </a>
            <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <a href="#" class="btn btn-signup rounded px-4 py-2">Sign Up</a>
                <a href="#" class="btn btn-login rounded px-4 py-2 ms-3 ">Log In</a>
            </div>

        </div>
    </nav>


    <!-- Banner Section -->

    <section id="banner">
        <div class="card text-center">
            <div class="card-header">

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p class="promo">Save Up To 40%</p>
                            <a href="#" class="link">Shop All Our New Markdowns</a>
                        </div>
                        <div class="carousel-item">
                            <p class="promo">Students Now Get 10% Off</p>
                            <a href="#" class="link">Learn More</a>
                        </div>
                        <div class="carousel-item">
                            <p class="promo">Free Delivery</p>
                            <a href="#" class="link">Applies to order of RP 3.000.000 or more. View Details</a>
                        </div>
                    </div>
                </div>

                <div>
                    <video width="100%" autoplay loop muted>
                        <source src="assets/video/just-do-it.mp4" type=video/mp4>
                    </video>
                </div>

                <div class="card-body my-3">
                    <p>Summer Essentials</p>
                    <h5 class="card-title mt-3">NEVER DONE SUMMERING</h5>
                    <p class="card-text mt-3">Play. Let loose. Repeat. This season, turn it up in styles made for living life to the max.</p>
                    <a href="product.php" type="button" class="btn btn-outline-dark btn-banner px-4 py-2 rounded-pill">Shop</a>
                </div>
            </div>
    </section>


    <!-- Hero Section -->

    <section id="hero">
        <div class="container">
            <div class="row vh-100">
                <div class="col-12 col-md-8 col-lg-6 hero-tagline d-flex flex-column align-items-start py-5 ">
                    <h1 class="mt-4">NEW ARRIVAL</h1>
                    <p> <strong>Aggresive, Comfortable and Never Apologetic.</strong> Reveals the future one step at a time. These shoes have a bleached textile upper with a snug fit that's the pinnacle of comfort.</p>

                    <a href="product.php" type="button" class="btn btn-outline-light btn-hero mt-auto px-4 py-2 rounded-pill">Shop</a>

                </div>
            </div>
        </div>
    </section>


    <!-- Shop Section -->

    <section id="shop">
        <div class="container my-5">
            <p class="shop-title">Summer Shop</p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/card-1.webp" class="card-img-top" alt="...">
                        <div class="card-body card-img-overlay d-flex flex-column align-items-start justify-content-end pb-5 ps-3">
                            <p class="card-text card-title">Nothing can stop you</p>
                            <a href="product.php" class="btn btn-light px-4 py-2 rounded-pill btn-shop">Shop</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/card-2.webp" class="card-img-top" alt="...">
                        <div class="card-body card-img-overlay d-flex flex-column align-items-start justify-content-end pb-5 ps-3">
                            <p class="card-text card-title">Dream it, Believe it, Built it.</p>
                            <a href="product.php" class="btn btn-light px-4 py-2 rounded-pill btn-shop">Shop</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/card-3.webp" class="card-img-top" alt="...">
                        <div class="card-body card-img-overlay d-flex flex-column align-items-start justify-content-end pb-5 ps-3">
                            <p class="card-text card-title">Success is a journey</p>
                            <a href="product.php" class="btn btn-light px-4 py-2 rounded-pill btn-shop">Shop</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>


    <!-- Footer Section -->

    <footer>
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 d-flex justify-content-center justify-content-lg-start mt-2">
                        <img src="assets/img/logo-white.png" alt="" height="30px" class="me-2">
                        <a href="#" class="brand-logo">Just Do It.</a>
                    </div>

                    <div class="col-lg-5 col-md-12 d-flex justify-content-evenly my-3 footer-menu">
                        <a href="index.php">Home</a>
                        <a href="product.php">Product</a>
                        <a href="order.php">Order</a>
                        <a href="contact.php">Contact</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center copyright">
                        <p>Copyright &copy; M Akbar Maulana All Right Reserved.</p>
                    </div>
                </div>

            </div>
        </div>
    </footer>



    <script src="js/script.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->

</body>

</html>