<head>
    <title>
        <?= $data['judul']; ?>
    </title>
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            color: #000;
        }

        body {
            background-color: #F2F2F2;
        }

        .submit {
            width: 120px;
            height: 40px;
            margin: 20px 0px 0px 0px;
            bottom: 0;
            right: 0;
            margin-bottom: 20px;
            margin-right: 20px;
            border: none;
            border-radius: 10px;
            background-color: #FB9224;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-style: normal;
        }

        .submit:hover {
            background-color: #FFF;
            color: #FB9224;
        }

        .hero-container {
            height: 900px;
            /* margin: 20px 10px 10px -100px; */
            margin: 20px 10px 10px 0px;
            text-align: center;
            /* background-color: #FB9224; */
            width: 100%;
        }

        .hero-image {
            position: relative;
            display: inline-block;
        }

        .hero-image img {
            width: 100%;
            height: 800px;
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .hero-text .text-header b {
            width: 600px;
            height: auto;
            color: #FFF;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: 40px;
            font-style: normal;
            font-weight: 700;
            line-height: 131.589%;
        }

        .hero-text .text-paragraf {
            width: 300px;
            color: #FFF;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 131.589%;
            margin: 0 auto;
        }

        .second-container {
            background-color: #FB9224;
            padding: 10px;
        }

        .second-container .h2-1 {
            color: #FFF;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: 42px;
            font-style: normal;
            font-weight: 700;
            line-height: 131.589%;
            text-transform: capitalize;
        }

        #halaman1 {
            background-color: #F2F2F2;
            padding: 0;
            /* margin: 25px auto; */
            /* center the content */
            display: flex;
            /* flex-direction: column; */
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            width: 100%;
        }

        #halaman2 {
            padding-top: 15px;
            background-color: #FB9224;
            /* max-width: 1920px; */
            margin: 0 auto;
            padding-bottom: 50px;
            /* height: 750px; */
        }

        .card.mb-3 {
            border-radius: 30px;
            padding: 30px;
        }

        .card.mb-3 .kotak {
            color: #000;
            text-align: justify;
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            /* line-height: 131.589% */
        }

        .card.mb-3 .kotak a {
            color: blue;
        }
    </style>
</head>

<body>
    <section id="halaman1">
        <div class="container">
            <div class="hero-container">
                <div class="hero-image">
                    <img src="../assets/img/home.png" alt="Hero Image">
                    <div class="hero-text">
                        <h2 class="text-header"><b>Selamat Datang di Jurusan Teknologi Informasi</b></h2>
                        <p class="text-paragraf">Manfaatkan fasilitas kampus dengan sebaik mungkin!</p>
                        <button class="btn submit">Let's Start</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="halaman2">
        <div class="container second-container">
            <h2 class="h2-1 pb-4">Regulasi Peminjaman</h2>
            <div class="card mb-3">
                <ol class="kotak">
                    <li>Kunjungi situs web <a href="http://spacegojti.polinema.ac.id"
                            target="_blank">http://spacegojti.polinema.ac.id</a>.</li>
                    <li>Daftarkan diri Anda dengan mengisi formulir pendaftaran untuk membuat akun baru.</li>
                    <li>Setelah akun berhasil dibuat, masuk ke dalam sistem dengan memasukkan username dan password
                        Anda.</li>
                    <li>Pilih ruangan yang Anda inginkan dan lengkapi formulir peminjaman.</li>
                    <li>Setelah itu, Anda perlu menunggu konfirmasi dari admin.</li>
                    <li>Jika peminjaman Anda telah disetujui oleh admin, Anda dapat memeriksa hal tersebut di menu
                        riwayat.</li>
                    <li>Setelah disetujui, Anda dapat mencetak surat peminjaman.</li>
                    <li>Tanda tangan yang diperlukan harus dilengkapi di dalam surat peminjaman tersebut.</li>
                    <li>Simpan surat peminjaman aslinya dan buatlah salinan dari surat peminjaman tersebut untuk
                        diberikan kepada Pamdal dan OB dari gedung yang Anda pinjam.</li>
                </ol>
            </div>
        </div>
    </section>
</body>