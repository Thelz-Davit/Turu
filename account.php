<?php
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    <link
    rel="stylesheet"
    type="text/css"
    href="bootstrap-5.2.3-dist/css/bootstrap.css"
  />
    <link rel="stylesheet" href="Input.css" />
  </head>
  <body>
    <nav class="navbar navbar-light" style="background-color:  #B7E0FF">
      <div class="container-fluid">
        <a class="navbar-brand me-5"
          ><img src="image/WhatsApp_Image_2023-03-26_at_18_03_06-transformed.png" alt="" width="120" 
        /></a>
        <form class="d-flex">
        <a href="create_produk.php?logout=1" name="logout" class="btn me-4" style="background-color: #C96060;">Logout</a>
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
    <section>
            <h1 class="d-flex justify-content-center" style="margin-left: 6cm;">Settings</h1>
            <img class="Image-Profile" src ="image/avatar.jpg">
            <div class="container"></div>
            <div class="card-one">
                <div class="profile"></div>
                 <div class="contact-box">
            
            </div>
            <div class="card d-flex justify-content-center">
              <div class="container">
                <h4><?php echo $_SESSION['username']?></h4>
                <h4><?php echo $_SESSION['email']?></h4>
                <h4><?php echo $_SESSION['no_telepon']?></h4>
              </div>
            </div>
        </section>
  </body>
</html>