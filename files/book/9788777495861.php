<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Kompendiesamling i mikrobiologi</h1>
	<p class="subtitle">Peter Bernhard, Ulrik Stenz Justesen, Lars P. Nielsen</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Mikrobiologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Mikrobiologi; -->
				<p class="semester"><b>Semesterbrug:</b> 6.</p>
				<p class="forlag"><b>Forlag:</b> FADL&#39;s Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 376</p>
				<p class="udgave"><b>Udgave:</b> 2</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9788777497810; -->
				<p class="udgivet"><b>Udgivet:</b> 2010</p>
				<p class="isbn"><b>ISBN:</b> 9788777495861</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777495861.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Dette er et kompendium i mikrobiologi som kan bruges til Tema A på sjette semester som alternativ til bogen Klinisk mikrobiologi og infektionsmedicin. Bogen er pensumdækkende, men der er skåret meget ind til benet.Man bør derfor gøre op med sig selv, hvor meget energi, man ønsker at investere i faget mikrobiologi.<br /><br />

Bogen er egentlig 3 forskellige kompendier samlet i en bog: ’Human parasitologi’, ’Bakteriologi og mykologi’ samt ’Virologi’. Dermed er der 3 forskellige indholdsfortegnelser og 3 forskellige stikordsregistre, hvilket gør bogen lidt sværere at overskue at slå op i. Bogen indeholder en beskrivelse af alle de vigtigste mikroorganismer, der er pensum på det mikrobiologisk kursus på 6. semester. Den er skrevet kort og præcist, uden for meget overflødigt snak. Det er derfor meget koncentreret at læse efter denne bog, især som førstegangslæsning. Bogen er ikke fuldt pensumdækkende. Hvis man læser efter denne bog og følger undervisningen er godt stillet til eksamen, idet det er få detaljer, som bogen ikke får med.
Bogen indeholder ikke særlig mange billeder. Den er i sort/hvid, hvilket gør illustrationerne lidt kedelige, selvom de dog giver et fint overblik. Bogen mangler desuden nogle mikroskopibilleder, som man kunne bruge til øvelseskurset.<br /><br />

Bogen kan virke en smule komprimeret til førstegangslæsningen, men for den tidspressede eller læse-aversions-prægede studerende, er dette en rigtig god bog. Den er desuden rigtig god at bruge til at repetere og læse op til eksamen.
</p>
	<br />

	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	<!--
		<div class="nyudgave">
			<img src=files/book/cover_9788777497810.jpg/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	-->

	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 4; //layout
		echo '<!-- --rate-layout:; -->';
		$r2 = 4; //pedagogy
		echo '<!-- --rate-pedago:; -->';
		$r3 = 4; //pensum
		echo '<!-- --rate-pensum:; -->';

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
