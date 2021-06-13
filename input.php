<html>
<head>
	<meta charset="utf-8">
	<title>フォーム</title>
</head>

<body>

	<form action="write.php" method="post">
		姓: <input type="text" name="last_name">
		<br>
		名: <input type="text" name="first_name">
		<br>
		EMAIL: <input type="text" name="email">
		<br>
		性別: <input type="radio" name="gender" value="男"/>男<input type="radio" name="gender" value="女"/>女
		<br>
		生年月日: <input type="text" name="birthday">
		<br>
		都道府県: <input type="text" name="prefecture">
		<br>
		ID: <input type="text" name="id">
	<input type="submit" value="送信">
	</form>

</body>
</html>