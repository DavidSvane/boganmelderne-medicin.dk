<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Human embryologi</h1>
	<p class="subtitle">af Gary C. Schoenwolf, Philippa H. Francis-West, Philip R. Brauer &
Steven B. Bleyl</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hoved, hals, bevægeapparatet og det perifære nervesystem</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Embryologi; -->
				<p class="semester"><b>Semesterbrug:</b> 3., 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> FADL's Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 643</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2012</p>
				<p class="isbn"><b>ISBN:</b> 9788777495991</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777495991.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Denne bog, af kvadratisk design er en at de to anbefalede embryologibøger, man kan benytte. Bogen er en dansk oversættelse af en engelsk bog og normenklaturen er derfor lidt anderledes ift. Langemanns embryologi. 
<br /><br />
Den største fordel ved denne bog i forhold til alternativet er dens illustrationer. Det sværeste at forstå i embryologi er den rummelige opbygning og udvikling, hvilket denne bog er rigtig god til at give et billede af. Der er mange flotte illustrationer og billeder. Desuden har mange af illustrationerne en lille tegning tilknyttet, som viser, hvor snittet af embryonet på de beskrevne billeder, er taget.
<br /><br />
En anden stor forskel er teksten. Hvert kapitel starter ud med et resume, som giver et hurtigt overblik over indholdet i kapitlet. Til hvert resume er der en tidslinje med tilhørende figurer som repeterer udviklingen inden for denne periode.
<br /><br />
Som beskrevet er normenklaturen mellem de to bøger forskellige. Man bliver til eksamen stillet til regnskab for fagtermer, som ikke står i Larsens, men som står i Langemanns. Dette er dog ikke et stort problem eftersom man hører disse fagtermer til forelæsningerne eller SAU timerne.
<br />
Sproget i bogen er skrevet på et passende nivaeu.  Embryologi er svært at forstå og der er mange nye ord, som skal læres. Dog formår denne bog at gøre sit for at lette læsningen for den studerende ved at have fagtermerne markeret med fed tekst. Kapitlerne forekommer i samme rækkefølge som SAU timerne. 
<br /><br />
Bogen med sine mange illustrationer og billeder, samt sine fornuftige forklaringer giver en udførlig foreståelse af embryologien og gør det nemmere at følge med i undervisningen Dog mangler den nogle FÅ fagtermer som man kan høre til SAU. Bogen er simpelthen kvadratisk-praktisk-god. 
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
		$r1 = 6; //layout	
		echo '<!-- --rate-layout:6; -->';
		$r2 = 6; //pedagogy
		echo '<!-- --rate-pedago:6; -->';
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