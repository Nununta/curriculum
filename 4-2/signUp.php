<?php
require_once("db_connect.php");
if(!empty($_POST["signup"])) {
    $name =htmlspecialchars($_POST["name"], ENT_QUOTES);
    $password = htmlspecialchars($_POST["password"], ENT_QUOTES);

    if(!empty($_POST["name"] && !empty($_POST["password"]))) {
        $pdo = db_connect();

        try {
            $sql = "insert into users (name,password) values (:name, :password)";
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":password", $password_hash);
            $stmt->execute();
            echo "登録が完了しました";
        } catch(PDOException $e) {
            echo "Error:". $e->getMessage();
            die();
        }

    }
}



?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>新規登録画面</title>
</head>
<body>
<h1>ユーザ登録画面</h1>
<form action="" method="post">
<input type="text" name="name" class="name" placeholder = "ユーザ名" >
<br>
<input type="text" name="password" class="password" placeholder = "パスワード">
<br>
<input type="submit" value = "新規登録" class="button" name = "signup">
</form>
    
</body>
</html>