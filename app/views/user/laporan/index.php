<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPACEGO | CETAK SURAT PEMINJAMAN</title>
  <link rel="icon" type="image/png" href="../../assets/img/logo.png">

  <link rel="stylesheet" href="../../assets/dist/css/cetak.min.css">
  <style>
    * { 
      font-family: 'Times New Roman', serif; 
      color: black;
    }
  </style>
</head>
<body>

<div class="page-content container">
    <div class="d-flex flex-rows py-1" style="border-bottom: 1px solid black;">
      <div class="w-20 py-2 px-3">
        <img src="../../assets/img/logo-polinema.png" height="150px" class="">
      </div>
      <div class="text-center w-55" style="font-size: 14pt; margin-left: 35px;">
        <p class="text-default-d3 mb-1"><b>KEMENTRIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI</b></p>
        <p class="text-default-d3 mb-1"><b>POLITEKNIK NEGERI MALANG</b></p>
        <p class="text-default-d3 mb-1"><b>SURAT PEMINJAMAN RUANG</b></p>
        <p class="text-default-d3 mb-1">Jl. Soekarno Hatta No. 9 Malang 65141</p>
        <p class="text-default-d3 mb-1">Telp. (0341) 404424 - 404425, Fax. (0341) 404420</p>
        <a class="text-default-d3 mb-1" style="color: #000;"><u>http://www.polinema.ac.id</u></a>
      </div>
    </div>

    <div class="row-fluid mt-4 ml-5">
        <p class="mb-4">Hal: Peminjaman Ruang</p>

        <p>Yth. Ketua Jurusan Teknologi Informasi</p>
        <p class="ml-4 mb-4">Teknologi Negeri Malang</p>

        <p>Dengan Hormat,</p>
        <p>Sehubungan dengan adanya kegiatan: </p>

        <?php foreach($data['pmnjm'] as $row) : ?>
        <div class="ml-5">
            <p class="mb-1">Nama Peminjam: <?= $row['nama_user'] ?></p>
            <p class="mb-1">Tanggal Pinjam: <?= $row['tanggal_pinjam'] ?></p>
            <p class="mb-1">Tanggal Kembali: <?= $row['tanggal_kembali'] ?></p>
            <p class="mb-1">Ruang: <?= $row['nama_ruangan'] ?></p>
            <p class="mb-1">Keperluan: <?= $row['keterangan'] ?></p>
            <p class="mb-1">No. HP: <?= $row['no_telp'] ?></p>
        </div>
        <?php endforeach; ?>

        <p class="mt-3">Kami mohon bantuan peminjaman ruangan. Demikian surat peminjaman ini kami buat, atas izin dan bantuan yang diberikan kami sampaikan terima kasih.</p>
    </div>

    <div class="d-flex mx-5 mt-4">
        <div class="w-75">
            <p></p>
            <p>Ketua Umum Penyelenggara, </p>
            <br>
            <br>
            <br>
            <p class="mb-1">(.................................................)</p>
            <p>NIM. </p>
        </div>
        <div class="w-25">
          <p class="mb-1">Hormat Kami, </p>
          <p>Ketua Pelaksana, </p>
          <br>
          <br>
          <br>
          <p class="mb-1">(.................................................)</p>
          <p>NIM. </p>
        </div>
    </div>

    <div class="row-fluid text-center mt-2">
      <p>Mengetahui dan menyetujui, </p>
    </div>

    <div class="d-flex mx-5 mt-2">
        <div class="w-75">
            <p>Presiden BEM, </p>
            <br>
            <br>
            <br>
            <p class="mb-1">(.................................................)</p>
            <p>NIM. </p>
        </div>
        <div class="w-25">
          <p>Ketua Umum Himpunan, </p>
          <br>
          <br>
          <br>
          <p class="mb-1">(.................................................)</p>
          <p>NIM. </p>
        </div>
    </div>

    <div class="d-flex mx-5 mt-3">
        <div class="w-75">
            <p>Ketua Jurusan Teknologi Informasi, </p>
            <br>
            <br>
            <br>
            <p class="mb-1">Dr. Eng. Rosa Andrie Asmara, S.T., M.T.</p>
            <p>NIP. 198010102005011001</p>
        </div>
        <div class="w-25">
          <p>Dosen Pembina Kemahasiswaan, </p>
          <br>
          <br>
          <br>
          <p class="mb-1">(.................................................)</p>
          <p>NIP. </p>
        </div>
    </div>

    <div class="d-flex flex-rows py-1" style="border-bottom: 1px solid black;">
        <div class="row-fluid mt-4 ml-5">
            <p>Tembusan: 1. OB Gedung Teknik Sipil</p>
            <p style="margin-left: 74px;">2. SATPAM</p>
        </div>
    </div>
        
<script>
  window.print();
</script>

</body>
</html>