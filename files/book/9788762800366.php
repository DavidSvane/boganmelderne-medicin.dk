<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Anatomisk billedordbog</h1>
	<p class="subtitle">af Heinz Feneis</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Anatomi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Anatomi; -->
				<p class="semester"><b>Semesterbrug:</b> 3., 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 472</p>
				<p class="udgave"><b>Udgave:</b> 3</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2003</p>
				<p class="isbn"><b>ISBN:</b> 9788762800366</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762800366.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Dette er en lille nem og handy bog, som kan benyttes til flere semestre. Bogen er især anvendelig på tredje semester vedrørende. spot og dissektion.<br /><br />Denne bog er perfekt til at spotte, og er brugbar til at læse op til eksamen. Desuden er bogen et godt alternativ til de anatomiske flashcards, som man ellers ville benytte på diverse semestre. Bogen er nem og hurtig at slå op i. Bogen er lille og let, så den er nem at have med i lommen, når man går rundt og spotter. Hvis man bliver træt af at slæbe rundt på de store tunge atlas, kan billedordbogen i nogen grad bruges som erstatning, til at slå op i, mens man læser.<br /><br />Du finder nemt alle strukturer på mange forskellige tegninger, fra forskellige vinkler og snit. Derudover er der en kort forklaring af alle strukturers position, tilhørsforhold og relationer. Layoutet i bogen er opstillet således at der på højre side forekommer billeder med pille og tilhørende tal. På venstre side forekommer en beskrivelse eller angivelse af den angivne struktur.<br /><br />Bogen er mere detaljeret end de anatomiske flashcards, som mange benytter. Bogen er dog ikke lige så appetitlig som flashcards med de flotte billeder.<br /><br />Tegningerne er simple og uden farver, men giver et rigtig godt overblik. Bogen kan bruges i mange henseender, specielt til hurtig opslag og dissektion. Bogen anbefales som et handy opslagsværk som supplement til repetition, spot og dissektion.</p>
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
		$r1 = 0; //layout	
		echo '<!-- --rate-layout:0; -->';
		$r2 = 0; //pedagogy
		echo '<!-- --rate-pedago:0; -->';
		$r3 = 0; //pensum
		echo '<!-- --rate-pensum:0; -->';
		
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