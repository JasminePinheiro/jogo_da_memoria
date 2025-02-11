<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario_login.css">
    <title>Formulario</title>
</head>
<body>
<div class="header">
        <div class="logo">
        <a href="https://www.instagram.com/kj_games1/" target="blank">
                <img src="imagens/logo1.png" alt="logo">
            </a>
        </div>
    </div>

    <div class="login_body">
        <div class="login_box">
            <h2>Entrar</h2>
            <form action="niveis.php" method="post">
                <div class="input_box">
                    <input required type="email" name="txtemail" placeholder="Email ou número de telefone">
                </div>

                <div class="input_box">
                    <input required type="password" name="txtsenha"  placeholder="Senha">
                </div>

                <div>
                    <button class="submit" name="btnenviar" value="Enviar dados">
                        Entrar
                    </button>
                </div>
            </form>

             <div class="support">
                <div class="remember">
                    <span><input type="checkbox" style="margin: 0;padding: 0; height: 13px;"></span>
                    <span>Lembre-se de mim</span>
                </div>
                <div class="help">
                <a href="https://www.instagram.com/kj_games1/" target="blank">
                        Precisa de ajuda?
                    </a>
                </div>
            </div>

            <div class="login_footer">
                
                <div class="sign_up">
                    <p>Novo por aqui? <a href="formulario_cadastro.php">Cadastre-se.</a></p>
                </div>

               
            </div>
        </div>
    </div>
</body>
</html>