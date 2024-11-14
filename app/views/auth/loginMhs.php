<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JTI.Patuh</title>
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
    body,
    .welcome-text,
    .subtext,
    .form-control,
    .btn,
    .footer {
        font-family: 'Poppins', sans-serif;
    }

    .btn-primary {
        background-color: #223381;
        border-color: #223381;
        width: 180px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #1b2c6b;
        border-color: #1b2c6b;
        transform: scale(1.05);

        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);

    }

    .btn-primary:active {
        transform: scale(1);

        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

    }

    .card-custom {
        border: 2px solid #223381;
        border-radius: 1rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .welcome-text {
        font-weight: 600;
        font-size: 2rem;
        color: #223381;
    }

    .subtext {
        font-size: 0.9rem;
        color: #555;
    }

    .logo {
        margin: 20px 0;
        text-align: center;
    }

    .logo-image {
        width: 120px;
        height: auto;
    }

    .form-control::placeholder {
        font-size: 0.875rem;
        color: #aaa;
    }

    .show-password {
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
    }

    .footer {
        color: #555;
        margin-top: 1rem;
    }

    .btn-forgot {
        color: #555;
        font-size: 0.875rem;
        position: absolute;
        right: 0;
        bottom: 0;
    }

    .btn-login {
        margin: 0 auto;
        display: block;
    }

    .position-relative-wrapper {
        position: relative;
    }

    .form-outline.position-relative {
        position: relative;
    }

    .btn-forgot {
        color: #555;
        font-size: 0.875rem;
        position: absolute;
        right: 0;
        bottom: -30px;

        padding: 0;
        text-decoration: none;
    }

    .btn-forgot:hover {
        color: #223381;
        /* Adds a subtle hover effect */
    }


    .role-icon {
        border: 3px solid #223381;
        border-radius: 10%;
        padding: 20px;
        margin-top: 30px;
        margin-left: 40px;
        display: inline-block;
        text-align: center;
    }

    .mahasiswa-icon {
        color: #FF5722;
    }

    .role-title {
        font-size: 0.9rem;
        font-weight: 500;
        color: #2F2E41;
        text-decoration: none;
        margin-left: 33px;
    }

    .role-title a {
        color: inherit;
        text-decoration: none;
        display: block;
    }
    </style>
</head>

<body>
    <header>
        <div class="role-icon mahasiswa-icon">
            <i class="fas fa-users"></i>
        </div>

    </header>
    <div class="role-title">Mahasiswa</div>
    <section class="vh-90">
        <div class="container py-5 h-70">
            <div class="row d-flex justify-content-center align-items-center h-90">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card card-custom shadow-2-strong">
                        <div class="card-body p-5 text-center">
                            <div class="welcome-text">SELAMAT DATANG</div>
                            <p class="subtext">Masukkan detail akun Anda!</p>
                            <div class="logo">
                                <img src="/PBL/Project%20Web/public/svg/logo.svg" alt="Logo" class="logo-image">
                            </div>

                            <div class="form-outline mb-4">
                                <input type="email" id="typeEmailX-2" class="form-control form-control-lg"
                                    placeholder="NIM" />
                            </div>

                            <div class="form-outline mb-4 position-relative">
                                <input type="password" id="typePasswordX-2" class="form-control form-control-lg"
                                    placeholder="Password" />
                                <i class="far fa-eye show-password" onclick="togglePasswordVisibility()"></i>
                                <button class="btn btn-link btn-forgot" type="button" onclick="forgotPassword()">Lupa
                                    Password?</button>
                            </div>
                            <br>
                            <div class="position-relative-wrapper">
                                <button class="btn btn-primary btn-lg btn-login" type="submit">Login</button>
                            </div>

                            <hr class="my-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        Kami Membantu Anda Menjadi Bagian dari Kampus yang Tertib dan Teratur
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById("typePasswordX-2");
        const icon = document.querySelector(".show-password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.replace("fa-eye", "fa-eye-slash");
        } else {
            passwordInput.type = "password";
            icon.classList.replace("fa-eye-slash", "fa-eye");
        }
    }

    function forgotPassword() {
        alert("Forgot Password functionality is not yet implemented.");
    }
    </script>
</body>

</html>