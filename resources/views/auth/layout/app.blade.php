<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('signup.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
</head>
<body>
      <!-- <header>
        <div class="container">
            <a href="" class="logo">
                <img src="../img/logo.png" alt="">
            </a>
            <nav>
                <i class="menu"> <img src="../img/menu_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg" alt="not found"></i>
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="#" class="">Sirvece</a></li>
                    <li><a href="#" class="">Profill</a></li>
                    <li><a href="#" class="">About</a></li>
                    <li><a href="#" class="">Contact</a></li>
                </ul>
            </nav>
            <div class="login">
                <button>Login</button>
            </div>
        </div>
    </header> -->

    @yield('content')


</body>
</html>
