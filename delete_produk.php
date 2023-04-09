<?php
    include('server/connection.php');

    $id_produk = $_GET['id_produk'];
    $sql = "DELETE FROM produk WHERE id_produk = $id_produk";
    $result = mysqli_query($conn, $sql);

    header('Location:dashboard.php');
?>