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
    <h2 id="session_title">Skills </h2>
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
    <h2 id="session_title">Cursos </h2>
    <?php foreach($cursos as $curso) : ?>
        <div class="cursos_box">

            <div><!--Left div-->
            <img class="img_curso" src="<?=$BASE_URL?>/fotoCurso/<?=$curso['fotoCurso']?>" alt="Imagem do curso de <?=$curso['nomeCurso']?>">
            </div>

            <div><!--Right div-->
                <h2 class="curso_title"><?= $curso['nomeCurso']?></h2>
                
                <p class="curso_desc"><?= $curso['descCurso']?></p>
                <p class="curso_conclusao"><strong>Status</strong>: <?= $curso['conclusao']?></p>
            </div>
        
        </div>
        
        <hr><!-- linha  -->
    
    <?php endforeach ?>    
</div>

<?php include_once("templates/footer.php")?>
