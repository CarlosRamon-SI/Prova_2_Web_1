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

                ?>

<div id="none" class="greeting">
                        <span>Bem-vindo</span>
                        <span id="logout">
                            | clique 
                            <a href="./src/logout.php">
                                AQUI
                            </a>
                             para sair.
                        </span>
                    </div>
                    <!-- <a href="auth.html">
                        <div id="btn_login" class="btn_bar">
                        