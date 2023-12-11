<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <style>
        body {
            background-color: #2A1A5E;
        }

        .btn-detail {
            background-color: #FB9224;
            color: #fff;
        }

        .btn-detail:hover {
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

        .form-inline input {
            padding-right: 50px;
        }

        .search::-webkit-search-cancel-button,
        .search::-webkit-search-clear-button {
            appearance: none;
            display: none;
        }

        .box-carousel {
            border-radius: 10px;
            background: #D9D9D9;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;
            width: 175px;
            height: 35px;
            flex-shrink: 0;
        }

        .carousel-item p {
            margin-top: -2.5px;
        }
        
        /*<?php for ($i = 6; $i <= 8; $i++) { ?>
        #carouselLantai-<?php echo "$i" ?> {
            display: none;
        }
        <?php } ?>

        <?php for ($i = 5; $i <= 8; $i++) { ?>
        .hide-picture-<?php echo "$i" ?> {
            <?php if($i != 7) { ?>
                display: none;
            <?php } ?>
        }
        <?php } ?> */

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev{
            display: block;
        }

        .col-md-4 .container{
            width: 199px;
        }
    </style>
</head>
<body>
<title><?= $data['judul'] ?></title>
    <div class="container mb-5">
        <div class="card mt-4" style="border: 0; border-radius: 20px;">
            <div class="card-body">
                <nav class="navbar navbar-light" style="border-radius: 15px;">
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
                                            <?php for ($i = 5; $i <= 8; $i++) : ?>
                                            <div class="carousel-item <?php echo ($i == 5) ? 'active' : ''; ?> text-center pt-2">
                                                <p>Lantai <?php echo $i; ?></p>
                                            </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselLantai" data-bs-slide="prev">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                            <path d="M19.7749 22.3999L19.7749 14.6124V7.59993C19.7749 6.39993 18.3249 5.79993 17.4749 6.64993L10.9999 13.1249C9.9624 14.1624 9.9624 15.8499 10.9999 16.8874L13.4624 19.3499L17.4749 23.3624C18.3249 24.1999 19.7749 23.5999 19.7749 22.3999Z" fill="#292D32"/>
                                        </svg>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselLantai" data-bs-slide="next">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                            <path d="M10.2251 7.60007L10.2251 15.3876V22.4001C10.2251 23.6001 11.6751 24.2001 12.5251 23.3501L19.0001 16.8751C20.0376 15.8376 20.0376 14.1501 19.0001 13.1126L16.5376 10.6501L12.5251 6.63757C11.6751 5.80007 10.2251 6.40007 10.2251 7.60007Z" fill="#292D32"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                
                <?php for ($i = 5; $i <= 8; $i++) { ?>
                <div id="carouselLantai-<?php echo $i; ?>">
                    <div class="text-center pb-5">
                        <img src="../assets/img/denah-lt-<?php echo $i; ?>.png">
                        <img src="../assets/img/ket-lt-<?php echo $i; ?>.png">
                        <br>
                        <img class="hide-picture-<?php echo $i;?>" src="../assets/img/ket-2-lt-<?php echo $i; ?>.png">
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
                                <tr>
                                    <td>
                                       <?php echo ($i == 5) ? 'Boleh...' : 'Mana Bisa?'; ?>
                                    </td>
                                    <td>
                                        Perkutut
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-detail" data-bs-toggle="modal" data-bs-target="#detailModal" data-bs-whatever="@mdo"> Detail</button>
                                    </td>
                                </tr>
                            </tbody>  
                        </table>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Modal Detail-->
    <div class="modal fade" id="detailModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Nama Ruang??</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-bottom">
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <label for="recipient-name" class="col-form-label">Hari:</label>
                            <select class="form-select text-modal-custom" name="lantai" aria-label="Default select example">
                                <option selected>Hari</option>
                            </select>
                        </div>
                    </div>
                </div>
                    
                <form action="fungsi/tambah.php?ruang=tambah" method="post">
                    <div class="modal-body" style="font-size: 16px">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Matkul:</label>
                                <select class="form-select text-modal-custom" name="lantai" aria-label="Default select example">
                                    <option selected>Matkul</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Dosen:</label>
                                <input type="text" name="kapasitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Jam Mulai: </label>
                                <input type="text" name="kapasitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Kapasitas:</label>
                                <input type="text" name="kapasitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Jam Selesai:</label>
                                <input type="text" name="fasilitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Fasilitas:</label>
                                <input type="text" name="fasilitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        $('#carouselLantai').carousel();

        $('#carouselLantai').on('slide.bs.carousel', function (event) {
            var floorId = event.to + 5;
            showFloor(floorId);
        });

        function showFloor(floorId) {
            $('[id^="carouselLantai-"]').hide();
            $('#carouselLantai-' + floorId).show();
        }
    });
</script>
</html>