<?php 
require_once "../etapa-2/funcoes-alunos.php";
$listaDeAlunos = lerAlunos($conexao);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a href="inserir.php">Inserir novo aluno</a></p>
    <hr>
    <?php 
        foreach ($listaDeAlunos as $alunos){
    ?>

<div class="lista-alunos">
    
        <article>
            <p><b>Nome do aluno(a):</b> <?=$alunos["nome"]?></p>
            <p><b>Primeira Nota:</b> <?=$alunos["primeira"]?></p>
            <p><b>Segunda Nota:</b> <?=$alunos["segunda"]?></p>
            <p><b>Média:</b> <?=$alunos["media"]?></p>
            <p class="<?=$alunos["situacao"]?>"><b>Situação:</b> <?=$alunos["situacao"]?></p>
            <a class="atualizar" style="color: green;" href="atualizar.php?id=<?=$alunos['id']?>">Atualizar</a> 
            <a class="excluir"  style="color: red;" href="excluir.php?id=<?=$alunos['id']?>">Excluir</a>
            

            
        <hr>   
        </article>
</div>

    <?php }?>

   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->


    <p><a href="index.php">Voltar ao início</a></p>
</div>

<script src="../js/confirm.js"></script>

</body>
</html>