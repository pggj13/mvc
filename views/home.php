<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>home</h1>
        <?php foreach ($fotografias as $fotos): ?>
            <div style="float: left; margin: 5px;">
                <img src="./assets/imagem/<?php echo $fotos['arquivos']; ?>"border="0" width="250" height="150">
            </div>
        <?php endforeach; ?>
    </body>
</html>
