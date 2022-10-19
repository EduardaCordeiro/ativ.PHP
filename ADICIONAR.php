<?php
require "CONNECT.php";

$nome = $_GET['NOME'];
$nascimento = $_GET['NASCIMENTO'];
$renda = $_GET['RENDA'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ALUNO  VALUES ('$nome', '$nascimento', '$renda')";
echo $sql;
if ($conn->query($sql) == TRUE) {
    header("location: INDEX.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
