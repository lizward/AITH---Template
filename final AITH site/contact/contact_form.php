<?php

$servername = "localhost:26";
$username = "phpmailer@mothersprucefarm.com";
$password = "cas225Password";
$dbname = "mothesq5_aith_db";
$name = $_POST['myName'];
$email = $_POST['myEmail'];
$part = $_POST['myPart'];
$question = $_POST['myQuestion'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `contact` (`id`, `name`, `email`, `part`,
        `question`) VALUES (NULL, '$name',
        '$email', '$part', '$question'
        );";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

