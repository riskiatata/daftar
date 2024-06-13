<DOCTYPE html>
  <html>

  <head>
    <title>Tambah Data Pendaftaran</title>
    <style>
      body {
        font-family: "Raleway", sans-serif;
        background: -webkit-linear-gradient(bottom, #6295A2, #538392);
        border: 1px solid #ddd;
      }

      .container {
        width: 800px;
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

      .input-group {
        margin-bottom: 20px;
      }

      label {
        display: block;
        margin-bottom: 10px;
      }

      input[type="text"],
      input[type="email"],
      input[type="password"] {
        width: 100%;
        height: 40px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      button[type="submit"] {
        background: -webkit-linear-gradient(right, #6295A2, #538392);
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
        background: -webkit-linear-gradient(right, #538392, #6295A2);
      }
    </style>

  <body>
    <div class="container">
      <h2>Daftar Sekarang</h2>
      </center>
      <h3> Mohon Isi Data Berikut Dengan Benar.</h3>
      </center>
      <form action="prosesregister.php" method="post" enctype="multipart/form-data">
        <div class="input-group">
          <label for="nama_lengkap">Nama Lengkap:</label>
          <input type="text" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="input-group">
          <label for="nama_panggilan">Nama Panggilan:</label>
          <input type="text" id="nama_panggilan" name="nama_panggilan" required>
        </div>
        <div class="input-group">
          <label for="email">Email:</label>
          <input type="text" id="email" name="email" required>
        </div>
        <div class="input-group">
          <label for="ttl">Tempat Tanggal Lahir:</label>
          <input type="text" id="ttl" name="ttl" required>
        </div>
        <div class="input-group">
          <label for="alamat">Alamat:</label>
          <input type="text" id="alamat" name="alamat" required>
        </div>
        <div class="input-group">
          <label for="asal_sekolah">Asal Sekolah:</label>
          <input type="text" id="asal_sekolah" name="asal_sekolah" required>
        </div>
        <div class="input-group">
          <label for="username">Username Telegram:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
          <label for="foto">Pas Foto:</label>
          <label for="foto">Background Warna Putih.</label>
          <input type="file" id="foto" name="foto" required>
        </div>
        <button type="submit" class="btn">Masuk</button>
      </form>
    </div>
  </body>