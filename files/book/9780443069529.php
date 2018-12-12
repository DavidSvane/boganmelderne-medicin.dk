<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Gray’s Anatomy for Students</h1>
	<p class="subtitle">af Richard Drake, A. Wayne Vogl, Adam W. M. Mitchell.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hoved, hals, bevægeapparatet og det perifere nervesystem.</p> 
				<!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:anatomi; -->
				<p class="semester"><b>Semesterbrug:</b>3., 4., 5. </p>
				<p class="forlag"><b>Forlag:</b> Elsevier Health Sciences</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b>1136</p>
				<p class="udgave"><b>Udgave:</b> 2. udgave</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9781437700725; -->
				<p class="udgivet"><b>Udgivet:</b> 2009</p>
				<p class="isbn"><b>ISBN:</b> 9780443069529</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780443069529.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Gray’s Anatomy er kendt som grundkilden, når det kommer til anatomibøger – desværre er den også meget detaljerig og besværlig at forstå. Derfor har man nu lavet Gray’s Anatomi for Students.
<br /><br />
Bogen har et stort fokus på sin pædagogik og gør meget for at den studerende kan opnå en fremragende forståelse for den tre-dimensionelle krop. Med hjælp fra simple illustrationer af muskler, knogler, ligamenter, kar og nerver kombineret med farvede, rumlige strukturer, skaber bogen et billede af kroppens hulrum, som ikke er til at finde på samme måde i anden litteratur.
<br /><br />
Bogen er kort og konkret om de enkelte områder, således at man får det at vide, man skal og ikke mere. Til gengæld er nomenklaturen på engelsk i stedet for latin, hvilket kan gøre det svært for den studerende at følge med i undervisningstimerne, da han eller hun har læst de engelske betegnelser. Bogen er rigtig god til førstegangslæsning – men kun, hvis man kan abstrahere fra den engelske nomenklatur. Bogen er en af de bedste på området, men der er fornuft i at vælge at gå på biblioteket og læse emner, der kræver rumlig forståelse (så som bækkenbunden) i stedet for at investere i bogen.
<br /><br />
Har du mod på at sidde med et atlas med latinsk nomenklatur samtidig med at du læser denne bog, og er du klar på at bruge den smule ekstra energi det kommer til at kræve, vil du bestemt ikke komme til at fortryde købet, og du vil få en utrolig rumlig forståelse af den menneskelige krop.</p>
	<br />
	
	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->

		<div class="nyudgave">
			<img src="files/book/cover_9780702051319.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>

	
	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 0; //layout	
		echo '<!-- --rate-layout:; -->';
		$r2 = 0; //pedagogy
		echo '<!-- --rate-pedago:; -->';
		$r3 = 0; //pensum
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