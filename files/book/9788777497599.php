<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Kompendium i farmakologi </h1>
	<p class="subtitle">Anne Marie Førrisdahl Steen</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Farmakologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:; -->
				<p class="semester"><b>Semesterbrug:</b> 5.</p>
				<p class="forlag"><b>Forlag:</b> FADL&#39;s Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 218</p>
				<p class="udgave"><b>Udgave:</b> 3 </p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2015</p>
				<p class="isbn"><b>ISBN:</b> 9788777497599 </p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777497599.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Kompendium i farmakologi er en farmabog til 5. Semester BA, der adskiller sig ved sit betydeligt mindre format end dens konkurrenter. På trods af størrelsen formår bogen at give en udmærket indblik i farmakologiens verden, selvom alle emner ikke gennemgås helt fyldestgørende.<br /><br />

Bogen er tiltænkt at kunne anvendes alene eller som opslagsværk og formår at komme fint omkring en god del af den grundlæggende teori og de hyppigst forekommende medicinske præparater. <br />

Det giver sig selv, at en bog, der er så meget mindre end de andre farmabøger, er gået på kompromis på nogle punkter, men den dækker den grundlæggende og essentielle teori udmærket - og hvis dette suppleres med kapitler fra de store farmabøger og flashcards, har man et ganske fint udgangspunkt.

Bogen har mange gode figurer og tabeller der medvirker til, at det ikke bliver ren WOT (wall of text), men er i sine forklaringer gennemgående kort og præcis – desværre nogle gange også lidt for kort for eksempel vedrørende toksikologi og interaktioner, der kan virke opremsende mere end forklarende for de uinviede i farmakologiens fagre nye verden.<br /><br />

Bogen er inddelt i kapitler, hvor de to første gennemgår henholdsvis farmakodynamik og –kinetik samt toksikologi og interaktioner. Herefter er kapitlerne tilegnet enten målorgan, anæstesi eller sygdomstype, der ikke nødvendigvis er det bedste til forståelsen af farmakologien for førstegangslæseren, men det gør bestemt bogen mere velegnet som opslagsværk og læsning til ophold på diverse afdelinger senere på studiet.<br /><br />

Kompendium i farmakologi er bedst egnet til eksamenslæsning, som opslagsværk eller hvis du skal genopfriske din farmakologi, men for virkelig at opnå forståelsen for farmakologi er det bedre at investere tiden og pengene i en af de større farmabøger.<br /><br />
Farmakologi er en vigtig del af dit fremtidige virke som læge og man skal derfor være påpasselig med at skære for mange hjørner ved dette emne.</p>
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
		$r1 = 3; //layout
		echo '<!-- --rate-layout:3; -->';
		$r2 = 3; //pedagogy
		echo '<!-- --rate-pedago:3; -->';
		$r3 = 3; //pensum
		echo '<!-- --rate-pensum:3; -->';

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
