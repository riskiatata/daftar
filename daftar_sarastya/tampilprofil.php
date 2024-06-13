<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "sarastya");

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

// Query to retrieve data from the database
$query = "SELECT * FROM masuk WHERE id_profil";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the query is successful
if (mysqli_num_rows($result) > 0) {
    // Output the data
    while($row = mysqli_fetch_assoc($result)) {
       ?>
       
       <link rel="stylesheet" type="text/css" href="">
           
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f7f7f7;
            }
            .container {
                margin: 40px auto;
                background-color: #fff;
                padding: 0px;
                border: 1px solid #ddd;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .profile-pic {
                width: 150px;
                height: 150px;
                border-radius: 50%;
                margin: 20px auto;
                background: #fff;
                display: block;
            }
            h2 {
                text-align: center;
                margin-bottom: 20px;
            }
            .profile-box {
                background: -webkit-linear-gradient(right, #538392, #6295A2);
                text-align: center;
                padding: 40px 90px;
                color: #fff;
                position: relative;
                border-radius: 20px;
            }
            .profile-box .btn {
                background: white;
                color: black;
                border: none;
                width: 150px;
                height: 50px;
                padding: 12px 20px;
                font-size: 18px;
                font-weight: 600;
                border-radius: 5px;
                margin-top: 20px;
                margin: 10px;
                transition: background 0.3s, color 0.3s;
            }
            .profile-box .btn:hover {
                background: #538392;
                color: white;
                cursor: pointer;
            }
            .button-container a {
  display: inline-block;
  width: 130px;
  height: 50px;
  padding: 12px 10px;
  font-size: 18px;
  font-weight: 60;
  border-radius: 5px;
  background: white;
  color: black;
  border: none;
  transition: background 0.3s, color 0.3s;
}

.button-container a:hover {
  background: #538392;
  color: white;
  cursor: pointer;
}
.button-container a,.button-container button {
  text-decoration: none;
}

        </style>
        <div class="container">
            <div class="profile-box">
                <h2>Profil Anda</h2>
                <img src="upload/<?php echo $row['foto']; ?>" alt="Foto Artikel" class="profile-pic">
                <h2>Nama: <?php echo $row['nama']; ?></h2>
                <h2>Email: <?php echo $row['email']; ?></h2>
                <h2>Nomor Telepon: <?php echo $row['nomor']; ?></h2>
                <h2>Deskripsi Diri: <?php echo $row['deskripsi']; ?></h2>
                <div class="button-container">
                    <form action="front.php" method="post" style="display:inline;">
                        <button type="submit" name="back" class="btn">Kembali</button>
                    </form>
                    <a href="update.php?id=<?php echo $row['id_profil']; ?>" style="display:inline;" class="btn">Edit Profil</a>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "Profil tidak ditemukan";
}

// Close the connection
mysqli_close($conn);
?>