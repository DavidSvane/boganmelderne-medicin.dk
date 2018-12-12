<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Langmans embryologi</h1>
	<p class="subtitle">af T. W. Sadler.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hoved, hals, bevægeapparatet og det perifære nervesystem</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Embryologi; -->
				<p class="semester"><b>Semesterbrug:</b> 3., 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 498</p>
				<p class="udgave"><b>Udgave:</b> 3</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9788762815742; -->
				<p class="udgivet"><b>Udgivet:</b> 2010</p>
				<p class="isbn"><b>ISBN:</b> 9788762809390</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762809390.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Bogen er pensumdækkende, læses primært på tredje semester, men kan også anvendes til embryologien på fjerde og femte semester. Nyere udgaver anbefales, da der forekommer en del fejl i tidligere udgaver.
<br />
Stoffet kan være svært at forstå ved førstegangslæsningen, men dette skyldes ikke bogen så meget som selve embryologiens kompleksitet.
<br /><br />
Bogen går kronologisk igennem den embryologiske periode. Værket gentager sjældent sig selv, hvilket gør, at man ofte er nødt til at bladre frem og tilbage. Det anbefales, at du sidder med et embryologisk atlas ved siden af for at få et bedre overblik over embryologien. Kapitlernes slutresumeer giver overblik, og det anbefales at læse disse, før du læser resten af kapitlet, så din læsning bliver mere struktureret.
<br /><br />
Bogen nævner store mængder regulatoriske molekyler. Det er dog langt fra alle af disse, som er essentielle at kende i detalje og mange kan fuldstændig undlades. Fornemmelse af hvilke af de regulatoriske mediatorer man skal kende til erhverves bedst via undervisningen. Bogen beskriver dog disse molekyler i separate afsnit, som derfor let kan springes over. Illustrationerne er gode og suppleres af detaljeret billedtekst. Desværre er det plan mange af billedernes snit er foretaget i ikke oplyst, og det kan derfor være svært at orientere sig.
<br /><br />
Med ovenstående forbehold, kan bogen anbefales, men samtidig skal du være klar over, at to koncentrerede gennemlæsninger kan være nødvendige. Bogen er helt klart henvendt til læseren, som er interesseret i mange detaljer. Ønsker man en mere detaljerig tilgang til emnet, er Larssens Embryologi en mulighed. Vær opmærksom på, at pensum til dels er opbygget efter Langmanns. Nogle fagtermer fra pensum i embryologi er kun at finde i Langmanns. 
</p>
	<br />
	
	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	
		<div class="nyudgave">
			<img src="files/book/cover_9788762815742.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>

	
	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 5; //layout	
		echo '<!-- --rate-layout:5; -->';
		$r2 = 3; //pedagogy
		echo '<!-- --rate-pedago:3; -->';
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