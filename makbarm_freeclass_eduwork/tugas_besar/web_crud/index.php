<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
    <?php
    
        include_once("connect.php");
        $drugs = mysqli_query($conn, 
        "SELECT produk.*, supplier.nama_supplier as nama_supplier FROM produk
        LEFT JOIN supplier ON produk.id_supplier = supplier.id_supplier");
    
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="index.php">PRODUK</a>
            </div>
            <div class="col-md-3">
                <a href="pelanggan.php">PELANGGAN</a>
            </div>
            <div class="col-md-3">
                <a href="supplier.php">SUPPLIER</a>
            </div>
            <div class="col-md-3">
                <a href="penjualan.php">PENJUALAN</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="add.php" class="btn btn-primary">Tambah Obat</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td class="text-center">ID OBAT</td>
                            <td class="text-center">NAMA OBAT</td>
                            <td class="text-center">KATEGORI</td>
                            <td class="text-center">GOLONGAN</td>
                            <td class="text-center">ATURAN PAKAI</td>
                            <td class="text-center">STOK</td>
                            <td class="text-center">SUPPLIER</td>
                            <td class="text-center">Action</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        
                        while($drug = mysqli_fetch_array($drugs)) {
                            echo "
                            <tr>
                                <td>".$drug['id_produk']."</td>
                                <td>".$drug['nama_produk']."</td>
                                <td>".$drug['kategori']."</td>
                                <td>".$drug['golongan']."</td>
                                <td>".$drug['aturan_pakai']."</td>
                                <td>".$drug['stok']."</td>
                                <td>".$drug['nama_supplier']."</td>
                                <td class='text-center'>
                                    <a href='edit.php?id_produk=".$drug['id_produk']."' class='btn btn-warning'>Edit</a>
                                    <a href='#' class='btn btn-danger' onclick='confirmation(`".$drug['id_produk']."`)'>Delete</a>
                                </td>
                                
                                
                            </tr>";
                        }
                        
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>



    <script type="text/javascript">
        function confirmation(id_produk) {
            if (confirm("Delete?")) {
                window.location.href = 'delete.php?id_produk='+id_produk;
            }
            
        }
    </script>

</body>
</html>