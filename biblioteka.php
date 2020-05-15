<html>
	<head>
		<meta charset="UTF-8">
		<title>Biblioteka publiczna</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="baner">
			<h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
		</div>
		
			<div id="lewy">
				<h2>Dodaj czytelnika</h2>
				
				<form method="post">
					imię: <input type="text" name="imie" ><br />
					nazwisko: <input type="text" name="nazwisko" > <br />
					rok urodzenia: <input type="number" name="rok" > <br />
					<input type="submit" value="DODAJ">
				</form>
			</div>
			
			<div id="srodkowy">
				<img src="biblioteka.png" alt="biblioteka"></img>
				<h4>ul. Czytelnicza 25 <br />
				12-120 Książkowice<br />
				tel.: 123123123<br />
				e-mail: <a href="mailto:biuro@bib.pl">biuro@bib.pl</a></h4>
			</div>
			
			<div id="prawy">
				<h3>Nasi czytelnicy</h3>
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		<div id="stopka">
			<p>Projekt witryny: xxxxxxx</p>
		</div>
	</body>
</html>


<?php
	// $connection = @mysql_connect('localhost', 'root', '')
	// or die('Brak połączenia z serwerem MySQL.<br />Błąd: '.mysql_error());
	// echo "Czytelnik: " . $_POST['nazwisko'] . " został dodany do bazy danych";
	// $db = @mysql_select_db('biblioteka', $connection)
	// or die('Nie mogę połączyć się z bazą danych<br />Błąd: '.mysql_error());
	// echo "Udało się połączyć z bazą dancych!";
	// $ponki = substr($_POST['imie'], 0, 2) . substr($_POST['rok'], -2, 2) . substr($_POST['nazwisko'], 0, 2);
	// $ponki = strtolower($ponki);
	// $zapytanie = "INSERT INTO czytelnicy ( imie, nazwisko, kodczytelnika) VALUES ('$_POST['imie']', '$_POST['nazwisko']', '$ponki')";
	// mysql_query($zapytanie) or die(mysql_error());
	// mysql_close($connection);

?>
