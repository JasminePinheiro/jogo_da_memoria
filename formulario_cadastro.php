<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario_nv_usuario.css">
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
            <h2>Cadastre-se</h2>
            <form action="action_form_cadastro.php" method="post">
            <div class="input_box">
                    <input required type="nome" name="txtnome" placeholder="Nome">
                </div>
                <div class="input_box">
                    <input required type="email" name="txtemail" placeholder="Email ou número de telefone">
                </div>

                <div class="input_box">
                    <input required type="password" name="txtsenha" placeholder="Senha">
                </div>
                <div class="input_box">
                    <input required type="password" name="txtconf_senha" placeholder="Confirme novamente a senha">
                </div>
                <div>
                <button class="submit" name="btnenviar" value="Enviar dados">
                        Cadastrar
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
                    <p>Já tem uma conta? <a href="formulario_login.php">Entrar.</a></p>
                </div>

               
            </div>
        </div>
    </div>
</body>
</html>