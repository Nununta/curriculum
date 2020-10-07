<?php
//tableのデータ全表示
require_once("db_connect.php");

$sql = "SELECT * FROM users";
$pdo = db_connect();

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row["id"]."、".$row["name"]."、".$row["password"];
        echo "<br>";
    }
} catch(PDOExption $e) {
    echo "Error:".$e->getMessage();
    die();
}

?>


<?php
//id検索
require_once("db_connect.php");
$id= 10;
$id_2= 14;

$sql = "SELECT * FROM users WHERE id = :id or id = :id_2";
$pdo = db_connect();

try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":id_2", $id_2);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row["id"]."、".$row["name"]."、".$row["password"];
        echo "<br>";
    } 
} catch(PDOException $e) {
    echo "Error:". $e->getMessage();
    die();
}

?>





