<?php
$servername = "localhost";
$username = "bertan";
$password = "print13";
$dbname = "usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "UPDATE users SET nome='$nome', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	    $conn->close();
	        echo "<script>window.location.replace('index.php');</script>";
} else {
	    echo "Erro ao atualizar usuário: " . $conn->error;
}

$conn->close();
?>
