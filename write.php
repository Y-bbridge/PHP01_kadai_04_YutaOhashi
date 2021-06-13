<?php

// フォームから送られてきたデータを取得し変数に代入
//post通信の場合は$_POSTで受け取る
$last_name = $_POST["last_name"];
$first_name = $_POST["first_name"]; //[]内の"name"はpost.phpで定義したname
$email = $_POST["email"];
$gender = $_POST["gender"];
$birthday = $_POST["birthday"];
$prefecture = $_POST["prefecture"];
$id = $_POST["id"];

// XSS対策関数
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

// 文字列作成（日付）
$time = date("Y-m-d");

// 登録する文字列(.で足し算していく)
$str = $time . ',' . $last_name . ',' . $first_name . ',' . $email . ',' . $gender . ',' . $birthday . ',' . $prefecture . ',' . $id;

// .txt Fileにデータを保存する処理
$file = fopen("data/data.csv", "a");//aは対象のファイルを開く。または、なければ新しいテキストファイルを作って最後に追加書き込み。
//なお、dataファイルでCommand＋iを行い、読み/書きを承諾する操作が必要。

fwrite($file, $str."\n"); 
//option押しながら￥を押すと\が出せるが、改行の意味
// ファイルにデータを書き込むで、fはファイルの意味

fclose($file); //ファイルを閉じる
?>


<html>
<head>
    <meta charset="utf-8">
    <title>登録完了</title>
</head>
<body>

<h1>以下の内容で登録しました。</h1>
    <ul>
        <li> 姓：<?= h($last_name) ?> </li>
        <li> 名：<?= h($first_name) ?> </li>
        <li> Email：<?= h($email) ?> </li>
        <li> 性別：<?= h($gender) ?> </li>
        <li> 生年月日：<?= h($birthday) ?> </li>
        <li> 都道府県：<?= h($prefecture) ?> </li>
        <li> ID：<?= h($id) ?> </li>
    </ul>

<h2>./data/data.csv を確認しましょう！</h2>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>