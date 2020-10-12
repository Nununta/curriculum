<?php
require_once("db_connect.php");

if(!empty($_POST["login_name"])) {
    if(empty($_POST["login_pass"])){
        echo "名前が未入力です";
    }
    if(empty($_POST["pass"])){
        echo "パスワードが未入力です";
    }
    if(!empty($_POST["login_name"]) && !empty($_POST["login_pass"])) {
        $pdo = db_connect();
        $name = htmlspecialchars($_POST["login_name"], ENT_QUOTES);
        $password = htmlspecialchars($_POST["login_pass"], ENT_QUOTES);
        try {
            $sql = "select * from users where name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
      
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if(password_verify($password, $row["password"])) {
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["user_name"] = $row["name"];
                header("Location: main.php");
                exit;
        } else {
            echo "パスワードに誤りがあります。";
        }
    } else {
        echo "ユーザ名かパスワードに誤りがあります。";
        }
        
    } 
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
<h1>ログイン画面</h1>
<a href="signUp.php" class="signUp">新規ユーザ登録</a>

<form action="post" method="">
<input type="text" name="login_name" class="input_form" placeholder = "ユーザ名" >
<input type="text" name="login_pass" class="input_form" placeholder = "ユーザ名" >
<input type="submit" value = "ログイン" class="button" name = "login">
</form>
    
</body>
</html>