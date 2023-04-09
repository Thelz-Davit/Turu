<?php
include('server/connection.php');
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
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light" style="background-color:  #B7E0FF">
      <div class="container-fluid">
        <a class="navbar-brand me-5"
          ><img src="image/turu.png" alt="" height="" width="120" 
        /></a>
        <form class="d-flex">
          <a href="login.php" class="btn me-4" style="background-color: #547DFF; color: white;">Login</a>
        </form>
      </div>
    </nav>
      <div class="caption">
        <h1>Selamat Datang</h1>
        <p>TURU merupakan sebuah gudang yang dirancang khusus untuk menyimpan dan mendistribusikan berbagai jenis matras. Gudang matras kami dilengkapi dengan sistem penyimpanan yang terorganisir dengan baik, dan memiliki fasilitas pengangkutan dan pengiriman yang efisien, yang memungkinkan produk matras untuk dikirimkan ke berbagai lokasi dengan cepat dan aman.<p>
        <h5><i>"Kami adalah gudang mengturu abadi yang terpercaya"</i></h5>
      </div>
        <img align="right" src="image/child1.png" alt="" class="logo-welcome" style="width: 50%;" >
          <div id="carouselId" class="carousel slide" data-bs-ride="carousel" align="center">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
              <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
              <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox" >
              <div class="carousel-item active">
                <img src="image/kasur1.jpg" class="w-50 d-block" alt="First slide">
              </div>
              <div class="carousel-item">
                <img src="image/kasur2.jpeg" class="w-50 d-block" alt="Second slide" >
              </div>
              <div class="carousel-item">
                <img src="image/matras1.jpg" class="w-50 d-block" alt="Third slide" >
              </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button  class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
              </button>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
  </body>
</html>