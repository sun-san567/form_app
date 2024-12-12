<?php
// CSVファイルのパスを指定
$file_path = 'data/data.csv';

// データを格納する配列
$data = [];

// ファイルの存在確認
if (file_exists($file_path)) {
    // ファイルを開く（読み取り専用）
    $file = fopen($file_path, 'r');

    if ($file) {
        // fgetcsv()を使用してCSVデータを読み込む
        while (($line = fgetcsv($file)) !== false) {
            // 配列にデータを追加
            $data[] = $line;
        }
        // ファイルを閉じる
        fclose($file);

        // データの確認
        // var_dump($data);
    } else {
        die('ファイルを開けませんでした');
    }
} else {
    die('ファイルが存在しません');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データを確認</title>
</head>

<body>
    <div id="data_area">
        <ul id="data">ここにデータが表示されます</ul>
    </div>
    <!-- JavaScriptファイルの読み込みをbody終了タグの直前に配置 -->

    <script>
        // PHPのデータをJavaScriptの変数として定義
        const csvData = <?php echo json_encode($data); ?>;
        // console.log(csvData);

        const displayData = () => {
            const dataList = document.getElementById('data');
            dataList.innerHTML = ''; // 既存のコンテンツをクリア

            csvData.forEach(row => {
                const li = document.createElement('li');
                li.textContent = row.join(' - '); // 配列の要素をハイフンで結合
                dataList.appendChild(li);
            });
        }

        // 関数を実行
        displayData();
    </script>
</body>

</html>