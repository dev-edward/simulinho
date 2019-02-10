<?php
/* 
 * este arquivo serve para fazer a conexão com o banco de dados sempre que necessário chamamos este arquivo para não precisar escrever o mesmo código sempre
 * para que funcione mude o usuário e senha do seu banco de dados na linha 7 e 8
 */
$servidor='localhost';
$usuario='seuusuarioaqui';
$senha='suasenhaaqui';
$banco='sim';
$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
mysqli_set_charset($conexao,"utf8");
?>

