<?php 

  session_start();

  if ( isset ( $_SESSION['success'] ) ) {
    header( 'location: admin.php' );
  }

  if ( isset ( $_POST['user-login'] ) ) {

    require_once( 'database.php' );

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ( $username === USERNAME && $password === PASSWORD ) {
      $_SESSION['success'] = ' ';
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      header( 'location: admin.php' );
    }
    else {
      $message = 'Wrong Username or Password';
    }

  }

?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login panel</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- HEADER SECTION -->
    <header class="header-section">
      <nav class="navigation-menu">
        <div class="container">
          <div class="userinfo">
            <p><b>Username: </b>mdimran<span> | </span> <b>Password: </b>1234</p>
          </div>
          <ul>
            <li class="active"><a href="index.php">login</a></li>
            <li><a href="admin.php">admin panel</a></li>
            <li><a href="logout.php">logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- USER LOGIN SECTION -->
    <section class="user-login content">
      <div class="container">
        <h2 class="title">User Login</h2>
        <span class="message"><?php if ( isset( $message ) ) { echo $message; } ?></span>
        <form action="" method="POST">

          <label for="username">your username <span>*</span></label>
          <input type="text" name="username" id="username" placeholder="enter your username" required="require">

          <label for="password">your password <span>*</span></label>
          <input type="password" name="password" id="password" placeholder="enter your password" required="require">

          <input type="reset" name="reset" value="reset">
          <input type="submit" name="user-login" value="login">

        </form>
      </div>
    </section>

    <!-- FOOTER SECTION -->
    <footer class="footer-section">
      <div class="copyright">
        <p>&copy; 2021 all right reserved by md imran hossain</p>
      </div>
    </footer>
  </body>
</html>