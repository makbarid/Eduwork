<?php
    include_once('connect.php');

    $id_produk = $_GET['id_produk'];
    $delete = mysqli_query($mysqli, "DELETE FROM produk WHERE id_produk = '$id_produk' ");

    header("location: product.php");
?>