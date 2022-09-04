<?php 
if (isset($_COOKIE['T'])) {
    $theme = '';
    $icon = '';
} else {
    $theme = "disabled";
    $icon = '';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link id="dark-theme" rel="stylesheet" href="./assets/css/escuro.css" <?php echo $theme?>>
</head>
<body>
    <header>
        <span class="icon pointer" id="escuro"aria-label=""><?php echo $icon?></span>
        <script src="assets/js/script.min.js"></script>
        <div class="text-center">
<pre>
<span style="color:#ff5f87;">   █</span><span style="color:#ff0087;">███ </span><span style="color:#ff00af;">     </span><span style="color:#d700af;">    </span><span style="color:#d700d7;">    </span><span style="color:#af00d7;">     </span><span style="color:#af00ff;">    </span><span style="color:#8700ff;">    </span><span style="color:#875fff;"> ██  </span><span style="color:#5f5fff;">    </span><span style="color:#5f87ff;">    </span><span style="color:#0087ff;">  ██ </span><span style="color:#00afff;">    </span><span style="color:#00afd7;">    
</span><span style="color:#ff5f87;">  ░</span><span style="color:#ff0087;">██░  </span><span style="color:#ff00af;">    </span><span style="color:#d700af;">    </span><span style="color:#d700d7;">     </span><span style="color:#af00d7;">    </span><span style="color:#af00ff;">    </span><span style="color:#8700ff;">     </span><span style="color:#875fff;">░██ </span><span style="color:#5f5fff;">     </span><span style="color:#5f87ff;">    </span><span style="color:#0087ff;"> ░██</span><span style="color:#00afff;">     </span><span style="color:#00afd7;">    
</span><span style="color:#ff5f87;"> ██</span><span style="color:#ff0087;">████</span><span style="color:#ff00af;"> ████</span><span style="color:#d700af;">██  </span><span style="color:#d700d7;">████</span><span style="color:#af00d7;">██  █</span><span style="color:#af00ff;">████</span><span style="color:#8700ff;">██  </span><span style="color:#875fff;">█████</span><span style="color:#5f5fff;">█  █</span><span style="color:#5f87ff;">████</span><span style="color:#0087ff;">  ░██</span><span style="color:#00afff;">  ██</span><span style="color:#00afd7;">████</span><span style="color:#00d7d7;"> 
</span><span style="color:#ff5f87;">░░░</span><span style="color:#ff0087;">██░ </span><span style="color:#ff00af;">░░██</span><span style="color:#d700af;">░░█ █</span><span style="color:#d700d7;">█░░░</span><span style="color:#af00d7;">░██░</span><span style="color:#af00ff;">░██░░</span><span style="color:#8700ff;">░██░</span><span style="color:#875fff;">░░██</span><span style="color:#5f5fff;">░  ██</span><span style="color:#5f87ff;">░░░█</span><span style="color:#0087ff;">█ ░█</span><span style="color:#00afff;">█ ██░</span><span style="color:#00afd7;">░░░█</span><span style="color:#00d7d7;">█
</span><span style="color:#ff5f87;">  </span><span style="color:#ff0087;">░██ </span><span style="color:#ff00af;">  ░██</span><span style="color:#d700af;"> ░ ░</span><span style="color:#d700d7;">██  </span><span style="color:#af00d7;"> ░██ </span><span style="color:#af00ff;">░██ </span><span style="color:#8700ff;"> ░██ </span><span style="color:#875fff;"> ░██</span><span style="color:#5f5fff;">  ░█</span><span style="color:#5f87ff;">█████</span><span style="color:#0087ff;">█ ░█</span><span style="color:#00afff;">█░██</span><span style="color:#00afd7;">   ░█</span><span style="color:#00d7d7;">█
</span><span style="color:#ff5f87;">  </span><span style="color:#ff0087;">░██ </span><span style="color:#ff00af;">  ░█</span><span style="color:#d700af;">█   ░</span><span style="color:#d700d7;">██  </span><span style="color:#af00d7;"> ░██</span><span style="color:#af00ff;"> ░██ </span><span style="color:#8700ff;"> ░██</span><span style="color:#875fff;">  ░█</span><span style="color:#5f5fff;">█  ░█</span><span style="color:#5f87ff;">█░░░</span><span style="color:#0087ff;">░  ░</span><span style="color:#00afff;">██░██</span><span style="color:#00afd7;">   ░</span><span style="color:#00d7d7;">██
</span><span style="color:#ff5f87;"> </span><span style="color:#ff0087;"> ░██ </span><span style="color:#ff00af;"> ░██</span><span style="color:#d700af;">█   </span><span style="color:#d700d7;">░░███</span><span style="color:#af00d7;">███ </span><span style="color:#af00ff;"> ███</span><span style="color:#8700ff;">  ░██</span><span style="color:#875fff;">  ░░</span><span style="color:#5f5fff;">██ ░</span><span style="color:#5f87ff;">░████</span><span style="color:#0087ff;">██ █</span><span style="color:#00afff;">██░░</span><span style="color:#00afd7;">█████</span><span style="color:#00d7d7;">█ 
</span><span style="color:#ff5f87;"> </span><span style="color:#ff0087;"> ░░ </span><span style="color:#ff00af;">  ░░</span><span style="color:#d700af;">░    </span><span style="color:#d700d7;"> ░░░</span><span style="color:#af00d7;">░░░  </span><span style="color:#af00ff;">░░░ </span><span style="color:#8700ff;">  ░░</span><span style="color:#875fff;">    ░</span><span style="color:#5f5fff;">░   </span><span style="color:#5f87ff;">░░░░</span><span style="color:#0087ff;">░░ ░░</span><span style="color:#00afff;">░  ░</span><span style="color:#00afd7;">░░░░</span><span style="color:#00d7d7;">░  
</span>
</pre>
            <a href="index.php">home</a>
        </div>
        <hr>
    </header>
    <main>
        <h1>Por que?</h1>
        <p>claro que você pode utilizar de alguns frameworks para realizar tal tarefa, o font awoesome, por exemplo. <i>Mas...</i> Se você busca uma página que carregue rápido, e que você tenha total controle, pare de utilizar frameworks.</p>
        <p>
            <i> E como vou utilizar de meus incríveis ícones?</i> Você me pergunta
        </p>

        <p><i><strong>Frontelo</strong></i> é a sua resposta</p>

        <p>Bem você pode utlizar de svgs na sua página, oque resultará numa catastrofe imensúral, ou utilizar o <strong>Frontelo</strong> que vai gerar suas próprias fontes para você a partir de qualquer SVG, oque ocupara menos da metade que qualquer framework.</p>

        <h2>Primiros Passsos</h2>
        <p>Começando, primeiro você precisa escolher os icones em <a href="https://fontello.com/">Frontelo</a> ou
            crialos em svg</p>
        <p>Depois clique em dowload</p>
        <div class="text-center">
            <img class="fluid" src="assets/img/png/1.png" alt="">
        </div>
        <p>Estraia o arquivo zip, usaremos apenas o arquivo de fonte .woff2</p>
        <div class="text-center">
            <img class="fluid" src="assets/img/png/2.png" alt="">
        </div>
        <p>Mova o arquivo para o seu projeto, e cria um arquivo css, e o adicione para a sua página esse arquivo importará a fonte para a sua página</p>

        <div class="code">
            <code>
<pre>
    @font-face {
        font-family: 'nome-da-fonte';
        src: url('caminha do font/nome-da-fonte.woff2');
    }

    .icon {
        font-size: 23px;
        font-family: 'nome-da-font';
        user-select: none;
    }    
</pre>
            </code>
        </div>
        <p>oque por exemplo pode ficar assim</p>
        <div class="code">
            <code>
<pre>
    @font-face {
        font-family: 'ttcons';
        src: url('../fonts/ttcons.woff2');
    }

    .icon {
        font-family: 'ttcons';
        font-size: 23px;
        user-select: none;
    }    
</pre>
            </code>
        </div>
        <p>ou sim</p>
        <div class="code">
            <code>
<pre>
    &lt;!DOCTYPE html>
    &lt;html lang="en">
    
    &lt;head>
        &lt;title>Document<&sol;title>
    &lt;/head>
    
    &lt;body>
        &lt;style>
            @font-face {
                font-family: 'nome-da-fonte';
                src: url('caminha do font/nome-da-fonte.woff2');
            }
    
            .icon {
                font-family: 'nome-da-font';
                font-size: 23px;
                user-select: none;
            }
        <&sol;style>
    <&sol;body>
    
    <&sol;html>
</pre>
            </code>
        </div>
        <p>agora para adicinar o icone na página, primeiro copie o icone no frontelo</p>
        <div class="text-center">
            <img class="fluid" src="assets/img/png/3.png" alt="">
        </div>
        <p>cole o icone dentro de um spam assim, em qualquer lugar do <code>body</code> da sua página</p>
        <div class="code">
            <code>
<pre>
    &lt;span class="icon" aria-label=""><&sol;span>
</pre>
            </code>
        </div>
        <p>Oque no meu caso, resultará num lindo <i>luar</i> da noite <span style="color: rgba(255, 255, 0, 0.856);" class="icon" aria-label=""></span></p>
        <p>Você pode utilizar do atributo <code>aria-label</code> para facilitar a leitura dos icones para leitores de tela. Se deixado vazio, o leitor não ira ler o icone, oque pode ser muito útil em determinados momentos</p>
    </main>
    <footer class="text-center">
        <hr>
        <p>Contato: joseronaldosantos111@gmail.com</p>
        <p>Fim</p>
    </footer>
</body>
</html>