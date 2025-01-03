<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JTI.Patuh - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            width: 100%;
            padding: 1rem;
            color: #fff;
            text-align: start;
            padding-top: 30px;
            padding-left: 50px;
        }

        .content-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 0.7;
        }

        .container {
            text-align: center;
        }

        .title {
            font-size: 1.7rem;
            font-weight: bold;
            color: #223381;
            margin-bottom: 0.5rem;
        }

        .subtitle {
            font-size: 0.8rem;
            color: #6c757d;
            margin-bottom: 2rem;
        }

        .role-selection {
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        .role-card {
            border: 2px solid #D0D0D0;
            border-radius: 15px;
            padding: 2rem;
            width: 150px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
        }

        .role-card:hover {
            transform: scale(1.1);
            border-color: #6c63ff;
        }

        .role-icon {
            font-size: 3rem;
            margin-bottom: 0.75rem;
        }

        .admin-icon {
            color: #B23C3C;
        }

        .dosen-icon {
            color: #FFC107;
        }

        .mahasiswa-icon {
            color: #FF5722;
        }

        .role-title {
            font-size: 0.9rem;
            font-weight: 500;
            color: #2F2E41;
            text-decoration: none;
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
        <div class="logo">
            <img src="/PBL/Project%20Web/public/svg/logo.svg" alt="Logo" class="logo-image">
        </div>
    </header>

    <div class="content-container">
        <div class="container">
            <h1 class="title">Siapa yang ingin login saat ini?</h1>
            <p class="subtitle">Kami akan menyesuaikan pengalaman sesuai peran Anda.</p>

            <div class="role-selection">
                <!-- Admin Card -->
                <a onclick="window.location.href='/PBL/Project%20Web/app/views/auth/loginAdmin.php'" class="role-card">
                    <div class="role-icon admin-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="role-title">Admin</div>
                </a>
                <!-- Dosen Card -->
                <a onclick="window.location.href='/PBL/Project%20Web/app/views/auth/loginDosen.php'" class="role-card">
                    <div class="role-icon dosen-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="role-title">Dosen</div>
                </a>
                <!-- Mahasiswa Card -->
                <a onclick="window.location.href='/PBL/Project%20Web/app/views/auth/loginMhs.php'" class="role-card">
                    <div class="role-icon mahasiswa-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="role-title">Mahasiswa</div>
                </a>
            </div>
        </div>
    </div>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>