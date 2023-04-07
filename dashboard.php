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
  </head>
  <body>
    <nav class="navbar navbar-light" style="background-color:  #B7E0FF">
      <div class="container-fluid">
        <a class="navbar-brand me-5"
          ><img src="image/turu.png" alt="" height="" width="120" 
        /></a>
        <form class="d-flex">
          <button type="button" class="btn me-4" style="background-color: #C96060;">LogOut</button>
        </form>
      </div>
    </nav>
    <header>
      <div class="wrap">
        <div class="search">
           <input type="text" class="searchTerm" placeholder="Apa yang anda cari?">
           <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
         </button>
        </div>
     </div>
     <div class="ringkasan">
        <h2>Ringkasan</h2>
     </div>
      <div class="card d-flex justify-content-center">
        <div class="container">
          <h4>Total Produk</h4>
          <p style="color: #699BF7;">150</p>
        </div>
      </div>
    </div>
    <div class="card1">
      <div class="container1">
        <h4>Jumlah Barang</h4>
        <p style="color: #699BF7;">150</p>
      </div>
    </div>
  </div>
  <div class="card2">
    <div class="container2">
      <h4>Total Barang</h4>
      <p style="color: #699BF7;">150</p>
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
            <li><a href="#"><i class="fas fa-th-large" style="color: #699BF7;"></i>Dashboard</a></li>
           <li><a href="#"><i class="fas fa-plus-square" style="color: #699BF7;"></i>Tambah Baru</a></li>
           <li><a href="#"><i class="fas fa-sliders-h" style="color: #699BF7;"></i>Settings</a></li>
        </ul>
      </nav>
      

<table id="example" class="table table-striped table-bordered" style="width: 28cm;" >
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
		<tr>
			<td>1</td>
			<td>Matras Yoga Nike</td>
			<td>Matras Olahraga</td>
			<td>10</td>
			<td>
        <div class="dropdown">
          <button class="dropbtn"><i class="fas fa-ellipsis-v"></i></button>
          <div class="dropdown-content">
            <a href="#">Edit</a>
            <a href="#">Hapus Produk</a>
          </div>
        </div>
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Rinnai 180x120</td>
			<td>Spring Bed</td>
			<td>20</td>
			<td>
				<div class="dropdown">
          <button class="dropbtn"><i class="fas fa-ellipsis-v"></i></button>
          <div class="dropdown-content">
            <a href="#">Edit</a>
            <a href="#">Hapus Produk</a>
          </div>
        </div>
      </td>
		</tr>
		<tr>
			<td>3</td>
			<td>Fitness Matras</td>
			<td>Matras Olahraga</td>
			<td>90</td>
      <td>
      <div class="dropdown">
        <button class="dropbtn"><i class="fas fa-ellipsis-v"></i></button>
        <div class="dropdown-content">
          <a href="#">Edit</a>
          <a href="#">Hapus Produk</a>
        </div>
      </div>
      </td>
		</tr>
    <tr>
			<td>3</td>
			<td>Fitness Matras</td>
			<td>Matras Olahraga</td>
			<td>90</td>
      <td>
      <div class="dropdown">
        <button class="dropbtn"><i class="fas fa-ellipsis-v"></i></button>
        <div class="dropdown-content">
          <a href="#">Edit</a>
          <a href="#">Hapus Produk</a>
        </div>
      </div>
      </td>
		</tr>
    <tr>
			<td>3</td>
			<td>Fitness Matras</td>
			<td>Matras Olahraga</td>
			<td>90</td>
      <td>
      <div class="dropdown">
        <button class="dropbtn"><i class="fas fa-ellipsis-v"></i></button>
        <div class="dropdown-content">
          <a href="#">Edit</a>
          <a href="#">Hapus Produk</a>
        </div>
      </div>
      </td>
		</tr>
    
	</tbody>
</table>

  </body>
</html>
