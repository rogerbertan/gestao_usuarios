<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        ul {
            padding: 0;
        }
        li {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f8f9fa;
        }
        .add-form {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f8f9fa;
        }
        input[type="text"] {
            width: calc(100% - 22px);
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <ul>	 
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "tcc123";
        $dbname = "usuarios";

        // Cria a conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Checa a conexão
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
	}        

        // Seleciona os dados
        $sql = "SELECT id, nome, email FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
		// Exibe os dados de cada linha
		while($row = $result->fetch_assoc()) {
			echo "<li>Nome: " . $row["nome"]. " | Email: " . $row["email"]. " | <a href='edit.php?id=" . $row["id"] . "'>Editar</a> | <a href='delete.php?id=" . $row["id"] . "'>Excluir</a></li>";
		}
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </ul>
    <div class="add-form">
            <h2>Adicionar Novo Usuário</h2>
            <form action="add.php" method="post">
                Nome: <input type="text" name="nome"><br>
                Email: <input type="text" name="email"><br>
                <input type="submit" value="Adicionar">
            </form>
        </div>
        <br>
    </div>
</body>
</html>

