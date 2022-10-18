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
            margin-top: 80px;
        }
        div {
            background-color: white;
            border-radius: 5px;
            box-shadow: 4px 4px 2px #84af9c70;
            width: 50px;
            padding: 5px;
            margin: auto;
            height: auto;
        }
        h1 {
            font-size: 2em;
            color: #8181F7;
        }
        h2 {
            font-size: 1.2em;
        }
        p {
            font-weight: bolder;
            text-align: center;

        }

        footer a {
            color: black;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
        }
        footer a:hover{
            text-decoration: underline;
            color: red;
        }
        
      
    </style>
</head>
<body>
    <main>
        <?php
        echo "<h1>Como jogar?</h1>";
        echo "<h2>Para jogar, basta seguir estes passos simples:</h2>";
        ?>
        <ul>
            <li>Ao iniciar o jogo, clique em uma das figuras</li>
            <li>Cada figura se repete em duas peças diferentes</li>
            <li>Ache o par correspondente para pontuar</li>
            <li>Você ganhará caso consiga encontrar todos os pares!</li>
        </ul>
        <?php
        echo "<h2>Obras que você pode encontrar durante o jogo:</h2>";
        $artes=array("Abaporu - Tarsila do Amaral,", "Operarios - Tarsila do Amaral,", "O Homem Amarelo - Anita Malfatti,", "Pierrete - Di Cavalcanti,", "O Artesão - Vicente do Rego Monteiro,", "Paisagem da Espanha - John Graz,", "A Estudante - Anita Malfatti,", "E muito mais!");
        exibe_array($artes);
        
        echo "<h2>Você pode escolher até três níveis no jogo:</h2>";
        $nivel=array("Fácil,", "Médio", "e Difícil!");
        exibe_array($nivel);

        function exibe_array($v){
            foreach ($v as $vetor){
                echo $vetor." ";}
            }
         
        ?>
        <footer>
                <br><p><a href="index.php"><p>Voltar para Página Inicial</a></p>
        </footer>  
</body>
</html>