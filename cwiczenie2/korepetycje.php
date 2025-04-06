<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8">
	<title>2 - Obsługa formularzy w PHP</title>
	<link href="arkusz-cwiczenia.css" rel="stylesheet">
	
</head>

<body>

	<main>
	
		<article>

			<header>
			
				<h1>Podsumowanie zamówienia korepetycji</h1>

			</header>
			
<?php			
			
			if($_SERVER['REQUEST_METHOD'] !== 'POST') {
				header('index.php');
				exit();
			}
			$name = $_POST['name'];
			$przedmiot = $_POST['przedmiot'];
			$godziny = $_POST['godziny'];
			$notatki = isset($_POST['notatki']);
			
			$koszty = [
				'polski' => 50,
				'historia' => 60,
				'wos' => 45
			];
						

			$za_godziny = $koszty[$przedmiot];
			$calk_koszt = $za_godziny * $godziny;
			
			if($notatki){
				$calk_koszt += 5 * $godziny;
			}
			echo "<h1>Podsumowanie zamówienia</h1>";
			echo "<p>Imię: $name</p>";
			echo "<p>Przedmiot: $przedmiot</p>";
			echo "<p>Liczba godzin: $godziny</p>";
			echo "<p>Koszt całkowity: $calk_koszt zł</p>";

			
?>			
		</article>
		
	</main>
	
</body>
</html>