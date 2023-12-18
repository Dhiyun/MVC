<head>
    <style>
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

        .btn-edit {
            background-color: #FBE555;
            color: #000;
            width: 42px;
            height: 35px;
            font-size: 14px;
        }

        .btn-edit:hover {
            background-color: #FBE555;
            color: #000;
        }

        .btn-delete {
            background-color: #A33B03;
            color: #fff;
            width: 42px;
            height: 35px;
            font-size: 14px;
        }

        .btn-delete:hover {
            background-color: #A33B03;
            color: #fff;
        }

        .modal-custom {
            font-size: 16px;
            border-radius: 10px;
            background: #DDD;
            border: none;
        }

        .content-custom {
            border-radius: 20px; 
            background: #F8F8F8;
        }

        #tableruang {
            color: #000;
        }
    </style>
</head>

<div class="col-md-2"></div>
<main class="col-md-10" style="background-color: #F5F5F5">
    <div class="row pt-3 pb-2 mb-3 px-1 border-bottom">
        <div class="d-flex p-1 justify-content-center align-items-center custom-title-box">
            <div class="mx-3 custom-title-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" viewBox="0 0 24 24" fill="none">
                    <path d="M9 2C6.38 2 4.25 4.13 4.25 6.75C4.25 9.32 6.26 11.4 8.88 11.49C8.96 11.48 9.04 11.48 9.1 11.49C9.12 11.49 9.13 11.49 9.15 11.49C9.16 11.49 9.16 11.49 9.17 11.49C11.73 11.4 13.74 9.32 13.75 6.75C13.75 4.13 11.62 2 9 2Z" fill="#292D32"/>
                    <path d="M14.0809 14.1489C11.2909 12.2889 6.74094 12.2889 3.93094 14.1489C2.66094 14.9989 1.96094 16.1489 1.96094 17.3789C1.96094 18.6089 2.66094 19.7489 3.92094 20.5889C5.32094 21.5289 7.16094 21.9989 9.00094 21.9989C10.8409 21.9989 12.6809 21.5289 14.0809 20.5889C15.3409 19.7389 16.0409 18.5989 16.0409 17.3589C16.0309 16.1289 15.3409 14.9889 14.0809 14.1489Z" fill="#292D32"/>
                    <path d="M19.9894 7.33815C20.1494 9.27815 18.7694 10.9781 16.8594 11.2081C16.8494 11.2081 16.8494 11.2081 16.8394 11.2081H16.8094C16.7494 11.2081 16.6894 11.2081 16.6394 11.2281C15.6694 11.2781 14.7794 10.9681 14.1094 10.3981C15.1394 9.47815 15.7294 8.09815 15.6094 6.59815C15.5394 5.78815 15.2594 5.04815 14.8394 4.41815C15.2194 4.22815 15.6594 4.10815 16.1094 4.06815C18.0694 3.89815 19.8194 5.35815 19.9894 7.33815Z" fill="#292D32"/>
                    <path d="M21.9883 16.5904C21.9083 17.5604 21.2883 18.4004 20.2483 18.9704C19.2483 19.5204 17.9883 19.7804 16.7383 19.7504C17.4583 19.1004 17.8783 18.2904 17.9583 17.4304C18.0583 16.1904 17.4683 15.0004 16.2883 14.0504C15.6183 13.5204 14.8383 13.1004 13.9883 12.7904C16.1983 12.1504 18.9783 12.5804 20.6883 13.9604C21.6083 14.7004 22.0783 15.6304 21.9883 16.5904Z" fill="#292D32"/>
                </svg>
            </div>
            <div class="custom-title-text">DOSEN</div>
        </div>
    </div>
    <div class="row px-3">
        <div class="col-lg-3">
            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@mdo"><i class="fa fa-plus"></i> Tambah Dosen</button>
        </div>
    </div>

    <div class="row px-3 mt-3">
        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="table-responsive small pt-3 px-3">
        <table id="tableruang" class="table rounded">
            <thead>
                <tr>
                    <th scope="col" style="background-color: #363062; color:#fff;">No.</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Kode</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Nama Dosen</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach ($data['dsn'] as $row) {
                ?>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            <?= $row['kode'] ?>
                        </td>
                        <td>
                            <?= $row['nama_dosen'] ?>
                        </td>
                        <td>
                            <a class="btn btn-edit btn-xs" data-bs-toggle="modal" data-kode="<?= $row['kode'] ?>"
                                data-bs-target="#editModal<?= $row['kode'] ?>">
                                <img src="../assets/icon/ic-edit-hitam.png" alt="" style="width: 16px; margin-bottom: 2px;">
                                
                            </a>
                            <a href="<?= DOSENURL ?>/hapus/<?= $row['kode'] ?>"
                                onclick="javascript:return confirm('Hapus Data Dosen ?');"
                                class="btn btn-delete btn-xs"><img src="../assets/icon/ic-delete.png" alt="" srcset=""
                                    style="width: 16px; margin-bottom: 2px;"> </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="true"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content content-custom">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTitleId"><b>TAMBAH DOSEN</b></h1>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <form action="<?= DOSENURL ?>/tambah" method="post">
                    <div class="modal-body" style="font-weight: 700;">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kode:</label>
                            <input type="text" name="kode" class="form-control modal-custom" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Dosen:</label>
                            <input type="text" name="nama_dosen" class="form-control modal-custom" required>
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

    <?php
        foreach ($data['dsn'] as $row) {
    ?>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal<?= $row['kode'] ?>" tabindex="-1"
        aria-labelledby="editModalLabel<?= $row['kode'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content content-custom">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel"><b>EDIT DOSEN</b></h1>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <form action="<?= DOSENURL ?>/edit" method="POST">
                    <div class="modal-body" style="font-weight: 700;">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kode:</label>
                            <input type="hidden" name="old_kode" value="<?= $row['kode'] ?>">
                            <input type="text" name="kode" class="form-control modal-custom"
                                value="<?= $row['kode'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Dosen:</label>
                            <input type="text" name="nama_dosen" class="form-control modal-custom"
                                value="<?= $row['nama_dosen'] ?>">
                        </div>
                    </div>
                    <div class="modal-footer" style="border: none;">
                        <button type="button" class="btn btn-batal" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
</main>