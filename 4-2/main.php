<?php
require_once("db_connect.php");
require_once("function.php");

check_user_logged_in();

$pdo = db_connect();
try {
    $sql = "select * from books order by date";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}catch (PDOException $e) {
    echo "Error:".$e->getMessage();
    die();
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>本一覧画面</title>
</head>
<body>
<div class="container">
<h1 id="title_main">在庫一覧画面</h1>
<a href="create_book.php" class="btn--green btn--shadow" id="new">新規登録</a>
<a href="logout.php" class="btn--gray btn--shadow" id="logout">ログアウト</a>

<table>
<tr>
<th>タイトル</th>
<th>発売日</th>
<th>在庫数</th>
<th></th>
</tr>

<tr>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
<td><?= $row["title"]; ?></td>
<td><?= $row["date"]; ?></td>
<td><?= $row["stock"]; ?></td>
<td><a href="delete_book.php?id=<?= $row["id"]; ?>" class="btn--red btn--shadow">削除</a></td>
</tr>
<?php endwhile ?>
</table>
</div>
    
</body>
</html>
