<?php 
    $fp = fopen("info.txt", "r");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tennis</title>
</head>
<body>
    <h1>テニスサークル交流サイト</h1>
    <h2>お知らせ</h2>
    <?php 
        if($fp){
            $title = fgets($fp);
            if($title){
                echo "<a href='info.php'>".$title."</a>";
            } else {
                echo "お知らせはありません。";
            }
            fclose($fp);
        } else {
            echo "お知らせはありません。";
        }
    ?>
</body>
</html>