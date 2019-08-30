<HTML>
<HEAD><TITLE>Sistema de Notícias : Login</TITLE></HEAD>
<BODY>
    <?php
    session_start();

    if(isset($_SESSION["nome_usuario"])){
        echo "Bem-Vindo ".$_SESSION["nome_usuario"]."!";
        echo " | <a href=\"sair.php\">Sair do Sistema</a>"; 
    }
    ?>
<form action="login_vai.php" method="post">
Sistema Autenticação de Notícias.<BR>
Login: <input type="text" name="login"><br>
Senha: <input type="password" name="senha"><br>
    <?php
        if(isset($_SESSION["logon"])) {
            echo $_SESSION["logon"];
        }
        // if($teste = isset($_SESSION["logon"])) {
        //     $teste == 1 ? $teste = "Login ou Senha inválidos<br>" : FALSE ;
        //     echo $teste;
        // }
    ?>
<input type="submit" value="OK!">
</form>
</BODY>
</HTML>
