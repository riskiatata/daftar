<?php
// Konfigurasi database
$host = 'localhost'; // Sesuaikan dengan host Anda
$username = 'root'; // Sesuaikan dengan username MySQL Anda
$password = ''; // Sesuaikan dengan password MySQL Anda
$database = 'sarastya'; // Sesuaikan dengan nama database Anda

// Koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Memproses data yang dikirim dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $email = $_POST['email'];
    $deskripsi = $_POST['deskripsi'];

    // Memproses gambar yang diunggah
    $foto = $_FILES['foto']['name'];
    $foto_temp = $_FILES['foto']['tmp_name'];
    $folder = "upload/"; // Folder penyimpanan gambar

    // Pindahkan gambar ke folder uploads
    move_uploaded_file($foto_temp, $folder . $foto);

    // Menyimpan data ke database
    $sql = "INSERT INTO masuk (nama, nomor, email, deskripsi, foto) VALUES ('$nama','$nomor', '$email', '$deskripsi', '$foto')";
    if ($conn->query($sql) === TRUE) {
        echo "Artikel berhasil ditambahkan";
        header('Location: tampilprofil.php');
        exit;  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi
$conn->close();
