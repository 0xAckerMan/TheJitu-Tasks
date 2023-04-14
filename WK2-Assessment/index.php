<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="main.css">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assessment</title>
</head>
<body>
	<div class="content">
		<h2>OOP calculator</h2>
		<br><br>
		<form action="calculate.php" method="POST">
			<input type="text" name="int1">
			<input type="text" name="int2">
			<select name="calc">
				<option value="add">Add</option>
				<option value="sub">Subtract</option>
				<option value="mul">Multiply</option>
				<option value="div">Divide</option>
			</select>
		<button type="submit">Calculate</button>

		</form>
	</div>
</body>
</html>