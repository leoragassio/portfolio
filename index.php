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
    <h2 class="session_title">Skills </h2>
    <p class="text">Confira alguns de meus conhecimentos abaixo: </p>
    
    <div id="div-img-skills">

    <?php 
    $img = "<img class='img-skills' src=";

    for ($i=1; $i < 8; $i++) { 

        echo $img . "$BASE_URL" . "/img/skills" . "/$i.png> ";
    
    }

    ?>
    </div>
    

</div>


<div id="cursos">
    <h2 class="session_title">Cursos</h2>
    <?php foreach($cursos as $curso) : ?>
        <div class="cursos_box">

            <div><!--Left div-->
            <img class="img_curso" src="<?=$BASE_URL?>/img/cursos/<?=$curso['fotoCurso']?>" alt="Imagem do curso de <?=$curso['nomeCurso']?>">
            </div>

            <div class="right_cursos_box"><!--Right div-->
                <h2 class="curso_title"><?= $curso['nomeCurso']?></h2>
                
                <p class="curso_desc"><?= $curso['descCurso']?></p>
                <p class="curso_conclusao"><strong>Status</strong>: <?= $curso['conclusao']?></p>
            </div>
        
        </div>
        
        <hr class="hr_cursos"><!-- linha  -->
    
    <?php endforeach ?>    
</div>

<div id="projetos">

    <h2 class="session_title">Projetos</h2>

    <div id="projetos" >
        <?php foreach($projetos as $projeto) : ?>

            <div class="projetos_box">
                
                <div class="img_projetos_box"> 
                    <a target="_blank" href="<?=$projeto['link']?>">
                        <img class="img_projetos" src="<?=$BASE_URL ?>/img/projetos/<?= $projeto['foto']?>" alt="Projeto <?= $projeto['nome']?>"> 
                    </a>
                </div>

                <a target="_blank" href="<?=$projeto['link']?>"><p class="p_projetos"> <?= $projeto['nome']?></p></a>

                <a target="_self" href="<?= $BASE_URL?>/projeto.php/?id=<?=$projeto['id']?>" ><p class="p_projetos">Saiba mais +</p></a>  
                <p class="projeto_datas"> <?= $projeto['data']?> </p>

            </div>

        <?php endforeach ?>
    </div>
</div>

<?php include_once("templates/footer.php")?>
