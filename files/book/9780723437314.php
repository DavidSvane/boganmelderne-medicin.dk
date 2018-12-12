<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Sobotta, Atlas of Anatomy</h1>
	<p class="subtitle">af Friedrich Paulsen</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hoved, hals, bevægeapparatet og det perifere nervesystem.</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Anatomi; -->
				<p class="semester"><b>Semesterbrug:</b> 3., 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> Elsevier Health Sciences</p>
				<p class="sprog"><b>Sprog:</b> Latin og engelsk</p>
				<p class="sider"><b>Sider:</b> 1104</p>
				<p class="udgave"><b>Udgave:</b> 15</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2013</p>
				<p class="isbn"><b>ISBN:</b> 9780723437314</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_.jpg"/>9780723437314</td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description"><u>Indledning:</u><br />Sobottas 15. udgave er væsentligt revideret ift. tidligere udgaver. Billederne i den tidligere og den nuværende udgave er de samme. Den nye udgave har dog en del ekstra features, som gør den til et rigtig godt valg. Dette atlas er en mellemting mellem Netters atlas og Thiemes 3-binds atlas og vil kunne benyttes i fremtiden som læge.<br /><br /><u>Beskrivelse:</u><br />Sobottas 15. udgave er i 3 bind, som gør det mere håndterbart. Man får desuden et 4. mindre tillægsatlas med oversigter over muskler, led og nerver. Desuden er der kommet en bedre opdeling af kapitlerne. Hvert kapitel starter med en indledning til regionen med lidt klinik og en lille dissektionsbeskrivelse. Derefter følger som noget nyt en meget kort og velillustreret beskrivelse af embryologien bag regionen. De små embryologiske introduktioner er virkelig gode og kan afhjælpe læsningen i embryologien lidt. Efter introduktion til regionen og embryologien kommer stoffet som i den ældre udgave med gode billeder og dertilhørende billedtekst. Den nye udgave indeholder flere kliniske bokse og nogle flere flotte computerfigurer som illustrerer bevægelser, undersøgelser, frakturer osv.<br /><br />Ift. til kar og nerver er der til billederne lavet tabeller over hovedstammer og deres grene. Dette er virkelig godt og giver et fint overblik over sammenhængen. Til nogle af musklerne, karrene og nerverne har man skåret meget af de omkringliggende strukturer væk for at lægge fokus på nogle få strukturer og deres relation ift. hinanden, hvilket er noget som før kun kunne findes i Thiemes atlas. Dette resulterer i, at man ikke drukner i deltaljer, som man kunne gøre i de ældre udgaver. Atlaset er altså nemt at anvende fra starten af.<br /><br /><u>Vurdering:</u><br /> Det har et flot og lækkert design både udad- og indadtil. Billederne er store og skarpe. Til tider kan det dog være frustrerende at finde mange billeder som ligner hinanden betydeligt, idet der skrælles få lag af fra hvert billede.</p>
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
		$r1 = 7; //layout	
		echo '<!-- --rate-layout:7; -->';
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