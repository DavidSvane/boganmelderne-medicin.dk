<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">EKG atlas</h1>
	<p class="subtitle">af Paul Erik, Bloch Thomsen, Christian Jøns og Lærke Smidt Hansen</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kardiologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Kardiologi; -->
				<p class="semester"><b>Semesterbrug:</b> Kandidaten</p>
				<p class="forlag"><b>Forlag:</b> Fadls forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 254</p>
				<p class="udgave"><b>Udgave:</b> 2</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b>2015 </p>
				<p class="isbn"><b>ISBN:</b> 9788777497308</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777497308.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">EKG-Atlas i anden udgave er din lille EKG bibel, når du bare ikke kan finde rundt i EKG’et og alt ser underligt ud. Det er ikke en pensumdækkende bog, men supplerende litteratur til at lære fortolkning og genkendelse af EKG forandringer. Bogen er rettet mod medicinstuderende og yngre læger i intern medicin eller anæstesi.
"<br />""<br />"
Tidligere udgave var i kittelformat – dette er dog droppet i denne udgave, som er i hardback og er en smule større for at gøre plads til bedre illustrationer.
"<br />""<br />"
Bogen kan ikke anbefales til førstegangslæsning for at lære kardiologi, grundet dens detaljegrad, samt relative tekstfattighed ift. illustrationer og fokus på EKG og således ikke resten af kardiologien. Her henvises i stedet til FADL’s Medicin/ Davidson’s Medicine/Medicinsk kompendium eller for den mere kardiologiinteresserede Klinisk elektrokardiologi.
"<br />""<br />"
Bogens faglige niveau er lige tilpas for den yngre læge eller den medicinstuderende på kandidat-delen. Bogen er hovedsageligt udgjort at EKG’er med forklarende billedtekst, suppleret af hovedteksten som forklarer de generelle EKG forandringer, klassifikation af fx arrytmier etc.
"<br />""<br />"
EKG Atlas er velegnet som supplement til de primære kardiologibøger. Den er velillustreret og har et godt fokus på, hvor forskelligt fx lungeemboli kan se ud i EKG’et samt hvilke forandringer der ikke altid er til stede. Et plus ved EKG Atlas er desuden, at man får vist dynamikken i EKG’et ved mange tilstande, altså hvordan EKG forandringer over tid optræder ved fx et STEMI med debut af ST-elevation, senere inverterede T-takker osv. Detaljegraden er høj – så brug den ikke til førstegangslæsning, men nyd godt af dette, når du bruger den som supplement til anden læsning eller som opslag i klinikken, da du næppe ser et EKG, hvis forandringer du ikke vil finde forklaret i dette udtømmende atlas.
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
		echo '<!-- --rate-layout:; -->';
		$r2 = 7; //pedagogy
		echo '<!-- --rate-pedago:7; -->';
		$r3 = 4; //pensum
		echo '<!-- --rate-pensum:4; -->';

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
