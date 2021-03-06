﻿<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Dissection Atlas - Sobotta</h1>
	<p class="subtitle"></p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hoved, hals, bevægeapparatet og det perifere nervesystem.</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Anatomi; -->
				<p class="semester"><b>Semesterbrug:</b> 3.</p>
				<p class="forlag"><b>Forlag:</b> Elsevier GmBH</p>
				<p class="sprog"><b>Sprog:</b> Engelsk og tysk</p>
				<p class="sider"><b>Sider:</b> 264</p>
				<p class="udgave"><b>Udgave:</b> 2</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 1999</p>
				<p class="isbn"><b>ISBN:</b> 9780702052804</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780702052804.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Med betegnelsen ”dissektionsatlas” forventer man billeder af lag til lag dissektion med billeder. Altså fotografier. Af ægte præparater. Sobottas Dissection Atlas har desværre ikke det og lever derfor ikke helt op til sit navn. Der er dog meritter til atlasset.<br /><br />Bogen indeholder udelukkende topografiske billeder (kar, nerver, muskler og så videre i relation til hinanden) organiseret i kapitler med ekstremiteterne, truncus, hovedet og de indre organer og her underinddelt i regioner.<br /><br />De topografiske billeder giver en god regionær forståelse af de anatomiske områder og kan på sin vis assistere dissektionen eller anatomilæsningen på 3., 4. og 5. semester. Der mangler dog illustrationer af de enkelte komponenter hver for sig, hvorfor man kan blive en smule overvældet, hvis man sætter sin lid til dette atlas alene. Illustrationerne er identiske med det oprindelige trebinds Sobotta-atlas. Bogen udgør altså et meget kondenseret Sobotta-atlas. Billederne er af samme høje kvalitet og flot grafisk illustreret, som man kender dem.<br /><br />Atlasset kan have sin plads i dissektionssalen, hvis man hurtigt og effektivt skal orientere sig. I det hele taget er det dog besværligt at have bøger med på dissektionskurset og det kan blive en smule snasket. Vi anbefaler i stedet en grundig forberedelse med lærebogen og større, mere omfattende atlas. Hvis man ønsker at bruge den til at støtte den anatomiske læsning bør man være varsom. Atlasset er slet ikke lige så omfattende som de helt store kanoner, og vi anbefaler at man smider en skilling ekstra efter dem frem for at vælge en ufuldstændig løsning.<br /><br />Hvis man ønsker billeder af rigtige dissektioner findes bedre alternativer, som vi desværre ikke har anmeldt endnu.</p>
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
		$r1 = 0; //layout	
		echo '<!-- --rate-layout:0; -->';
		$r2 = 0; //pedagogy
		echo '<!-- --rate-pedago:0; -->';
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