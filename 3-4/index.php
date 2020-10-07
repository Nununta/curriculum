<?php
require_once("getData.php");

$user_info = new getData();
$users = $user_info->getUserData();

$posts_info = new getData();
$posts = $posts_info->getPostData();
while($row = $posts->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
}



?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header clearfix">
    <img class="logo" src="1599315827_logo.png" alt="YIgroup">
    <div class="header_right">
        <div class="header_upper">
            <?= "ようこそ".$users["last_name"].$users["first_name"]."さん"; ?>
        </div>
        <div class="header_lower">
            <?= "最終ログイン日：".$users["last_login"]; ?>
        </div>
    </div>

</div>
<div class="main">
<table border=1 align="center">
    <tbody>
        <tr>
            <th>id</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
        <?php foreach($rows as $row) :?>
            <tr>
                <th><?= $row["id"]?></th>
                <th><?= $row["title"]?></th>

                <th><?php if($row["category_no"] ==1): ?>
                    <?php echo "食事"; ?>
                    <?php elseif($row["category_no"] ==2): ?>
                    <?php echo "旅行"; ?>
                    <?php else: ?>
                    <?php echo "その他"; ?>
                <?php endif; ?>
                </th>


                <th><?= $row["comment"]?></th>
                <th><?= $row["created"]?></th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</div>

<div class="footer">
 Y&I group.inc
</div>
    
</body>
</html>