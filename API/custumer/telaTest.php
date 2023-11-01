

<!DOCTYPE html>
<html>
<head>
    <title>API Clientes</title>
</head>
<body>
    <h1>Criar Cliente</h1>
    <form action="create.php" method="POST">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="phone">Telefone:</label>
        <input type="text" name="phone" required><br>

        <input type="submit" value="Criar Cliente">
    </form>

    <hr>

    <h1>Lista de Clientes</h1>
    <form action="read.php" method="GET">
        <input type="submit" value="Listar Clientes">
    </form>

</body>
</html>