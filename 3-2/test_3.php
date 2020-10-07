<?php
require_once("db_connect.php");
$id=13;
$name= "yuta";

$sql = "UPDATE users SET name = :name WHERE id = :id";
$pdo = db_connect();

try {
    $stmt= $pdo->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":name", $name);
    $stmt->execute();
    echo "更新完了です。";
} catch(PDOException $e){
    echo "Error:".$e->getMessage();
    die();
}

?>


<?php
require_once("db_connect.php");

$id=12;

$sql = "DELETE FROM users WHERE id = :id";
$pdo = db_connect();

try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    echo "削除完了です";
}catch(PDOException $e){
    echo "Error:".$e->getMessage();
    die();
}

?>








