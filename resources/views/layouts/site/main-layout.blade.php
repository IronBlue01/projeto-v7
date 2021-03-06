<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>V7 formaturas</title>

    <!-- Favicon  -->
    <link rel="icon" href="./site/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="./site/css/core-style.css">
    <link rel="stylesheet" href="./site/style.css">

    <!-- Responsive CSS -->
    <link href="./site/css/responsive.css" rel="stylesheet">

</head>

<body>
    

        <!-- Preloader -->
        <div id="preloader">
        <div class="showbox">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>
        <div class="questions-area text-center">
            <p>.....</p>
            <ul class="hidden">
                <li>V7 Formaturas.</li>
                <!-- <li>Photography is the toughest profession in the world.</li>
                <li>The world’s largest photo album by dimensions was 13 ft 11.5 in x 17 ft.</li>
                <li>The world’s largest photo mosaic featured 176,175 pictures.</li>
                <li>The world’s largest camera lens was a 5200mm lens attached to a canon.</li> -->
            </ul>
        </div>
    </div>

    <!-- Gradient Background Overlay -->
    <div class="gradient-background-overlay"></div>
    <!-- Header Area Start -->
    <header class="header-area">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="/"><img src="./site/img/core-img/logo.png" alt="Logo"></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#studioMenu" aria-controls="studioMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                            <div class="collapse navbar-collapse" id="studioMenu">
                                <!-- Menu Area Start  -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Páginas</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/">Home</a>
                                            <a class="dropdown-item" href="/page-login">Área do cliente</a>
                                            <a class="dropdown-item" href="#">Portfolio</a>
                                            <!-- <a class="dropdown-item" href="/blog">Blog</a> -->
                                            <a class="dropdown-item" href="/page-login">Área do cliente</a>
                                            <!-- <a class="dropdown-item" href="/elementos">Elements</a> -->
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/sobre">Sobre</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Portfolio</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="/blog">Blog</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="/page-login">Área do cliente</a>
                                    </li>
                                </ul>
                                <!-- Search Form -->
                                <div class="header-search-form ml-auto">
                                    <form action="#">
                                        <input type="search" class="form-control" placeholder="Digite oque deseja buscar..." id="search" name="search">
                                        <input class="d-none" type="submit" value="submit">
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <div id="searchbtn">
                                    <img src="./site/img/core-img/search.png" alt="">
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->



    @yield('content')