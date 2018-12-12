<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Statistik i ord</h1>
	<p class="subtitle">Hans Lund og Henrik Røgind</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Uden for pensum, relateret til kurset i Medicinsk statistik</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:forskning; -->
				<p class="semester"><b>Semesterbrug:</b> Kandidaten</p>
				<p class="forlag"><b>Forlag:</b>Munksgaard </p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 136</p>
				<p class="udgave"><b>Udgave:</b> 2</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2016</p>
				<p class="isbn"><b>ISBN:</b> 9788762814998</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762814998.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Statistik i ord er en kort og introducerende bog til statistikkens forunderlige verden, der ikke gør sig nogen antagelser om forudgående kendskab til emnet, som det kan være tilfældet i andre statistikbøger. Hvis man har lidt svært ved at komme ind på livet af statistikken trods gode intentioner og ambitioner herom er Statistik i ord et godt sted at starte.
<br /><br />
Bogen starter fra bunden og forsøger at indvie læseren i terminologien og den overordnede forståelse for statistik, så du er godt klædt på til at læse en mere videregående statistikbog, som du oftest vil blive undervist med på universitetet. Statistik i ord kan således ikke stå alene som bog, hvis du skal lære statistik, men kan give forståelsen et skub eller bruges til at slå begreber op, der forklares i et letforståeligt sprog og ofte med fine eksempler.
Bogen anvender også en del figurer og tabeller både til at eksemplificere begreber fra teksten samt til at strukturere indholdet i oversigter.
<br /><br />
Bogen kommer ind på rigtig mange af de relevante emner, som du senere vil stifte bekendtskab med på studiet og når du skal læse videnskabelige artikler. Den er dog også selverkendende om, at den ikke går nok i dybden til at fungere som egentlig lærebog i statistik og forsøger heller ikke at give sig i kast med lange, kringlede forklaringer eller gøre dig klar til selv at arbejde med statistik selvstændigt.
<br /><br />
Der hører også en I-bog med, som findes på Munksgaards hjemmeside.
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
		$r1 = 5; //layout
		echo '<!-- --rate-layout:5; -->';
		$r2 = 4; //pedagogy
		echo '<!-- --rate-pedago:4; -->';
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
