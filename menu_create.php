<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Baru</title>
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
          <button type="button" class="btn me-4" style="background-color: #C96060;">LogOut</button>
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
               <li><a href="menu_create.php"><i class="fas fa-plus-square" style="color: #699BF7;"></i>Tambah Baru</a></li>
               <li><a href="account.php"><i class=" fas fa-sliders-h" style="color: #699BF7;"></i>Settings</a></li>
              
            </ul>
         </nav>
      </div>
    
    <div class="card-produk">
        <div class="container">
          <h5>Tambah Produk</h5>
          <a href="create_produk.php"class="btn btn-primary">Tambah</a>
        </div>
      </div>
    </div>
    <div class="card-gudang">
        <div class="container">
          <h5>Tambah Gudang</h5>
          <a href="create_gudang.php" class="btn btn-primary">Tambah</a>
        </div>
      </div>
    </div>
      
    </body>