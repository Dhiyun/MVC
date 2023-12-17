<head>
    <title>
        <?= $data['judul']; ?>
    </title>
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
            border-radius: 64px;
            background: #ECEBEB;
            border: none;
        }
    </style>
</head>
<body>
<title><?= $data['judul'] ?></title>
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
                        <?php
                            // $no = 1;
                            foreach ($data['rng'] as $row) {
                        ?>
                            <tr>
                                <td>
                                    <?= $row['kode'] ?>
                                </td>
                                <td>
                                    <?= $row['nama_ruangan'] ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#tambahRuangModal" data-bs-whatever="@mdo" data-kode="<?= $row['kode'] ?>"> 
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
        <div class="modal fade" id="tambahRuangModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content content-custom">
                    <form action="fungsi/tambah.php?ruang=tambah" method="post">
                        <div class="modal-body" style="font-weight: 700;">
                            <div class="mb-4 pt-4">
                                <label for="recipient-name" class="col-form-label">Nama</label>
                                <input type="text" name="nama" class="form-control modal-custom" placeholder="Nama">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nim</label>
                                <input type="text" name="nim" class="form-control modal-custom" placeholder="Nim" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Tanggal Pinjam</label>
                                <input type="date" name="tanggal_pinjam" class="form-control modal-custom" placeholder="Tanggal Pinjam" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Tanggal Selesai</label>
                                <input type="date" name="tanggal_kembali" class="form-control modal-custom" placeholder="Tanggal Selesai" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kode Ruang</label>
                                <input type="hidden" name="old_kode" value="<?= $row['kode'] ?>">
                                <input type="text" name="kode" class="form-control modal-custom" placeholder="Kode Ruang"
                                    value="<?= $row['kode'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Keterangan</label>
                                <textarea type="text" name="keterangan" class="form-control modal-custom" placeholder="Keterangan" id="recipient-name"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nomor HP</label>
                                <input type="text" name="no_telp" class="form-control modal-custom" placeholder="No. Hp" id="recipient-name">
                            </div>            
                        </div>
                        <div class="modal-footer" style="border: none;">
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
        <?php }?>
    </div>
</body>