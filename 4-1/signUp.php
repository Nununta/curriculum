<?php

// db_connect.phpの読み込みFILL_IN
require_once("db_connect.php");

// POSTで送られていれば処理実行
if(isset($_POST["signUp"])){
    $name =htmlspecialchars($_POST["name"], ENT_QUOTES);
    $password = htmlspecialchars($_POST["password"], ENT_QUOTES);
// nameとpassword両方送られてきたら処理実行
    if(!empty($_POST["name"] && !empty($_POST["password"]))){
// PDOのインスタンスを取得FILL_IN
$pdo = db_connect();

try {
// SQL文の準備 FILL_IN 
$sql = "insert into users (name,password) values (:name, :password)";
// パスワードをハッシュ化
$password_hash = password_hash($password, PASSWORD_DEFAULT);
// プリペアドステートメントの作成 FILL_IN 
$stmt = $pdo->prepare($sql);
// 値をセット　FILL_IN
$stmt->bindParam(":name",$name);
$stmt->bindParam(":password", $password_hash);
// 実行 FILL_IN
$stmt->execute();
//　登録完了メッセージ出力
echo "登録が完了しました";
}catch (PDOException $e) {
// エラーメッセージの出力 FILL_IN 
echo "Error:".$e->getMessage();
// 終了 FILL_IN
die();
}
}else {
    echo "未入力の項目があります。";
}
}

?>

<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>新規登録</h1>
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>