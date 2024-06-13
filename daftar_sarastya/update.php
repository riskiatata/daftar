<!DOCTYPE html>
<html>

<head>
  <title>Update Profil</title>
  <style>
    body {
      font-family: "Raleway", sans-serif;
      background: #f7f7f7;
      background: -webkit-linear-gradient(right, #538392, #6295A2);
      border: 1px solid #ddd;
    }

    .container {
      width: 850px;
      background: #fff;
      padding: 20px;
      margin: 40px auto;
      border: 1px solid #ddd;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .profile-pic {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin: 20px auto;
      display: block;
    }

    .input-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      height: 40px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button[type="submit"] {
      background: -webkit-linear-gradient(right, #538392, #6295A2);
      border: none;
      border-radius: 21px;
      box-shadow: 0px 1px 8px #24c64f;
      cursor: pointer;
      color: white;
      font-family: "Raleway SemiBold", sans-serif;
      font-size: 11pt;
      padding: 10px 30px;
    }

    button[type="submit"]:hover {
      background: -webkit-linear-gradient(right, #6295A2, #538392);
    }
  </style>
  <?php
  // Koneksi ke database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sarastya"; // Ganti dengan nama database Anda
  
  // Membuat koneksi
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Memeriksa koneksi
  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  }

  $id = isset($_GET['id']) ? $_GET['id'] : '';



  if (!empty($id) && ctype_digit($id)) {
      // Menyiapkan dan menjalankan query SQL
      $query = "SELECT * FROM masuk WHERE id_profil = $id";
      $result = mysqli_query($conn, $query);

      if ($result && mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          $nama = $row['nama'];
          $email = $row['email'];
          $nomor = $row['nomor'];
          $deskripsi = $row['deskripsi'];
          $foto = $row['foto'];
      } else {
          echo "Data tidak ditemukan";
          exit;
      }
  } else {
      echo "Parameter ID tidak valid";
      exit;
  }
  // Menutup koneksi
  $conn->close();
  ?>
</head>

<body>
  <div class="container">
    <h2>Update Profil</h2>
    <form action="prosesupdate.php?id=<?php echo $row["id_profil"];?>" method="post" enctype="multipart/form-data">
      <div class="input-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($nama); ?>" required>
      </div>
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
      </div>
      <div class="input-group">
        <label for="nomor">Nomor Telepon:</label>
        <input type="text" id="nomor" name="nomor" value="<?php echo htmlspecialchars($nomor); ?>" required>
      </div>
      <div class="input-group">
        <label for="deskripsi">Deskripsi Diri:</label>
        <textarea id="deskripsi" name="deskripsi" required><?php echo htmlspecialchars($deskripsi); ?></textarea>
      </div>
      <div class="input-group">
        <label for="foto">Profile Picture:</label>
        <input type="file" id="foto" name="foto">
        <img src="upload/<?php echo $row["foto"];?>" alt="Profile Picture" class="profile-pic">
      </div>
      <button type="submit" class="btn">Update Profil</button>
    </form>
  </div>
</body>

</html>