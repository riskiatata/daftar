<!DOCTYPE html>
<html>
<head>
    <title>Berhasil Mendaftar</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  background: -webkit-linear-gradient(bottom, #538392, #6295A2  );
  border: 1px solid #ddd;
  box-shadow: 0px 1px 8px #24c64f;
}

.container {
  width: 700px;
  background: #fff;
  padding: 40px;
  margin: 40px auto;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  font-weight: bold;
  color: #333;
}

p {
  font-size: 18px;
  color: #666;
  margin-bottom: 40px;
}

.success-icon {
  font-size: 40px;
  color: #24c64f;
  margin-bottom: 20px;
}

.container::before {
 
  display: block;
  width: 100%;
  height: 100%;
  background: url("https://cdn-icons-png.flaticon.com/512/1828/1828643.png") no-repeat center;
  background-size: 80px;
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0.2;
}
.back-button {
    display: inline-block;
        float: right;
        margin-top: 20px;
        margin-bottom: 20px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #4CAF50;
        color: #fff;
        cursor: pointer;
      }
    .back-button:hover {
        background-color: #3e8e41;
      }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">&#10004;</div>
        <h2>Berhasil Mendaftar!</h2>
        <p>Terima kasih telah mendaftar. Kami akan menghubungi Anda segera.</p>
        <a href="front.php" class="back-button"> Kembali </a>
    </div>
</body>
</html>