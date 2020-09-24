<form action="result.php" method="post">
お名前：<input type="text" name= "my_name" />
<br>
ご希望商品：
<input type="radio" name="item" value="A賞">A賞
<input type="radio" name="item" value="B賞">B賞
<input type="radio" name="item" value="C賞">C賞
<br>
個数：
<select name="quantity">
<?php for($i=1; $i<=10; $i++):?>
<option value="<?php echo $i; ?>">
<?php echo $i; ?>
</option>
<?php endfor ?>
</select>
<br>
<input type="submit" value="申込">
</form>


<?php
echo "<br>";
echo "---------------------------------------------------------------------------"."<br>";
echo "モジュール：機能単位、交換可能な構成部分などを意味する。機器やシステムの一部を構成するひとまとまりの機能を持った部品。"."<br>";
echo "<br>";
echo "バージョン管理システム：コンピュータ上で作成および編集されるファイルの変更履歴を管理するためのシステム。"."<br>".
"ソフトウェア開発上では、ソースコードの管理に使用される。(Gitなど。)"."<br>";
echo "<br>";
echo "サブクエリ:「副問い合わせ」とも呼ばれ、SQL文の中にSELECT文を埋め込み、SELECT文の結果を利用した抽出を行うことが可能。"."<br>";
echo "---------------------------------------------------------------------------"."<br>";
?>