<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>

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
    ?>

    <div class="container">
        <div class="row py-5">
            <h3 class="text-center mb-5 fw-semibold">TAMBAH PRODUK</h3>

            <form action="add_product.php" method="POST" name="form-addproduct" enctype="multipart/form-data">

                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label fw-semibold">ID PRODUK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id_produk">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label fw-semibold">NAMA PRODUK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_produk">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label fw-semibold">STOK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="stok">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label fw-semibold">HARGA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="harga">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="input-group mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label fw-semibold">GAMBAR</label>
                        <input class="form-control" type="file" id="formFile" name="gambar">
                    </div>
                </div>

                <div class="d-grid d-md-block col-auto text-center mt-4">
                    <button class="btn btn-success btn-edit fw-semibold me-2 px-4 py-2" type="submit" name="Submit" value="Add">Tambah</button>
                    <a href="product.php" class="btn btn-warning btn-edit fw-semibold px-4 py-2"> Kembali</a>
                </div>

            </form>
        </div>
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>

</html>

<?php

if (isset($_POST['Submit'])) {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $img = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $path = 'assets/upload/';

    // print_r($_POST);
    move_uploaded_file($source, $path . $img);
    $insert = mysqli_query($mysqli, "INSERT INTO `produk` (id_produk, nama_produk, stok, harga, gambar) VALUES('$id_produk', '$nama_produk', '$stok', '$harga', '$img') ");

    if ($insert) {
        echo "<script>alert('Produk Berhasil Ditambahkan');
        window.location.href='product.php'; </script>";
    } else {
        echo "Maaf, terjadi kesalahan saat mencoba menyimpan data ke database";
    }
};

?>