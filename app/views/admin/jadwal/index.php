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

        .btn-closee {
            background-color: #FB9224;
            color: #fff;
            border-radius: 20px;
            width: 90px;
            height: 35px;
            font-size: 14px;
        }

        .btn-closee:hover {
            background-color: #FB9224;
            color: #fff;
        }

        .btn-read {
            background-color: #00AA25;
            color: #fff;
            width: 42px;
            height: 35px;
            font-size: 14px;
        }

        .btn-read:hover {
            background-color: #00AA25;
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
            border: none;
            background-color: #ECEBEB;
        }

        .content-custom {
            border-radius: 20px; 
            background: #F8F8F8;
        }
    </style>
</head>

<div class="col-md-2"></div>
<main class="col-md-10" style="background-color: #F5F5F5">
    <div class="row pt-3 pb-2 mb-3 px-1 border-bottom">
        <div class="d-flex p-1 justify-content-center align-items-center custom-title-box">
            <div class="mx-3 custom-title-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                    <path
                        d="M25.1253 5.34V3C25.1253 2.385 24.6153 1.875 24.0003 1.875C23.3853 1.875 22.8753 2.385 22.8753 3V5.25H13.1253V3C13.1253 2.385 12.6153 1.875 12.0003 1.875C11.3853 1.875 10.8753 2.385 10.8753 3V5.34C6.82534 5.715 4.86034 8.13 4.56034 11.715C4.53034 12.15 4.89034 12.51 5.31034 12.51H30.6903C31.1253 12.51 31.4853 12.135 31.4403 11.715C31.1403 8.13 29.1753 5.715 25.1253 5.34Z"
                        fill="#292D32" />
                    <path
                        d="M28.5 22.5C25.185 22.5 22.5 25.185 22.5 28.5C22.5 29.625 22.815 30.69 23.37 31.59C24.405 33.33 26.31 34.5 28.5 34.5C30.69 34.5 32.595 33.33 33.63 31.59C34.185 30.69 34.5 29.625 34.5 28.5C34.5 25.185 31.815 22.5 28.5 22.5ZM31.605 27.855L28.41 30.81C28.2 31.005 27.915 31.11 27.645 31.11C27.36 31.11 27.075 31.005 26.85 30.78L25.365 29.295C24.93 28.86 24.93 28.14 25.365 27.705C25.8 27.27 26.52 27.27 26.955 27.705L27.675 28.425L30.075 26.205C30.525 25.785 31.245 25.815 31.665 26.265C32.085 26.715 32.055 27.42 31.605 27.855Z"
                        fill="#292D32" />
                    <path
                        d="M30 14.7598H6C5.175 14.7598 4.5 15.4348 4.5 16.2598V25.4998C4.5 29.9998 6.75 32.9998 12 32.9998H19.395C20.43 32.9998 21.15 31.9948 20.82 31.0198C20.52 30.1498 20.265 29.1898 20.265 28.4998C20.265 23.9548 23.97 20.2498 28.515 20.2498C28.95 20.2498 29.385 20.2798 29.805 20.3548C30.705 20.4898 31.515 19.7848 31.515 18.8848V16.2748C31.5 15.4348 30.825 14.7598 30 14.7598ZM13.815 27.3148C13.53 27.5848 13.14 27.7498 12.75 27.7498C12.36 27.7498 11.97 27.5848 11.685 27.3148C11.415 27.0298 11.25 26.6398 11.25 26.2498C11.25 25.8598 11.415 25.4698 11.685 25.1848C11.835 25.0498 11.985 24.9448 12.18 24.8698C12.735 24.6298 13.395 24.7648 13.815 25.1848C14.085 25.4698 14.25 25.8598 14.25 26.2498C14.25 26.6398 14.085 27.0298 13.815 27.3148ZM13.815 22.0648C13.74 22.1248 13.665 22.1848 13.59 22.2448C13.5 22.3048 13.41 22.3498 13.32 22.3798C13.23 22.4248 13.14 22.4548 13.05 22.4698C12.945 22.4848 12.84 22.4998 12.75 22.4998C12.36 22.4998 11.97 22.3348 11.685 22.0648C11.415 21.7798 11.25 21.3898 11.25 20.9998C11.25 20.6098 11.415 20.2198 11.685 19.9348C12.03 19.5898 12.555 19.4248 13.05 19.5298C13.14 19.5448 13.23 19.5748 13.32 19.6198C13.41 19.6498 13.5 19.6948 13.59 19.7548C13.665 19.8148 13.74 19.8748 13.815 19.9348C14.085 20.2198 14.25 20.6098 14.25 20.9998C14.25 21.3898 14.085 21.7798 13.815 22.0648ZM19.065 22.0648C18.78 22.3348 18.39 22.4998 18 22.4998C17.61 22.4998 17.22 22.3348 16.935 22.0648C16.665 21.7798 16.5 21.3898 16.5 20.9998C16.5 20.6098 16.665 20.2198 16.935 19.9348C17.505 19.3798 18.51 19.3798 19.065 19.9348C19.335 20.2198 19.5 20.6098 19.5 20.9998C19.5 21.3898 19.335 21.7798 19.065 22.0648Z"
                        fill="#292D32" />
                </svg>
            </div>
            <div class="custom-title-text">JADWAL</div>
        </div>
    </div>
    <div class="row px-3">
        <div class="col-lg-3">
            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@mdo"><i class="fa fa-plus"></i> Tambah Jadwal</button>
        </div>
    </div>

    <div class="row px-3 mt-3">
        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="table-responsive small pt-3 px-3">
        <table id="tablejadwal" class="table rounded">
            <thead>
                <tr>
                    <th scope="col" style="background-color: #363062; color:#fff;">No.</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">K. Ruangan</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">N. Ruangan</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Hari</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Matkul</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach($data['jdwl'] as $row) {
                ?>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            <?= $row['kode'] ?>
                        </td>
                        <td>
                            <?= $row['nama_ruangan'] ?>
                        </td>
                        <td>
                            <?= $row['hari'] ?>
                        </td>
                        <td>
                            <?= $row['matkul'] ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-read btn-xs" data-bs-toggle="modal"
                                data-bs-target="#readModal<?= $row['id'] ?>">
                                <img src="../assets/icon/ic-read.png" alt="" style="width: 17px; margin-bottom: 2px; margin-right: 3px;"> 
                            </button>
                            <button type="button" class="btn btn-edit btn-xs" data-bs-toggle="modal"
                                data-bs-target="#editModal<?= $row['id'] ?>">
                                <img src="../assets/icon/ic-edit-hitam.png" alt="" style="width: 17px; margin-bottom: 2px; margin-right: 3px;">
                                
                            </button>
                            <a href="<?= JADWALURL ?>/hapus/<?= $row['id'] ?>"
                                onclick="javascript:return confirm('Hapus Data Jadwal ?');"
                                class="btn btn-delete btn-xs"><img src="../assets/icon/ic-delete.png" alt="" srcset=""
                                    style=" width:17px; margin-bottom: 2px; margin-right: 3px;"> </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="true"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content content-custom">
                <form action="<?= JADWALURL ?>/tambah" method="post">
                    <div class="modal-body" style="font-weight: 700;">
                        <div class="row mb-4 pt-4">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Kode Ruang:</label>
                                <select class="form-select modal-custom" name="kode_ruang"
                                    aria-label="Default select example">
                                    <option selected>Pilih Kode Ruang</option>
                                    <?php
                                    foreach($data['rng'] as $row2) {
                                        ?>
                                        <option value="<?= $row2['kode']; ?>">
                                            <?= $row2['kode']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Hari:</label>
                                <select class="form-select modal-custom" name="hari"
                                    aria-label="Default select example">
                                    <option selected>Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 pt-2">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Jam Mulai: </label>
                                <input type="time" name="waktu_mulai" class="form-control modal-custom"
                                    id="recipient-name">
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Jam Selesai:</label>
                                <input type="time" name="waktu_selesai" class="form-control modal-custom"
                                    id="recipient-name">
                            </div>
                        </div>
                        <div class="row mb-4 pt-2">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Matkul:</label>
                                <input type="text" name="matkul" class="form-control modal-custom"
                                    id="recipient-name">
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Dosen:</label>
                                <input type="text" name="nama_dosen" class="form-control modal-custom"
                                    id="recipient-name">
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Kelas:</label>
                                <input type="text" name="nama_kelas" class="form-control modal-custom"
                                    id="recipient-name">
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Program Studi:</label>
                                <input type="text" name="prodi" class="form-control modal-custom"
                                    id="recipient-name">
                            </div>
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

    <?php
        foreach($data['jdwl'] as $row) {
    ?>

    <!-- Modal Read -->
    <div class="modal fade" id="readModal<?= $row['id'] ?>" tabindex="-1"
        aria-labelledby="readModalLabel<?= $row['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content content-custom">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="readModalLabel<?= $row['kode'] ?>"><b>
                            <?= $row['nama_ruangan'] ?>
                        </b> </h1>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <form action="fungsi/edit.php?ruang=edit&kode=<?= $row['kode'] ?>" method="read"
                    style="font-size: 15px">
                    <div class="modal-body" style="font-weight: 700;">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Kode Ruang:</label>
                                <input type="text" name="kode_ruang" class="form-control modal-custom"
                                    value="<?= $row['kode_ruang'] ?>" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Hari:</label>
                                <input type="text" name="hari" class="form-control modal-custom"
                                    value="<?= $row['hari'] ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Jam Mulai: </label>
                                <input type="text" name="waktu_mulai" class="form-control modal-custom"
                                    value="<?= $row['waktu_mulai'] ?>" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Jam Selesai:</label>
                                <input type="text" name="waktu_selesai" class="form-control modal-custom"
                                    value="<?= $row['waktu_selesai'] ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Matkul:</label>
                                <input type="text" name="matkul" class="form-control modal-custom"
                                    value="<?= $row['matkul'] ?>" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Dosen:</label>
                                <input type="text" name="nama_dosen" class="form-control modal-custom"
                                    value="<?= $row['nama_dosen'] ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Kelas:</label>
                                <input type="text" name="nama_kelas" class="form-control modal-custom"
                                    value="<?= $row['nama_kelas'] ?>" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Program Studi:</label>
                                <input type="text" name="prodi" class="form-control modal-custom"
                                    value="<?= $row['prodi'] ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="border: none;">
                        <button type="button" class="btn btn-closee" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php }
        foreach($data['jdwl'] as $row) {
    ?>
    
    <!-- Modal Edit -->
    <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1"
        aria-labelledby="editModalLabel<?= $row['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content content-custom">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel<?= $row['kode'] ?>"><b>
                            <?= $row['nama_ruangan'] ?>
                        </b> </h1>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <form action="<?= JADWALURL ?>/edit" method="post">
                    <input type="text" name="id" value="<?= $row['id'] ?>" hidden>
                    <div class="modal-body" style="font-weight: 700;">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Kode Ruang:</label>
                                <select class="form-select modal-custom" name="kode_ruang"
                                    aria-label="Default select example">
                                    <option selected>Pilih Kode Ruang</option>
                                    <?php
                                    foreach($data['rng'] as $row2) {
                                        ?>
                                        <option value="<?= $row2['kode'] ?>" <?= ($row2['kode'] == $row['kode_ruang']) ? 'selected' : '' ?>>
                                            <?= $row2['kode'] ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Hari:</label>
                                <select class="form-select modal-custom" name="hari"
                                    aria-label="Default select example">
                                    <option selected>Pilih Hari</option>
                                    <?php
                                    $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
                                    foreach($days as $day) {
                                        ?>
                                        <option value="<?= $day ?>" <?= ($day == $row['hari']) ? 'selected' : '' ?>>
                                            <?= $day ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Jam Mulai: </label>
                                <input type="time" name="waktu_mulai" class="form-control modal-custom"
                                    value="<?= $row['waktu_mulai'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Jam Selesai:</label>
                                <input type="time" name="waktu_selesai" class="form-control modal-custom"
                                    value="<?= $row['waktu_selesai'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Matkul:</label>
                                <input type="text" name="matkul" class="form-control modal-custom"
                                    value="<?= $row['matkul'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Dosen:</label>
                                <input type="text" name="nama_dosen" class="form-control modal-custom"
                                    value="<?= $row['nama_dosen'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Kelas:</label>
                                <input type="text" name="nama_kelas" class="form-control modal-custom"
                                    value="<?= $row['nama_kelas'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Program Studi:</label>
                                <input type="text" name="prodi" class="form-control modal-custom"
                                    value="<?= $row['prodi'] ?>">
                            </div>
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