<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>

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

    $id_produk = $_GET['id_produk'];
    $items = mysqli_query($mysqli, "SELECT * FROM produk WHERE id_produk = '$id_produk' ",);

    while ($item = mysqli_fetch_array($items)) {
        $id_produk = $item['id_produk'];
        $nama_produk = $item['nama_produk'];
        $stok = $item['stok'];
        $harga = $item['harga'];
        $img = $item['gambar'];
    };
    ?>

    <div class="container">
        <div class="row py-5">
            <h3 class="text-center mb-5 fw-semibold">EDIT PRODUK</h3>

            <form action="edit_product.php?id_produk=<?= $id_produk; ?>" method="POST" name="form-editproduct" enctype="multipart/form-data">

                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label fw-semibold">ID PRODUK</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" name="id_produk" value="<?= $id_produk; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label fw-semibold">NAMA PRODUK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_produk" value="<?= $nama_produk; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label fw-semibold">STOK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="stok" value="<?= $stok; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label fw-semibold">HARGA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="harga" value="<?= $harga; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label fw-semibold">GAMBAR</label>
                    <div class="col-sm-10 ">

                        <img src="assets/upload/<?= $img; ?>" alt="" width="254px" height="254px"><br>

                        <input type="hidden" name="old_img" value="<?= $img; ?>" /><br>
                        
                        <input type="file" class="form-control" id="formFile" name="gambar"><br>

                    </div>
                </div>

                <div class="d-grid d-md-block col-auto text-center mt-4">
                    <button class="btn btn-success btn-edit fw-semibold me-2 px-4 py-2" type="submit" name="Submit" value="Update">Edit</button>
                    <a href="product.php" class="btn btn-warning btn-edit fw-semibold px-4 py-2">Kembali</a>
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
        $new_img = $_FILES['gambar']['name'];
        $source = $_FILES['gambar']['tmp_name'];
        $path = 'assets/upload/';

        if($new_img != '')
        {
            move_uploaded_file($source, $path . $new_img);
            $update = mysqli_query($mysqli, "UPDATE produk SET id_produk = '$id_produk', nama_produk = '$nama_produk', stok = '$stok', harga = '$harga', gambar = '".$new_img."' WHERE id_produk = '$id_produk'; ");

            if($update)
            {
                echo "<script>alert('Produk BERHASIL di UPDATE');
                window.location.href='product.php'; </script>";
            }
            else
            {
                echo "<script>alert('Produk GAGAL di UPDATE')";
            }
        }
        else
        {
            $update = mysqli_query($mysqli, "UPDATE produk SET id_produk = '$id_produk', nama_produk = '$nama_produk', stok = '$stok', harga = '$harga' WHERE id_produk = '$id_produk'; ");

            if($update)
            {
                echo "<script>alert('Produk BERHASIL di UPDATE');
                window.location.href='product.php'; </script>";
            }
            else
            {
                echo "<script>alert('Produk GAGAL di UPDATE')";
            }
        }
    }

?>