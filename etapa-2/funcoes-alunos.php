<?php 
require_once "conecta.php";

function lerAlunos(PDO $conexao) {
    $sql = "SELECT id,nome,primeira,segunda FROM alunos ORDER BY nome";
    try {
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $erro) {
        die("Erro: ".$erro->getMessage());
    }
}



// Inserir dados dos alunos
function inserirAlunos(PDO $conexao, string $nome, float $primeira, float $segunda){
    $sql = "INSERT INTO alunos(nome, primeira, segunda) VALUES(:nome, :primeira, :segunda)";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':nome', $nome,  PDO::PARAM_STR);
        $consulta->bindParam(':primeira', $primeira, PDO::PARAM_STR);
        $consulta->bindParam(':segunda', $segunda, PDO::PARAM_STR);
        $consulta->execute();
    } catch (Exception $erro) {
        die ("Erro: ". $erro->getMessage());
    }
}





    


