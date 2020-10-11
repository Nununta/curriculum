<?php
require_once("db_connect.php");
require_once("function.php");

check_user_logged_in();
$pdo = db_connect();

try {
    $sql = "select * from posts order by time DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}catch (PDOException $e) {
    echo "Error:".$e->getMessage();
    die();
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
</head>
<body>
    <h1>メインページ</h1>
    <p>ようこそ<?php echo $_SESSION["user_name"]; ?>さん</p>
    <a href="logout.php">ログアウト</a>
    <a href="create_post.php">記事投稿!</a>
    <table>
        <tr>
        <th>記事id</th>
        <th>タイトル</th>
        <th>本文</th>
        <th>投稿日</th>
        <th></th>
        <th></th>
        <th></th>
        </tr>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
        <td><?= $row["id"] ?></td>
        <td><?= $row["title"] ?></td>
        <td><?= $row["content"] ?></td>
        <td><?= $row["time"] ?></td>
        <td><a href="detail_post.php?id=<?php echo $row['id']; ?>">詳細</a></td>
        <td><a href="edit_post.php?id=<?php echo $row['id']; ?>">編集</a></td>
        <td><a href="delete_post.php?id=<?php echo $row['id']; ?>">削除</a></td>
        <!-- ?以降はgetで動的なidを渡している。 -->
        </tr>
        <?php endwhile ?>
    </table>
   
</body>
</html>
