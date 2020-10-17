<?php
require_once("db_connect.php");
require_once("function.php");

check_user_logged_in();

if (!empty($_POST)) {
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        echo '発売日が未入力です。';
    } elseif (empty($_POST["stock"])) {
        echo '在庫数が未入力です。';
    }

    if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"]) ) {
        $title = htmlspecialchars($_POST["title"],ENT_QUOTES);
        $date = htmlspecialchars($_POST["date"], ENT_QUOTES);
        $stock = htmlspecialchars($_POST["stock"], ENT_QUOTES);

        $pdo = db_connect();

        try {
            $sql = "insert into books (title, date, stock) values (:title, :date, :stock)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":date", $date);
            $stmt->bindParam(":stock", $stock);
            $stmt->execute();
            header("Location: main.php");
            exit;
        } catch (PDOException $e) {
            echo "Error:" .$e->getMessage();
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
    <link rel="stylesheet" href="style.css">
    <title>本新規登録</title>
</head>
<body>
    <div class="container">
        <h1 class="title_create">本 登録画面</h1>
        <form action="" method="post">
            <input type="text" name="title" class="inputs" placeholder = "タイトル" >
            <h3 class="item">発売日<h3>
            <input type="date" name="date" class="inputs" value = "発売日" >
            <br>
            <h3 class="item">在庫数<h3>
            <br>
            <select name="stock" id="dropdown">
            <option value="" style="display: none;">選択してください</option>
            <?php for($i=0; $i<= 50; $i++): ?>
            <option value="<?= $i; ?>"><?= $i; ?></option>
            <?php endfor ?>
            </select>
            <br>
            <input type="submit" value="登録" class="btn--blue btn--shadow" id="Registration">
        </form>
     </div>
</body>
</html>