<link rel="stylesheet" href="index.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['$my_name'];
$port_number = $_POST['port_number'];
$language = $_POST['language'];
$sql = $_POST['sql'];

$answer_1 = $_POST['$answer_1'];
$answer_2 = $_POST['$answer_2'];
$answer_3 = $_POST['$answer_3'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function getAnswer($answer,$correct){
if($answer == $correct){
    echo "正解！";
} else {
    echo "残念・・・";
}
}
?>
<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php getAnswer($port_number,$answer_1); ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php getAnswer($language,$answer_2); ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php getAnswer($sql,$answer_3); ?>