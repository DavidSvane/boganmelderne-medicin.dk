<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Histology: A Text and Atlas</h1>
	<p class="subtitle">af Michael H. Ross, Wojciech Pawlina.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Celle- og vævsbiologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Fysiology,Histologi; -->
				<p class="semester"><b>Semesterbrug:</b> 2., 3., 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> Lippincott, Williams and Wilkins</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 928</p>
				<p class="udgave"><b>Udgave:</b> 6</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9781451187427; -->
				<p class="udgivet"><b>Udgivet:</b> 2010</p>
				<p class="isbn"><b>ISBN:</b> 9781451101508</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9781451101508.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Histology: A Text and Atlas, blandt medicinstuderende kendt som Ross, er en fremragende tekstbog og især også et omfattende og detaljeret mikroskopisk atlas. Ross er alternativet til Geneser - et engelsk alternativ, som er fuldt ud pensumdækkende.<br /><br />Kapitlerne i Ross er inddelt i mange undertitler, hvor Geneser i modsætning hertil har længere “mere snakkende” afsnit. Ross benytter langt oftere punktform, fed markering eller kursiv til at fremhæve centrale begreber end Geneser. Det er meget individuelt, hvilken tekstform man som studerende foretrækker. Det anbefales derfor, at man læser nogle sider eller kapitel igennem i begge bøger og vælger herudfra. Især illustrationerne i Ross er store, flotte og deltaljeret. Disse er bedre end i Geneser.<br /><br />Rent indholdsmæssigt dækkes det samme. Ross går meget i detaljer med molekylære navne, hvilket er ud over pensum. Vælger du at læse efter Ross, bør du derfor holde fast i, hvad der er det væsentligste at lære og ikke fortabe dig i ligegyldige molekylære betegnelser.<br /><br />Pensum og undervisning følger i grove træk Geneser, hvilket alt andet lige, gør det nemmere at læse efter denne. Dog bør man overveje at læse efter alternativet hertil, Ross. Denne er en fuldt ud lige så god lærebog, hvor stoffet præsenteres på en anden måde, hvilket kan gøre denne bog mere velegnet for nogle studerende. Det er især billederne i Ross, som gør den til et stærkt alternativ.</p>
	<br />
	
	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	
		<div class="nyudgave">
			<img src="files/book/cover_9781451187427.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	
	
	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 5; //layout	
		echo '<!-- --rate-layout:5; -->';
		$r2 = 4; //pedagogy
		echo '<!-- --rate-pedago:4; -->';
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