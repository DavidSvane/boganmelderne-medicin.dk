<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Medicinsk Sociologi</h1>
	<p class="subtitle">af Rikke Lund, Ulla Christensen &amp; Lars Iversen</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Medicinsk Sociologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:; -->
				<p class="semester"><b>Semesterbrug:</b> 9.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 292</p>
				<p class="udgave"><b>Udgave:</b> 2</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2011</p>
				<p class="isbn"><b>ISBN:</b> 9788762809444</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762809444.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Medicinsk sociologi er en bog tilegnet kurset af samme navn, som afvikles i starten af 9. semester. Bogen må medbringes til eksamen. 
<br /><br />
Bogen dækker pensum for medicinsk sociologi og må også siges at være lidt overkill i forhold til, hvad der kræves til eksamen. Bogen kommer omkring nogle emner, der er gode at have forstået som læge så som migranter og flygtninges helbred, ulighed i sundhed og et overblik over dødelighed og sygelighed i Danmark. Men at læse bogen slavisk er ikke strengt taget eksamensnødvendigt.
<br /><br />
Bogen er generelt en smule vævende og kan siges at danse lidt for længe og for let om den varme grød. Indholdet er ofte unødvendigt langt og upræcist forklaret. Der er dog til bogens kredit nogle gode figurer og modeller, som også er dem, der gennemgås i undervisningen, og som man skal kunne til eksamen. Det er ikke nødvendigt at læse bogen fra A-Å, men det anbefales, at man får læst på de centrale modeller, som gennemgås i undervisningen. Resten kan skimmes, så man ved, hvor man skal finde relevant teori til eksamen. Med bogen får du gennemgået de centrale modeller og figurer samt de vigtigste begreber i faget. Forståelsen og den primære kilde til at lære medicinsk sociologi får du nok bedre til undervisningen. 
<br /><br />
Fordelen ved at erhverve sig bogen er ganske simpelt, at den må medbringes til eksamen.
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
		$r1 = 2; //layout	
		echo '<!-- --rate-layout:2; -->';
		$r2 = 3; //pedagogy
		echo '<!-- --rate-pedago:3; -->';
		$r3 = 6; //pensum
		echo '<!-- --rate-pensum:6; -->';
		
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