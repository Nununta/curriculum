<?php
require_once("db_connect.php");

session_start();

if(!empty($_POST)) {
    if(empty($_POST["name"])){
        echo "名前が未入力です";
    }

    if(empty($_POST["pass"])){
        echo "パスワードが未入力です";
    }

    if(!empty($_POST["name"]) && !empty($_POST["pass"])) {
        $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
        $pass = htmlspecialchars($_POST["pass"], ENT_QUOTES);
        $pdo = db_connect();
        try{
            $sql = "select * from users where name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name",$name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if(password_verify($pass, $row["password"])) {
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

<!doctype html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>ログインページ</title>
    </head>
    <body>
        <div class="container">
            <div class="header">
            <h1 class="title_login">ログイン画面</h1>
            <a href="signUp.php" class="btn--orange btn--shadow">新規ユーザ登録</a>
            </div>

            <form method="post" action="">
                <input class="inputs" type="text" name="name" placeholder="ユーザ名"><br>
                <input class="inputs" type="text" name="pass" placeholder="パスワード"><br>
                <input type="submit" value="ログイン" class="btn--blue btn--shadow" id="login">
            </form>
        </div>
    </body>
</html>