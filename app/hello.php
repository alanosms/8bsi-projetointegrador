<?php
// Inclua o arquivo MySQLConnection.php que está na pasta src
require_once 'src/MySQLConnection.php';

// Namespace da classe MySQLConnection
use Application\DBConnection\MySQLConnection;
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conexão com MySQL</title>
</head>
<body>
    <p>
        <?php 
            try {
                // Cria uma instância de MySQLConnection para conectar ao banco de dados
                $db = new MySQLConnection();
                echo "Conexão com o banco de dados foi bem-sucedida!";
            } catch (\PDOException $e) {
                echo "Falha na conexão: " . $e->getMessage();
            }
        ?>
    </p>
</body>
</html>
