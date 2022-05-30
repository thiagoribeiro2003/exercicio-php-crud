<?php 
require_once "conecta.php";

// Inserir dados dos alunos
function inserirAlunos(PDO $conexao, string $nome, float $primeira, float $segunda, float $media, string $situacao){
    $sql = "INSERT INTO alunos(nome, primeira, segunda, media, situacao) VALUES(:nome, :primeira, :segunda, :media, :situacao)";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':nome', $nome,  PDO::PARAM_STR);
        $consulta->bindParam(':primeira', $primeira, PDO::PARAM_STR);
        $consulta->bindParam(':segunda',)
    } catch (Exception $erro) {
        die ("Erro: ". $erro->getMessage());
    }
}

    


