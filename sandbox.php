<?php
session_start();

if(!isset($_SESSION["nome_usuario"])){
    echo "<div id=\"greeting\" class=\"none\">";
    echo "    <span>Bem-vindo ";
    if(isset($_SESSION["nome_usuario"])){
        echo $_SESSION["nome_usuario"];
    }
    echo "    </span>";
    echo "</div>";
    echo "<div id=\"btn_login\" class=\"btn_bar\">";
    echo "    <span id=\"logout\">| clique <a href=\"./src/logout.php\">AQUI</a> para sair.</span>";
    echo "</div>";
} else {
    echo "<a href=\"auth.html\">";
    echo "    <div id=\"btn_login\" class=\"btn_bar\">";
    echo "        <span>Login</span>";
    echo "    </div>";
    echo "</a>";
}

if(!isset($_SESSION["nome_usuario"])){
    echo    "<div id=\"none\" class=\"greeting\">";
    echo    "    <span>Bem-vindo ";
    if(isset($_SESSION["nome_usuario"])){
        echo $_SESSION["nome_usuario"] . "</span>";
    }
    echo    "    <span id=\"logout\">";
    echo    "        | clique ";
    echo    "        <a href=\"./src/logout.php\">";
    echo    "            AQUI";
    echo    "        </a>";
    echo    "         para sair.";
    echo    "    </span>";
    echo    "</div>";
} else {
    echo    "<a href=\"auth.html\">";
    echo    "    <div id=\"btn_login\" class=\"btn_bar\">";
    echo    "</a>";
}

?>
                        