<?php 

require_once __DIR__ . '/lista_destinos.php';

$id = $_GET['id'];

?>


<html>
    <head>
        <title>Detalhes do Destino</title>
    </head>
    <body>
    <link rel="stylesheet" href="./css/styleDestinos.css">
    <link rel="stylesheet" href="./css/cabecalhoeRodape.css">
    <head>
        <div class="cabecalho">
                <a href="index.html"><img src="./img/logo.jpg"></a> 
                <a href="sobreNos.html"><p>Quem somos</p></a>
                <a href="destinos.html"><p>Destinos</p></a>
                <a href="contatos.html"><p>Contatos</p></a>
        </div>
    </head>

    <div class="exibicao">
        <?php foreach($destinos as $chave => $destino): ?>
            <?php if ($chave == $id): ?>
                <img src="<?php echo $destino['banner']; ?>" alt="">
            </div>
            <div class="detalhes-e-imagem">
               <div class="detalhes">
                <h1><?php echo $destino['lugar']; ?></h1>
                <p><?php echo $destino['descricao']; ?></p>
               </div> 
               <div class="imagem-detalhes">
                <img src="<?php echo $destino['imagem']; ?>" alt="<?php echo $destino['lugar']; ?>">
               </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="passeios-e-atividades">
                <h1>Passeios e Atividades</h1>
                <center><p>Conheça o melhor de cada destino e viva experiências únicas com toda liberdade e segurança que sua turma precisa.</p></center>
            </div>
            <div class="atividades-imagens">
                <div class="games">
                    <img src="./img/HorizonGames.png" alt="">
                    <br>
                    <div class="tituloGames"><img src="./img/TituloGames.png" alt=""></div>
                </div>
                <div class="surf">
                    <img src="./img/HorizonSurf.png" alt="">
                    <br>
                    <div class="tituloSurf"><img src="./img/TituloSurf.png" alt=""></div>
                </div>
                <div class="passeio">
                    <img src="./img/HorizonPasseio.png" alt="">
                    <br>
                    <div class="tituloPasseio"><img src="./img/TituloPasseio.png" alt=""></div>
                </div>
            </div>
                

<footer>
    <div class="rodape">
        <ul>
            <li><img src="./img/logo.jpg"></li>
            <li><p>Agência de formaturas que transforma <br> despedidas em momentos extradiordinários <br> e memoráveis. Realizamos  eventos que <br> conectam pessoas e fortalecem uniões</p></li>
            <div class="redes">
                <li><a href="home.php"><img src="./img/instagram.png"></a></li>
                <li><a href="home.php"><img src="./img/facebook.png"></a></li>
                <li><a href="home.php"><img src="./img/tiktok.png"></a></li>
                <li><a href="home.php"><img src="./img/whatzap.png"></a></li>
            </div>
            <li><p>© 2026 Minha Empresa. Todos os direitos reservados.</p></li>
        </ul>
    <div class="rodape2"> 
        <ul>
            <div class="navegacao">
                <li><p>Navegação</p></li>
            </div>
            <li><a href="home.php">Quem somos</a></li>
            <li><a href="home.php">Destinos</a></li>
            <li><a href="home.php">Contatos</a></li>
        </ul>
</div>
    <div class="rodape3">
        <ul>
            <div class="navegacao2">
                <li><p>Contato</p></li>
                <li><p>E-mail:</p></li>
            </div>
            <li><p>contato@horizonformatura.com.br</p></li>
            <div class="navegacao2">
                <li><p>Localização</p></li>
            </div>
            <li><p>R. Vice Presidente Osvaldo, 481 - Lj 13 - Vila Mariana, São Paulo - SP, 09811-042</p></li>
        </ul>
    </div>
    </div>
</footer>

        
    </body>
</html>
        
    
