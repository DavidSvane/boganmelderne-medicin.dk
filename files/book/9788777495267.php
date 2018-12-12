<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Miljø- og arbejdsmedicin</h1>
	<p class="subtitle">af Kurt Rasmussen, Redaktør Torben Sigsgaard, Jens Peter Bonde.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kliniske sygdomsenheder</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Miljoe; -->
				<p class="semester"><b>Semesterbrug:</b> 8.</p>
				<p class="forlag"><b>Forlag:</b> FADL's Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 295</p>
				<p class="udgave"><b>Udgave:</b> 3</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9788777497155; -->
				<p class="udgivet"><b>Udgivet:</b> 2010</p>
				<p class="isbn"><b>ISBN:</b> 9788777495267</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777495267.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Bogen er det eneste mulighed, når det kommer til miljømedicin og arbejdsmedicin. Den kan dog stadig være lidt besværlig at anbefale til alle på 6. sem. BA.
<br />
Stoffet i værket er præsenteret på en simpel og overskuelig måde. Som læser føler man sig ikke overvældet af detaljer, og det kræver oftest kun 30-45 minutter at læse stoffet, som der undervises i dagen efter.
<br /><br />
Der er mange illustrationer i bogen. De består især i tabeller og grafer, men også adskillige billeder. Det er ikke bogen, som man husker for dens fremragende og underskønne illustrationer, men i det mindste er de praktiske og anvendelige. Deres formål er at give indsigt i stoffet, og på den front klarer de sig udmærket.
<br /><br />
Mht. opsummering ifm. eksamen er bogen ikke nær så velegnet. Der er en række noter (Asma Bashir, effimedicin osv.) som er lige så anvendelige ved eksamenslæsningen. Desuden opstår der et andet problem idet mange af eksamensopgaverne fokuserer på udregninger. Bogen har kun begrænset fokus på dette område og derfor skal du som læser være klar over, at du vil have svært ved eksklusivt at benytte bogen som læringskilde i denne forbindelse, hvis du ikke samtidig deltager i undervisningen. Sidstnævnte trækker ned i bogens samlede vurdering, da man trods alt må synes, at en studiebogs funktioner er at forberede den studerende bedst muligt til eksamen. Men da der ikke er andre bøger som alternativer, er alt dette irrelevant og du efterlades kun med et spørgsmål: har jeg brug for bogen eller kan jeg nøjes med noter og undervisning? Som altid kan det sidstnævnte lade sig gøre, men i dette tilfælde er det meget mere oplagt end i andre sammenhæng.</p>
	<br />
	
	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	
		<div class="nyudgave">
			<img src="files/book/cover_9788777497155.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	
	
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