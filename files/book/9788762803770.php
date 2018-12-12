<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Blodprøver</h1>
	<p class="subtitle">Peter Fahmy og Troels Bygum Knudsen.</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b>Kliniske sygdomsenheder </p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser: Kittelbog, Haematologi, biokemi; -->
				<p class="semester"><b>Semesterbrug:</b> 6. semester og kandidaten</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 192</p>
				<p class="udgave"><b>Udgave:</b>2 </p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2013</p>
				<p class="isbn"><b>ISBN:</b>9788762803770 </p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762803770.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Blodprøver benyttes meget i klinikken. Hvorfor og hvad man kan bruge diverse blodprøver til er meget forskelligt. Desuden kan en blodprøve vise forskellige ting om en patients sygdomsstatus. Det kan derfor være svært at få styr på alle disse forskellige prøver og hvornår man tager dem. Denne bog fra Munksgaard hjælper en rigtig godt på vej i denneproces."<br />""<br />"
	Bogen starter ud med noget basal forklaring omkring blodprøve tagning. Dernæst foresætter den med at beskrive de forskellige blodprøver i alfabetisk rækkefølge hvilket gør den meget nem at slå op i.
"<br />""<br />"
Omkring hver blodprøveundersøgelse beskrives hvilke sygdomme man kan bruge denne prøve til at belyse, dernæst beskrives kort hvorfor man lige netop kan bruge denne. Til sidst slutter kapitlet af med at angive hvad høje og lave værdier kan betyde. Til nogle af prøverne kan man finde kliniske bokse. Disse beskriver mere i dybden.
"<br />""<br />"
Dette er en virkelig god kittelbog, som er god både i klinikken og ved læsning af pensum, når man vil få en forståelse for hvorfor en blodprøve er relevant.
</p>
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
