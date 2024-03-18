<!DOCTYPE html>
<html>
<head>
    <title>Mensagem de Boas-vindas</title>
</head>
<body>
    <?php
    if(isset($_GET['nome'])) {
        $nome = $_GET['nome'];
        echo "<h1>Bem-vindo, $nome!</h1>";
    } else {
        echo "<h1>Bem-vindo!</h1>";
    }
    ?>
</body>
</html>