<?php 
include_once("templates/header.php");

if(isset($_GET['id'])) {
    $projeto_id = $_GET['id'];

    foreach($projetos as $projeto){
        if ($projeto['id'] == $projeto_id){
            $current_projeto = $projeto;
        }
    }
}

?>

<main>
    <button id="btn_back"><a href="<?= $BASE_URL?>">Voltar</a></button>
    <div class="projeto">
        
        

        <img class="img_projeto" src="<?=$BASE_URL ?>/img/projetos/<?= $current_projeto['foto'] ?>" alt="Foto do projeto <?= $current_projeto['nome'] ?>">

        <div class="desc_projeto">
            <h2 class="title_projeto"> <?= $current_projeto['nome'] ?></h2>
            <p class="p_projeto"> <?= $current_projeto['descricao'] ?></p>
            <p class="p_projeto"> <?= $current_projeto['data'] ?> </p>
            <a target="_blank" href="<?=$current_projeto['link']?>">
                <p class="projeto-link" class="p_projeto">Acessar</p>
            </a>
        </div>

    </div>

</main>

<?php include_once("templates/footer.php");?>


