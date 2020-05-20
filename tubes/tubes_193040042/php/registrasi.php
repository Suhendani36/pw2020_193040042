<?php
session_start();
require 'function.php';

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
      alert('Registrasi Berhasil');
      document.location.href ='login.php';
    </script>";
  } else {
    echo "<script>
      alert('Registrasi Gagal');
      document.location.href ='login.php';
    </script>";
  }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- cssme -->
  <link rel="stylesheet" href="../css/newcss.css">
  <title>HiddenFood</title>

  <style>
    .container {
      width: 300px;
      margin-top: 150px;

    }

    body {
      margin: 10px;
    }
  </style>
</head>

<body class="text-center">
  <div class="container">
    <form class="form-signin" action="" method="POST">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="62" height="62">
      <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>

      <label for="username" class="sr-only">Username</label>
      <input type="text" id="inputEmail" class="form-control" name="username" placeholder="username">

      <label for="password" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="password">
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Register</button>
      <div class="registrasi">
        <p>Sudah punya akun ? Sign in <a href="login2.php">Disini</a></p>
      </div>
      <p class="mt-5 mb-3 text-muted">© 2020</p>
    </form>
  </div>
</body>

</html>