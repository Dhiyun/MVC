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
            background-color: #DDD;
            border: none;
        }

        .content-custom {
            border-radius: 20px; 
            background: #F8F8F8;
        }

        #tableruang {
            color:#000;
        }
    </style>
</head>

<div class="col-md-2"></div>
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
        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="table-responsive small pt-3 px-3" >
        <table id="tableruang" class="table rounded">
            <thead>
                <tr>
                    <th scope="col" style="background-color: #363062; color:#fff;">No.</th>
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
                    $no = 1;
                    foreach ($data['rng'] as $row) {
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
                                
                            </a>
                            <a href="<?= RUANGURL ?>/hapus/<?= $row['kode'] ?>"
                                onclick="javascript:return confirm('Hapus Data Ruang ?');"
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
                    <h1 class="modal-title fs-5" id="modalTitleId"><b>TAMBAH RUANG</b></h1>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <form action="<?= RUANGURL ?>/tambah" method="post">
                    <div class="modal-body"  style="font-weight: 700;">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kode:</label>
                            <input type="text" name="kode" class="form-control modal-custom" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Ruang:</label>
                            <input type="text" name="nama_ruangan" class="form-control modal-custom" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Lantai: </label>
                            <select class="form-select modal-custom" name="lantai"
                                aria-label="Default select example" required>
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
                            <label for="recipient-name" class="col-form-label">Kapasitas: </label>
                            <input type="text" name="kapasitas" class="form-control modal-custom"
                                id="recipient-name" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Fasilitas:</label><br>
                            <?php
                                foreach ($data['fsl'] as $row3) {
                            ?>
                                <label style="font-weight: normal;">
                                    <input type="checkbox" name="fasilitas_checked[]" 
                                    style="margin-right: 5px;"
                                    value="<?= $row3['id']; ?>"><?= $row3['nama_barang']; ?>
                                </label><br>
                            <?php
                                }
                            ?>
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
        foreach ($data['rng'] as $row) {
    ?>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal<?= $row['kode'] ?>" tabindex="-1"
        aria-labelledby="editModalLabel<?= $row['kode'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content content-custom">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel"><b>EDIT RUANG</b></h1>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <form action="<?= RUANGURL ?>/edit" method="POST">
                    <div class="modal-body" style="font-weight: 700;;">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kode:</label>
                            <input type="hidden" name="old_kode" value="<?= $row['kode'] ?>">
                            <input type="text" name="kode" class="form-control modal-custom"
                                value="<?= $row['kode'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Ruang:</label>
                            <input type="text" name="nama_ruangan" class="form-control modal-custom"
                                value="<?= $row['nama_ruangan'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Lantai:</label>
                            <select name="lantai" class="form-select modal-custom">
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
                            <input type="text" name="kapasitas" class="form-control modal-custom"
                                value="<?= $row['kapasitas'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Fasilitas:</label><br>
                            <?php
                            foreach ($data['fsl'] as $row3) {
                                $selectedFasilitas = explode(',', $row['nama_barang']);
                                ?>
                                <label style="font-weight: normal;">
                                    <input type="checkbox" name="fasilitas_checked[]" value="<?= $row3['id']; ?>" 
                                        <?php echo (in_array($row3['nama_barang'], $selectedFasilitas)) ? 'checked' : ''; ?>>
                                        <?= $row3['nama_barang']; ?>
                                </label><br>
                                <?php
                            }
                            ?>
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