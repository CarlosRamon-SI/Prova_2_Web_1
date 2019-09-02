<?php 
require "connection.php"; 
 
session_start(); 
 
$login = addslashes(trim($_POST["login"]));
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;
 
$SQL = "SELECT * FROM usuarios WHERE usuario = '" . $login . "';";
$result_id = pg_query($conn, $SQL);
$total = pg_num_rows($result_id);
 
if($total) { 
    $dados = pg_fetch_array($result_id); 
    if(!strcmp($senha, $dados["senha"])) {
        $_SESSION["nome_usuario"] = stripslashes($dados["usuario"]); 
        header("Location: /../index.php");
        unset($_SESSION["logon"]);
        exit; 
    }
}
$_SESSION["logon"] = "Login ou Senha inválidos!";
header("Location: /../index.php");
exit;
?>