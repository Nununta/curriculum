
<form action="result.php" method="">
名前：<input type="text" name="my_name" />
<br>
パスワード：<input type="password" name="password" />
<br>
email：<input type="text" name="email" />
<br>
<input type="submit" value="送信" />
</form>




<?php
echo "<br>";
echo "---------------------------------------------------------------------------"."<br>";
echo "仕様書:顧客と会話し、何を実現したいのかを定める資料。"."<br>".
"設計書:仕様書を踏まえ、どうやって実現させるのかを記述した資料。"."<br>";
echo "<br>";
echo "Git:分散型バージョン管理システム。システム開発では、更新前の以前のバーションに戻すことが多々発生する。Gitを使用すれば、"."<br>".
"簡単に以前のバージョンに戻すことができる。また、複数人が作成したファイルの統合や編集履歴の確認など、チーム作業を行う上で必要な機能を提供してくれる。"."<br>";
echo "<br>";
echo "マージツール:コンフリクトが発生した際に、より明確に状況を把握することが出来るツール。"."<br>";
echo "---------------------------------------------------------------------------"."<br>";
?>