<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Basal neuroanatomi</h1>
	<p class="subtitle">af Torben Moos &amp; Morten Møller</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Centralnervesystemets struktur og funktion</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Anatomi,Neuro; -->
				<p class="semester"><b>Semesterbrug:</b> 3.</p>
				<p class="forlag"><b>Forlag:</b> FADL's Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 275</p>
				<p class="udgave"><b>Udgave:</b> 3</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2010</p>
				<p class="isbn"><b>ISBN:</b> 9788777495380</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777495380.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Denne bog er den ene af to bøger, som man kan benytte i Neuroanatomi kurset på tredje semester. Basal Neuroanatomi er den angivne pensumbog og er skrevet af kursuslederen.<br /><br/>Bogen er, ift. Neuroanatomi af Bjarkam, meget farverig og med mange store illustrationer. Kapitlerne forekommer i en ideel rækkefølge, hvorved man kan følge undervisningen ved at læse et kapitel frem for at læse pensum flere forskellige steder, som man gør i Neuroanatomi.<br /><br/>Basal Neuroanatomi indeholder flere detaljer end Neuroanatomi af Bjarkam. De forskellige fagudtryk forekommer i et med teksten. Sammenholdt med de ekstra detaljer, gør dette den svær at læse første gang. Ydermere skrives teksten ud i et nogle gange, og med med lange stykker, hvorved man mister overblikket. Nogle studerende vil finde bogen mindre pædagogisk. Ift. Neuroanatomi, mangler der tabeller som kan hjælpe med overblik og opsummering. Bogens kapitel om ledningsbaner er dog bedre end Bjarkams.<br /><br/>Undervejs i kapitlerne beskrives forskellige medicinske sygdomme, som omhandler den anatomiske struktur der beskrives. Bogens layout er flot med mange forskellige farver. Den skal dog læses mere end en gang og bør sammenholdes med undervisningen.<br /><br/>Man kan benytte både Basal Neuroanatomi af Moes-Møller og Neuroanatomi af Bjarkam. Valget står mellem en meget detaljeret, men mindre pædagogisk bog (Basal Neuroanatomi) og en bog, som er meget studentervenlig, men mindre detaljeret og mindre farverig (Neuroanatomi).</p>
	<br />
	
	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	
		<div class="nyudgave">
			<img src="files/book/cover_9788777498602.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	
	
	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 4; //layout	
		echo '<!-- --rate-layout:4; -->';
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