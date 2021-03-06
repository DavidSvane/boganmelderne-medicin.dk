<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Kompendium i energiomsætning</h1>
	<p class="subtitle">af Morten Dahl</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Energiomsætning</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:; -->
				<p class="semester"><b>Semesterbrug:</b> 4. semester</p>
				<p class="forlag"><b>Forlag:</b> Aspiri</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 81</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2009</p>
				<p class="isbn"><b>ISBN:</b> 9788770710190</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788770710190.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description"> Dette er et kompendium i energiomsætning som kan benyttes kurset i energiomsætning, men kompendiet er ikke påkrævet. Kompendiet er pensumdækkende for kurset i energiomsætning.
<br /><br />
Der er lagt vægt på at gøre faget energiomsætning overskueligt. Sproget er ligetil og pædagogisk, og fagtermerne som RG-værdi og steady state forklares enkelt.
<br />
I hver kapitel er der opgaver i den gennemgåede teori, som man med fordel kan lave, da eksamen i energiomsætning udelukkende består af regneopgaver. Ud over de almene kapitler om de forskellige emner inden for energiomsætning, som fx energibalance, ATP-syntese med videre, er der to kapitler til hjælp med øvelsen i henholdsvis biokemi og fysiologi. Sidst i kompendiet finder du en lille oversigt over væsentligste formler og stikordregister.
<br /><br />
Kompendiet eksisterer kun i 1. udgave, men i tre oplag, der har forskelligt layout. Du kan altså godt købe kompendiet brugt, idet udgaverne er de samme.
<br /><br />
Kompendiet er velstruktureret og bestemt brugbart for mange studernede, som vil finde kurset i energiomsætning svært og forvirrende. Dog kan man også sagtens klare sig gennem uden kompendiet ved brug af undervisning, noter og udregning af mange eksamensopgaver. Om man køber kompendiet eller ej, må det på det kraftigste anbefales, at man regner alle eksamensopgaver i faget.</p>
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