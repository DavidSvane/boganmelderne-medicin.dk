<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Cellular Physiology and Neurophysiology</h1>
	<p class="subtitle">af Mordecai P. Blaustein, Joseph P. Y. Kao, Donald R. Matteson.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Excitable celler</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Fysiologi; -->
				<p class="semester"><b>Semesterbrug:</b> 2.</p>
				<p class="forlag"><b>Forlag:</b> Elsevier</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 368</p>
				<p class="udgave"><b>Udgave:</b> 2</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2012</p>
				<p class="isbn"><b>ISBN:</b> 9780323057097</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780323057097.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Cellular physiology and neurophysiology bedre kendt som ”Blaustein” er det normale valg af lærebog til biofysik. Øvelserne samt eksamen er lavet efter bogen. Dog er Blaustein en tungere bog end den umiddelbart synes, med lidt for stor vægt lagt på formler, og et design der ikke just er inspirerende. Bogen er dog fuldt pensumdækkende, har en god struktur og et pædagogisk sprog, samt gode resumeer i slutningen af kapitler og kliniske bokse undervejs med ”Clinical facts”. 
<br /><br />
Kan Medical Physiology af Boron og Boulpaep læses i stedet? Ja - Boron er bedre illustreret og giver mere dybdegående forklaringer. Hvor Baustein kan siges at være for formelfokuseret er Boron omvendt for tekstbaseret. Afsnittene er unødvendigt lange og der forekommer mange gentagelser. Du skal afsætte mere tid til at læse efter Boron. Dog står begreberne bedre forklaret og er ikke skjult i avancerede udregninger.  Medical Physiology kan til gengæld anvendes igen senere på studiet.
<br /><br />
Bogen er velstruktureret med kapitlets formål skrevet i starten, samt kliniske bokse undervejs, hvor stoffet sættes i relation til lægeerhvervet. Kapitlerne rundes af med et godt anvendeligt resumé i punktform, samt nøglebegreber fra kapitlet. Sproget er forståeligt, men detaljegraden i formler og udregninger er en del højere end hvad der forventes til SAU og eksamen. Bogens design har ikke været førsteprioritet for forfatterne, og det er derfor ikke den mest spændende bog at give sig i kast med. Især kapitlerne om 
<br /><br />
Detaljeringsgraden er passende i forhold til pensum i biofysik. Formler og udregninger fremstilles dog på en temmelig dårlig måde, så simple principper bliver svære at forstå. Resumeet bag i kapitler er meget brugbart og med et godt stikordsregister er bogen meget velegnet til eksamenslæsning. Den kan dog være svær i sig selv til førstegangslæsning. 
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
		$r1 = 3; //layout	
		echo '<!-- --rate-layout:3; -->';
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