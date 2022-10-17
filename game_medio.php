<html>

<head>
    <title>Jogo da memória</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<h1 class="game-title">Vamos nos divertir!!</h1>

<?php

//Inicia a sessão que já foi criada
session_start();

//Isset é uma função que tem a finalidade de verificar se uma variável existe ou se ela é null. 
if (isset($_POST['acao']) && $_POST['acao'] == "reset") {
   
    session_destroy(); //Remove todos os dados associados com a sessão atual
    session_start();   //Inicia a sessão que já foi criada
    unset($_GET['l']); //unset é uma função que tem a finalidade de remover uma variável
    unset($_GET['c']);
    header("Location: niveis.php");
}


require_once 'tabuleiros_medio.php'; //Está incluindo as matrizes das imagens de outro arquivo em PHP



if ((isset($_POST['acao']) && $_POST['acao'] == "reset") || isset($_POST['acao']) && $_POST['acao'] == "start") {
    
    $tabEscolhido = rand(0,2);  //Gera matrizes aleatórias 
    $_SESSION['tabEscolhido'] = $tabEscolhido;


    $_SESSION['tabResultado'] = [
        [false, false, false, false],
        [false, false, false, false],
        [false, false, false, false],
        [false, false, false, false]
    ];
}



// Só pode verificar duas cartas por vez
if (!isset($_SESSION['numero_jogadas']) || $_SESSION['numero_jogadas'] >= 2) {
    $_SESSION['numero_jogadas'] = 1;
} else {
    $_SESSION['numero_jogadas'] = $_SESSION['numero_jogadas'] + 1;
}




// Verficamos a carta que estamos clicando
if (isset($_SESSION['numero_jogadas']) && $_SESSION['numero_jogadas'] == 2 &&  !isset($_POST['acao'])) {
     //Se as duas cartas estiverem iguais, ele deixa fixado na tela.
    if (isset($_GET['l']) && isset($_GET['c']) && isset($_SESSION['valorLinha']) && isset($_SESSION['valorColuna']) &&  $tabuleiros[$_SESSION['tabEscolhido']][$_GET['l']][$_GET['c']] == $tabuleiros[$_SESSION['tabEscolhido']][$_SESSION['valorLinha']][$_SESSION['valorColuna']]) {
        $_SESSION['tabResultado'][$_GET['l']][$_GET['c']] = true;
        $_SESSION['tabResultado'][$_SESSION['valorLinha']][$_SESSION['valorColuna']] = true;

         //Mostra um aviso de parabéns na tela após acertar todos os pares das cartas.
         $array = [
            [true, true, true, true],
            [true, true, true, true],
            [true, true, true, true],
            [true, true, true, true]
        ];
        if ($_SESSION[ 'tabResultado'] == $array){
            echo
            '<script>   
            alert("Parabéns, você finalizou o jogo!!!🥳🏆");
            </script>';
        }
    }
}


// valores da jogada atual 
// $_GET['l']
// $_GET['c']

// valores da jogada anterior
// $_SESSION['valorLinha']
// $_SESSION['valorColuna']

// mostra se você já fez uma jogada
if (
    isset($_GET["l"]) && isset($_GET["c"])
    && isset($_SESSION['numero_jogadas']) && $_SESSION['numero_jogadas'] == 1
) { // mostra se você já fez uma jogada
    $_SESSION['valorLinha'] = $_GET['l'];
    $_SESSION['valorColuna'] = $_GET['c'];
}

?>

<?php if (isset($_SESSION['tabResultado'])) {  ?>

    <div class="tabuleiro-container">
        <table class="table">

            <?php for ($l = 0; $l < 4; $l++) {    ?>
                <tr>
                    <?php for ($c = 0; $c < 4; $c++) {    ?>

                          <!-- aparece uma carta com a imagem DA JOGADA ATUAL -->
                        <?php if (isset($_GET["l"]) && isset($_GET["c"]) && $_GET['l'] == $l && $_GET['c'] == $c) { ?>
                            <td>
                                <!-- aparece uma CARTA VIRADA PARA cima -->
                                <a href="?l=<?= $l ?>&c=<?= $c ?>">
                                    <img src="imagens/<?= $tabuleiros[$_SESSION['tabEscolhido']][$l][$c] ?>.png ">
                                </a>
                            </td>
                            <!-- aparece uma carta a imagem da jogada ANTERIOR -->
                        <?php } else if (
                            $_SESSION['numero_jogadas'] >= 1
                            && (isset($_SESSION['valorLinha']) && (isset($_SESSION['valorColuna'])))
                            && ($_SESSION['valorLinha'] == $l && $_SESSION['valorColuna'] == $c)
                        ) { ?>

                            <!-- aparece uma CARTA VIRADA PARA CIMA -->
                            <td>
                                <a href="?l=<?= $_SESSION['valorLinha'] ?>&c=<?= $_SESSION['valorColuna'] ?>">
                                    <img src="imagens/<?= $tabuleiros[$_SESSION['tabEscolhido']][$_SESSION['valorLinha']][$_SESSION['valorColuna']] ?>.png ">
                                </a>
                            </td>
                        <?php }
                        else
                        if (isset($_SESSION['tabResultado']) && $_SESSION['tabResultado'][$l][$c] == true) {
                            ?>

                            <!-- aparece uma CARTA VIRADA PARA CIMA -->
                            <td>
                                <img src="imagens/<?= $tabuleiros[$_SESSION['tabEscolhido']][$l][$c] ?>.png ">
                            </td>

                        <?php } else { ?>

                            <!-- aparece uma CARTA VIRADA PARA BAIXO -->
                            <td><a href="?l=<?= $l ?>&c=<?= $c ?>">
                                    <img src="imagens/Carta.png ">
                            </td>
                        <?php } ?>

                    <?php } ?>
                </tr>
            <?php } ?>
        </table>

    </div>

<?php } ?>


<?php if (isset($_SESSION['tabResultado'])) { ?>
    <div style="text-align: center;padding:2em">
        <form method="POST">
            <input type="hidden" name='acao' value="reset" />
            <input type="submit" value="Voltar" style="font-size: 1.8em; background-color:red; color: white;" />
        </form>
    </div>

<?php } else { ?>


    <div style="text-align: center;padding:2em">
        <form method="POST">
            <input type="hidden" name='acao' value="start" />
            <input type="submit" value="Começar" style="font-size: 1.8em; background-color:green; color: white;" />
        </form>
    </div>

<?php } ?>


</div>

</html>