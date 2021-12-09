
<style>

.back{
  margin-left:10px;
}

</style>


<?php

// todo_txt_read.php

// データまとめ用の空文字変数
$str = '';

// ファイルを開く（読み取り専用）
$file = fopen('data/diary.txt', 'r');
// ファイルをロック
flock($file, LOCK_EX);

// fgets()で1行ずつ取得→$lineに格納
if ($file) {
  while ($line = fgets($file)) {
    // 取得したデータを`$str`に追加する
    $str .="<tr><td>{$line}</td></tr>";
  }
}

// ロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

// `$str`に全てのデータ（タグに入った状態）がまとまるので，HTML内の任意の場所に表示する．


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>昔の湯夢日記を見る</title>
</head>

<body>
  <fieldset>
    <legend>昔の夢日記（一覧画面）</legend>
 
    <table>
      <tbody>
        <?=$str?>
      </tbody>
    </table>
  </fieldset>

    <a class="back" href="diary_input.php">入力画面に戻る</a>
    <a class="download" href="data/diary.csv">csvでダウンロードする</a>

</body>

</html>