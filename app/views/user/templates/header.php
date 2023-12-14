<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="../assets/icon/logo.png" rel="icon">
    <title>
        <?= $data['judul'] ?>
    </title>

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            color: #000;
        }
        
        body {
            background-color: #F2F2F2;
        }


        body {
            background-color: #2A1A5E;
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

        .navbar-nav .nav-item {
            position: relative;
        }

        .navbar-nav .nav-item .underline {
            position: absolute;
            bottom: 0;
            left: 50%;
            height: 3px;
            background-color: #000;
            width: 0;
            transition: width 0.3s ease-in-out, left 0.3s ease-in-out;
        }

        .navbar-nav .nav-item:hover .underline {
            width: 100%;
            left: 0;
        }

        .btn-custom {
            background-color: none;
            border: none;
            padding-left: 0;
        }

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

        .btn-pinjam {
            background-color: #FFBD2E;
            color: #fff;
            border-radius: 20px;
            width: 90px;
            height: 35px;
            font-size: 14px;
        }

        .btn-pinjam:hover {
            background-color: #FFBD2E;
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

        /* .icon-2 {
            position: absolute;
            display: flex;
            align-items: center;
            left: 679px;
            top: 23%;
        } */

        .form-inline input {
            padding-right: 50px;
        }

        .search::-webkit-search-cancel-button,
        .search::-webkit-search-clear-button {
            appearance: none;
            display: none;
        }

        .datepicker {
            border-radius: 10px;
            background: #D9D9D9;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;
            width: 175px;
            height: 35px;
            flex-shrink: 0;
            padding-left: 15px;
        }

        .btn-print {
            background-color: #FB9224;
            color: #fff;
        }

        .btn-print:hover {
            background-color: #FB9224;
            color: #fff;
        }

        .icon {
            position: absolute;
            display: flex;
            align-items: center;
            left: 463px;
            top: 25%;
        }

        .form-inline input {
            padding-right: 50px;
        }
    </style>
</head>

<body>