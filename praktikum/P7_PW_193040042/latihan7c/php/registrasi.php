<?php
require 'function.php';

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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registrasi</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .container {
      width: 300px;
      border: 1px dashed gray;
      float: left;
    }

    body {
      margin: 10px;
    }
  </style>
</head>

<body>

  <div class="container">
    <form action="" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="username">

      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <button type="submit" class="btn btn-primary" name="register">Register</button>
    </form>
  </div>
</body>

</html>