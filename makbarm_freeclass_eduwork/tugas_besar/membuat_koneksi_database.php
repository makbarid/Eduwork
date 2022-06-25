<?php

    $servername = "localhost";
    $database = "db_apotek";
    $username = "root";
    $password = "";

    // create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";

    
$sql = "SELECT * FROM produk ORDER BY nama_produk ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data from each row
    while($row = $result->fetch_assoc()) {
        echo "produk : " . $row["id_produk"] . " " . $row["nama_produk"] .  "<br>";
    }
} else {
    echo "0 result";
}
$conn->close();
?>