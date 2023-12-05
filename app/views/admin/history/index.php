<?php
    // include_once("config/koneksi.php");
?>

<head>
    <title>History</title>
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

        .btn-approve {
            background-color: #FBE555;
            color: #000; 
            width: 49px; 
            height: 39px; 
        }

        .btn-approve:hover {
            background-color: #FBE555;
            color: #000;
        }

        .btn-decline {
            background-color: #A33B03;
            color: #fff;
            width: 50px; 
            height: 39px;
        }

        .btn-decline:hover {
            background-color: #A33B03;
            color: #fff;
        }
    </style>
</head>

<main class="col-md-10" style="background-color: #F5F5F5">
    <div class="row pt-3 pb-2 mb-3 px-1 border-bottom">
        <div class="d-flex p-1 justify-content-center align-items-center custom-title-box">
            <div class="mx-3 custom-title-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                    <path d="M18 3C9.735 3 3 9.735 3 18C3 26.265 9.735 33 18 33C26.265 33 33 26.265 33 18C33 9.735 26.265 3 18 3ZM24.525 23.355C24.315 23.715 23.94 23.91 23.55 23.91C23.355 23.91 23.16 23.865 22.98 23.745L18.33 20.97C17.175 20.28 16.32 18.765 16.32 17.43V11.28C16.32 10.665 16.83 10.155 17.445 10.155C18.06 10.155 18.57 10.665 18.57 11.28V17.43C18.57 17.97 19.02 18.765 19.485 19.035L24.135 21.81C24.675 22.125 24.855 22.815 24.525 23.355Z" fill="#292D32"/>
                </svg>
            </div>
            <div class="custom-title-text">HISTORY</div>
        </div>
    </div>
    
    <div class="table-responsive small pt-3 px-3">
        <table class="table rounded" style="border-radius: 15px;"> 
            <thead>
                <tr>
                    <th scope="col" style="background-color: #363062; color:#fff; border-radius">Nama</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Tanggal</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">K. Ruangan</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Keterangan</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <p>tes</p>
                </td>
                <td>
                    <p>tes</p>
                </td>
                <td>
                    <p>tes</p>
                </td>
                <td>
                    <p>tes</p>
                </td> 
            </tr> 
            </tbody>  
        </table>
    </div>
</main>