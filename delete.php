<?php
$servername = "localhost";
$username = "bertan";
$password = "print13";
$dbname = "usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	    $conn->close();
	        echo "<script>window.location.replace('index.php');</script>";
} else {
	    echo "Erro ao excluir usuário: " . $conn->error;
}

$conn->close();
?>
