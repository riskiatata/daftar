<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "sarastya");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$id = isset($_GET['id']) ? $_GET['id'] : '';
// Get the updated values from the form
$nama = $_POST['nama'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];
$deskripsi = $_POST['deskripsi'];

// Memproses gambar yang diunggah
$foto = $_FILES['foto']['name'];
$foto_temp = $_FILES['foto']['tmp_name'];
$folder = "upload/"; // Folder penyimpanan gambar

move_uploaded_file($foto_temp, $folder . $foto);

// Update the user's profile information
$query = "UPDATE masuk SET nama = '$nama', email = '$email', nomor = '$nomor', deskripsi = '$deskripsi' WHERE id_profil = '$id'";
$result = mysqli_query($conn, $query);

// Check if the update was successful
if ($result) {
  echo "Profil berhasil diupdate!";
  header('Location: tampilprofil.php');
        exit;  
} else {
  echo "Error updating profil: " . mysqli_error($conn);
}


// Close the database connection
mysqli_close($conn);
?>