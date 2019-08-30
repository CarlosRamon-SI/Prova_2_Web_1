<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Carlos Ramon Moreira Leite">
        <link rel="stylesheet" href="./style/main.css">
        <title>Prova 2 Ambiente Web 1</title>
    </head>
    <body>
        <div id="cabecalho">
            <div class="menu bar_container">
                <div id="bar">
                    <a href="">
                        <div id="ico" class="btn_bar" title="Home">
                        </div>
                    </a>
                    <a href="">
                        <div class="btn_bar" title="btn 02" >
                            <span>Btn 02</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="btn_bar" title="btn 03">
                            <span>Btn 03</span>
                        </div>        
                    </a>
                    <a href="">
                        <div class="btn_bar" title="btn 04">
                            <span>Btn 04</span>
                        </div>        
                    </a>
                    <a href="">
                        <div class="btn_bar" title="btn 05">
                            <span>Btn 05</span>
                        </div>        
                    </a>                                            
                </div>
                <!-- <div id="greeting" class="none">
                    <span>Bem-vindo !</span>
                    <span id="logout">| clique <a href="./src/logout.php">AQUI</a> para sair</span>
                </div> -->
                <div id="greeting" class="none">
                    <span>Bem-vindo</span>
                </div>
                <div id="btn_login" class="btn_bar">
                    <span id="logout">
                        | clique 
                        <a href="./src/logout.php">
                            AQUI
                        </a>
                         para sair.
                    </span>
                </div>
                <a href="auth.html">
                    <div id="btn_login" class="btn_bar">
                        <span>Login</span>
                    </div>";
                </a>
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
            </div>
        </div>
        <div id="corpo">
            <div id="main_title" class="title">   
                <span>Sobre nós</span>
            </div>
            <div id="menu">
                <div id="menu_title" class="none">
                    <span> <i class="material_icons"> menu </i></span><span id="desc_menu"> Menu</span>
                </div>
                <a href="">
                    <div class="menu_btn">
                        <span class="icon"> <i class="material_icons">event_available</i></span><span id="desc_menu"> Consultar </span>
                    </div>
                </a>
                <a href="">
                    <div class="menu_btn">
                        <span class="icon"> <i class="material_icons">schedule</i></span><span id="desc_menu"> Agendar</span>
                    </div>
                </a>
                <a href="">
                    <div class="menu_btn">
                        <span class="icon"> <i class="material_icons">card_giftcard</i></span><span id="desc_menu"> Presente</span>
                    </div>
                </a>
                <a href="">
                    <div class="menu_btn">
                        <span class="icon"> <i class="material_icons">help_outline</i></span><span id="desc_menu"> Dúvidas</span>
                    </div>
                </a>
                <a href="">
                    <div class="menu_btn">
                        <span class="icon"> <i class="material_icons">hearing</i></span><span id="desc_menu"> Ouvidoria</span>
                    </div>
                </a>
                <a href="">
                    <div class="menu_btn">
                        <span class="icon"> <i class="material_icons">mail_outline </i></span><span id="desc_menu"> Mensagem</span>
                    </div>
                </a>
            </div>
            <div id="main">
                <div class="content">
                    <p> Mais de 8 anos de atendimento em cuiabá e região, nosso espaço se preocupa com o bem estar e garante a satisfação
                        de nossos clientes. Nossos profissionais acompanham as tecnicas e procedimentos mais quentes e inovadores disponíveis atualmente
                        no mercado.
                        Contamos com espaços climatizados e aconchegantes e, temos inclusive, uma brinquedoteca para as crianças.
                        Produtos originais e anti-alergênicos garantem a qualidade dos nossos serviços além de grandes parceiros da farmacia estética 
                        que nos oferecem tecnologia de ponta.
                    </p>
                </div>
            </div>
            <div id="side_title" class="title">
                <span>Mural</span>
            </div>
            <div id="side">
                <div class="side_item">
                    <p>
                        itens container lateral
                    </p>
                </div>
                <div class="side_item">
                    <p>
                        itens container lateral
                    </p>
                </div>
                <div class="side_item">
                    <p>
                        itens container lateral
                    </p>
                </div>
                <div class="side_item">
                    <p>
                        itens container lateral
                    </p>
                </div>
                <div class="side_item">
                    <p>
                        itens container lateral
                    </p>
                </div>
                <div class="side_item">
                    <p>
                        itens container lateral
                    </p>
                </div>
                <div class="side_item">
                    <p>
                        itens container lateral
                    </p>
                </div>
            </div>
            <div id="box">
                <div id="box_title" class="title">
                    <span>Produtos & Serviços</span>
                </div>
                <div class="box_item"> 
                    <p>
                        itens mega container
                    </p>
                    <div class="image_container">
                        <!-- <img class="image_container" src="./style/img/promo/old_capa.png" alt="capa antiga"> -->
                    </div>
                    <p>
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                    </p>
                </div>
                <div class="box_item"> 
                    <p>
                        itens mega container
                    </p>
                    <div class="image_container">
                        <!-- <img class="image_container" src="./style/img/promo/old_capa.png" alt="capa antiga"> -->
                    </div>
                    <p>
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                    </p>
                </div>
                <div class="box_item"> 
                    <p>
                        itens mega container
                    </p>
                    <div class="image_container">
                        <!-- <img class="image_container" src="./style/img/promo/old_capa.png" alt="capa antiga"> -->
                    </div>
                    <p>
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                    </p>
                </div>
                <div class="box_item"> 
                    <p>
                        itens mega container
                    </p>
                    <div class="image_container">
                        <!-- <img class="image_container" src="./style/img/promo/old_capa.png" alt="capa antiga"> -->
                    </div>
                    <p>
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                    </p>
                </div>                
                <div class="box_item"> 
                    <p>
                        itens mega container
                    </p>
                    <div class="image_container">
                        <!-- <img class="image_container" src="./style/img/promo/old_capa.png" alt="capa antiga"> -->
                    </div>
                    <p>
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                    </p>
                </div>
                <div class="box_item"> 
                    <p>
                        itens mega container
                    </p>
                    <div class="image_container">
                        <!-- <img class="image_container" src="./style/img/promo/old_capa.png" alt="capa antiga"> -->
                    </div>
                    <p>
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                    </p>
                </div>
                <div class="box_item"> 
                    <p>
                        itens mega container
                    </p>
                    <div class="image_container">
                        <!-- <img class="image_container" src="./style/img/promo/old_capa.png" alt="capa antiga"> -->
                    </div>
                    <p>
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                    </p>
                </div>
                <div class="box_item"> 
                    <p>
                        itens mega container
                    </p>
                    <div class="image_container">
                        <!-- <img class="image_container" src="./style/img/promo/old_capa.png" alt="capa antiga"> -->
                    </div>
                    <p>
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                    </p>
                </div>
                <div class="box_item"> 
                    <p>
                        itens mega container
                    </p>
                    <div class="image_container">
                        <!-- <img class="image_container" src="./style/img/promo/old_capa.png" alt="capa antiga"> -->
                    </div>
                    <p>
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                    </p>
                </div>                                                                        
                <div class="box_item"> 
                    <p>
                        itens mega container
                    </p>
                    <div class="image_container">
                        <!-- <img class="image_container" src="./style/img/promo/old_capa.png" alt="capa antiga"> -->
                    </div>
                    <p>
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                    </p>
                </div>
                <div class="box_item"> 
                    <p>
                        itens mega container
                    </p>
                    <div class="image_container">
                        <!-- <img class="image_container" src="./style/img/promo/old_capa.png" alt="capa antiga"> -->
                    </div>
                    <p>
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                    </p>
                </div>
                <div class="box_item"> 
                    <p>
                        itens mega container
                    </p>
                    <div class="image_container">
                        <!-- <img class="image_container" src="./style/img/promo/old_capa.png" alt="capa antiga"> -->
                    </div>
                    <p>
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                        carlos carlos carlos carlos carlos carlos carlos carlos carlos carlos
                    </p>
                </div>                                                                                                            
            </div>
        </div>
        <div id="rodape">
            <div id="creditos" class="bar_container">
                <div id="bar">
                    <a href="https://fb.com/carloskate69" target="_blank">
                        <div class="btn_webmaster" title="Webmaster">
                            <span> <i class="material_icons">face</i> webmaster </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>