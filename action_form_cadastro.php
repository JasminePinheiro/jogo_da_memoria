<?php
echo "<h2> Dados do cadastro: </h2>";
$nome=$_POST["txtnome"];
$email=$_POST["txtemail"];
$senha=$_POST["txtsenha"];
$conf_senha=$_POST["txtconf_senha"];

echo "Nome: $nome <br> Email: $email <br> Senha: $senha <br> Senha confirmada: $conf_senha";
?>