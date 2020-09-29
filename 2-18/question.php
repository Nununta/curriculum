<link rel="stylesheet" href="index.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$questions_1 = [80, 22, 20, 21];
$questions_2 = ["PHP", "Python", "JAVA", "HTML"];
$questions_3 = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer_1 = $questions_1[0];
$answer_2 = $questions_2[3];
$answer_3 = $questions_3[1];


?>
<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($questions_1 as $value): ?>
    <input type="radio" name="port_number" value="<?php $value ?>"><?php echo $value; ?>
<?php endforeach ?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($questions_2 as $value): ?>
    <input type="radio" name="language" value="<?php $value ?>"><?php echo $value; ?>
<?php endforeach ?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($questions_3 as $value): ?>
    <input type="radio" name="sql" value="<?php $value ?>"><?php echo $value; ?>
<?php endforeach ?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<br>
<input type="submit" value="回答する">
</form>