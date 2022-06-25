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

    <!-- Flaticon -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

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


    <!-- Contact Section -->

    <section id="contact">
        <div class="containers overlay h-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 contact-content">
                        <h3 class="text-center text-lg-start">Butuh Bantuan..?</h3>
                        <p class="contact-help text-center text-lg-start">Silahkan kontak kami, <br>kami siap membantumu</p></p>

                        <div class="contact-items text-center text-lg-start mt-3">
                            <h6 class="text-center">Kontak</h6>

                            <div>
                                <i class="fi fi-rr-map-marker"></i>
                                <p>JL. Simpang 5 No.1 Ext Mall Tengah Semarang Lt.dasar No.22-23 Semarang, Jawa Tengah, 50134 Indonesia</p>
                            </div>

                            <div>
                                <i class="fi fi-rr-phone-call"></i>
                                <p>(024) 8318523</p>
                            </div>

                            <div>
                                <i class="fi fi-rr-envelope"></i>
                                <p>nikeshoe@gmail.com</p>
                            </div>
                        </div>

                        <div class="social text-center text-lg-start mt-5">
                            <h6 class="text-center">Social Media</h6>

                            <div class="social-items d-flex text-align-center justify-content-center ">
                                <a href="https://instagram.com" class="d-flex" target="_blank">
                                    <i class="fi fi-brands-instagram me-2 "></i>
                                    <p>instagram</p>
                                </a>

                                <a href="https://facebook.com" class="d-flex mx-3" target="_blank">
                                    <i class="fi fi-brands-facebook me-2"></i>
                                    <p>Facebook</p>
                                </a>

                                <a href="https://twitter.com" class="d-flex" target="_blank">
                                    <i class="fi fi-brands-twitter me-2"></i>
                                    <p>Twitter</p>
                                </a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-contact w-100 vh-100 d-flex flex-column justify-content-center align-items-stretch ">
                                <h3 class="text-center">ada pertanyaan ?</h3>

                                <form class="form-input">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>
    
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 120px"></textarea>
                                        <label for="floatingTextarea2">Pertanyaan anda</label>
                                    </div>
    
                                    <button type="submit" class="btn btn-primary button-contact">Kirim</button>
                                </form>

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