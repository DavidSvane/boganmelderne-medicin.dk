
﻿<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Hole’s Essentials of Human Anatomy and Physiology</h1>
	<p class="subtitle">Af Ricki Lewis, David N. Shier, Jackie L. Butler</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Basal humanbiologi og cellens kemiske komponenter</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Fysiologi,anatomi; -->
				<p class="semester"><b>Semesterbrug:</b> 1. semester</p>
				<p class="forlag"><b>Forlag:</b> McGraw-Hill Education - Europe</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 612</p>
				<p class="udgave"><b>Udgave:</b> 12.</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9780071316538; -->
				<p class="udgivet"><b>Udgivet:</b> 2014</p>
				<p class="isbn"><b>ISBN:</b> 9780077167226</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780077167226.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">En god, smuk, behagelig og dejlig bog, som er den første man berører på medicinstudiet. Dette er den pensumanbefalede bog og en af de to bøger, som man kan benytte på første semester til humanbiologi. Uanset hvilken af de to lærebøger, som man vælger, skal hele bogen læses - supplér med eksamensopgaver og lav multiple choice opgaver på dette link: <a href="http://hubeck-graudal.dk/humanbiologi/">Multiple choice opgaver</a>.
<br /> <br />
Bogen er meget let at læse og indeholder mange store billeder. Man kan godt nå at læse tingene flere gange. Undervisningen er opbygget efter denne bog, hvilket gør den til en fordelagtig erhvervelse. Bogen er skrevet på engelsk og beskriver fysiologien og anatomien kort og kontant. Der forekommer desuden en del faktabokse, som giver et klinisk perspektiv ved at beskrive forskellige sygdomme. Holes er bogen, som mange studerende tænker tilbage på som værende en dejlig og meget behagelig bog. Eftersom dette er en introduktionsbog, er der en del ting, den ikke forklares, hvilket kan virke irriterende for den vidensbegærlige elev. Dog kan vi oplyse, at man som medicinstuderende nok skal blive udsat for en rigelig detaljeringsgrad senere på studiet. Vi mener ikke, at der er noget i vejen for, at du benytter en tidligere udgave af bogen, eftersom det er meget få ændringer, der forekommer i en ny udgave. Bogen benyttes desuden kun på første semester.
<br /><br />
Bogen er et rigtig godt valg, og man skal ikke være bange for at begive sig ud i at læse en bog på engelsk. Det at have øvet sig i det, vil tværtimod kun komme en til gode senere på studiet, hvor man skal læse større og mere læsetunge bøger på det engelske sprog.</p>
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
		$r2 = 5; //pedagogy
		echo '<!-- --rate-pedago:5; -->';
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
