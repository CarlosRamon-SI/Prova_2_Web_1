<?php

require "conexao.php";

session_start();

$login = isset($_POST["id"]) ? addslashes(trim($_POST["id"])) : FALSE;
$senha = isset($_POST["senha_login"]) ? md5(trim($_POST["senha_login"])) : FALSE;

$SQL = "SELECT * FROM usuarios WHERE usuario     = ' " . $login . " ' ";
$result_id = pg_query($conn, $SQL) or die("Erro no Banco de dados!");
$total = pg_num_rows($result_id);

if($total) {
    $dados = pg_array($result_id);
    if(!strcmp($senha, $dados["senha"])) {
        $_SESSION["idusuario"] = $dados["id"];
        $_SESSION["usuario"] = stripslashes($dados["nome"]);
        header("Location: index.php");
        exit;
    } else {
        echo "Senha inválida!";
    }
} else {
    echo "O login fornecido não existe!";
}
?>