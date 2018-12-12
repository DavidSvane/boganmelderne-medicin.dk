<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Pædiatri - en illustreret lærebog</h1>
	<p class="subtitle">af Tom Lissauer & Graham Clayden.</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Pædiatri</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Paediatri; -->
				<p class="semester"><b>Semesterbrug:</b> 12. semester</p>
				<p class="forlag"><b>Forlag:</b> FADLs forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 552</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b>2014 </p>
				<p class="isbn"><b>ISBN:</b> 9788777494901</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777494901.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description"> Pædiatribogen fra Fadl – kvadratisk, praktisk, god? Kvadratisk: tjek! Det kvadratiske format leder tankerne

hen på barndommens pixibøger med Rasmus Klump og Peter Pedal, så måske den allerede ved første øjekast hjælper én til at connecte med alle de børn man skal ud og se i klinikken... Ak nej, forklaringen er nok nærmere, at den øgede sidebredde tillader ca. 20% ekstra pensum uden at sideantallet vokser, hvilket for en bog på 563 sider måske også har sin psykologiske fordel. Spøg til side, det er jo ikke forlagets skyld at pensum i pædiatri er monstrøst at skulle igennem på 5 uger - Fadl har faktisk lavet en rigtig god (tjek!), pædagogisk og dækkende penumbog.
<br /><br />
I pædiatri møder man hele den interne medicin på ny, bare i miniformat og med lidt ekstra oveni hatten. Bogen er derfor delt logisk ind i de forskellige organsystemer samt et par kapitler, som er specielt relevant for børn (fx vækst/pubertet, neonatalogi, ernæring). Bogen er generelt godt skrevet, og så er den spækket med billeder, grafer, tegninger, bokse og tabeller. Trods omfanget er det ikke al information der står i den rå tekst, hvorfor det er vigtigt at orientere sig i tabellerne, for at få det hele med. Layoutet er behageligt og meget farverigt, og i starten af hver kapitel er der en specificeret indholdsfortegnelse, så man kan danne sig et overblik inden man kaster sig ud i de til tider lange kapitler.
<br /><br />
Generelt er det meste af bogen relevant for kurset, men enkelte kapitler kan springes over eller skimmes afhængig af tidspres og interesse. Som i andre specialer er der sygdomme, som er mere hyppige, og dermed vigtigere at kunne end andre, og overordnet set er spaltepladsen også tilpasset dette.
<br /><br />
På trods af sit omfang er bogen faktisk god til både førstegangslæsning og eksamenslæsning, da man slutningen af kurset har en fornemmelse af hvilken information man leder efter og hvor man kan finde det i bogen.
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
		$r2 = 4; //pedagogy
		echo '<!-- --rate-pedago:4; -->';
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
