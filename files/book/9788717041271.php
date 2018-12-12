<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Kirurgisk kompendium - Kittelbog</h1>
	<p class="subtitle">af Benny Dahl, Jørgen Nordling, Lars Bo Svendsen, Jens Hillingsø</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kliniske sygdomsenheder</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Kittelbog; -->
				<p class="semester"><b>Semesterbrug:</b> 6. og kandidaten</p>
				<p class="forlag"><b>Forlag:</b> Nyt Nordisk Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 648</p>
				<p class="udgave"><b>Udgave:</b> 9788717041271</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2011</p>
				<p class="isbn"><b>ISBN:</b> 9788717041271</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788717041271.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Kirurgisk kompendium kittelbog (også kendt som svenskerbogen, grundet sit valg af omslagsfarver) er i bund og grund en supplerende bog.
<br /><br />
I denne rolle tager bogen funktion som læsning, du altid kan have med i lommen. I praksis finder man dog sjældent mulighed for at benytte denne funktion i klinikken. Ofte vil din tid være taget af andre bøger, såsom Praktisk procedure- og diagnoseguide, Subjektivt og Objektivt eller Klinikbogen. Så selvom bogen er god, passer den bare ikke ind.
<br />
Derimod rammer den et andet segment: Kirurgisk kompendium kittelbog er, sjovt nok, den korteversion af kirurgisk kompendium... som ikke publiceres længere. Dette betyder dog, at indholdet er på et ret højt niveau. For den studerende, som blot er interesseret i kortfattede detaljer uden for meget snak, vil Kirurgisk kompendium kittelbog kunne benyttes som enkeltstående bog til de kirurgiske fag. Dog skal man være klar over, at mængden af illustrationer selvfølgelig er væsentlig lavere end i en bog som FADL’s Kirurgi. Når det er sagt, kan man stadig finde en del skematiske tegninger i Kirurgisk kompedium kittelbog. Derudover skal man være klar over at bogen bestemt forventer, at man enten kender til mange af fagbegreberne, eller er villig til at slå dem op.
<br /><br />
Kort sagt: er man typen, som foretrækker at benytte én bog til sin læsning, er Kirurgisk kompendium kittelbog næppe det rette valg. Kan man derimod godt lide den kortfattede stil, hvor man ofte selv skal søge forklaring på fagbegreber (som heller ikke altid forklares i større bøger), er denne bog måske det rette valg.</p>
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
		$r2 = 1; //pedagogy
		echo '<!-- --rate-pedago:1; -->';
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