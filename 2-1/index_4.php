<?php 
//whike
$while = 0; 
while($while < 10) {
    echo $while;
    echo "<br>";
    $while++;
}

//do while
$do = 0; 
do {
    echo $do;
    $do++; 
} while($do < 10);


//ループ文　チャレンジ
for($num=0; $num<=100; $num++){
    echo $num;
    echo "<br>";
}

?>


<?php
echo "<br>";
echo "---------------------------------------------------------------------------"."<br>";
echo "サブクエリ:サブクエリとは、データベースなどの問い合わせ（クエリ）文の内部に含まれる、"."<br>".
"別の問い合わせ文のこと。サブクエリの結果を反映したクエリを実行することができる。"."<br>";
echo "<br>";
echo "Bootstrap:Twitter社が開発したフロントエンドのフレームワーク。シンプルなコードでレスポンシブデザインを実装することができる。"."<br>".
"また、よく使用するスタイルが予め定義されている為、決められた形で、コードを書くだけで整ったデザイン"."のWebサイトを作成することが出来る。"."<br>";
echo "<br>";
echo "フレームワーク:汎用的に必要なものをまとめている枠組み（例：Ruby on Rails /AngularJS /Bootsrap）"."<br>".
"ライブラリ:汎用性の高い便利なプログラムのまとまり（例：Railsのkaminari/PythonのNumpy）フレームワークとライブラリの違いについては、"."<br>".
"フレームワーク>ライブラリの包含関係にあります。例えると、建物自体がフレームワークで、テレビや洗濯機などの家電がライブラリのようなイメージ。"."<br>";
echo "---------------------------------------------------------------------------"."<br>";
?>