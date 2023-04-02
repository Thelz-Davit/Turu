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
    href="css/bootstrap.css"
  />
    <link rel="stylesheet" href="Input.css" />
  </head>
  <body>
    <nav class="navbar navbar-light" style="background-color:  #B7E0FF">
      <div class="container-fluid">
        <a class="navbar-brand me-5"
          ><img src="image/turu.jpg" alt="" width="120" 
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
            <li ><a href="#"><i class="fas fa-th-large" style="color: #699BF7;"></i>Dashboard</a></li>
            <li><a href="inputProduk.php"><i class="fas fa-plus-square" style="color: #699BF7;"></i>Tambah Baru</a></li>
            <li><a href="#"><i class=" fas fa-sliders-h" style="color: #699BF7;"></i>Setting</a></li>
           
         </ul>
      </nav>
   </div>
    <div class="header mt-5 ms-5">
      <h3>Input Produk Baru</h3>
    </div>
    <form>
      <div class="d-flex justify-content-center">
        <div class="form-outline w-50 ">
          <label for="exampleInputEmail1" class="form-label ">Nama Produk</label>
          <input 
            type="email"
            class="form-control "
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
          />
          </div>
        </div>
      </div>
        <div class="d-flex justify-content-center mt-3">
          <div class="form-outline w-50">
            <label for="exampleInputPassword1" class="form-label">Jenis Produk</label>
            <input
              type="Jenis"
              class="form-control"
              id="Jenis"
            />
          </div>
        </div>
       <div class="d-flex justify-content-center mt-3">
        <div class="form-outline w-50">
          <label for="exampleInputPassword1" class="form-label">Jumlah Produk</label>
          <input
            type="number" id="quantity" name="quantity" min="1" max="99"
            class="form-control"
          />
        </div>
       </div>
       <div class="d-flex justify-content-center">
        <select class="form-select mt-4 form-outline w-50" aria-label="Default select example">
          <option selected>Plilih Gudang</option>
          <option value="1">Gudang 1</option>
          <option value="2">Gudang 2</option>
          <option value="3">Gudang 3</option>
         </select>
       </div>
      
       <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mt-3 form-outline w-25">Simpan</button>
       </div>
     
      
    </form>
  </body>
</html>
