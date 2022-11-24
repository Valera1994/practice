<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="vieport" content="width=device-width, initial-scale=1.0">
	<title>Практика PHP</title> 
	<link rel="stylesheet" href="style.css"/>
</head>	
<body>
	
	<div class="flex-container">

		<div class="header">
			<?php include 'logo.inc.php' ?>
			<?php include 'menu.inc.php' ?>
		</div>
		
		<div class="about_me">

			<h1> <?php echo $p ?> </h1>

				<div class="data">
					<div class="myImg">
						<?php
						echo '<img src="/img/Beer.jfif" alt="Пиво" width="250" height="300">';
						?>
					</div>
					
					<div class="fullname" id="part2">
						<p> Меня зовут
						<?php echo $name, ' ', $surname . '<br>';
							echo 'город', ' ', $city; ?>
						</p>
						
						<p> Мне 
						<?php echo $age; ?>
						лет </p>
						<p> Я научился создавать переменные </p>
						<p> И изучил простые операции с ними </p>
						<p><h3> А сейчас будет немного истории. </h3></p>
					</div>	

				</div>	

				<div class="article" id="part3">
					<p class="text">
					Пиво — один из древнейших напитков, известный с эпохи неолита вместе с мёдом, квасом и вином. 
					Существует мнение, что само выращивание зерновых началось именно ради пива, а не хлеба. Так 
					анализ органических следов в каменных ступках, найденных в израильской пещере Ракефет, показал, 
					что натуфийцы производили пиво в 11-м тысячелетии до н. э. из пшеницы и ячменя ещё до того, 
					как начали зерновые культуры использовать для выпечки хлеба. Древнее пиво было похоже скорее на кашу, 
					чем на пенный напиток. Эндосперм ячменя, используемый для пивоварения, идентифицирован на фрагментах 
					керамики (черепках) из Западного Кургана Чатал-Хююка, датированных 5900—5800 гг. до н. э.
					</p>
				</div>	
				
				<div class="knowledge">

					<?php include 'knowledge.inc.php'; ?>
					<?php echo $a, ' ', $b, ' ', $c; ?> <br>

					<?php
						$a = 2022;
						$b = 5800;
						$c = $a + $b;
						echo "$a + $b = ", $c; ?> <br>
					<?php echo $d; ?>
				</div>
								
		</div>
			<?php include 'footer.inc.php' ?>
	</div>
</body>
</html>	

