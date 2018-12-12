<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Basisbog i diagnostiske fag</h1>
	<p class="subtitle">af Redaktør Henrik S. Thomsen.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Diagnostiske Fag</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:; -->
				<p class="semester"><b>Semesterbrug:</b> 6. og 7.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 288</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2012</p>
				<p class="isbn"><b>ISBN:</b> 9788762810242</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762810242.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Basisbog i diagnostiske fag er som navnet antyder en bog, der beskriver de parakliniske og diagnostiske fags områder på et basalt niveau. Bogen er anvendelig på flere semestre.
<br /><br />
Bogen er opdelt i otte kapitler, som hver beskriver et område, som man kommer til at berøre i klinikken. Fagene indbefatter billeddiagnostik, patologi, klinisk biokemi osv. Den giver et godt indblik, samt en beskrivelse af de forskellige områder. 
<br /><br />
Bogens design og struktur minder meget om Basisbog i Medicin og Kirurgi. Teksten og opdelingen er velopstillet og har en passende størrelse. 
Der forekommer mange billeder og bokse i hvert kapitel. Billederne i bogen har en høj opløsning og falder godt ind i teksten. Dog er nogle af billederne meget små, og det kan være svært at se alle detaljerne. Dette forekommer hovedsageligt i kapitel et, som omhandler billeddiagnostik, hvor det ville have været relevant at have store billeder. 
<br /><br />
I hvert kapitel forekommer der en række cases, således at man får mulighed for at afprøve sin viden eller se eksempler på steder, hvor de diagnostiske fag indgår. 
<br /><br />
Hvis man kan lide designet af Basisbog i Medicin og Kirurgis, samt dens opbygning, vil man også kunne lide denne bog. Den er velskrevet og giver et godt overblik, samt øvelse i pensum for de diagnostiske fag. Bogen har alt i alt meget flotte billeder og illustrationer i høj opløsning, specielt hvad angår det patologiske kapitel. Det skal nævnes, at det i faget Diagnostiske Fag på 6. semester anbefales at bruge bogen Diagnostiske Fag.
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
		$r1 = 5; //layout	
		echo '<!-- --rate-layout:5; -->';
		$r2 = 4; //pedagogy
		echo '<!-- --rate-pedago:4; -->';
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