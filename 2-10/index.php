<?php
//関数
// 1)
// 底面
$base1 = 10;
// 高さ
$height1 = 5;
// 面積 
$area1 = $base1 * $height1 / 2;

// 2)
$base2 = 15;
$height2 = 8;
$area2 = $base2 * $height2 / 2;

// 3)
$base3 = 8;
$height3 = 6;
$area3 = $base3 * $height3 / 2;

?>

<?PHP
function getTriangleArea($base, $height) {
    $area = $base * $height / 2;
    print "三角形の面積は".$area."だよ。";
}

// 1)
getTriangleArea(10,5);
// 2)
getTriangleArea(15,8);
// 3)
getTriangleArea(8,6);
?>

<?PHP
function getSquareArea($side, $vertical, $height){
    $area = $side * $vertical * $height;
    print $area;
}
echo "<br>";
getSquareArea(5,10,8);

?>

<?php
echo "<br>";
echo "---------------------------------------------------------------------------"."<br>";
echo "ハッシュ化:値をハッシュ関数に入れてハッシュ値に変換すること。DB内でデータを保管する際、データの覗き見対策として、ハッシュ値に変えて保管することが多い。"."<br>";
echo "<br>";
echo "総合テスト:構築したシステムが全体で予定通りの機能を満たしているかや、機能・性能が仕様書通りに構築できているか検証するテスト。"."<br>".
"単体テスト、結合テストの実行後に、本番とほぼ同じ環境でテストを実施する。"."<br>";
echo "<br>";
echo "デバッグ:コンピュータのプログラムの誤り（＝バグ）を見つけ、手直しをすること。"."<br>";
echo "---------------------------------------------------------------------------"."<br>";
?>