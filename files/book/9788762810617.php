<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Klinisk forskningsmetode </h1>
	<p class="subtitle">Erik Christensen, Jens Peter Kampmann, Torben Jørgensen, Hanne Fredslund, Jens Martin Lauritsen, Lisa Dahlager, Karin Friis Bach</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b>Kliniske sygdomsenheder</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Forskning; -->
				<p class="semester"><b>Semesterbrug:</b> 6. semester og kandidat </p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> dansk </p>
				<p class="sider"><b>Sider:</b> 229 </p>
				<p class="udgave"><b>Udgave:</b> 3</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9788762814783,9788762816756; -->
				<p class="udgivet"><b>Udgivet:</b> 2011</p>
				<p class="isbn"><b>ISBN:</b> 9788762810617</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762810617.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">

Klinisk forskningsmetode er bogen til dig med særlig interesse for klinisk forskning, og dig der gerne vil vide mere, om hvad klinisk forskning drejer sig om. Bogens indledning beskriver godt, hvad god forskning er, og hvordan man kommer i gang.
Bogen beskriver de forskellige typer af klinisk forskning, lige fra randomiserede kontrollerede kliniske undersøgelser over epidemiologisk forskning, samt kvalitative undersøgelser til litteraturstudier. Bogen har altså en bred vinkel på klinisk forskning. Der hører også en I-bog med, som findes på Munksgaards hjemmeside.
<br /><br />
Bogen er velegnet til at få et overblik over, hvilke typer af forskning man kan beskæftige sig med, inden man selv vælger sit forskningsområde. Bogen dækker hele forløbet af et forskningsprojekt, fra at skrive protokol og søge godkendelser, til præsentation ved videnskabelige kongresser til at skrive en videnskabelig artikel. Bogen er derfor også velegnet for den studerende, som giver sig i kast med et forskningsprojekt.
<br /><br />
Bogen er kort og overskuelig. Den er skrevet i et let uformelt sprog, så den er tilgængelig for nybegyndere indenfor forskningens verden. Bogen tager ikke noget for givet, og forklarer selv simple ting som f.eks. litteratursøgning. Bogen er velopbygget og er et godt supplement, hvis du har en travl vejleder. Bogen kan læses fra start til slut, da den er bygget op kronologisk som et forskningsprojekt. Men man kan også med fordel bruge den som opslagsværk, når man har brug for at læse om f.eks. databehandling eller statistik.
<br /><br />
Alt i alt er dette en rigtig god bog. Især hvis man tager et forskningsår. Den vil specielt være til stor hjælp for dig, som skal forske indenfor klinisk forskning. Men den kan også bruges i forbindelse med et mindre bachelorprojekt, hvis man gerne vil vide lidt mere og have noget mere konkret vejledning.


 </p>
	<br />

	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->

		<div class="nyudgave">
			<img src="files/book/cover_9788762814783.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>


	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 3; //layout
		echo '<!-- --rate-layout:3; -->';
		$r2 = 7; //pedagogy
		echo '<!-- --rate-pedago:7; -->';
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
