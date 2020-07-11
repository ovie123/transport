<?php 

include '../database/messenger.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../admin/assets/css/style.css">

  <title>Login</title>
</head>

<body>

  <!-- header -->
  <header class="clearfix">
    <div class="logo">
      <a href="index.php">
        <h1 class="logo-text"><span>Awa</span>Inspires</h1>
      </a>
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="../index.php">Home</a></li>
        
        <li>
          <a href="login.php">
            <i class="fa fa-sign-in"></i>
            Login
          </a>
        </li>

        <!-- <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            Awa Melvine
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#" class="logout">logout</a></li>
          </ul>
        </li> -->
      </ul>
    </nav>
  </header>
  <!-- // header -->

  <div class="auth-content">
    <form action="login.php" method="post">
      <h3 class="form-title">Login</h3>
     <?php include '../database/formErrors.php';?>
      <div>
        <label>Username</label>
        <input type="text" name="username" class="text-input"  value="<?php echo $username;?>">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" class="text-input" value="<?php echo $password;?>">
      </div>
      <div>
        <button type="submit" name="login" class="btn" >Login</button>
      </div>
     
    </form>
  </div>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="../admin/assets/js/scripts.js"></script>

</body>

</html>