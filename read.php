<?php

// 対象のファイルを開く
$file = fopen('data/data.csv', 'r');

echo '<table border="1">
      <tr>
      <th>登録日</th>
      <th>姓</th>
      <th>名</th>
      <th>Email</th>
      <th>性別</th>
      <th>生年月日</th>
      <th>都道府県</th>
      <th>ID</th>
      </tr>';

// fgetcsvにより配列としてデータを読み込める
while($data = fgetcsv($file)){
    
    echo '<tr>';
    echo '<td>'.$data[0].'</td>';
    echo '<td>'.$data[1].'</td>';
    echo '<td>'.$data[2].'</td>';
    echo '<td>'.$data[3].'</td>';
    echo '<td>'.$data[4].'</td>';
    echo '<td>'.$data[5].'</td>';
    echo '<td>'.$data[6].'</td>';
    echo '<td>'.$data[7].'</td>';
    echo '</tr>';
}

// テーブルの閉じタグ
echo '</table>';

// ファイルを閉じる
fclose($file);


?>