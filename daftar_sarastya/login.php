<?php
// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'sarastya';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $nama = $_POST["nama"] ?? ''; // Use null coalescing operator to set default value
    $password = $_POST["password"] ?? ''; // Use null coalescing operator to set default value

    // Query untuk memeriksa kredensial pengguna
    $query = "SELECT * FROM login WHERE nama ='$nama' AND password='$password'";
    // Memeriksa apakah query berhasil dieksekusi
    $result = mysqli_query($conn, $query); // Execute the query

    if ($result) {
        // Memeriksa jumlah baris yang dikembalikan oleh query
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            // Mengambil data pengguna
            $user = mysqli_fetch_assoc($result);

            // Membuat sesi dan menyimpan nama pengguna
            session_start();
            $_SESSION['nama'] = $user['nama'];

            // Mengambil peran pengguna dari hasil query
            $role = $user['role'];

            // Mengarahkan pengguna ke halaman yang sesuai berdasarkan peran (role)
            if ($role == 'admin') {
                // Redirect ke halaman BE.php jika peran adalah admin
                header("Location: backregister.php");
                exit();
            } elseif ($role == 'user') {
                // Redirect ke halaman FE.php jika peran adalah anggota
                header("Location: front.php");
                exit();
            } else {
                // Redirect ke halaman default.php jika peran tidak dikenali
                header("Location: backregister.php");
                exit();
            }
        } else {

        }
    } else {
        // Menampilkan pesan kesalahan jika query gagal dieksekusi
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        <style>
  body {
    font-family: "Raleway", sans-serif;
    background: #f7f7f7;
  }

  .container {
    width: 300px;
    background: #fff;
    padding: 50px;
    margin: 40px auto;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  .input-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 10px;
  }

  input[type="text"], input[type="password"] {
    width: 100%;
    height: 40px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .btn {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    font-size: 11pt;
    padding: 10px 30px;
  }

  .btn:hover {
    background: -webkit-linear-gradient(right, #2ec06f, #a6f77b);
  }
</style>

<body>

  <div class="container">
    <h2>Login</h2>
    <h3> Mohon isi data berikut dengan benar.</h3>
    <form action="#" method="post">
      <div class="input-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="btn">Login</button>
    </form>
  </div>

</body>

</html>
