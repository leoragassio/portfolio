<?php include_once("templates/header.php")?>

<div id="me">

    <div id="welcome">
        <p class="text" >Olá, seja bem-vindo ao meu portfólio!</p>
        <p class="text" >Sou Leonardo Lima Ragassio </p>
        <p class="text">
            <?php 
            $myY = 2003;
            $y = date("Y") - $myY;

            if(date("m") <= 7){
                $y--;
            }

            echo " $y"; 
            ?> 
        anos</p>
    </div>

    <div id="profile-photo"></div>
</div>

<div id="skills">

    <p class="text">Confira alguns de meus conhecimentos abaixo: </p>
    
    <div id="div-img-skills">

    <?php 
    $img = "<img class='img-skills' src=";

    for ($i=1; $i < 10; $i++) { 

        echo $img . "$BASE_URL" . "/skills" . "/$i.png> ";
    
    }

    ?>
    </div>
    

</div>

<div id="cursos">

</div>

<?php include_once("templates/footer.php")?>
    
