<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background-color: #f8f8f8;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }

        .container {
            background-color: #FB9224;
            border-radius: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
            position: relative;
            overflow: hidden;
            width: 1090px;
            height: 580px;
            max-width: 100%;
            min-height: 400px;
            flex-shrink: 0;
            filter: drop-shadow(10px 10px 20px rgba(0, 0, 0, 0.50));
        }

        .sign-in {
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 30px;
            text-align: center;
        }

        .sign-in .kata1 h1 {
            color: #FFF;
            text-align: center;
            font-size: 40px;
            font-style: normal;
            font-weight: 700;
            line-height: 131.589%;
        }

        .sign-in .kata1 {
            width: 449.457px;
            height: 65.539px;
            flex-shrink: 0;
            margin-bottom: px;
        }

        .sign-in .kata2 p {
            color: #FFF;
            text-align: center;
            font-family: Montserrat;
            font-size: 24px;
            font-style: normal;
            font-weight: 300;
            line-height: 131.589%;
        }

        .sign-in .kata2 {
            width: 345px;
            height: 95px;
            flex-shrink: 0;
        }

        .toggle-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
        }

        .toggle {
            background-color: rgba(223, 221, 228, 0.76);
            color: #fff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
            padding: 5px;
        }

        .form-container.sign-in {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            width: 100%;
            max-width: 300px;
            margin-left: -60px;
        }

        .input-group .input-container {
            position: relative;
        }

        .input-group input {
            width: 371px;
            height: 48px;
            flex-shrink: 0;
            padding: 10px 10px 10px 50px;
            margin-bottom: 15px;
            border-radius: 10px;
            border: none;
            color: #000;
            font-family: Montserrat;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .input-group .icon {
            position: absolute;
            display: flex;
            align-items: center;
            left: 15px;
            top: 18%;
        }

        .input-group a {
            position: relative;
            color: #000;
            font-family: Montserrat;
            font-size: 10px;
            font-style: normal;
            font-weight: 500;
            line-height: 131.589%;
            align-self: flex-end;
            text-decoration: none;
            margin: -10px -27px 0px 50px;
        }

        .form-container.sign-in .submit {
            width: 100px;
            height: 40px;
            border: none;
            border-radius: 10px;
            background-color: #FB9224;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            transition: transform 0.3s ease-in-out;
        }

        .form-container.sign-in .log {
            width: 100px;
            height: 40px;
            border: none;
            border-radius: 10px;
            background-color: #2A1A5E;
            color: #fff;
            cursor: pointer;
            padding-top: 8px;
            padding-left: 10px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            transition: transform 0.3s ease-in-out;
        }

        .form-container.sign-in .submit:hover {
            background-color: #a76118;
            transform: scale(1.05);
        }

        .form-container.sign-in .log:hover {
            background-color: #242041;
            transform: scale(1.05);
        }

        .sign-in .custom-div {
            display: inline-flex;
            padding: 5.116px 10px;
            align-items: center;
            gap: 7.674px;
            border-radius: 7.674px;
            background: #F2F2F2;
            margin-bottom: 10px;
        }

        .custom-div img {
            width: 70px;
            height: 70px;
        }


        .sign-in .custom-div2 {
            background-color: #FB9224;
            display: inline-flex;
            padding: 5.116px 10px;
            align-items: center;
            gap: 7.674px;
            border-radius: 7.674px;
            margin-top: 5px;
        }

        .logo-container {
            position: absolute;
            margin-top: 70px;
            top: 10px;
        }

        .switch {
            display: flex;
            margin-bottom: 35px;
            /* padding: 4px; */
            align-items: center;
            flex-shrink: 0;
            border-radius: 40px;
            /* background: #F1F1F1; */
        }

        .btn-container {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

        .btn-color-mode-switch {
            display: inline-block;
            margin: 0px;
            position: relative;
        }

        .btn-color-mode-switch>label.btn-color-mode-switch-inner {
            margin: 0px;
            width: 268px;
            height: 40px;
            background-color: #F1F1F1;
            border-radius: 26px;
            overflow: hidden;
            position: relative;
            transition: all 0.3s ease;
            display: block;
        }

        .btn-color-mode-switch>label.btn-color-mode-switch-inner:before {
            content: attr(data-on);
            margin: 0px -10px 0px -10px;
            position: absolute;
            font-size: 20px;
            font-weight: 250;
            top: 2px;
            right: 20px;
            padding: 2px 0px;
            color: #000;
        }

        .btn-color-mode-switch>label.btn-color-mode-switch-inner:after {
            content: attr(data-off);
            width: 131px;
            height: 35px;
            background: #fca449;
            border-radius: 26px;
            position: absolute;
            font-size: 20px;
            display: flex;
            justify-content: center;
            left: 2px;
            top: 2px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0px 0px 6px -2px #111;
            padding: 2px 0px;
            color: #FFF;
            font-weight: 500;
        }

        .btn-color-mode-switch .mahasiswa[type="radio"] {
            cursor: pointer;
            width: 134px;
            height: 40px;
            opacity: 0;
            position: absolute;
            top: 0;
            z-index: 1;
            margin: 0px;
        }

        .btn-color-mode-switch .dosen[type="radio"] {
            cursor: pointer;
            width: 134px;
            height: 40px;
            opacity: 0;
            position: absolute;
            top: 0;
            right: 135px;
            z-index: 1;
            margin: 0px;
        }

        .btn-color-mode-switch input[type="radio"]:checked+label.btn-color-mode-switch-inner {
            background-color: #F1F1F1;
        }

        .btn-color-mode-switch input[type="radio"]:checked+label.btn-color-mode-switch-inner:after {
            content: attr(data-on);
            left: 135px;
        }

        .btn-color-mode-switch input[type="radio"]:checked+label.btn-color-mode-switch-inner:before {
            content: attr(data-off);
            right: auto;
            left: 50px;
        }

        .forswitch {
            margin: 10px;
        }

        .pesan {
            width: 400px;
            height: auto;
            margin-bottom: 10px;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            align-items: center;
            justify-content: center;
        }

        .modal-dialog {
            top: 30%;
        }

        .modal-content {
            font-size: 25px;
            background-color: #fff;
            bottom: 50%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container" id="container">
        <div class="sign-in">
            <div class="custom-div">
                <img src="assets/img/logo-polinema.png" alt="Logo 1">
                <img src="assets/img/logo-jti.png" alt="Logo 2">
            </div>
            <div class="custom-div2">
                <img src="assets/img/logo-p-copy.png" alt="Logo" height="55px" width="310px">
            </div>
            <br>
            <div class="kata1">
                <h1>Welcome Back !</h1>
            </div>
            <div class="kata2">
                <p>Please login to your account to access all of your information</p>
            </div>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <form class="form-container sign-in" action="<?= BASEURL ?>reg/register" method="post">
                    <div class="btn-container">
                        <div class="forswitch">
                            <label class="switch btn-color-mode-switch">
                                <input class="dosen" value="Dosen" id="jabatan-dosen" name="jabatan" type="radio"
                                    checked>
                                <input class="mahasiswa" value="Mahasiswa" id="jabatan-mahasiswa" name="jabatan"
                                    type="radio">
                                <label class="btn-color-mode-switch-inner" data-off="Dosen" data-on="Mahasiswa"
                                    for="color_mode"></label>
                            </label>

                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-container">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                    fill="none">
                                    <path
                                        d="M12.5001 12.5002C15.3766 12.5002 17.7084 10.1683 17.7084 7.29183C17.7084 4.41535 15.3766 2.0835 12.5001 2.0835C9.6236 2.0835 7.29175 4.41535 7.29175 7.29183C7.29175 10.1683 9.6236 12.5002 12.5001 12.5002Z"
                                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M21.4478 22.9167C21.4478 18.8854 17.4374 15.625 12.4999 15.625C7.56242 15.625 3.552 18.8854 3.552 22.9167"
                                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input class="form-control" type="text" name="nama_user" placeholder="Nama" required>
                        </div>
                        <div class="input-container">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                    fill="none">
                                    <path
                                        d="M17.7084 21.875H7.29171C3.12504 21.875 2.08337 20.8333 2.08337 16.6667V8.33333C2.08337 4.16667 3.12504 3.125 7.29171 3.125H17.7084C21.875 3.125 22.9167 4.16667 22.9167 8.33333V16.6667C22.9167 20.8333 21.875 21.875 17.7084 21.875Z"
                                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M14.5834 8.3335H19.7917" stroke="#292D32" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.625 12.5H19.7917" stroke="#292D32" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.7084 16.6665H19.7917" stroke="#292D32" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M8.85417 11.7601C9.89545 11.7601 10.7396 10.916 10.7396 9.87467C10.7396 8.83339 9.89545 7.98926 8.85417 7.98926C7.81288 7.98926 6.96875 8.83339 6.96875 9.87467C6.96875 10.916 7.81288 11.7601 8.85417 11.7601Z"
                                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M12.5 17.0101C12.3542 15.4997 11.1563 14.3122 9.64587 14.1768C9.12504 14.1247 8.59379 14.1247 8.06254 14.1768C6.55212 14.3226 5.35421 15.4997 5.20837 17.0101"
                                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input class="form-control" name="username" type="text" pattern="[0-9]+"
                                placeholder="NIP/NIM" required>
                        </div>
                        <div class="input-container">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                    fill="none">
                                    <path
                                        d="M17.7084 21.3543H7.29171C4.16671 21.3543 2.08337 19.7918 2.08337 16.146V8.85433C2.08337 5.2085 4.16671 3.646 7.29171 3.646H17.7084C20.8334 3.646 22.9167 5.2085 22.9167 8.85433V16.146C22.9167 19.7918 20.8334 21.3543 17.7084 21.3543Z"
                                        stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M17.7083 9.375L14.4479 11.9792C13.375 12.8333 11.6145 12.8333 10.5416 11.9792L7.29163 9.375"
                                        stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="input-container">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                    fill="none">
                                    <path
                                        d="M20.6146 15.5522C18.4688 17.6877 15.3959 18.3439 12.698 17.5002L7.79172 22.396C7.43755 22.7606 6.73963 22.9793 6.23963 22.9064L3.9688 22.5939C3.2188 22.4897 2.52088 21.7814 2.4063 21.0314L2.0938 18.7606C2.02088 18.2606 2.26047 17.5627 2.60422 17.2085L7.50005 12.3127C6.66672 9.60433 7.31255 6.53141 9.45838 4.396C12.5313 1.32308 17.5209 1.32308 20.6042 4.396C23.6876 7.46891 23.6876 12.4793 20.6146 15.5522Z"
                                        stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.17712 18.2188L9.57296 20.6146" stroke="#292D32" stroke-width="1.5"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M15.1041 11.4585C15.9671 11.4585 16.6666 10.7589 16.6666 9.896C16.6666 9.03305 15.9671 8.3335 15.1041 8.3335C14.2412 8.3335 13.5416 9.03305 13.5416 9.896C13.5416 10.7589 14.2412 11.4585 15.1041 11.4585Z"
                                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input class="form-control" name="password" type="password" placeholder="Password" required>
                        </div>
                        <div class="input-container">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                    fill="none">
                                    <path
                                        d="M21.7813 11.5835C21.7813 16.6772 18.0833 21.4481 13.0313 22.8439C12.6875 22.9376 12.3125 22.9376 11.9687 22.8439C6.91666 21.4481 3.21875 16.6772 3.21875 11.5835V7.01054C3.21875 6.15638 3.8646 5.18763 4.66668 4.86471L10.4687 2.48975C11.7708 1.9585 13.2396 1.9585 14.5417 2.48975L20.3438 4.86471C21.1354 5.18763 21.7917 6.15638 21.7917 7.01054L21.7813 11.5835Z"
                                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M12.5 13.0207C13.6506 13.0207 14.5833 12.0879 14.5833 10.9373C14.5833 9.78674 13.6506 8.854 12.5 8.854C11.3494 8.854 10.4166 9.78674 10.4166 10.9373C10.4166 12.0879 11.3494 13.0207 12.5 13.0207Z"
                                        stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.5 13.0205V16.1455" stroke="#292D32" stroke-width="1.5"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input class="form-control" name="confirm_password" type="password"
                                placeholder="Confirm-Password" required>
                            <input class="form-control" value="User" name="role" type="text" hidden>
                        </div>
                    </div>
                    <div class="row"
                        style="align-self: bottom; margin-right: 10px; gap: 10px; position: absolute; bottom: 40px; right: 80px;">
                        <a class="log" href="<?= BASEURL ?>log">LOGIN</a>
                        <button class="submit" href="submit" onclick="openModal()">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php Flasher::modal(); ?>
</body>