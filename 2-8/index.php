<?php
//foreach
$fruits = ["りんご","もも","みかん"];
foreach($fruits as $value){
    echo $value;
    echo "<br>";
}
?>

<?php
$fruits = ["apple" => "りんご", "orange" => "みかん", "peach" => "もも"];
foreach($fruits as $key => $value){
    echo $key."といったら".$value;
    echo "<br>";
}
?>

<?php
echo "<br>";
echo "---------------------------------------------------------------------------"."<br>";
echo "トランザクション:商取引、売買、執行、取扱、議事録などの意味を持つ英単語。ITでは、取引記録などの意味の他に、ソフトウェアの処理方式の一つで、"."<br>".
"互いに関連する複数の処理をまとめ、一つの処理単位として扱うことを指す場合が多い。"."<br>";
echo "<br>";
echo "排他ロック:データベースシステムなどで記憶領域への同時アクセスを制限するロック機構の一つ。Excel同時編集を制限するなど。"."<br>";
echo "<br>";
echo "チューニング:性能の悪いデータベースを見つけ改善を行うこと。"."<br>";
echo "---------------------------------------------------------------------------"."<br>";
?>