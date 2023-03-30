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
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_photo']);
        header('location: login.php');
        exit;
    }
}
?>  

<?php
    include('layouts/navbar.php');
?>
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <img src="image\child.png" alt="">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1>WELCOME</h1>
                <h1><?php echo $_SESSION['user_name']?></h1>
                <h1><?php echo $_SESSION['user_email']?></h1>
            </div>
        </div>
    </div>
    
    
</body>
<footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase"></h5>

            <p>
            NRP : 162021032 <br>
            Nama : Davitra Eka Sanusi <br>
            Kelas : BB
            </p>
        </div>
    </div>
</footer>
</html>