<?php 
require_once "conecta.php";


// Inserir dados dos alunos
function inserirAlunos(PDO $conexao, string $nome, float $primeira, float $segunda, float $media, string $situacao){
    $sql = "INSERT INTO alunos(nome, primeira, segunda, media, situacao) VALUES(:nome, :primeira, :segunda, :media, :situacao)";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':nome', $nome,  PDO::PARAM_STR);
        $consulta->bindParam(':primeira', $primeira, PDO::PARAM_STR);
        $consulta->bindParam(':segunda', $segunda, PDO::PARAM_STR);
        $consulta->bindParam(':media', $media, PDO::PARAM_STR);
        $consulta->bindParam(':situacao', $situacao, PDO::PARAM_STR);
        $consulta->execute();
    } catch (Exception $erro) {
        die ("Erro: ". $erro->getMessage());
    }
}

// Ler Alunos
function lerAlunos(PDO $conexao):array {
    $sql = "SELECT id,nome,primeira,segunda, media, situacao FROM alunos ORDER BY nome";
    try {
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $erro) {
        die("Erro: ".$erro->getMessage());
    }
    return $resultado;
}


// Ler Um Aluno
function lerUmAluno(PDO $conexao, int $id):array{
    $sql = "SELECT id, nome, primeira, segunda, media, situacao FROM alunos WHERE id = :id";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':id', $id, PDO::PARAM_INT);
        $consulta-> execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC); 
    } catch (Exception $erro) {
        die("Erro ".$erro->getMessage());
    }
    return $resultado;
}





    


