<head>
    <title>
        <?= $data['judul']; ?>
    </title>
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
            background-color: #FFBD2E;
            color: #fff;
            border-radius: 20px;
            width: 90px;
            height: 35px;
            font-size: 14px;
        }

        .btn-simpan:hover {
            background-color: #FFBD2E;
            color: #fff;
        }

        .btn-edit {
            background-color: #FBE555;
            color: #000;
            width: 80px;
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
            width: 100px;
            height: 35px;
            font-size: 14px;
        }

        .btn-delete:hover {
            background-color: #A33B03;
            color: #fff;
        }

        .text-modal-custom {
            font-size: 14px;
        }
    </style>
</head>

<main class="col-md-10" style="background-color: #F5F5F5">
    <div class="row pt-3 pb-2 mb-3 px-1 border-bottom">
        <div class="d-flex p-1 justify-content-center align-items-center custom-title-box">
            <div class="mx-3 custom-title-icon">
                <img src="../assets/icon/ruang-2.png" style="width: 36px;" alt="" srcset="">
            </div>
            <div class="custom-title-text">RUANG</div>
        </div>
    </div>
    <div class="row px-3">
        <div class="col-lg-3">
            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@mdo"><i class="fa fa-plus"></i> Tambah Ruang</button>
        </div>
    </div>

    <div class="row px-3 mt-3">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    
    <div class="table-responsive small pt-3 px-3" style="border-radius: 50px;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="background-color: #363062; color:#fff;">Kode</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Nama Ruang</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Lantai</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Kapasitas</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Fasilitas</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
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
                            <?= $row['lantai'] ?>
                        </td>
                        <td>
                            <?= $row['kapasitas'] ?>
                        </td>
                        <td>
                            <?= $row['nama_barang'] ?>
                        </td>
                        <td>
                            <a class="btn btn-edit btn-xs" data-bs-toggle="modal" data-kode="<?= $row['kode'] ?>"
                                data-bs-target="#editModal<?= $row['kode'] ?>">
                                <img src="../assets/icon/ic-edit-hitam.png" alt="" style="width: 16px; margin-bottom: 2px;">
                                Edit
                            </a>
                            <a href="<?= RUANGURL ?>/hapus/<?= $row['kode'] ?>"
                                onclick="javascript:return confirm('Hapus Data Jabatan ?');"
                                class="btn btn-delete btn-xs"><img src="../assets/icon/ic-delete.png" alt="" srcset=""
                                    style="width: 16px; width:16px; margin-bottom: 3px;"> Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="true"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Ruang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= RUANGURL ?>/tambah" method="post">
                    <div class="modal-body" style="font-size: 16px">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kode:</label>
                            <input type="text" name="kode" class="form-control text-modal-custom">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Ruang:</label>
                            <input type="text" name="nama_ruangan" class="form-control text-modal-custom">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Lantai: </label>
                            <select class="form-select text-modal-custom" name="lantai"
                                aria-label="Default select example">
                                <option selected>Pilih Lantai</option>
                                <?php
                                foreach ($data['lnt'] as $row2) {
                                    ?>
                                    <option value="<?= $row2['lantai']; ?>">
                                        <?= $row2['lantai']; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kapasitas:</label>
                            <input type="text" name="kapasitas" class="form-control text-modal-cu stom"
                                id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Fasilitas:</label>
                            <select class="form-select text-modal-custom" name="id_fasilitas"
                                aria-label="Default select example">
                                <option selected>Pilih Fasilitas</option>
                                <?php
                                foreach ($data['fsl'] as $row3) {
                                    ?>
                                    <option value="<?= $row3['id']; ?>">
                                        <?= $row3['nama_barang']; ?>
                                    </option>
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

    <?php
    foreach ($data['rug'] as $row) {
        ?>

        <!-- Modal Edit -->
        <div class="modal fade" id="editModal<?= $row['kode'] ?>" tabindex="-1"
            aria-labelledby="editModalLabel<?= $row['kode'] ?>" aria-hidden="true" style="font-size: 15px">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel<?= $row['kode'] ?>">Edit Jadwal</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= RUANGURL ?>/edit" method="post"
                        style="font-size: 15px">
                        <div class="modal-body" style="font-size: 16px">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kode:</label>
                                <input type="hidden" name="old_kode" value="<?= $row['kode'] ?>">
                                <input type="text" name="kode" class="form-control text-modal-custom"
                                    value="<?= $row['kode'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Ruang:</label>
                                <input type="text" name="nama_ruangan" class="form-control text-modal-custom"
                                    value="<?= $row['nama_ruangan'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Lantai:</label>
                                <select name="lantai" class="form-select text-modal-custom">
                                    <option>Pilih Lantai</option>
                                    <?php
                                    foreach ($data['lnt'] as $row2) {
                                        ?>
                                        <option value="<?= $row2['lantai'] ?>" <?= ($row2['lantai'] == $row['lantai']) ? 'selected' : '' ?>>
                                            <?= $row2['lantai'] ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kapasitas:</label>
                                <input type="text" name="kapasitas" class="form-control text-modal-custom"
                                    value="<?= $row['kapasitas'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Fasilitas:</label>
                                <select class="form-select text-modal-custom" name="id_fasilitas" name
                                    aria-label="Default select example">
                                    <option selected>Pilih Fasilitas</option>
                                    <?php
                                    foreach ($data['fsl'] as $row3) {
                                        ?>
                                        <option value="<?= $row3['id']; ?>" <?= ($row3['id'] == $row['id_fasilitas']) ? 'selected' : '' ?>>
                                            <?= $row3['nama_barang']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-batal" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
</main>
