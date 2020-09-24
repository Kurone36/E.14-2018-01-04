<?php
	//print_r($_POST);
	//1.polaczenie z baza
		$id_polaczenia = mysqli_connect('localhost', 'root', '', 'ogloszenia');
	//2.wybranie bazy danych
		$stan1 = mysqli_select_db($id_polaczenia, 'ogloszenia');
		if($stan1 == true) echo "wybrano baze ogloszenia";
		else echo "nie wybrano";
	//3.operacja na bazie
		//3a.pobranie danych z formularza html
			$imie = $_POST['imie'];
			$nazwisko = $_POST['nazwisko'];
			$telefon = $_POST['telefon'];
			$email = $_POST['email'];
			//var_dump($kategoria);
			//var_dump($podkategoria);
			//var_dump($tytul);
			//var_dump($tresc);
		//3b
		//	 INSERT INTO `uzytkownik` (`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES (NULL, `Jolanta`, `Jasny`, `600600600`, `jolanta@poczta.pl`);
			$zapytanie = 'INSERT INTO uzytkownik (id, imie, nazwisko, telefon, email) VALUES (NULL, '$imie', '$nazwisko', '$telefon', '$email')';
			mysqli_query($id_polaczenia, $zapytanie) or die(mysqli_error($id_polaczenia));
	//4.zamkniecie polaczenia z baza
	mysqli_close($id_polaczenia);
?>