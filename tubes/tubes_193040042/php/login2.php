<?php
session_start();
require 'function.php';

// Melakukan pengecekan apakah user sudah melakukan Login, jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: isi.php");
  exit;
}

// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  // Mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      // Jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: isi.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}


// Cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // Ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // Cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: isi.php");
    exit;
  }
}
?>



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
      <?php if (isset($error)) : ?>
        <p>Username atau Password Salah</p>
      <?php endif; ?>
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="62" height="62">
      <h1 class="h3 mb-3 font-weight-normal">Please Sign in</h1>

      <label for="username" class="sr-only">Username</label>
      <input type="text" id="inputEmail" class="form-control" name="username" placeholder="username">

      <label for="password" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="password">
      <div class="checkbox mb-3">
        <label class="form-check-label" for="remember">
          <input type="checkbox" value="remember-me" name="remember"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      <div class="registrasi">
        <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
      </div>
      <p class="mt-5 mb-3 text-muted">© 2020</p>
    </form>
  </div>

</body>

</html>