<DOCTYPE html>
<html>
<head>
    <title>Profil Pendaftaran</title>
    <style>
        body {
  font-family: "Raleway", sans-serif;
  background: #f7f7f7;
  background: -webkit-linear-gradient(right, #538392, #6295A2 );
  border: 1px solid #ddd;
}

.container {
  width: 850px;
  background: #fff;
  padding: 20px;
  margin: 40px auto;
  border: 1px solid #ddd;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius:10px;
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

input[type="text"], input[type="email"], input[type="password"] {
  width: 100%;
  height: 40px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button[type="submit"] {
  background: -webkit-linear-gradient(right,  #538392, #6295A2 );
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
  background: -webkit-linear-gradient(right,  #6295A2, #538392 );
}
        </style>
<body>
  <div class="container">
    <h2>Buat Profil</h2>
    <form action="prosesprofil.php" method="post" enctype="multipart/form-data">
      <div class="input-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
      </div>
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="nomor">Nomor Telepon:</label>
        <input type="text" id="nomor" name="nomor" required>
      </div>
      <div class="input-group">
        <label for="deskripsi">Deskripsi Diri:</label>
        <textarea id="deskripsi" name="deskripsi" required></textarea>
      </div>
      <div class="input-group">
    <label for="foto">Profile Picture:</label>
    <input type="file" id="foto" name="foto">
  </div>
      <button type="submit" class="btn">Buat Profil</button>
    </form>
  </div>
</body>