<head>
    <style>
        <?php foreach ($data['lnt'] as $row) : ?>
            <?php if ($row['lantai'] >= 6 && $row['lantai'] <= 8) : ?>
                #carouselLantai-<?php echo $row['lantai']; ?> {
                    display: none;
                }
            <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($data['lnt'] as $row) : ?>
            .hide-picture-<?php echo $row['lantai']; ?> {
                <?php if ($row['lantai'] != 7) : ?>
                    display: none;
                <?php endif; ?>
            }
        <?php endforeach; ?>

        .custom-select {
            background-image: url("../assets/icon/arrow-down.svg");
        }
    </style>
</head>
<body>
    <div class="container mb-5">
        <div class="card mt-4" style="border: 0; border-radius: 20px;">
            <div class="card-body">
                <nav class="navbar navbar-light">
                    <div class="row">
                        <div class="col-md-8">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2 search" id="myInput" type="search" placeholder="Search by Kode Ruang" aria-label="Search">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 35 35" fill="none">
                                        <circle cx="15.0251" cy="15.0249" r="12.75" stroke="black" stroke-width="3"/>
                                        <path d="M24.375 24.375L33.3906 33.3906" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="container">
                                <div id="carouselLantai" class="carousel slide" data-ride="carousel">
                                    <div class="box-carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <?php foreach ($data['lnt'] as $row) : ?>
                                                <div class="carousel-item <?= ($row['lantai'] == 5) ? 'active' : ''; ?> text-center pt-2">
                                                    <p>Lantai <?= $row['lantai']; ?></p>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <?php foreach ($data['lnt'] as $row) : ?>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselLantai" data-bs-slide="prev" data-carousel-index="<?= $row['lantai']; ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path d="M19.7749 22.3999L19.7749 14.6124V7.59993C19.7749 6.39993 18.3249 5.79993 17.4749 6.64993L10.9999 13.1249C9.9624 14.1624 9.9624 15.8499 10.9999 16.8874L13.4624 19.3499L17.4749 23.3624C18.3249 24.1999 19.7749 23.5999 19.7749 22.3999Z" fill="#292D32"/>
                                            </svg>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselLantai" data-bs-slide="next" data-carousel-index="<?= $row['lantai']; ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path d="M10.2251 7.60007L10.2251 15.3876V22.4001C10.2251 23.6001 11.6751 24.2001 12.5251 23.3501L19.0001 16.8751C20.0376 15.8376 20.0376 14.1501 19.0001 13.1126L16.5376 10.6501L12.5251 6.63757C11.6751 5.80007 10.2251 6.40007 10.2251 7.60007Z" fill="#292D32"/>
                                            </svg>
                                        </button>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                
                <?php foreach ($data['lnt'] as $row) : ?>
                    <div id="carouselLantai-<?php echo $row['lantai']; ?>">
                        <div class="text-center pb-5">
                            <img src="../assets/img/denah-lt-<?= $row['lantai']; ?>.png">
                            <img src="../assets/img/ket-lt-<?= $row['lantai']; ?>.png">
                            <br>
                            <img class="hide-picture-<?php echo $row['lantai']; ?>" src="../assets/img/ket-2-lt-<?= $row['lantai']; ?>.png">
                        </div>
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
                                    <?php foreach($data['rng'] as $row2) : 
                                        if($row2['lantai'] == $row['lantai']) {?>
                                        <tr>
                                            <td><?= $row2['kode']; ?></td>
                                            <td><?= $row2['nama_ruangan']; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-detail" data-bs-toggle="modal" data-bs-target="#detailModal<?= $row2['kode'] ?>" data-bs-whatever="@mdo">Detail</button>
                                            </td>
                                        </tr>
                                    <?php } endforeach; ?>
                                </tbody>  
                            </table>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php foreach ($data['rng'] as $row) : ?>
    <!-- Modal Detail-->
    <div class="modal fade" id="detailModal<?= $row['kode'] ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId<?= $row['kode'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content content-custom">
                <div class="modal-header" style="border: none;">
                    <h1 class="modal-title fs-5" id="readModalLabel<?= $row['kode'] ?>">
                        <b>Nama Ruang: <?= $row['nama_ruangan'] ?></b>
                    </h1>
                </div>
                <div class="modal-body border-bottom">
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <select class="form-select" style="border: none;" name="hari" id="selectHari<?= $row['kode'] ?>" aria-label="Default select example">
                                <b><option selected>Hari</option></b>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-body" style="font-weight: 700;">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Matkul:</label>
                            <select class="form-select custom-select" name="matkul" id="selectMatkul<?= $row['kode'] ?>" style="background-color: #2A1A5E; color: #fff; " aria-label="Default select example">
                                <option style="color: #000; background-color: #f2f2f2;"></option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Dosen:</label>
                            <input type="text" name="dosen" class="form-control modal-custom" id="dosen<?= $row['kode'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Jam Mulai: </label>
                            <input type="time" name="waktu_mulai" class="form-control modal-custom" id="waktu_mulai<?= $row['kode'] ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Kapasitas:</label>
                            <input type="text" name="kapasitas" class="form-control modal-custom" value="<?= $row['kapasitas'] ?>" id="recipient-name" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Jam Selesai:</label>
                            <input type="time" name="waktu_selesai" class="form-control modal-custom" id="waktu_selesai<?= $row['kode'] ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Fasilitas:</label>
                            <input type="text" name="fasilitas" class="form-control modal-custom" value="<?= $row['nama_barang'] ?>" id="recipient-name" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border: none;">
                    <button type="" class="btn btn-closee" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</body>

<script>
<?php foreach ($data['rng'] as $row) : ?>
    document.getElementById("selectHari<?= $row['kode'] ?>").addEventListener("change", function () {
        updateMatkul('<?= $row['kode'] ?>');
    });

    document.getElementById("selectMatkul<?= $row['kode'] ?>").addEventListener("change", function () {
        updateDosen('<?= $row['kode'] ?>');
    });

    document.getElementById("selectMatkul<?= $row['kode'] ?>").addEventListener("change", function () {
        updateJamMulai('<?= $row['kode'] ?>');
    });

    document.getElementById("selectMatkul<?= $row['kode'] ?>").addEventListener("change", function () {
        updateJamSelesai('<?= $row['kode'] ?>');
    });
<?php endforeach; ?>

// Objek untuk menyimpan pasangan mata kuliah dan dosen
var matkulDosenPairs = {};

function updateMatkul(kode) {
    var selectedHari = document.getElementById("selectHari" + kode).value;
    var dropdownMatkul = document.getElementById("selectMatkul" + kode);
    var selectedMatkul = dropdownMatkul.value;

    dropdownMatkul.innerHTML = "";

    // Menggunakan objek untuk menyimpan pasangan mata kuliah dan dosen
    matkulDosenPairs[kode] = {};

    <?php foreach ($data['jdwl'] as $rowj) : ?>
        if ("<?= $rowj['kode_ruang'] ?>" == kode && "<?= $rowj['hari'] ?>" == selectedHari) {
            var option = document.createElement("option");
            option.text = "<?= $rowj['matkul'] ?>";
            option.value = "<?= $rowj['kode_dosen'] ?>"; // Menggunakan kode dosen sebagai nilai
            option.style.color = "#000"; // Warna teks
            option.style.backgroundColor = "#f2f2f2";
            dropdownMatkul.add(option);

            // Menyimpan pasangan mata kuliah dan dosen
            matkulDosenPairs[kode][option.value] = "<?= $rowj['nama_dosen'] ?>";
        }
    <?php endforeach; ?>

    // Setelah memperbarui matkul, kita juga perlu memperbarui dosen
    updateDosen(kode);
    updateJamMulai(kode);
    updateJamSelesai(kode);
}

function updateDosen(kode) {
    var selectedMatkul = document.getElementById("selectMatkul" + kode).value;
    var inputDosen = document.getElementById("dosen" + kode);

    // Mengambil nama dosen dari objek matkulDosenPairs
    var namaDosen = matkulDosenPairs[kode][selectedMatkul] || "";
    inputDosen.value = namaDosen;
}

function updateJamMulai(kode) {
    var selectedMatkul = document.getElementById("selectMatkul" + kode).value;
    var inputWaktuMulai = document.getElementById("waktu_mulai" + kode);

    <?php foreach ($data['jdwl'] as $rowj) : ?>
        if ("<?= $rowj['kode_ruang'] ?>" == kode && "<?= $rowj['kode_dosen'] ?>" == selectedMatkul) {
            inputWaktuMulai.value = "<?= $rowj['waktu_mulai'] ?>";
        }
    <?php endforeach; ?>
}

function updateJamSelesai(kode) {
    var selectedMatkul = document.getElementById("selectMatkul" + kode).value;
    var inputWaktuSelesai = document.getElementById("waktu_selesai" + kode);

    <?php foreach ($data['jdwl'] as $rowj) : ?>
        if ("<?= $rowj['kode_ruang'] ?>" == kode && "<?= $rowj['kode_dosen'] ?>" == selectedMatkul) {
            inputWaktuSelesai.value = "<?= $rowj['waktu_selesai'] ?>";
        }
    <?php endforeach; ?>
}
</script>
