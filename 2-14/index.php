<?php
//count（要素の数を数える）
$colors = ["red","blue","green","yellow"];
echo count($colors);
echo "<br>";
//sort（要素の並べ替え）
$members = ["akihiko","yamada","hiroko","kozima","taro"];
sort($members);
var_dump($members);
echo "<br>";
$numbers = [36, 42, 57, 17, 25];
sort($numbers);
var_dump($numbers);
echo "<br>";
//in_array（配列に中にある要素が存在しているか）
var_dump(in_array("yamada",$members));
echo "<br>";
if(in_array("taro",$members)){
    echo "太郎がいるよ！";
}else {
    echo "太郎はいないよ！";
}
echo "<br>";
//implode（配列を結合して文字列に変換）
$atstr = implode("@",$members);
var_dump($atstr);
echo "<br>";
//explode（文字列を指定の区切りで配列にする）
$re_atstr = explode("@",$atstr);
var_dump($re_atstr);
echo "<br>";
$str = "あ、い、う、え、お";
$array = explode("、",$str);
var_dump($array);


?>





<?php
echo "<br>";
echo "---------------------------------------------------------------------------"."<br>";
echo "要件定義(要求仕様書):ユーザーが開発担当側に対して開発を依頼するシステム要件を文章化したもの。"."<br>";
echo "<br>";
echo "単体テスト・結合テスト:単体テストは、各システムが上手く動作するのか関数単位でチェックを行うテスト。"."<br>".
     "結合テストは、単体テスト後に行うテスト。インターフェーステスト、業務シナリオテスト、負荷テストを行う。"."<br>";
echo "<br>";

echo "テスト仕様書:システムやソフトウェアが、要件定義書通りに機能するか、テストポイントをまとめたドキュメント。"."<br>".
     "テスト仕様書の必須項目:テスト環境、テスト内容、テストの操作手順、テスト結果、テスト実施日、担当者、障害報告票番号。";
echo "<br>";


echo "---------------------------------------------------------------------------"."<br>";
?>