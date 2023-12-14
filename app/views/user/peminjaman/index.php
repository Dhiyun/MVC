<div class="container mb-5">
    <div class="card mt-4" style="border: 0; border-radius: 20px;">
        <div class="card-body">
            <nav class="navbar navbar-light" style="border-radius: 15px;">
                <div class="row">
                    <div class="col-md-9">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2 search" id="myInput" type="search"
                                placeholder="Search by Nama Ruang" aria-label="Search">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 35 35"
                                    fill="none">
                                    <circle cx="15.0251" cy="15.0249" r="12.75" stroke="black" stroke-width="3" />
                                    <path d="M24.375 24.375L33.3906 33.3906" stroke="black" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <form action="">
                            <input class="form-control mr-sm-2 datepicker" type="date" placeholder=".col-md-3"
                                aria-label="Search">
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
                                    <button type="button" class="btn btn-custom" data-bs-toggle="modal"
                                        data-bs-target="#tambahRuangModal" data-bs-whatever="@mdo">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 39 39"
                                            fill="none">
                                            <path
                                                d="M19.5 35.75C28.4375 35.75 35.75 28.4375 35.75 19.5C35.75 10.5625 28.4375 3.25 19.5 3.25C10.5625 3.25 3.25 10.5625 3.25 19.5C3.25 28.4375 10.5625 35.75 19.5 35.75Z"
                                                stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13 19.5H26" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M19.5 26V13" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
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
                            <input type="text" name="nama_ruang" class="form-control text-modal-custom"
                                id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Lantai: </label>
                            <select class="form-select text-modal-custom" name="lantai" name
                                aria-label="Default select example">
                                <option selected>Pilih Lantai</option>
                                <?php
                                $query2 = "SELECT DISTINCT lantai FROM ruangan ORDER BY lantai ASC";
                                $result2 = mysqli_query($koneksi, $query2);
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    ?>
                                    <option value="<?= $row2['kode']; ?>">
                                        <?= $row2['lantai']; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kapasitas:</label>
                            <input type="text" name="kapasitas" class="form-control text-modal-custom"
                                id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Fasilitas:</label>
                            <select class="form-select text-modal-custom" name="fasilitas" name
                                aria-label="Default select example">
                                <option selected>Pilih Fasilitas</option>

                                <option></option>

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