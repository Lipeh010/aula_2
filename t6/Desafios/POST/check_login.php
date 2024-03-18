<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
</head>
<body>
<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $usuario = $_POST['username'];
    $senha = $_POST['password'];

    // Verifica se o usuário e a senha são válidos
    if ($usuario === "admin" && $senha === "admin123") {
        echo "<h2>Login bem-sucedido!</h2>";
    } else {
        echo "<h2>Usuário ou senha incorretos. Tente novamente.</h2>";
    }
}
?>
</body>
</html>