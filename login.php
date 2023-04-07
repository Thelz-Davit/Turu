<?php
    session_start();
    include('server/connection.php');

    if (isset($_SESSION['logged_in'])) {
        header('location: dashboard.php');
        exit;
    }

    if (isset($_POST['login_btn'])) {
        $email = $_POST['email'];
        $password = ($_POST['password']);

        $query = "SELECT id_admin, username, email, password, no_telepon FROM admin
        WHERE email = ? AND password = ? LIMIT 1";

        $stmt_login = $conn->prepare($query);
        $stmt_login->bind_param('ss', $email, $password);
        
        if ($stmt_login->execute()) {
            $stmt_login->bind_result($id_admin, $username, $email, $password, 
            $no_telepon);
            $stmt_login->store_result();

            if ($stmt_login->num_rows() == 1) {
                $stmt_login->fetch();

                $_SESSION['id_admin'] = $id_admin;
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['no_telepon'] = $no_telepon;
                $_SESSION['logged_in'] = true;
                
                header('location:dashboard.php?message=Logged in successfully');
            } else {
                header('location:login.php?error=Could not verify your account');
            }
        } else {
            // Error
            header('location: login.php?error=Something went wrong!');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Style.css" />
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');
</style>
    <link
      rel="stylesheet"
      type="text/css"
      href="css/bootstrap.css"
    />
    <title>Login</title>
  </head>
  <body>
    <div class="background"></div>
  <center>
      <div class="form-box">
        <form class="form" id="login-form" action="login.php" method="post">
        <?php if (isset($_GET['error'])) ?>
                    <div role="alert">
                        <?php if (isset($_GET['error'])) {
                            echo $_GET['error'];
                    } ?>
          <span class="title">Login</span>
          <div class="form-container">
            <input type="email" class="input" placeholder="Email" name="email"/>
            <input type="password" class="input" placeholder="Password" name="password"/>
          </div>
          <button name="login_btn" type="submit" value="LOGIN">Login</button>
        </form>
        <div class="form-section">
          <p>Belum Memiliki Akun? <a href="Register.html" class="link-primary"
              >Register</a</p>
        </div>
      </div>
    </center>
  </body>
</html>
