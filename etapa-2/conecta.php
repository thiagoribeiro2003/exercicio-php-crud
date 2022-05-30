<?php 
/* SCRIPT DE CONEXÃO AO SERVIDOR BANCO DE DADOS */

// Parâmetros
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "crud_escola_thiagoribeiro";


/* try = testar */
try {
    // Criando a conexão com o MySQL (API/DRIVER DE CONEXÃO)
        $conexao = new PDO(
        "mysql:host=$servidor; dbname=$banco; charset=utf8",
        $usuario, 
        $senha
    );

    // Habilita a verificação de erros
    $conexao->setAttribute(
        PDO::ATTR_ERRMODE, // Constantes de erros em geral
        PDO::ERRMODE_EXCEPTION // Constantes de excecões de erros
    );
   
    /* catch = capturar */
} catch (Exception $erro){ 
    die("Erro: ".$erro->getMessage());
}
var_dump($conexao)








?>