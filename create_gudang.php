<?php
  include('server/connection.php');

  if(isset($_POST['submit'])){
    $nama_gudang = $_POST['nama_gudang'];

    $sql = "INSERT INTO gudang VALUES('','$nama_gudang')";
    $result = mysqli_query($conn, $sql);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Gudang</title>
    <link rel="stylesheet" href="dashboard.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link
    rel="stylesheet"
    type="text/css"
    href="css/bootstrap.css"
  />
    <link rel="stylesheet" href="Input.css" />
  </head>
  <body>
    <nav class="navbar navbar-light" style="background-color:  #B7E0FF">
      <div class="container-fluid">
        <a class="navbar-brand me-5"
          ><img src="image/turu.jpg" alt="" height="" width="120" 
        /></a>
        <form class="d-flex">
        <a href="create_gudang.php?logout=1" name="logout" class="btn me-4" style="background-color: #C96060;">Logout</a>
        </form>
      </div>
    </nav>
    <div class="wrapper">
         <input type="checkbox" id="btn" hidden>
         <!-- <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label> -->
         <nav id="sidebar">
            <div class="title">
                Menu
            </div>
            <ul class="list-items" >
               <li ><a href="dashboard.php"><i class="fas fa-th-large" style="color: #699BF7;"></i>Dashboard</a></li>
               <li><a href="create_produk.php"><i class="fas fa-plus-square" style="color: #699BF7;"></i>Tambah Baru</a></li>
               <li><a href="account.php"><i class=" fas fa-sliders-h" style="color: #699BF7;"></i>Setting</a></li>
              
            </ul>
         </nav>
      </div>
      <div class="header mt-5 ms-5">
      <h3>Input Gudang Baru</h3>
    </div>
    <form action="create_gudang.php" method="post">
      <div class="d-flex justify-content-center">
        <div class="form-outline w-50">
          <label for="exampleInputEmail1" class="form-label ">Nama Gudang</label>
          <input 
            type="text"
            class="form-control "
            id="exampleInputGudang"
            aria-describedby="GudangHelp"
            name="nama_gudang"
          />
          </div>
        </div>
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mt-3 form-outline w-25" name="submit">Simpan</button>
       </div>
  </body>
</html>
