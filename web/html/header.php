<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/fontsAndColors.css">
    <script src="../script/header.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Header</title>
</head>
<body>
    <header>
        <!--all header content-->
        <div id="header_content">
            <!--name + logo-->
            <div id="header_name">
                <a href="../html/home.html" class="logo">
                    <img src="../img/logos/logo.svg">
                    <h1>Wheelieway</h1>
                </a>
                <!--mobile menu button-->
                <a href="javascript:void(0);" class="mobile-menu" onclick="mobileMenu()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <!--all options-->
            <div id="header_options">
                <a href="mapa.php" class="header-link">Mapa</a>
                <a href="" class="header-link">Sobre nós</a>
                <a href="registrar.html" class="header-btnRegister">CRIAR CONTA</a>
                <a href="registrar.html" class="header-link-mobile">CRIAR CONTA</a><!--for mobile-->
                <a href="login.html" class="header-btnLogin">ENTRAR</a>
                <a href="login.html" class="header-link-mobile">ENTRAR</a><!--for mobile-->
                <a href="perfilusuario.php" class="header-link-mobile">CONTA</a><!--for mobile-->
                <a href="perfilusuario.php" class="header-iconLink">
                    <i class="fa-solid fa-address-card"></i>
                </a>
            </div>
        </div>
    </header>
</body>
</html>