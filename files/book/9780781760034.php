<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Neuroscience – Exploring the Brain</h1>
	<p class="subtitle">M. Bear, B. Connora &amp; M. Paradiao</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> kursus i neurofysiologi </p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Fysiologi; -->
				<p class="semester"><b>Semesterbrug:</b> 3.</p>
				<p class="forlag"><b>Forlag:</b> Lippincott Williams and Wilkins</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 928</p>
				<p class="udgave"><b>Udgave:</b> 3.</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9781451109542; -->
				<p class="udgivet"><b>Udgivet:</b> 2006</p>
				<p class="isbn"><b>ISBN:</b> 9780781760034</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780781760034.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Denne bog er den primært anbefalede bog fra kursuslederne i neurofysiologi - og af god grund. Bogen er velskrevet og er fuldt ud pensumdækkende.<br /><br />

Mange af bogens tidlige kapitler benyttes slet ikke under neurofysiologikurset på 3. semester – de omhandler den biofysik, som var en del af pensum på 2. semester. Altså kan man med fordel læse op på disse kapitler for en mere tilgrundlæggende forståelse af neurofysiologien, eller for et nostalgisk tilbageblik på 2. semesters biofysik.<br /><br />

Kapitlerne, hørende til neurofysiologikurset, handler først om det perifere nervesystem, som er et veldokumenteret område, hvor man gennem forskning har fået en god forståelse af de fysiologiske processer. Dernæst forklarer bogen om processerne i det centrale nervesystem. Da viden om, hvordan hjernens biokemi og fysiologi bliver til egentlige tanker og handlinger er begrænset, er disse kapitler ofte også mere flyvske end dem, der omhandler det perifere nervesystem. <br /><br />

Heldigvis er bogen beriget med mange gode illustrationer. Samtidig er bogen også klar over, at der mangler i den viden, som den præsenterer og dette accepteres ofte med et humoristisk ordspil. Netop fordi mange af de kognitive processer ikke er endeligt kortlagt, kan man til tider føle, at man har læst et helt kapitel uden at have fået noget konkret ud af det. Dette er ikke bogens skyld, men i stedet et tegn på, at der er meget vi endnu ikke ved om hjernen.<br /><br />

Det er umiddelbart intuitivt at købe bogen, da der ikke er nogen egentlige alternativer. Heldigvis er bogen ret velskrevet, således at man får et godt udbytte af at læse den.
</p>
	<br />

	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	<!--
		<div class="nyudgave">
			<img src=files/book/cover_9781451109542.jpg/>
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
