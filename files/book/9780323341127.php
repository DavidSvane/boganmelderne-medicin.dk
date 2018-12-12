<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Structure &amp; Function of the body</h1>
	<p class="subtitle">Patton &amp; Thibodeau.</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Basal humanbiologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Andet; -->
				<p class="semester"><b>Semesterbrug:</b> 1.</p>
				<p class="forlag"><b>Forlag:</b> Elsevier</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 592</p>
				<p class="udgave"><b>Udgave:</b> 15</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2016</p>
				<p class="isbn"><b>ISBN:</b> 9780323341127</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780323341127.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Structure &amp; Function of the body af Thibodeau og Patton (måske i fremtiden blot benævnt TP) er pensumdækkende for kurset i humanbiologi og dermed et ligeværdigt alternativ til den populære Hole’s Essentials of Human Anatomy and Physiology - i daglig tale bare Hole’s. <br /><br />

En bonus ved TP er onlinesystemet “Elsevier Evolve”, hvor du kan se videoer som forklarer alt fra bindinger mellem molekyler til blodets vej i kredsløbet. Her er også spørgsmål til hvert kapitel og lydbøger af hvert kapitel.<br /><br />

TP minder på mange måder om Hole’s: stilen er meget amerikansk med mange flotte illustrationer og et væld af flowcharts, så du slipper for wall-of-text. Selve sproget er pædagogisk og måske lidt mere snakkende end en dansk lærebog. Selve kapitlerne er udstyret med en detaljeret indholdsfortegnelse i starten. Det kan anbefales at give denne et grundigt kig inden du bare maser dig igennem teksten. Teksten er godt underinddelt så man nemt holder overblikket og den suppleres af flere typer tekstbokse. Især tekstboksene er et plus, da de relaterer stoffet til kliniske problemstillinger, sygdomme, forskning, etiske dilemmaer med mere og giver nogle spændende fun facts af og til. <br /><br />

Bogen egner sig fint til førstegangslæsning og må siges at være et godt alternativ til Hole’s på alle måder. Om du skal vælge den ene eller den anden bog må i sidste ende være en smagssag, da begge bøger har mange udgaver bag sig og derfor er grundigt gennemarbejdede, samt begge er fuldt ud pensumdækkende. Du kan sagtens klare dig med en tidligere version af både Hole’s og TP, da der ikke er fundamentale ændringer fra de sidste versioner. <br /><br />
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
		$r1 = 6; //layout
		echo '<!-- --rate-layout:6; -->';
		$r2 = 6; //pedagogy
		echo '<!-- --rate-pedago:6; -->';
		$r3 = 5; //pensum
		echo '<!-- --rate-pensum:5; -->';

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
