<?php include_once("helpers/url.php")?>
<?php include_once("datas/cursos.php")?>
<?php include_once("datas/projetos.php")?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leonardo Lima Ragassio | Portfólio</title>
    <link rel="stylesheet" href="<?= $BASE_URL?>/css/style.css">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $BASE_URL?>/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $BASE_URL?>/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $BASE_URL?>/fav/favicon-16x16.png">
    <link rel="manifest" href="<?= $BASE_URL?>/fav/site.webmanifest">
    <link rel="mask-icon" href="<?= $BASE_URL?>/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</head>
<body>
    <header>
    <nav id="navbar"> 
            
            <div>
                <a class="profile_header" href="<?= $BASE_URL ?>" target="self" >
                    <img id="logo" src="<?= $BASE_URL?>/img/logo/logo.png" alt="Minha imagem">
                </a>
            </div>

            <ul id="ul_navbar">
                              
                <li><a href="<?=$BASE_URL?>/index.php" class="nav-link">Home</a></li>
                
                <li><a href="<?=$BASE_URL?>/index.php/#skills" class="nav-link">Skills</a></li>
                
                <li><a href="<?=$BASE_URL?>/index.php/#cursos" class="nav-link">Cursos</a></li>
                
                <li><a href="<?=$BASE_URL?>/index.php/#projetos" class="nav-link">Projetos</a></li>
                
                <li><a href="<?=$BASE_URL?>/contato.php" class="nav-link">Contato</a></li>

            </ul>

        </nav>

    </header>