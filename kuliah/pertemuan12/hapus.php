<?php
session_start();
if (isset($_SESSION['login'])) {
  header("location: index.php");
  exit;
}
require 'functions.php';

if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}




// menggambil id

$id = $_GET['id'];


if ((hapus($id) > 0)) {
  echo "<script>
      alert('data berhasil dihapus');
      document.location.href = 'index.php';
  </script>";
} else {
  echo "data gagal ditambhkan!";
}
