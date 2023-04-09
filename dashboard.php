<?php
    include('server/controller_produk.php');

    session_start();
    include('server/connection.php');

    if (!isset($_SESSION['logged_in'])) {
        header('location: login.php');
        exit;
    }

    if (isset($_GET['logout'])) {
        if (isset($_SESSION['logged_in'])) {
            unset($_SESSION['logged_in']);
            unset($_SESSION['email']);
            unset($_SESSION['username']);
            unset($_SESSION['no_telepon']);
            header('location: login.php');
            exit;
        }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link
    rel="stylesheet"
    type="text/css"
    href="bootstrap-5.2.3-dist/css/bootstrap.css"
  />
    <link rel="stylesheet" href="dashboard.css" />
    <link rel="stylesheet" href="welcome.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-light" style="background-color:  #B7E0FF">
      <div class="container-fluid">
        <a class="navbar-brand me-5"
          ><img src="image/turu.png" alt="" height="" width="120" 
        /></a>
        <form class="d-flex">
          <a href="dashboard.php?logout=1" name="logout" class="btn me-4" style="background-color: #C96060;">Logout</a>
        </form>
      </div>
    </nav>
    <header>
      <div class="wrap">
        <form action="" method="post">
        <div class="search">
           <input type="text" class="searchTerm" placeholder="Apa yang anda cari?" name="search_query" id="search">
           <button type="submit" class="searchButton" name="searchbtn" value="Search">
            <i class="fa fa-search"></i>
         </button>
        </div>
        </form>
     </div>
     <div class="ringkasan">
        <h2>Ringkasan</h2>
     </div>
      <div class="card d-flex justify-content-center">
        <div class="container">
          <h4>Total Produk</h4>
          <p style="color: #699BF7;"><?php echo $count_produk?></p>
        </div>
      </div>
    </div>
    <div class="card1">
      <div class="container1">
        <h4>Jenis Barang</h4>
        <p style="color: #699BF7;"><?php echo $count_jenis?></p>
      </div>
    </div>
  </div>
  <div class="card2">
    <div class="container2">
      <h4>Total Barang</h4>
      <p style="color: #699BF7;"><?php echo $sum?></p>
    </div>
  </div>
</div>
    </header>
    <div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <nav id="sidebar">
        <div class="title">
            Menu
        </div>
        <ul class="list-items">
            <li><a href="dashboard.php"><i class="fas fa-th-large" style="color: #699BF7;"></i>Dashboard</a></li>
           <li><a href="menu_create.php"><i class="fas fa-plus-square" style="color: #699BF7;"></i>Tambah Baru</a></li>
           <li><a href="account.php"><i class="fas fa-sliders-h" style="color: #699BF7;"></i>Settings</a></li>
        </ul>
      </nav>
      

<table id="tableProduk" class="table table-striped table-bordered" style="width: 28cm;" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama Produk</th>
			<th>Jenis Produk</th>
			<th>Jumlah Produk</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
        <?php while($row = $products->fetch_assoc()){?>
		<tr>
			<td><?php echo $row['id_produk'];?></td>
			<td><?php echo $row['nama_produk'];?></td>
			<td><?php echo $row['jenis_produk'];?></td>
			<td><?php echo $row['jumlah_produk'];?></td>
			<td>
        <div class="dropdown">
          <button class="dropbtn"><i class="fas fa-ellipsis-v"></i></button>
          <div class="dropdown-content">
            <?php echo "<a href='edit_produk.php?id_produk=$row[id_produk]'>Edit</a>"?>
            <?php echo "<a href='delete_produk.php?id_produk=$row[id_produk]'>Delete</a>"?>
          </div>
        </div>
			</td>
		</tr>
        <?php } ?>
	</tbody>
</table>

  </body>
</html>
<script>
 // Write on keyup event of keyword input element
 $(document).ready(function(){
 $("#search").keyup(function(){
  _this = this;
 // Show only matching TR, hide rest of them
 $.each($("#tableProduk tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
  $(this).hide();
 else
  $(this).show();
 });
 });
});
</script>
