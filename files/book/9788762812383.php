<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Procedurebogen</h1>
	<p class="subtitle">af Lars Konge, Lars Iversen Gjærde &amp; Yousif Subhi</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Supplement</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:; -->
				<p class="semester"><b>Semesterbrug:</b> Kandidaten</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 135</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2014</p>
				<p class="isbn"><b>ISBN:</b> 9788762812383</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762812383.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Procedurebogen er, som titlen lover, en bog der går efter at beskrive de hyppigste procedurer som medicinstuderende og yngre læger kan møde i klinikken.
<br /><br />
Den har en god størrelse til kittellommen og har et godt og overskueligt layout.
<br />
Procedurebogen har en rigtig god opbygning. Hver procedure indledes med tre tekstbokse: Overvejelser du skal gøre dig inden proceduren, information til patienten og en remedieliste. Hver procedure afsluttes ligeledes med en tekstboks med forslag til troubleshooting på de mest almindelige problemstillinger man kan møde ved udførelsen af den pågældende procedure.
<br /><br />
Denne opbygning gør bogen systematisk og man ved præcis hvor skal man kigge efter bestemte informationer når man slår en procedure op.
<br />
Procedurerne gennemgås vha. de fine illustrationer der præger bogen sammen med en kort forklarende tekst. Illustrationerne er meget informative uden unødig detaljegrad, der øger fokus på det essentielle. Der er dog nogle enkelte punkter, hvor vi mener procedurebogen kunne forbedres. Procedurerne bør indledes med en overskrift i stedet for at have den angivet i margen for overblikkets skyld. Ligeledes kunne tekstboksene med fordel være angivet med navn.
<br />
Nogle procedurer kunne beskrives mere for at give en bedre forståelse og ikke al information i tekstboksene stemmer overens med den beskrevne procedure, men det skal understreges at dette kun er i få tilfælde.
<br />
Tekstboksen med ”information til patienten” er skrevet som et ordret citat og disse bokse kunne i stedet have angivet de vigtigste informationer i punktform og lade formuleringen være op til læseren. På den måde ville det være nemmere at huske de vigtige informationer, fremfor at skulle memorere hele den skrevne tekst.

Procedurebogen er alt i alt et rigtig godt værktøj for den medicinstuderende eller yngre læge ude i klinikken. Den er desuden langt bedre til at lære og efterfølgende udføre procedurerne i forhold til procedureafsnittet i klinikbogen.</p>
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
		echo '<!-- --rate-layout:; -->';
		$r2 = 4; //pedagogy
		echo '<!-- --rate-pedago:; -->';
		$r3 = 4; //pensum
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