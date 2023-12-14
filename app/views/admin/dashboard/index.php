<main class="col-md-10" style="background-color: #F5F5F5">
    <div class="row pt-3 pb-2 mb-3 px-1 border-bottom">
        <div class="d-flex p-1 justify-content-center align-items-center custom-title-box">
            <div class="mx-3 custom-title-icon">
                <img src="../assets/icon/dashboard-2.png" style="width: 36px;" alt="" srcset="">
            </div>
            <div class="custom-title-text">DASHBOARD</div>
        </div>
    </div>
    <div class="row mx-1 justify-content-center align-items-center">
        <div class="col-sm-4">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row">
                        <div
                            style="width: 100px; height: 100px; background-color: #E14640; justify-content: center; align-items: center; display:flex; border-radius: 10px;">
                            <img src="../assets/icon/ruang.png" alt="" srcset="">
                        </div>
                        <div class="col my-3">
                            <h5 class="card-title" style="font-size: 17px;">RUANG KOSONG</h5>
                            <p class="card-text"><?= $data['r'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row">
                        <div
                            style="width: 100px; height: 100px; background-color: #28CA42; justify-content: center; align-items: center; display:flex; border-radius: 10px;">
                            <img src="../assets/icon/peminjaman.png" alt="" srcset="">

                        </div>
                        <div class="col my-3">
                            <h5 class="card-title" style="font-size: 17px;">PEMINJAMAN</h5>
                            <p class="card-text">?</p>
                            <!-- <p class="card-text">Total anggota sejumlah <?= $row_anggota['jml'] ?> orang.</p> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row">
                        <div
                            style="width: 100px; height: 100px; background-color: #FFBD2E; justify-content: center; align-items: center; display:flex; border-radius: 10px;">
                            <img src="../assets/icon/history.png" alt="" srcset="">

                        </div>
                        <div class="col my-3">
                            <h5 class="card-title" style="font-size: 17px;">HISTORY</h5>
                            <p class="card-text">?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>