<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Kompendium i nyrefysiologi</h1>
	<p class="subtitle">Mohammed Sabbah</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Nyrefysiologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Fysiologi; -->
				<p class="semester"><b>Semesterbrug:</b> 5.</p>
				<p class="forlag"><b>Forlag:</b> FADL&#39;s Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 82</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2013</p>
				<p class="isbn"><b>ISBN:</b> 9788777496981</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777496981.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Kompendiet er ikke pensumdækkende i sig selv, men tjener til at give et godt overblik.  Kompendiet er ment som en omfattende tjekliste for den teori, man skal kunne til eksamen i faget nyrefysiologi. Altså er kompendiet beregnet til eksamenslæsning.
Det kan ikke anbefales at bruge kompendiet til førstegangslæsning, da begreber kun opsummeres, og ikke pædagogisk forklares i detaljer, som de bliver i de primære lærebøger. Det anbefales altså, at man kun benytter kompendiet her som supplement i eksamensperioden.<br /><br />

Kompendiet er opbygget i punktform og stoffet præsenteres i stort set samme rækkefølge som i den danske lærebog for nyrefysiologi, basal nyrefysiologi. Kompendiet fungerer altså som en tjekliste for, hvad der bør kunnes inden for hvert emne i nyrefysiologien. Sproget er kort og kontant uden for meget udenomssnak. Indholdet svarer til det, der forventes til eksamen og der gives et godt overblik. Kompendiet er forsynet med et stikordsregister, der gør det nemt at slå specifikke emner/begreber op.<br /><br />

Kompendiet er ikke nødvendigt for kurset - men det er godt skrevet, velstruktureret, forklarer centrale begreber godt. Den vurderes at kunne være til stor hjælp for studerende, som har svært ved nyrefysiologien. Kompendiet beskriver hele pensum i punktform - vær dog opmærksom på, at emnet “de fraførende urinveje” ikke er beskrevet! </p>
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
