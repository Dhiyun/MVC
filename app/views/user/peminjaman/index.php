<head>
<<<<<<< HEAD
    <style>
        body {
            background-color: #2A1A5E;
        }

        .btn-custom {
            background-color: none;
            border: none;
            padding-left: 0;
        }

        .btn-batal {
            background-color: #2A1A5E;
            color: #fff;
            border-radius: 20px;
            width: 80px;
            height: 35px;
            font-size: 14px;
        }

        .btn-batal:hover {
            background-color: #242041;
            color: #fff;
        }

        .btn-pinjam {
            background-color: #FFBD2E;
            color: #fff;
            border-radius: 20px;
            width: 90px;
            height: 35px;
            font-size: 14px;
        }

        .btn-pinjam:hover {
            background-color: #FFBD2E;
            color: #fff;
        }

        .btn-simpan {
            background-color: #FB9224;
            color: #fff;
            border-radius: 20px;
            width: 90px;
            height: 35px;
            font-size: 14px;
        }

        .btn-simpan:hover {
            background-color: #FB9224;
            color: #fff;
        }

        .search {
            border-radius: 10px;
            background: #D9D9D9;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;
            width: 497px;
            height: 35px;
            flex-shrink: 0;
        }

        .icon {
            position: absolute;
            display: flex;
            align-items: center;
            left: 462px;
            top: 31%;
        }

        /* .icon-2 {
            position: absolute;
            display: flex;
            align-items: center;
            left: 679px;
            top: 23%;
        } */

        .form-inline input{
            padding-right: 50px;
        }

        .search::-webkit-search-cancel-button,
        .search::-webkit-search-clear-button {
            appearance: none;
            display: none;
        }

        .datepicker {
            border-radius: 10px;
            background: #D9D9D9;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;
            width: 175px;
            height: 35px;
            flex-shrink: 0;
            padding-left: 15px;
        }

        .content-custom {
            border-radius: 20px; 
            background: #F8F8F8;
        }

        .modal-custom {
            font-size: 16px;
            border-radius: 10px;
            background: #DDD;
            border: none;
        }
    </style>
=======
    <title>
        <?= $data['judul']; ?>
    </title>
>>>>>>> 4d14c5c3d5ee77c49fa96f8339875c33b29248c9
</head>
<body>
<?php Flasher::flash(); ?>
    <div class="container mb-5">
        <div class="card mt-4" style="border: 0; border-radius: 20px;">
            <div class="card-body">
                <nav class="navbar navbar-light">
                    <div class="row">
                        <div class="col-md-9">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2 search" id="myInput" type="search" placeholder="Search by Nama Ruang" aria-label="Search">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 35 35" fill="none">
                                        <circle cx="15.0251" cy="15.0249" r="12.75" stroke="black" stroke-width="3"/>
                                        <path d="M24.375 24.375L33.3906 33.3906" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <form action="">
                                <input class="form-control mr-sm-2 datepicker" type="date" placeholder=".col-md-3" aria-label="Search">
                            </form>
                        </div>
                    </div>
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
                        <?php foreach ($data['rng'] as $row) { ?>
                            <tr>
                                <td>
                                    <?= $row['kode'] ?>
                                </td>
                                <td>
                                    <?= $row['nama_ruangan'] ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#tambahRuangModal<?= $row['kode'] ?>" data-bs-whatever="@mdo" data-kode="<?= $row['kode'] ?>"> 
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
        <?php
            foreach ($data['rng'] as $row) {
        ?>

        <!-- Modal Tambah-->
        <div class="modal fade" id="tambahRuangModal<?= $row['kode'] ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId<?= $row['kode'] ?>" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content content-custom">
                    <form action="<?= PEMINJAMANURL ?>/tambah" method="post">
                    <input type="hidden" name="status" value="Proses">
                        <div class="modal-body" style="font-weight: 700;">
                            <div class="mb-3 pt-4">
                                <label for="recipient-name" class="col-form-label">Nama</label>
                                <?php foreach($data['usr'] as $rowu) :
                                    if($_SESSION['username'] == $rowu['username']) : ?>
                                <input type="text" name="nama_user" class="form-control modal-custom" value="<?= $rowu['nama_user'] ?>" readonly required>
                                <?php endif; 
                                endforeach; ?>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">NIM</label>
                                <?php foreach($data['usr'] as $rowu) :
                                    if($_SESSION['username'] == $rowu['username']) : ?>
                                <input type="text" name="username" value="<?= $rowu['username'] ?>" class="form-control modal-custom" id="recipient-name" readonly required>
                                <?php endif; 
                                endforeach; ?>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Tanggal Pinjam</label>
                                <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control text-modal-custom" min="<?= date('Y-m-d'); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Tanggal Selesai</label>
                                <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control text-modal-custom" min="<?= date('Y-m-d'); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kode Ruang</label>
                                <input type="text" name="kode_ruangan" class="form-control modal-custom"
                                    value="<?= $row['kode'] ?>" readonly required>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Keterangan</label>
                                <textarea type="text" name="keterangan" class="form-control text-modal-custom" id="recipient-name" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nomor HP</label>
                                <input type="text" name="no_telp" class="form-control text-modal-custom" id="recipient-name" pattern="[0-9]+" required>
                            </div>            
                        </div>
                        <div class="modal-footer" style="border: none;">
                            <button type="button" class="btn btn-batal" data-bs-dismiss="modal">
                                    Batal
                            </button>
                            <button type="submit" class="btn btn-simpan" onclick="openModal()">
                                    Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</body>

<script>
    document.getElementById('tanggal_pinjam').addEventListener('change', function () {
        var tanggalPinjam = new Date(this.value);
        var tanggalKembaliInput = document.getElementById('tanggal_kembali');
        
        // Set nilai minimum pada tanggal_kembali berdasarkan tanggal_pinjam
        tanggalKembaliInput.min = formatDate(tanggalPinjam);
        
        // Reset nilai tanggal_kembali jika nilai saat ini kurang dari tanggal minimum
        if (new Date(tanggalKembaliInput.value) < tanggalPinjam) {
            tanggalKembaliInput.value = formatDate(tanggalPinjam);
        }
    });

    function formatDate(date) {
        var dd = String(date.getDate()).padStart(2, '0');
        var mm = String(date.getMonth() + 1).padStart(2, '0');
        var yyyy = date.getFullYear();
        return yyyy + '-' + mm + '-' + dd;
    }
</script>
