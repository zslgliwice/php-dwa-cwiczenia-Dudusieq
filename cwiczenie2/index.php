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
			
				<h1>Zamów korepetycje online</h1>

			</header>

			<form method="POST" action="korepetycje.php">
        		<label for="name">Imię:</label>
        		<input type="text" id="name" name="name" required>
        		<br>

        		<label for="przedmiot">Wybierz przedmiot:</label>
        		<select id="przedmiot" name="przedmiot" required>
            		<option value="">Wybierz przedmiot</option>
            		<option value="polski">Język polski (50 zł/h)</option>
            		<option value="historia">Historia (60 zł/h)</option>
            		<option value="wos">Wiedza o społeczeństwie (45 zł/h)</option>
        		</select>
        		<br>

        		<label for="godziny">Liczba zamówionych lekcji:</label>
        		<input type="number" id="godziny" name="godziny" min="1" required>
        		<br>

        		<label for="notatki">Czy chcesz wykupić notatki? (+5 zł za każdą godzinę)</label>
        		<input type="checkbox" id="notatki" name="notatki" value="yes">
        		<br>

        		<input type="submit" value="Zamów">
    		</form>
			
			
			
			
		</article>
		
	</main>
	
</body>
</html>