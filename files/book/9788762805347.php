<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Hovedets, halsens &amp; de indre organers anatomi</h1>
	<p class="subtitle">af Jørgen Rostgaard</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> </p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Anatomi; -->
				<p class="semester"><b>Semesterbrug:</b> 3., 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 448</p>
				<p class="udgave"><b>Udgave:</b> 10</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2006</p>
				<p class="isbn"><b>ISBN:</b> 9788762805347</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762805347.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Denne bog benyttes på mange semestre, og er den pensumdækkende bog inden for hoved-hals anatomi og de indre organer.<br /><br />Designet på bogen er flot, og så er bogen desuden i hardback. Den har en praktisk størrelse som gør den nem at have med rundt.<br /><br />Kapitlerne er opdelt således at den første del omhandler hovedets og halsens anatomi, som man benytter på tredje semester. Den sidste del omhandler de indre organer, som man har på fjerde og femte semester. Den beskrevne embryologi i bogen dækker ikke pensumet for tredje semester, men gør det til gengæld på fjerde og femte.<br /><br />Bogen beskriver anatomien på en struktureret måde. For det meste starter den med at beskrive de superficielle (overfladiske) strukturer og går herefter i dybden. Den har udmærkede billeder passende til teksten - ellers angiver den siden hvor billedet er placeret. Mange af billederne kunne dog godt mangle noget beskrivende billedtekst, eftersom det kan være svært at se, hvor billedet er skåret.<br /><br />Afsnittene er velafgrænsede fra hinanden med tydelige overskrifter, som gør den nem at slå op i. Bogen prøver så vidt muligt at beskrive hvert lag for sig. Kar og nerver beskrives for sig selv til sidst i hvert afsnit.<br /><br />Bogen har desuden farvede bokse som hhv. beskriver embryologien eller klinikken bag den beskrevne struktur eller område. Bogen mangler flere tabeller som kunne give et overblik.<br /><br />Bogen er brugbar på flere semestre. Pensum behandles på en struktureret måde, med en god mængde faktabokse som giver et fint afbræk i teksten. Billederne er pæne og store, således at man kan orientere sig, mens man læser.</p>
	<br />
	
	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	
		<div class="nyudgave">
			<img src="files/book/cover_9788762815599.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	
	
	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 4; //layout	
		echo '<!-- --rate-layout:4; -->';
		$r2 = 1; //pedagogy
		echo '<!-- --rate-pedago:1; -->';
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