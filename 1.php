<?php
	echo "test";
	$name = 'Janusz';//zmienna name
	echo "<br>Imię: $name"; //' ' wyświetla teks

	$surname = 'Nowak';
	echo "<br>Twoje dane: $name $surname<hr>";

	//konkatelacja . kropka najpierw łączy, później wyświetla
	echo 'Mam na imię: '.$name.'.<br>Moje nazwisko: '.$surname.'<hr>';

	//interpolacja , ta metoda jest szybsza, wyświetla wszystko po kolei
	echo 'Masz na imię: ',$name,'.<br>Twoje nazwisko: ',$surname.'<hr>';

	//heredoc
	echo <<< ETYKIETA
		<hr>heredoc<br>
		Mam na imię: $name<br>
		Moje nazwisko: $surname<hr>
ETYKIETA;

	//heredoc
	$text = <<< E
		<hr>heredoc2<br>
		Mam na imię: $name<br>
		Moje nazwisko: $surname<hr>
E;
	echo $text;

	//nowdoc, traktuje wszystko jako tekst ""
	$text = <<< 'E'
		<hr>nowdoc<br>
		Mam na imię: $name<br>
		Moje nazwisko: $surname<hr>
E;
	echo $text;
?>
