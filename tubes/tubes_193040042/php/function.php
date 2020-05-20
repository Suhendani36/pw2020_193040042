<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040042") or die("Database Salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);

    // hanya 1 data
    // if (mysqli_num_rows($result) == 1) {
    //     return mysqli_fetch_assoc($result);
    // }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];



    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo "<script> 
        // alert('pilih gambar terlebih dahulu!');
        // </script>";
        return 'nophoto.png';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'png', 'jpeg', 'jfif'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));

    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script> 
    alert('Pilih file gambar');
    </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png' && $tipe_file != 'image/jpg') {
        echo "<script> 
            alert('File bukan gambar');
          </script>";
        return false;
    }
    // cek ukuran file
    // maksimal 5Mb == 5000000
    if ($ukuran_file > 5000000) {
        echo "<script> 
            alert('File gambar terlalu besar');
          </script>";
        return false;
    }
    //lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;

    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}



function tambah($data)
{
    $conn = koneksi();

    // $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $bahan = htmlspecialchars($data['bahan']);
    $daerah_asal = htmlspecialchars($data['daerah_asal']);
    $manfaat = htmlspecialchars($data['manfaat']);


    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = " INSERT INTO makanan
                VALUES
                (null, '$gambar', '$nama', '$bahan','$daerah_asal', '$manfaat')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    $conn = koneksi();

    $mkn = query("SELECT * FROM makanan WHERE id = $id ");
    if ($mkn['gambar'] != 'nophoto.png') {
        unlink('../assets/img/' . $mkn['gambar']);
    }

    mysqli_query($conn, "DELETE FROM makanan WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $bahan = htmlspecialchars($data['bahan']);
    $daerah_asal = htmlspecialchars($data['daerah_asal']);
    $manfaat = htmlspecialchars($data['manfaat']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'nophoto.png') {
        $gambar = $gambar_lama;
    }


    $queryubah = "UPDATE makanan
                  SET
                  gambar = '$gambar',
                  nama = '$nama',
                  bahan = '$bahan',
                  daerah_asal = '$daerah_asal',
                  manfaat = '$manfaat'
                WHERE id = '$id' ";
    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // Cek Username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = 'username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('Username sudah digunakan');
                </script>";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambah user baru
    $query_tambah = "INSERT INTO user VALUES(null, '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
