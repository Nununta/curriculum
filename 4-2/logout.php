<?php
session_start();

$_SESSION = array();

session_destroy();

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="login.php" class="btn--orange btn--shadow">ログイン画面に戻る</a>
    </div>
</body>
</html>