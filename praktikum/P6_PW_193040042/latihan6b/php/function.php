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
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $bahan = htmlspecialchars($data['bahan']);
    $daerah_asal = htmlspecialchars($data['daerah_asal']);
    $manfaat = htmlspecialchars($data['manfaat']);

    $query = " INSERT INTO makanan
                VALUES
                (null, '$gambar', '$nama', '$bahan','$daerah_asal', '$manfaat')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
