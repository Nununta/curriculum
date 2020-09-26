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
//UNIXタイムスタンプについて
echo time();
echo "<br>";
var_dump(time());
echo "<br>";
// 現在時刻を取得
echo date("Y-m-d H:i:s", time());
echo "<br>";
echo date("Y-m-d H:i:s", 2502876823);
echo "<br>";
echo date("Y年m月d日 H時i分s秒", time());
echo "<br>";
//strtotime（特定日付のタイムスタンプを取得）
echo strtotime("1992/9/04 11:25:00");
echo "<br>";
//先週の 金曜日
echo strtotime("last Friday");
echo "<br>";
//5日後
echo strtotime("+5 day");

?>

<?php
echo "<br>";
echo "---------------------------------------------------------------------------"."<br>";
echo "ログ(意味、確認の仕方):ログは、コンピュータの利用状況やデータ通信など履歴や情報の記録のこと。".
     "ログの確認方法(MAC)は、コンソールからログを確認した対象のデバイスをクリックするとログの確認を行える。"."<br>";
echo "<br>";
echo "レンタルサーバ:一つの物理サーバを複数人で共有する。".
     "使用出来るアプリケーションやフォルダも予め決まっており、分かりやすいが柔軟性にはかける。"."<br>"."<br>".
     "VPS(Virtual Private Server):１つの仮想サーバー群を個別で利用可能なサービス。物理サーバは一つだが、ユーザごとに倫理的にリソースが分けられ、".
     "与えられたスペースで自由にアプリケーションのインストールなどを行ってよい。レンタルサーバより自由度が高く、中規模ユーザ向け。OS以外を自分で容易する必要がある為、構築知識が必要。"."<br>"."<br>".
     "クラウドサーバー:複数の仮想サーバーを個別で利用可能なサービス。VPSと同じく、仮想サーバーを利用するが、1契約で複数の仮想サーバーを利用できる点でVPSとは異なる。".
     "アクセス増加時や容量不足などが起きた際に柔軟にリソースを変更することが可能で、大規模ユーザに向いている。"."<br>";
echo "<br>";

echo "PHPのFWの種類と特徴:①CakePHP：かなり歴史のあるフレームワーク。性能自体はそこまで高くないが、機能が豊富かつ日本語ドキュメントが充実しており、"."<br>".
     "扱えるエンジニアが多いことが特徴。"."<br>"."<br>".
     "②Zend Framework：Zend社が開発したフレームワーク。豊富なライブラリがあるが、日本語ドキュメントは少ない為、日本ではあまり利用されていない。"."<br>"."<br>".
     "③Symfony：Ruby on Railsの流れを組むフレームワーク。高速に動作することが利点で、PHPのフレームワークを使う際に速度を重視するような場合に使われることが多い。"."<br>".
     "また、プラグインが優秀で比較的機能追加をしやすくなっている点も人気。日本でも海外でも利用者は多くいる。"."<br>"."<br>".
     "④Fuel PHP：Code Igniterを改良して開発されたフレームワーク。機能は少なめですが、軽量で高速に動作することが特徴。"."<br>".
     "構成も単純でわかりやすい為、小規模環境や学習用として利用されることが多い。"."<br>"."<br>".
     "⑤Ethna：もとはGREEの藤本真樹氏によって開発されたフレームワークだが、現在はオープンソースになっている。"."<br>".
     "システムを効率よく開発することをコンセプトとしている為、細かい処理についてはフレームワーク側がサポートしてくれる。"."<br>".
     "しかし、PHPフレームワークの流行がLaravelなどの軽量フレームワークに移っていく時期だったこともあり、利用される頻度はやや落ちている。"."<br>"."<br>".
     "⑥Laravel：作られたのが最近のため、わかりやすさ、書きやすさだけでなく、コード自体も非常にきれいに書かれている。"."<br>".
     "またサードパーティーで作られているライブラリも非常に優秀なものが多く、急速に利用できるエンジニアが増えてきている。";
echo "<br>";


echo "---------------------------------------------------------------------------"."<br>";
?>