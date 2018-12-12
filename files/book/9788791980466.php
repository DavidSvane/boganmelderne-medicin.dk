<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Sociale ydelser - hvem, hvad og hvornår </h1>
	<p class="subtitle">Lis Vilhof, Pia Karlsen, Birgitte Meldal, Celine Pors, Dina Chéhadé mfl.
</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b>  Klinisk kursus i socialmedicin og rehabilitering</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:samfund; -->
				<p class="semester"><b>Semesterbrug:</b>10. semester </p>
				<p class="forlag"><b>Forlag:</b> Forsikring og Pension</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 184</p>
				<p class="udgave"><b>Udgave:</b> 50</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2016</p>
				<p class="isbn"><b>ISBN:</b> 9788791980466</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788791980466.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Sociale ydelser - hvem, hvad og hvornår er en supplerende lærebog til kurset i socialmedicin på 10. semester. Bogen opdateres hvert år så takster for ydelser og kriterierne for diverse kommunale tilskud er korrekte.
<br /><br />
Sammenlignet med den anden lærebog i socialmedicin, Klinisk socialmedicin og rehabilitering, er Sociale ydelser mere en supplerende opslagsbog end en egentlig lærebog. Sproget er klart og kontant og teksten er mest i punktform og inddelt i mange små afsnit. Du finder ingen billeder i bogen, men en del tabeller vedrørende størrelsen på forskellige sociale ydelser.
<br /><br />
Sociale ydelser er ikke en erstatning for lærebogen Klinisk socialmedicin og rehabilitering idet den ikke lærer dig kernepensum som er funktionsevnevurdering i forhold til ICF-modellen, optagelse af socialmedicinsk journal og det socialt-lægelige samarbejde vedrørende attester. Sociale ydelser er dog som navnet antyder rigtig god til at give dig et overblik over kriterierne for og størrelsen på forskellige offentlige ydelser som ressourceforløb, dagpenge, sygedagpenge med videre. Her er den faktisk bedre end lærebogen til at stille kriterierne knivskarpt op.
<br /><br />
Lærebogen Klinisk socialmedicin og rehabilitering lærer dig faget socialmedicin, men efterlader de fleste en smule forvirrede over de mange sociale ydelser og de indviklede regler omkring dem. Her er Sociale ydelser et godt supplement til at give dig overblikket. Det må dog frarådes kun at læse efter Sociale ydelser, da de vigtigste dele af pensum ikke beskrives i bogen. Husk, at du ikke bliver afkrævet at kunne denne eksakte størrelse på sygedagpenge for en enlig forsørger med 3 børn; så spring let og elegant de afsnit over - og så er bogen meget hurtigt læst.
<br /><br />
Sociale ydelser kan også findes gratis på nettet i pdf-format, blandt andet på Jyske Banks hjemmeside.
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
		$r1 = 1; //layout
		echo '<!-- --rate-layout:1; -->';
		$r2 = 2; //pedagogy
		echo '<!-- --rate-pedago:2; -->';
		$r3 = 2; //pensum
		echo '<!-- --rate-pensum:2; -->';

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
