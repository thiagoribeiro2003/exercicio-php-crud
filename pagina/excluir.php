<?php 
require_once "../etapa-2/funcoes-alunos.php";
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
excluirAluno($conexao, $id);
header("location:visualizar.php");