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
                    <path
                        d="M23.67 3H12.33C6.66 3 5.25 4.515 5.25 10.56V27.45C5.25 31.44 7.44 32.385 10.095 29.535L10.11 29.52C11.34 28.215 13.215 28.32 14.28 29.745L15.795 31.77C17.01 33.375 18.975 33.375 20.19 31.77L21.705 29.745C22.785 28.305 24.66 28.2 25.89 29.52C28.56 32.37 30.735 31.425 30.735 27.435V10.56C30.75 4.515 29.34 3 23.67 3ZM22.5 17.625H13.5C12.885 17.625 12.375 17.115 12.375 16.5C12.375 15.885 12.885 15.375 13.5 15.375H22.5C23.115 15.375 23.625 15.885 23.625 16.5C23.625 17.115 23.115 17.625 22.5 17.625ZM24 11.625H12C11.385 11.625 10.875 11.115 10.875 10.5C10.875 9.885 11.385 9.375 12 9.375H24C24.615 9.375 25.125 9.885 25.125 10.5C25.125 11.115 24.615 11.625 24 11.625Z"
                        fill="#292D32" />
                </svg>
            </div>
            <div class="custom-title-text">PEMINJAMAN</div>
        </div>
    </div>

    <div class="table-responsive small pt-3 px-3">
        <table class="table rounded" style="border-radius: 15px;">
            <thead>
                <tr>
                    <th scope="col" style="background-color: #363062; color:#fff; border-radius">Nama</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Tanggal</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Telepon</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">K. Ruangan</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Keterangan</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Aksi</th>
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
                    <td>
                        <p>tes</p>
                    </td>
                    <td>
                        <a href="index.php?page=peminjaman/edit&id=<?= $row['id'] ?>" class="btn btn-approve btn-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20"
                                fill="none">
                                <path d="M7 9L10 12L20 2" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M19 10V17C19 17.5304 18.7893 18.0391 18.4142 18.4142C18.0391 18.7893 17.5304 19 17 19H3C2.46957 19 1.96086 18.7893 1.58579 18.4142C1.21071 18.0391 1 17.5304 1 17V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H14"
                                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a href="fungsi/hapus.php?ruang=hapus&id=<?= $row['id'] ?>"
                            onclick="javascript:return confirm('Hapus Data Jabatan ?');" class="btn btn-decline btn-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                fill="none">
                                <path
                                    d="M19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9 9L15 15" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M15 9L9 15" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>