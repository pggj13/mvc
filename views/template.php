<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./assets/css/template.css">
    </head>
    <body>
        <div class="topo">
          
        </div>
        <div class="menu">
            <div class="menuint">
                <ul>
                    <a href="./"><li>HOME</li></a>
                    <a href="./servico"><li>SERVIÇOS</li></a>
                    <a href="./fotografia"><li>FOTOGRAFIAS</li></a>
                    <a href="./contato"><li>CONTATOS</li></a>
                    <a href="./noticia"><li>NOTICIAS</li></a>
                </ul>
            </div>
        </div>
        <div class="contanner">
            <div class="contannerint">
                 <?php echo rand(0, 9999);?>
                <?php $this->loadViewInTemplate($viewName, $viewData); ?>
            </div>
        </div>

        <div class="rodape">
            <div class="rodapeint">
                <div class="rodapeleft">
                    <h1>SOBRE</h1>
                    <H4>Todas as informação sobre o site</h4><br>                   
                </div>
                <div class="rodaperight">
                    <h1>CONTATOS</h1>
                    <H4>98000521/923855162</H4>
                </div>
            </div>
        </div>

    </body>
</html>
