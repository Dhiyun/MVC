<?php 
    include 'template/navbar.php';
    include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Ruang</title>

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            color: #000;
        }

        body {
            background-color: #2A1A5E;
        }

        .btn-custom {
            background-color: none;
            border: none;
            padding-left: 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card mt-4" style="border: 0; border-radius: 20px;">
            <div class="card-body">
                <nav class="navbar navbar-light" style="border-radius: 15px;">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </nav>
                
                <div class="table-responsive small pt-3 px-3">
                    <table class="table"> 
                        <thead>
                            <tr>
                                <th scope="col">KODE RUANG</th>
                                <th scope="col">NAMA RUANG</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            // $no = 1;
                            $query = "SELECT * FROM ruangan";
                            $result = mysqli_query($koneksi, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td>
                                    <?= $row['kode'] ?>
                                </td>
                                <td>
                                    <?= $row['nama_ruangan'] ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#tambahRuangModal" data-bs-whatever="@mdo"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 39 39" fill="none">
                                            <path d="M19.5 35.75C28.4375 35.75 35.75 28.4375 35.75 19.5C35.75 10.5625 28.4375 3.25 19.5 3.25C10.5625 3.25 3.25 10.5625 3.25 19.5C3.25 28.4375 10.5625 35.75 19.5 35.75Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M13 19.5H26" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.5 26V13" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>  
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="tambahRuangModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Ruang</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="fungsi/tambah.php?ruang=tambah" method="post">
                        <div class="modal-body" style="font-size: 16px">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kode:</label>
                                <input type="text" name="kode" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Ruang:</label>
                                <input type="text" name="nama_ruang" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Lantai: </label>
                                <select class="form-select text-modal-custom" name="lantai" name aria-label="Default select example">
                                    <option selected>Pilih Lantai</option>
                                    <?php
                                    $query2 = "SELECT DISTINCT lantai FROM ruangan ORDER BY lantai ASC";
                                    $result2 = mysqli_query($koneksi, $query2);
                                    while($row2 = mysqli_fetch_assoc($result2)) {
                                    ?>
                                        <option value="<?= $row2['kode']; ?>"><?= $row2['lantai']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kapasitas:</label>
                                <input type="text" name="kapasitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Fasilitas:</label>
                                <select class="form-select text-modal-custom" name="fasilitas" name aria-label="Default select example">
                                    <option selected>Pilih Fasilitas</option>
                                    <?php
                                    $query3 = "SELECT nama_barang FROM fasilitas";
                                    $result3 = mysqli_query($koneksi, $query3);
                                    while($row3 = mysqli_fetch_assoc($result3)) {
                                    ?>
                                        <option value="<?= $row3['id_fasilitas']; ?>"><?= $row3['nama_barang']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-batal" data-bs-dismiss="modal">
                                    Batal
                            </button>
                            <button type="submit" class="btn btn-simpan">
                                    Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    

</body>
</html>