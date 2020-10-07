<?php
require_once('db_connect.php');

$name = "Gorou Tanaka";
$password = "Tanaka";

$sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
$pdo = db_connect();

try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
    echo "インサートしました。";
} catch (PDOExpetion $e) {
    echo "Error: ". $e->getMessage();
    die();
}

?>








