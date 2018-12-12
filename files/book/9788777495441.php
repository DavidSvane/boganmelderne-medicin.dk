<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Repirationsfysiologi</h1>
	<p class="subtitle">Søren Lyager</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Respirationsfysiologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Fysiologi; -->
				<p class="semester"><b>Semesterbrug:</b> 4.</p>
				<p class="forlag"><b>Forlag:</b> FADL&#39;s Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 230</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2010</p>
				<p class="isbn"><b>ISBN:</b> 9788777495441</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777495441.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Alternativet til West. Alt i alt et godt alternativ. Sproget er dansk, hvilket gør det nemmere for nogle. Detaljeringsgraden er højere, hvilket giver den fulde forståelse, men med fare for at an drukner i for mange detaljer. I West lægges fokus på at forklare respirationsfysiologi kort og kontant på en pædagoisk måde, uden for mange detaljer. I denne bog lægges der mere vægt på at kæde den fysiologiske teori sammen med
den kliniske virkelighed. Begge bøger er fuldt pensumdækkende, og det må siges at være en smagssag, hvilken af de to man vælger. Fuldt pensumdækkende og mere til. <br /><br />

Bogen består af 13 kapitler, et appendix, som er lidt større end i West med formler, udledninger og nyttige tabeller + Stikordsregister. Hvert kapitel er velillustreret og logisk bygget op. Man kommer dog ikke uden om, at man skal lære en del formler for at forstå respirationsfysilogi, sådan er det. Modsat West er der ”kliniske blokke”, små tekstbokse hvor teorien sættes i kliniks relation, hvilket for mange hjælper lidt på motivationen til at lære alle formlerne.<br /><br />

Respirationsfysiologi er læsevenlig, pædagogisk skrevet og detaljeret. Der fokuseres på at sætte teorien i relation til klinisk praksis. Eneste minus er, at man som læser risikerer at drukne i detaljer, hvor West måske kan siges at være bedre til at pinpoite nogle få korte ”key concepts”. Omvendt savner man til tider mere forklaring i West, som gives i denne danske bog. <br /><br />

Tips og idéer:<br />
Suppler læsningen med John B. West’s forelæsninger i lungefysiologi <a href="http://meded.ucsd.edu/ifp/jwest/">Klik her!</a>
Forelæsningerne følger bogens kapitler, er meget pædagoiske, og kan være en stor hjælp til de svære kapitler. De kan varmt anbefales.</p>
	<br />

	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	<!--
		<div class="nyudgave">
			<img src="files/book/cover_.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	-->

	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 4; //layout
		echo '<!-- --rate-layout:4; -->';
		$r2 = 5; //pedagogy
		echo '<!-- --rate-pedago:5; -->';
		$r3 = 4; //pensum
		echo '<!-- --rate-pensum:4; -->';

		for ($j = 1; $j < 4; $j++) {
			echo '<div class="rating">';
			for ($i = 1; $i < 8; $i++) {
				if ($i == ${'r' . $j}) {
					echo '<div class="rating' . $i . '"></div>';
				}
			}
			echo '</div>';
		}
	?>
	<br />

	<!-- Gem dokumentet med ISBN-nummeret som titel i formatet .php -->

</div>
