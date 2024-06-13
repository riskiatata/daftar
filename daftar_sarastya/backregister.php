<DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="public\css\soft-ui-dashboard.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
        <link href="public/css/nucleo-icons.css" rel="stylesheet" />
        <link href="public/css/nucleo-svg.css" rel="stylesheet" />
        <link rel="stylesheet" href="public\icon\fa\css\fontawesome.min.css">
        <link id="pagestyle" href="public/css/soft-ui-dashboard.css" rel="stylesheet" />

        <!-- FONT -->
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:wght@300;400;500;700&display=swap"
            rel="stylesheet">

        <style>
            * {
                font-family: 'Poppins', Georgia, 'Times New Roman', Times, serif;
            }
        </style>

        <header>
            <div class="container">
                <h1><a href="front.php"> Sarastya Technology </a></h1>
                <ul>
                    <li><a href="backregister.php"> DATA PENDAFTARAN SISWA PRAKERIN </a></li>
                </ul>
            </div>
        </header>

        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM daftar";
        $result = $conn->query($sql);
        ?>

        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="float-start mb-0">DATA</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered align-items-center mb-0 rounded"
                                    style="width: 100%; border-collapse: collapse;" id="table">
                                    <thead>
                                        <tr>
                                            <th
                                                class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                                No.</th>
                                            <th
                                                class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Foto</th>
                                            <th
                                                class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama Lengkap</th>
                                            <th
                                                class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama Panggilan</th>
                                            <th
                                                class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                                Email</th>
                                            <th
                                                class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                                Tempat Tanggal Lahir</th>
                                            <th
                                                class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                                Alamat</th>
                                            <th
                                                class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                                Asal Sekolah</th>
                                            <th
                                                class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                                Username</th>
                                            <th
                                                class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                                AKSI</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php if ($result->num_rows > 0) { ?>
                                            <?php while ($row = $result->fetch_assoc()) { ?>
                                                <tr>
                                                    <td class="align-middle text-sm text-center font-weight-bold mb-0 px-3">
                                                        <?= $i++ ?>
                                                    </td>
                                                    <td class="align-middle text-sm text-center font-weight-bold mb-0 px-3">
                                                        <img src="upload/<?= $row["foto"]; ?>" alt="<?= $row['nama_lengkap']; ?>"
                                                            class="profile-pic img-fluid">
                                                    </td>
                                                    <td class="align-middle text-sm text-center font-weight-bold mb-0 px-3">
                                                        <?= $row['nama_lengkap']; ?>
                                                    </td>
                                                    <td class="align-middle text-sm text-center font-weight-bold mb-0 px-3">
                                                        <?= $row['nama_panggilan']; ?>
                                                    </td>
                                                    <td class="align-middle text-sm text-center font-weight-bold mb-0 px-3">
                                                        <?= $row['email']; ?>
                                                    </td>
                                                    <td class="align-middle text-sm text-center font-weight-bold mb-0 px-3">
                                                        <?= $row['ttl']; ?>
                                                    </td>
                                                    <td class="align-middle text-sm text-center font-weight-bold mb-0 px-3">
                                                        <?= $row['alamat']; ?>
                                                    </td>
                                                    <td class="align-middle text-sm text-center font-weight-bold mb-0 px-3">
                                                        <?= $row['asal_sekolah']; ?>
                                                    </td>
                                                    <td class="align-middle text-sm text-center font-weight-bold mb-0 px-3">
                                                        <?= $row['username']; ?>
                                                    </td>
                                                    <td class="align-middle text-sm text-center font-weight-bold mb-0 px-3"><a
                                                            href="
                            delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Yakin akan di proses ?'
                            )">Proses Sekarang</a>
                                                </tr>
                                            <?php }
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?
        $conn;

