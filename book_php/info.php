<?php
$fp = fopen("info.txt","r");
$line = array();

if($fp){
    while(!feof($fp)){
        $line[] = fgets($fp);
    }
    fclose($fp);
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お知らせ掲示板</title>
</head>
<body>
    <h1>テニスサークル交流サイト</h1>
    <p><a href="index.php">トップページに戻る。</a></p>
    <h2>お知らせ</h2>  
    <?php 
        if(count($line) > 0){
            for($i = 0; $i < count($line); $i++){
                if($i == 0){
                    echo "<h3>".$line[0]."<h3>";
                } else {
                    echo $line[$i]."<br>";
                }
            }
        } else {
            echo "お知らせはありません。";
        }
    ?>
</body>
</html>