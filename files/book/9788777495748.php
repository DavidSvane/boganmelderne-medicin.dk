<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Medicinsk Genetik</h1>
	<p class="subtitle">af Søren Nørby, Peter K. A. Jensen, Lawrence Impey.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Medicinsk genetik</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:; -->
				<p class="semester"><b>Semesterbrug:</b> 2.</p>
				<p class="forlag"><b>Forlag:</b> FADL's Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 423</p>
				<p class="udgave"><b>Udgave:</b> 2</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2012</p>
				<p class="isbn"><b>ISBN:</b> 9788777495748</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777495748.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Medicinsk Genetik er en af de genetikbøger, der er pensumdækkende til faget genetik på 2. semester.
<br /><br />
Bogen er velstruktureret, hvilket gør den velegnet til førstegangslæsning. Strukturen er ikke ideel ved eksamenslæsningen, idet der ikke opsummeres løbende i kapitlerne, og fordi teksten ikke underinddeles tilstrækkeligt, så man mister overblikket. Sproget i bogen er let at gå til, og er hverken for tungt eller for overfladisk. Bogens niveau er passende ift. den medicinstuderende.
<br /><br />
Sammenlignet med Medical Genetics er forklaringerne i Medicinsk Genetik lidt uspecifikke. Til gengæld indeholder Medicinsk Genetik en præcis ordliste bagerst. Denne er meget brugbar inden eksamensperioden, hvilket opvejer for den førnævnte problematik.
<br /><br />
Der er faktabokse i løbet af kapitlerne. Boksene bruges mest til at uddybe begreber nævnt i teksten, introducere nye begreber eller metoder. Det er korte og præcise forklaringer. Der forekommer også faktabokse med kliniske cases, som beskriver forskellige genetiske udredninger af sygdomme. Desværre er dette for overfladisk og udetaljeret, hvilket er ærgerligt, da det kunne have øget forståelsen af vigtige genetiske sygdomme i forhold til genotype vs. fænotype.
<br /><br />
Medicinsk Genetik opsummerer ikke til sidst i kapitlerne, samt i løbet af kapitlet (i form af faktabokse) i høj nok grad, til at bogen er brugbar til en hurtig gennemlæsning. Derfor anbefales det ikke at bruge bogen selvstændigt til eksamenslæsningen. Supplér med noter o.a.
<br /><br />
Forklaringerne kan nogle gange være lidt for overfladiske. Ligeledes mangler bogen et selvstændigt kapitel for sex-linket arvegang, der ellers er relevant. Det bliver forvirrende for læseren præcist at gennemskue, hvor bogen gennemgår det. Man kan her blive nødt til at supplere med ”Medical Genetics”. Alt i alt er bogen velegnet i løbet af semestret, men i eksamensperioden kan man med fordel supplere med Medical Genetics.</p>
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