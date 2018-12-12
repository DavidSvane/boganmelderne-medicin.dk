<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Principles of Medical Biochemistry</h1>
	<p class="subtitle">af Gerhard Meisenberg, William H. Simmons.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hjerte, kredsløb og lunger + Mave, tarm og lever</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Biokemi; -->
				<p class="semester"><b>Semesterbrug:</b> 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> Elsevier - Health Sciences Division</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 608</p>
				<p class="udgave"><b>Udgave:</b> 3</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2011</p>
				<p class="isbn"><b>ISBN:</b> 9780323071550</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780323071550.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Kendt under sit primære forfatternavn Meisenberg. Værket er en af de bøger, som kursuslederen på fjerde semester anbefaler til biokemikurset.<br /><br />Principles of Medical Biochemistry er god til at skabe et godt fundament for den studerendes forståelse af biokemien. Den lemper på ingen måde på detaljer og er pensumdækkende, hvorfor den anbefales af kursusledelsen. Selvom bogen kan være hård til førsteganglæsning, er dette formodentligvis snarere forårsaget af biokemifaget end selve Meisenberg. Den fungerer ligeledes til eksamenslæsningen.<br /><br />Mht. eksamen er især mange af illustrationerne til stor hjælp. Da biokemien i stor grad er et spørgsmål om metaboliske cyklusser, er bogens mange fornuftige tegninger af pathways, inkl. stimulatorer og inhibitorer, forståelsesfremmende til både førstegangslæsningen og eksamenslæsningen. Desuden er der mange faktabokse, hvor du kan finde få forklaret den kliniske relevans af teksten. Illustrationerne er ikke så flotte, som man kunne forvente af en engelsksproget lærebog. Derimod er de simple – og endda humoristiske. Eksempelvis ses enzymer formet som krokodille- og flodhestehoveder. Den samme humor kan man også finde i teksten, hvor forfatterne af og til indskyder sjove ordspil og forklaringer.<br /><br />Sammenlignet med den anden gode mulighed, nemlig den danske Biokemi af Borup, dækkes stort set de samme emner. Mange studerende har eksklusivt benyttet den danske bog og bestået, men ønsker du en bog, der har fået kursusledelsens anerkendelse, bør du vælge Principles of Medical Biochemistry. Hvis dette er af ringe konsekvens for dit bogvalg, skal du primært tænke på, om du vil læse dansk eller engelsk.<br /><br />Principles of Medical Biochemistry er en bog, som forstår at afbryde sit tempo med en joke af og til, således at læseren får en åndepause. Den er fornuftigt skrevet, fyldt med informative - omend lettere farveforladte, tabeller og figurer og er helt klart anbefalelsesværdig.</p>
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
		$r2 = 3; //pedagogy
		echo '<!-- --rate-pedago:3; -->';
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