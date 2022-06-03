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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a href="inserir.php">Inserir novo aluno</a></p>
    <p><a href="index.php">Voltar ao início</a></p>
    <hr>
    <?php 
        foreach ($listaDeAlunos as $alunos){
    ?>


    
        



<div class="lista-alunos">

<table class="table table-striped">
  <tr>
      <td><b>Nome do aluno(a):</b> <?=$alunos["nome"]?></p></td>
      <td><b>Primeira Nota:</b> <?=$alunos["primeira"]?></b></td>
      <td><b>Segunda Nota:</b> <?=$alunos["segunda"]?></b></td>
      <td><b>Média:</b> <?=$alunos["media"]?></b></td>
      <td class="<?=$alunos["situacao"]?>"><b>Situação:</b> <?=$alunos["situacao"]?></td>
  </tr>
</table>

<a class="atualizar" style="color: blue;" href="atualizar.php?id=<?=$alunos['id']?>">Atualizar</a> 
<a class="excluir"  style="color: red;" href="excluir.php?id=<?=$alunos['id']?>">Excluir</a>
</div>

    <?php }?>

   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->


    <p><a href="index.php">Voltar ao início</a></p>
</div>

<script src="../js/confirm.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>