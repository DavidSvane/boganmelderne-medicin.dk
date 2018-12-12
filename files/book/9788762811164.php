<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Histologi kompendium</h1>
	<p class="subtitle">af Anders Rehfeld, Malin Chatarina Nylander, Kirstine Kim Schmidt Karnov.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Celle- og vævsbiologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:; -->
				<p class="semester"><b>Semesterbrug:</b> 2., 3., 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 300</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2012</p>
				<p class="isbn"><b>ISBN:</b> 9788762811164</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762811164.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Bogen minder mest af alt om et meget veludrustet notekompendium, hvor man let og overskueligt får overblik og struktureret de forskellige emner inden for histologien.<br /><br />I bogen er der mange ”huskebokse” med forskellige huskeregler så man let kan huske f.eks. hudens lag. Ligeledes har bogen mange tabeller, som man ofte ville få i undervisningen eller selv ville lave. Disse sammenligner angiver på en velstruktureret og pædagogisk måde de vigtigste ligheder og forskelle mellem f.eks. en arterie og arteriole.<br /><br />Der er ingen opsummering sidst i hvert kapitel, men bogen skal nok mest af alt opfattes som en opsummering af Genesers histologi i en studenter-/eksamensvenlig form.<br /><br />Der er intet irrelevant i bogen og der står det man skal vide inde for histologien. Der kan godt være lidt mangel på tegninger i bogen, men de tegninger der er, er relevante og pædagogiske.<br /><br />Det anbefales ikke at læse denne bog selvstændigt (især ikke på 2. semester, hvor man endnu ikke har haft anatomi) pga. dens opbygning som et notekompendium. Dette præger sproget og opsætningen i bogen, og man er nødt til at have en basal forståelse af emnet man læser om for at kunne bruge kompendiet.<br /><br />I stedet anbefales det at købe bogen som det den er – et notekompendium, der skaber et solidt overblik og en god strukturering af de forskellige emner både til eksamenslæsningen og til almen forståelse. Såfremt man selv har taget gode noter til SAU-undervisningen, kan man bruge dem i stedet for et kompendie.</p>
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
		$r1 = 2; //layout	
		echo '<!-- --rate-layout:2; -->';
		$r2 = 1; //pedagogy
		echo '<!-- --rate-pedago:1; -->';
		$r3 = 0; //pensum
		echo '<!-- --rate-pensum:0; -->';
		
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