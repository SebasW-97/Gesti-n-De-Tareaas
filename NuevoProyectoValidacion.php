<?php
session_start();
require_once "connect.php";

$connection = new mysqli($host, $db_user, $db_password, $db_name);

if ($connection->connect_errno != 0) {
    echo "Error: " . $connection->connect_errno . "<br>";
    echo "Description: " . $connection->connect_error;
} else {
    $fullName = $_POST['full'];
    $shortName = $_POST['short'];

    $sql = "INSERT INTO projects VALUES (NULL, '$fullName','$shortName')";

    if ($connection->query($sql)) {
        $_SESSION['newProjectSuccess'] = '<span class="success-msg">Proyecto agregado correctamente.</span>';
        unset($_SESSION['addProjectError']);
        header('Location: index.php');
    } else {
        $_SESSION['addProjectError'] = '<span class="error-msg">Disculpa! El proyecto no pudo ser agregado.</span>';
        //header('Location: newTask.php');
    }
    $connection->close();
}
