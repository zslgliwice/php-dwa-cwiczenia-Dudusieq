<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8">
	<title>1 - Obsługa formularzy w PHP</title>
	<link href="arkusz-cwiczenia.css" rel="stylesheet">
	
</head>

<body>

	<main>
	
		<article>

			<header>
			
				<h1>Tokeny bezpieczeństwa SAFE - logowanie</h1>

			</header>
	
			<form action="index.php" method="post"> 
			
				<div>	
					<label>Login:
						<input type="text" name="login">
					</label>
				</div>	
				
				<div>
					<label>Hasło:
						<input type="password" name="haslo">
					</label>
				</div>

				<input type="submit" value="Zaloguj">
				
			</form>
<?php

function token($dlugosc = 10) {
    $znaki = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $znakiDlugosc = strlen($znaki);
    $randomString = '';
    for ($i = 0; $i < $dlugosc; $i++) {
        $randomString .= $znaki[rand(0, $znakiDlugosc - 1)];
    }
    return $randomString;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$login = $_POST['login'];
	$haslo = $_POST['haslo'];
	$token = "";

	if($login === 'pawlo' && $haslo === 'napadnabank'){
		$token = "Jednorazowy token dostępu do skarbca: " . token(10) . "";
		$message = "Witaj Paweł, weź się do roboty leniu xD";
	}else if($login === 'gawlo' && $haslo === 'likeaboss'){
		$token = "Jednorazowy token dostępu do skarbca: " . token(10) . "";
		$message = "Witaj Gaweł, szefie wszystkich szefów!";
	}else{
		$token = "";
		$message = "Niepoprawny login lub hasło!";
	}
}


if(isset($message)){
echo "<p>$message <br> $token </p>";
}
?>

		</article>
		
	</main>
	
</body>
</html>