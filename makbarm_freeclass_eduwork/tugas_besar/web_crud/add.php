<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    
    include_once('connect.php');
    $array_supplier = mysqli_query($conn, "SELECT * FROM supplier");
    
    ?>


    <div class="container">
        <div class="row" style="margin: 50px;">
            <div class="col-md-12 text-center">
                <h4>Tambah Obat</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form 
                action="add.php"
                method="POST"
                name="form1">

                <table width="100%" class="table-bordered" cellpadding="10" border="0">
                    <tr>
                        <td>ID PRODUK</td>
                        <td><input 
                        type="text" 
                        class="form-control" 
                        name="id_produk"></td>
                    </tr>
                    <tr>
                        <td>NAMA PRODUK</td>
                        <td><input 
                        type="text" 
                        class="form-control" 
                        name="nama_produk"></td>
                    </tr>
                    <tr>
                        <td>KATEGORI</td>
                        <td><input 
                        type="text" 
                        class="form-control" 
                        name="kategori"></td>
                    </tr>
                    <tr>
                        <td>GOLONGAN</td>
                        <td><input 
                        type="text" 
                        class="form-control" 
                        name="golongan"></td>
                    </tr>
                    <tr>
                        <td>ATURAN PAKAI</td>
                        <td><input 
                        type="text" 
                        class="form-control" 
                        name="aturan_pakai"></td>
                    </tr>
                    <tr>
                        <td>SUPPLIER</td>
                        <td>
                            <select 
                            class="form-control"
                            name="id_supplier">
                            <?php
                            
                                while($supplier = mysqli_fetch_array($array_supplier)) {
                                    echo "
                                    <option value =".$supplier['id_supplier'].">" . $supplier['nama_supplier'] . "</option>";
                                }
                            
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Qty Stock</td>
                        <td><input 
                        type="text" 
                        class="form-control" 
                        name="stok"></td>
                    </tr>
                    <tr>
                        <td>Harga Beli</td>
                        <td><input 
                        type="text" 
                        class="form-control" 
                        name="harga"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input 
                        type="submit"
                        class="form-control btn btn-primary"
                        name="Submit"
                        value="Add"></td>
                    </tr>

                </table>
            </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php

    if (isset($_POST['Submit'])) {
        $id_produk = $_POST['id_produk'];
        $nama_produk = $_POST['nama_produk'];
        $kategori = $_POST['kategori'];
        $golongan = $_POST['golongan'];
        $aturan_pakai = $_POST['aturan_pakai'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $id_supplier = $_POST['id_supplier'];

        // print_r($_POST);
        $insert = mysqli_query($conn, "INSERT INTO `produk`(id_produk, nama_produk, kategori, golongan, aturan_pakai, stok, harga, id_supplier) VALUES('$id_produk', '$nama_produk', '$kategori', '$golongan', '$aturan_pakai', '$stok', '$harga', '$id_supplier')");

        header("location: index.php");
    }

?>