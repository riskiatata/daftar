<?php
// prosesregister.php

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "sarastya");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$nama_lengkap = $_POST['nama_lengkap'];
$nama_panggilan = $_POST['nama_panggilan'];
$email = $_POST['email'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$asal_sekolah = $_POST['asal_sekolah'];
$username = $_POST['username'];

// Memproses gambar yang diunggah
$foto = $_FILES['foto']['name'];
$foto_temp = $_FILES['foto']['tmp_name'];
$folder = "upload/"; // Folder penyimpanan gambar

// Pindahkan gambar ke folder uploads
move_uploaded_file($foto_temp, $folder . $foto);

// Insert data into database
$query = "INSERT INTO daftar (nama_lengkap, nama_panggilan, email, ttl, alamat, asal_sekolah, username, foto) VALUES ('$nama_lengkap', '$nama_panggilan', '$email', '$ttl', '$alamat', '$asal_sekolah', '$username', '$foto')";
if (mysqli_query($conn, $query)) {
    // Redirect to success page
    header("Location: success.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>