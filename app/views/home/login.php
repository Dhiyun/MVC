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
            background-color: #2A1A5E;
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
            margin-left: -5px;
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
            background-color: #DFDDE4;
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
            top: 15%;
        }

        .input-group .fp {
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
            background-color: #2A1A5E;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            transition: transform 0.3s ease-in-out;
        }

        .form-container.sign-in .reg {
            width: 100px;
            height: 40px;
            border: none;
            border-radius: 10px;
            background-color: #FB9224;
            color: #fff;
            cursor: pointer;
            padding-top: 8px;
            padding-left: 10px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            transition: transform 0.3s ease-in-out;
        }

        .form-container.sign-in .submit:hover {
            background-color: #242041;
            transform: scale(1.05);
        }

        .form-container.sign-in .reg:hover {
            background-color: #a76118;
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

        .logo-container {
            position: absolute;
            margin-top: 70px;
            top: 10px;
        }

        .pesan {
            width: 400px;
            height: auto;
            margin-bottom: 10px;
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
                <form class="form-container sign-in" action="<?= BASEURL ?>log/login" method="post">
                    <div class="logo-container">
                        <img src="assets/img/logo-h-copy.png" alt="Logo" height="55px" width="310px">
                    </div>
                    <div class="pesan">
                        <?php
                        if(isset($_SESSION['_flashdata'])) {
                            foreach($_SESSION['_flashdata'] as $key => $val) {
                                echo get_flashdata($key);
                            }
                        }
                        ?>
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
                            <input type="text" class="form-control" name="username" placeholder="NIP/NIM">
                        </div>
                        <div class="input-container">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                    fill="none">
                                    <path
                                        d="M20.6145 15.5522C18.4687 17.6877 15.3958 18.3439 12.6978 17.5002L7.7916 22.396C7.43743 22.7606 6.73951 22.9793 6.23951 22.9064L3.96868 22.5939C3.21868 22.4897 2.52076 21.7814 2.40618 21.0314L2.09368 18.7606C2.02076 18.2606 2.26035 17.5627 2.6041 17.2085L7.49993 12.3127C6.6666 9.60433 7.31243 6.53141 9.45826 4.396C12.5312 1.32308 17.5208 1.32308 20.6041 4.396C23.6874 7.46891 23.6874 12.4793 20.6145 15.5522Z"
                                        stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.177 18.2188L9.57283 20.6146" stroke="#292D32" stroke-width="1.5"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M15.1042 11.4585C15.9672 11.4585 16.6667 10.7589 16.6667 9.896C16.6667 9.03305 15.9672 8.3335 15.1042 8.3335C14.2413 8.3335 13.5417 9.03305 13.5417 9.896C13.5417 10.7589 14.2413 11.4585 15.1042 11.4585Z"
                                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row" style ="align-self: bottom; margin-right: 10px; gap: 10px; position: absolute; bottom: 40px; right: 80px;">
                        <a class="reg" href="<?= BASEURL ?>reg">REGISTER</a>
                        <button class="submit" href="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
