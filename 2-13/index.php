<?php
 //ceil(切り上げ) 
 $a = 6.4;
 echo ceil($a);
echo "<br>";
 
//floor（切り捨て）
$b = 6.4;
echo floor($b);
echo "<br>";

//round（四捨五入）
$c = 7.5;
echo round($c);
echo "<br>";

//pi（円周率）
echo pi();
echo "<br>";

function CircleArea($r){
    $circle_area = $r * $r * pi();
    return $circle_area;
    // echo $circle_area;
}

//半径5cmの円の面積。
$circle_area = CircleArea(5);
echo $circle_area;
echo "<br>";

//四捨五入した円の面積。
echo round($circle_area);
echo "<br>";

//mt_rand（乱数）
echo mt_rand(1,1000);
echo "<br>";

//strlen（文字列の長さ）
$str = "Yuta Uchimuro"; 
echo strlen($str);
echo "<br>";

//strpos（検索）
echo strpos ($str,"U");
echo "<br>";

//substr（文字列の切り取り）
echo substr($str, -4, 4);
echo "<br>";

//str_replace（置換）
$replace = "Test replace";
echo str_replace("Test", "Update", $replace);
echo "<br>";
echo str_replace(" ", "", $replace);
echo "<br>";

//printf（フォーマット化した文字列を出力）
$name = "Yuta Uchimuro";
$limit_hour = 15;
$limit_minute = 2;
printf("%sの誕生日まで残り%02d時間%02d分", $name, $limit_hour, $limit_minute);
echo "<br>";

//sprintf（変数に代入できるprintf）
$slimit_hour = 10;
$slimit_miute = 4;
$slimit_time = sprintf("残り%02d時間%02d分", $slimit_hour, $slimit_miute);
echo $slimit_time;




?>







<?php
echo "<br>";
echo "---------------------------------------------------------------------------"."<br>";
echo "PostgreSQL：MySQLと人気を二分するオープンソースRDBMSで、Linuxなど主要なUNIX系OSとWindowsに対応し、機能の豊富さや拡張性の高さが特徴"."<br>";
echo "Oracle SQL：Oracles社が開発しているRDBMS。"."<br>";
echo "<br>";
echo "TortoiseGit:Gitをより扱いやすくするために開発されたWindows用ソフトウェア。コマンドではなく、GUIによる操作を可能とする。"."<br>";
echo "TortoiseSVN:Subversion(ソースコード管理システム)のクライアントで、専用のGUIを備えており、CUI の Subversion より、直感的で簡単に扱うことが出来る。"."<br>";
echo "<br>";
echo "外部設計・内部設計:外部設計は、実際にシステムの仕様を決定する段階。要件定義で決定したシステムの機能要件をより具体的な仕様にし、実際にプログラム可能な形にする。"."<br>".
"内部設計では、外部設計の結果を実際にプログラミングできるように、システム内部に特化した詳細な設計を行う。"."<br>";


echo "---------------------------------------------------------------------------"."<br>";
?>