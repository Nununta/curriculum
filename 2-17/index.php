<?php
// すごろく問題　40マスのすごろくでゴールするために必要な、サイコロを振る回数を求める。

for($i=1; $sum<=40; $i++){  
    $roll = mt_rand(1,6);
    $sum += $roll;

    if($sum <= 39){
        echo $i."回目＝".$roll;
        echo "<br>";
    } else {
        echo $i."回目＝".$roll;
        echo "<br>";
        echo "合計".$i."回でゴールしました"; 
        break;
    }
 }
?>

<?php
echo "<br>";
echo "<br>";

date_default_timezone_set('Asia/Tokyo');
$Current_time = date("H", time());

if($Current_time <= 9 && $Current_time >= 5) {
    echo "今".$Current_time."時台です。"."<br>";
    echo "おはようございます。" ;
} elseif($Current_time <=17 && $Current_time >= 10){
    echo "今".$Current_time."時台です。"."<br>";
    echo "こんにちは。" ;
}else {
    echo "今".$Current_time."時台です。"."<br>";
    echo "こんばんは。" ;
}

?>