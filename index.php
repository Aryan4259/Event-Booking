<?php
include 'connect.php';
if (isset($_POST['signin'])) {
  $mo = $_POST['mobile'];

  $pass = $_POST['password'];


  $select = "SELECT * FROM `user` ";
  $qry = mysqli_query($con, $select);
  while ($row = mysqli_fetch_array($qry)) {
    if ($row['mobile'] == $mo && $row['pass'] == $pass) {
      session_start();
   $_SESSION['name']=$row['name'];
      header('location:home.php');
      exit;
    }
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    section {
      padding: 120px 5% 100px;
    }

    .login-container {
      background-color: #2f2f2f;
      border-radius: 8px;
      box-shadow: rgb(31 31 31 / 17%) 0px -23px 25px 0px inset,
        rgb(108 108 108 / 23%) 0px -36px 30px 0px inset,
        rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px,
        rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px,
        rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
      padding: 40px;
      max-width: 400px;
      width: 100%;
      text-align: center;
      margin: 0 auto;
    }

    .login-form {
      display: flex;
      flex-direction: column;
    }

    .heading {
      color: #ffffff;
      font-weight: 500;
      font-size: 40px;
      margin-bottom: 5px;
    }

    .paragraph {
      color: #ffffff;
      font-weight: 400;
      font-size: 15px;
      margin-bottom: 15px;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group input {
      background: none;
      border: 1px solid #353535;
      padding: 15px 23px;
      font-size: 16px;
      border-radius: 8px;
      color: #979797;
      width: 88%;
      box-shadow: rgb(136 136 136 / 17%) 0px -23px 25px 0px inset,
        rgb(81 81 81 / 23%) 0px -36px 30px 0px inset,
        rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px,
        rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px,
        rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    }

    .input-group input:focus {
      border-color: #0173ed;
      outline: none;
    }

    button {
      padding: 15px;
      border: none;
      border-radius: 8px;
      background-color: red;
      color: #ffffff;
      font-size: 16px;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: maroon;
    }

    .bottom-text {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 20px;
      color: #ffffff;
      font-size: 15px;
      font-weight: 400;
    }

    .bottom-text a {
      color: #0173ed;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .bottom-text a:hover {
      color: #3f95f2;
    }
  </style>
</head>

<body>
  <section>
    <div class="login-container">
      <form class="login-form" action="index.php" method="post">
        <p class="heading">Login</p>
        <p class="paragraph">Login to your account</p>
        <div class="input-group">
          <input required="" placeholder="Mobile" id="username" name="mobile" type="text" />
        </div>
        <div class="input-group">
          <input required placeholder="Password" name="password" id="password" type="password" />
        </div>
        <button type="submit" name="signin">Login</button>
        <div class="bottom-text">
          <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
          <p><a href="forgot.php">Forgot password?</a></p>
          <p><a href="adminlogin.php">Admin Login</a></p>
        </div>
      </form>
    </div>
  </section>
</body>

</html>