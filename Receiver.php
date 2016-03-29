
<?php

if (empty($_POST)) {
    header('content-type: text/html');
    include 'index.html';
    die();
}

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "BD";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email = $_POST['email'];


$sql = "INSERT INTO Persona (nombre,apellido,correo) VALUES ('$name','$lastname','$email')";

if ($conn->query($sql) === TRUE) {
    echo "Agregado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//echo join(' ', $_POST);
//die('Finalizado');



die('done');
