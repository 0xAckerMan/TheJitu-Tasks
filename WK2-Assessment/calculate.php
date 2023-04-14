<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assessment</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="content">
	<h2>OOP calculator</h2>
	<br>
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
        <div class="answer">
            <h2>answer</h2>
            <?php
            include './class-calc.php';

            $num1 = $_POST['int1'];
            $num2 = $_POST['int2'];
            $cal = $_POST['calc'];

            $calculator = new Calc($num1, $num2, $cal);
            echo $calculator->calcMethod();

            ?>
        </div>
	</form>
	</div>


</body>
</html>

