<?php 
// NOME DE USUÁRIO E SENHA PARA A AUTENTICAÇÃO
$usaurio = 'CordenadorLeonardo';
$senha = 'Gordinho1994';

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
 ($_SERVER['PHP_AUTH_USER'] != $usaurio) || ($_SERVER['PHP_AUTH_PW'] != $senha)) {
    // NOME DP USUÁRIO OU SENHA INCORRETOS, ENTÃO ENVIAR OS CABEÇALHOS DE AUTENTICAÇÃO 
    header('HTTP/1.1 401 Unautorized');
    header('WWW-Authenticate: Basic realm="visaoCordenador"');
    header('Location: ControleCordenador.php');
 }

?>