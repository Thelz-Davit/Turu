<?php
    include('connection.php');

$sql = "SELECT * FROM produk";
$stmt_produk = $conn->prepare($sql);
$stmt_produk->execute();
$products = $stmt_produk->get_result();

$query_jenis = "SELECT * FROM produk";
$count_run = mysqli_query($conn, $query_jenis);
$count_jenis = mysqli_num_rows($count_run);

$query_jeniz = "SELECT * FROM produk GROUP BY jenis_produk";
$count_ran = mysqli_query($conn, $query_jeniz);
$count_jeniz = mysqli_num_rows($count_ran);

$sum_produk = "SELECT SUM(jumlah_produk) as total_sum FROM produk";
$run_sum = mysqli_query($conn,$sum_produk);
$baris = mysqli_fetch_assoc($run_sum);
$sum = $baris['total_sum'];
?>