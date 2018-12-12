<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Histologi, Tekst og Atlas</h1>
	<p class="subtitle">af Martin Faurholdt Gude, Annette Møller Dall, Simon Veedfald og Anja Høegh Brügmann</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hoved, Hals, bevægeapparatet og det perifære nervesystem</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Histologi; -->
				<p class="semester"><b>Semesterbrug:</b> 2., 3., 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> FADL's Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 434</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2015</p>
				<p class="isbn"><b>ISBN:</b> 9788777495519
</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777495519.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Histologi, Tekst og atlas er en supplerende lærebog i histologi, som også  indeholder et samlet mikroskopisk atlas bagerst. Bogen er god til førstegangslæsning, da den dels er meget pædagogisk, og dels mindre detaljerig end for eksempel Geneser. Kapitlerne er underopdelt i mindre afsnit, hvor de vigtige ord er markeret med fed; dette gør læsningen mere overskuelig og samtidig bogen let at slå op i.
<br /><br />
I de enkelte kapitler findes en del illustrationer - langt de fleste i farver - der passer til teksten. Endvidere findes bagerst et mikroskopisk atlas, der er opbygget efter bogens indhold. Billederne er ikke så store, men atlasset fungerer fint som opslagsværk under og efter læsningen. 
<br /><br />
Sproget i bogen er meget pædagogisk og letforståeligt. Indholdsmæssigt skæres ind til benet, så kun det relevante kommer med. Nogle gange ”skæres” dog for meget, og enkelte emner er ikke beskrevet uddybende. Dette er dog let at fange til undervisningen eller kan læses i en anden bog. 
<br /><br />
Histologi, Tekst og atlas er tilstræbt pensumdækkende. Bogen kan vælges som et mindre ambitiøst alternativ til Geneser og Ross - især når man på 2. semester skal stifte bekendtskab med histologi for første gang. Det skal nævnes, at undervisningen og pensum følger Geneser, hvilket man skal have med i sine overvejelser, når man vælger bog. Detaljegraden er for nogle dog for lav, hvorfor det anbefales, at man kigger de forskellige histologiske bøger igennem, inden man vælger hvilken, man vil købe.
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
		$r1 = 4; //layout	
		echo '<!-- --rate-layout:4; -->';
		$r2 = 5; //pedagogy
		echo '<!-- --rate-pedago:5; -->';
		$r3 = 3; //pensum
		echo '<!-- --rate-pensum:3; -->';
		
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