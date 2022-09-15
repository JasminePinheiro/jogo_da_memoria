<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instruções</title>
    <link rel="shortcut icon" href="game.ico" type="image/x-icon">
    <style>
        body {
            background-image: url('imagens/fundo3.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-color: rgb(0, 0, 0,.5);
            position: relative;
            font-family: Arial, Helvetica, Sans-serif;
        }
        main {
        background-color: white;
        border-radius: 10px;
        box-shadow: 4px 3px 2px #84af9c70;
        width: 600px;
        padding: 20px;
        margin: auto;
        height: auto;
        align-items: center;
        justify-content: center;
        }
        div{
            background-color: white;
        border-radius: 5px;
        //box-shadow: 4px 4px 2px #84af9c70;
        width: 50px;
        padding: 5px;
        margin: auto;
        height: auto;
        }
        p {
            color: red;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <main>
        <?php
        echo "<h1>Como jogar?</h1>";
        echo "<h2>Para jogar, basta seguir estes passos simples:";
        ?>
        <ul>
            <li>Ao iniciar o jogo, clique em uma das figuras</li>
            <li>Cada figura se repete em duas peças diferentes</li>
            <li>Ache o par correspondente para pontuar</li>
            <li>Você ganhará caso consiga encontrar todos os pares!</li>
        </ul>
        <?php
        echo "<h1>Obras que você pode encontrar durante o jogo:</h1>";
        $artes=array("A noite estrelada", "Operarios", "Cena de rua em Berlim", "A dança", "Viaduto de Estaque", "Persistência da memória", "Variante da tristeza");
        print_r($artes);
        echo "<h1>Dependendo do tempo que você leva no jogo sua menção pode ser:</h1>";
        $mencao=array("Ótimo!", "Bom!", "Ruim!");
        print_r($mencao);
        echo "<h1>Durante o jogo você vai subindo de níveis, que serão:</h1>";
        $nivel=array("Fácil", "Moderado", "Difícil");
        print_r($nivel);

        ?>
    </main>
</body>
</html>