<?php 
echo "演算子";
echo '<br>';
$hello = "Hello";
$world = "World!!";
echo $hello.$world;
echo '<br>';

echo 1 + 1;
echo '<br>';
echo 10 - 1;
echo '<br>';
echo 2 * 2;
echo '<br>';
echo 10 / 5;
echo '<br>';
echo 5 % 3;
echo '<br>';
echo '<br>';

echo "単項演算子";
echo '<br>';
// $x = $x + 1
$x = 1;
$x++; 
echo $x;
echo '<br>';
// $x = $x - 1
$x--;
echo $x;
echo '<br>';
$y = 1;
$y += 1;
echo $y;
echo '<br>';
$y *= 2;
echo $y;
echo '<br>';
$y /= 2;
echo $y;
echo '<br>';

?>

<?php
echo "<br>";
echo "---------------------------------------------------------------------------"."<br>";
echo "エビデンス:システム開発のテスト工程などで、システムが正しく動作している、あるいは不具合が生じたことを示す証拠となる書類やデータのこと"."<br>";
echo "<br>";
echo "バッチ:バッチ処理はあらかじめ登録した一連の処理を自動的に実行する処理方式を指す。"."<br>".
"複数のプログラムやファイル転送コマンドなどの実行順序を定義し、大量のデータを一括処理する。処理の単位を「バッチ」と呼ぶ。"."<br>";
echo "<br>";
echo "MVCモデル:モデル（Model）頭文字「M」、ビュー（View）頭文字「V」、コントローラー（Controller）頭文字「C」で「MVC」と言う。"."<br>".
"プログラムの処理を役割毎に分けて開発を行う考え方で、Webシステムの開発に頻繁に用いられる。"."<br>".
"Modelは、DBからデータを取得して、コントローラへデータを送るのと、コントローラーから取得したデータをDBに保存させるなどの役割"."<br>".
"Viewとは、ユーザーが実際に見る画面を示しています。主にHTMLで書かれている。Controllerから受け取ったデータ(レスポンス)を画面に表示したりする。"."<br>".
"Controllerとは、ViewとModelを操作する部分。具体的には、Viewからリクエストを受け取り、Modelへ処理の命令を出す。"."<br>".
"また、Modelから処理の結果を受け取り、レスポンスとしてViewへ返したりする。"."<br>";
echo "---------------------------------------------------------------------------"."<br>";
?>