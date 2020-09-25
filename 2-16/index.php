<?php
//ファイルの書き込み
$testFile = "test.txt";
$contents = "こんにちは！";

if(is_writable($testFile)) {
  // 書き込み可能なときの処理
  // 対象のファイルを開く
  $fp = fopen($testFile, "w");
  // 対象のファイルに書き込む
  fwrite($fp, $contents);
  //ファイルを閉じる
  fclose($fp);
  //書き込みをした旨の表示
  echo "finifh writing";
} else {
    // 書き込み不可のときの処理
    echo "not writable";
    exit;
}
?>

<?php
//ファイルの読み込み
$test_file = "test2.txt";

if(is_readable($test_file)){
   // 読み込み可能なときの処理
   // 対象のファイルを開く
   $fp = fopen($test_file, "r");
   // 開いたファイルから1行ずつ読み込む
   while($line = fgets($fp)){
    //改行コード込みで1行ずつ出力
    echo $line.'<br>';
   }
   //ファイルを閉じる
   fclose($fp);
} else {
    // 読み込み不可のときの処理
    echo "not readable";
    exit;
}

?>



<?php
echo "<br>";
echo "---------------------------------------------------------------------------"."<br>";
echo "CakePHPの2系・3系の違い:デザイン部分なども大きく変わったが大きく変化したのは、ORM部分。以下の2点が大きく変わった。"."<br>".
     "・Modelクラスがテーブル単位の操作を担うTable、レコード単位の操作を担うEntityといったクラスに分割された。"."<br>".
     "・ORMのクエリー結果が配列ではなくオブジェクトで返ってくるようになった。　※2系から3系へのバージョンアップ時は互換性がない。"."<br>";
echo "<br>";
echo "LAMP:オープンソースソフトウェアの組み合わせを指す言葉。(OSのLinux、WebサーバーのApache、データベースのMySQL、プログラミングのPerl、PHP、Python)"."<br>";
echo "<br>";
echo "AWS:Amazon Web Servicesの略で、Amazonが提供している100以上のクラウドコンピューティングサービスの総称"."<br>";
echo "<br>";
echo "---------------------------------------------------------------------------"."<br>";
?>