<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$conn = mysqli_connect('localhost','root','root','slabel');


		$g = mysqli_query($conn,"SELECT age,name from ages right join users on id=user_id WHERE age>0");
		
		echo 'age'.'--->'.'name';echo "<br>";
		while ($a = mysqli_fetch_assoc($g)) 
		{
			echo $a['age'].'--->'.$a['name'].'<br>';
		}

		$g = mysqli_query($conn,"SELECT age,name from ages right join users on id=user_id WHERE age is null");
		
		echo 'age'.'--->'.'name';echo "<br>";
		while ($a = mysqli_fetch_assoc($g)) 
		{
			if($a['age'] == null) 
			echo 'null'.'--->'.$a['name'].'<br>';
		}

		$l = mysqli_query($conn,"SELECT lol.id,lol.name, sum(lol.age) as a ,count(lol.name) as b
			FROM (select id,name,age from ages join users on id=user_id) as lol
			GROUP BY lol.name
			HAVING b>0 and a>149");

		echo 'id'.'--->'.'age'.'--->'.'name';echo "<br>";
		while ($a = mysqli_fetch_assoc($l)) 
		{
			echo $a['id'].'--->'.$a['a'].'--->'.$a['name'].'<br>';
		}
		?>
</body>
</html>