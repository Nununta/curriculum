<?php
//条件分岐
$age = 18;
if($age >= 20){
    echo "お酒が飲めるぞー！";
}else {
    echo "お酒は二十歳になってから";
}
echo "<br>";

?>

<?php
$age = 24;
//学生かどうか
$is_student = false;
if($age < 25 && $is_student){
    echo "学割パックが使えるよ";
} elseif($age < 25){
    echo '若者応援割引が使えるよ';
}
echo "<br>";
?>

<?php
// 例として、血液型を診断する条件分岐
$blood = 'B';
if($blood == 'A') {
  echo "A型です";
} elseif($blood == 'B') {
  echo "B型です";
} elseif($blood == 'O') {
  echo "O型です";
} elseif($blood == 'AB') {
  echo "AB型です";
 } else {
  echo "A/B/O/ABから選択してください";
}
echo "<br>";
?>

<?php
// case
$blood = 'A';
switch($blood){
case'A';
print'A型です';
break;
case'B';
print'B型です';
break;
case'O';
print 'O型です';
break;
case 'AB';
print'AB型です';
break;
default:
echo 'A/B/O/ABから選択してください';
}
echo "<br>";
?>

<?php
//if文を簡潔に書く方法：三項演算子
$name = "";

if ($name != "") {
    echo '名前を受け付けました';
} else {
    echo '名前を入力してください';
}

//上記を三項演算子に書き換える
$name = "";

echo ($name != "") ? '名前を受け付けました' : '名前を入力してください';
echo "<br>";
?>

<?php
$string = '1';
$int = 1;

if (1 === $string) {
  echo '変数stringはint型です。';
} else {
  echo '変数stringはstring型です。';
}
// 「変数stringはstring型です」が出力される

if (1 === $int) {
  echo '変数intはint型です。';
} else {
  echo '変数intはstring型です。';
}
// 「変数stringはint型です。」が出力される
echo "<br>";
?>

<?php
$name ="taro";
$password ="pass";

if($name == "taro" && $password == "pass"){
    echo "ログイン成功です";
} elseif($name != "taro" && $password == "pass") {
    echo "名前が間違っています。";
} elseif($name == "taro" && $password != "pass") {
    echo "パスワードが間違っています。";
} elseif($name != "taro" && $password != "pass")
    echo "入力情報が間違っています。";
?>

<?php
echo "<br>";
echo "---------------------------------------------------------------------------"."<br>";
echo "IDE（統合開発環境）:エディタやコンパイラをまとめて提供する「開発環境」そのもの。"."<br>";
echo "<br>";
echo "JOIN（データベースにおいて）：複数のテーブルを特定のキーを使って結びつけること"."<br>";
echo "<br>";
echo "コンフリクト：同じ箇所を異なったブランチで編集を行い、マージしてしまった際にファイルの不整合が発生し、処理が止まってしまう現象。"."<br>".
"これを衝突、またはコンフリクトという。"."<br>";
echo "---------------------------------------------------------------------------"."<br>";
?>
