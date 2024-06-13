<?php

include 'koneksi.php';
if(isset($_GET['id'])) {
    $delete = mysqli_query($conn, "DELETE FROM daftar WHERE id = '".$_GET['id']."' ");
    echo '<script>window.location="backregister.php"</script>';
}