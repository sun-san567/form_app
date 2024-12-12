<?php
// キー名に送信元ファイルのname属性を指定する．
$name = $_POST['name'];
$time = $_POST['time'];
$email =  $_POST['email'];

if (isset($_POST['values'])) {
    $values = $_POST['values'];
    // 単一選択の場合
    if (!is_array($values)) {
        $values = [$values];
    }
    $total = array_sum($values);
    // 配列を文字列に変換　ここエラー
    $valuesString = implode(', ', $values);
    // データ1件を1行にまとめる（最後に改行を入れる）
    $write_data = "{$time} {$name} {$email} {$valuesString}　\n";
    var_dump($write_data);
    $file = fopen('data/data.csv', 'a');
    // ファイルをロックする
    flock($file, LOCK_EX);
    // 指定したファイルに指定したデータを書き込む
    fwrite($file, $write_data);
    // ファイルのロックを解除する
    flock($file, LOCK_UN);
    // ファイルを閉じる
    fclose($file);
    header("Location: index.php");
    exit();
} else {
    var_dump("値の取得ができません");
    header("Location: index.php");
    exit();
}

exit();


    // var_dump($name);
    // var_dump($time);
    // var_dump($values);