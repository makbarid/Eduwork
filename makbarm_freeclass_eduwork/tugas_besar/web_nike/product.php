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

    <?php
    include_once("connect.php");
    $items = mysqli_query($mysqli, "SELECT * FROM produk");

    ?>

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

    
    <!-- Product Section -->

    <section id="product">
        <div class="container mb-5">
            <h3 class="product-title text-center mb-5">OUR PRODUCT</h3>

            <div class="row g-4 row-cols-auto justify-content-center">
                <div class="col-12 text-center">
                    <a href="add_product.php" class="btn btn-primary btn-add px-4 py-2">Add Product</a>
                </div>

                <?php
                    while ($item = mysqli_fetch_array($items)) : ?>

                    <div class="col">
                        <div class="card card-product h-100" style="width: 16rem; height: 27rem;">

                            <img src="assets/upload/<?= $item["gambar"] ?>" class="card-img-top" width="254px" height="254px" alt="...">
                            <div class="card-body d-flex flex-column align-items-start pb-0">
                                <p class="text-muted mb-1 stok">Stok <?= $item['stok']; ?></p>

                                <h5 class="card-title mb-4"><?= $item['nama_produk'] ?></h5>
                                <p class="mt-auto mb-2 fw-semibold harga">Rp <?= number_format($item['harga'], 0, ",", "."); ?></p>
                            </div>

                            <div class="d-flex justify-content-around">
                                <a href="edit_product.php?id_produk=<?= $item['id_produk'] ?>" class="btn btn-sm btn-success btn-product">EDIT<a>
                                <a href="#" <?= "onclick='confirmDelete(" . $item['id_produk'] . ")'"; ?> class="btn btn-sm btn-danger btn-product">DELETE</a>
                            </div>

                        </div>
                    </div>

                <?php endwhile; ?>

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

    <!-- Confirm Delete Product -->
    <script type="text/javascript">
        function confirmDelete(id_produk) {
            if (confirm("Hapus Produk ?")) {
                window.location.href = 'delete_product.php?id_produk=' + id_produk;
            };

        };
    </script>

</body>

</html>