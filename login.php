<?php
    session_start();
    include('server/connection.php');

    if (isset($_SESSION['logged_in'])) {
        header('location: Welcome.php');
        exit;
    }

    if (isset($_POST['login_btn'])) {
        $email = $_POST['user_email'];
        $password = ($_POST['user_password']);

        $query = "SELECT user_id, user_name, user_email, user_password, user_phone,
        user_address, user_city, user_photo FROM user
        WHERE user_email = ? AND user_password = ? LIMIT 1";

        $stmt_login = $conn->prepare($query);
        $stmt_login->bind_param('ss', $email, $password);
        
        if ($stmt_login->execute()) {
            $stmt_login->bind_result($user_id, $user_name, $user_email, $user_password, 
            $user_phone, $user_address, $user_city, $user_photo);
            $stmt_login->store_result();

            if ($stmt_login->num_rows() == 1) {
                $stmt_login->fetch();

                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_name'] = $user_name;
                $_SESSION['user_email'] = $user_email;
                $_SESSION['user_phone'] = $user_phone;
                $_SESSION['user_address'] = $user_address;
                $_SESSION['user_city'] = $user_city;
                $_SESSION['user_photo'] = $user_photo;
                $_SESSION['logged_in'] = true;

                header('location:Welcome.php?message=Logged in successfully');
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
        <form class="form">
          <span class="title">Login</span>
          <div class="form-container">
            <input type="email" class="input" placeholder="Email" />
            <input type="password" class="input" placeholder="Password" />
          </div>
          <button>Login</button>
        </form>
        <div class="form-section">
          <p>Belum Memiliki Akun? <a href="Register.php" class="link-primary"
              >Register</a</p>
        </div>
      </div>
    </center>
  </body>
</html>
