<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Medical Genetics</h1>
	<p class="subtitle">af Lynn B. Jorde, John C. Carey, Michael J. Bamshad.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Medicinsk genetik</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:; -->
				<p class="semester"><b>Semesterbrug:</b> 2.</p>
				<p class="forlag"><b>Forlag:</b> Elsevier</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 256</p>
				<p class="udgave"><b>Udgave:</b> 5</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2016</p>
				<p class="isbn"><b>ISBN:</b> 9780323188357</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780323188357.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Medical Genetics er fuldt ud pensumdækkende til kurset i genetik på 2. semester, og dækker samtlige emner, der gennemgås i undervisningen.
<br /><br />
Medical Genetics er god til førstegangslæsning; dels fordi den sprogligt og pædagogisk er til at gå til, men også fordi kapitlerne er overskueligt opdelt i underemner.
<br />
Bogen er endvidere egnet til eksamenslæsningen, da hvert afsnit afsluttes med et lille resume. Disse resumeer opsummerer de vigtigste omtalte begreber, dog på en ikke altid fyldestgørende måde. 
<br /><br />
Til gengæld forekommer der ikke noget egentligt resume til sidst i kapitlerne. I stedet findes spørgsmål til det læste, og man kan derved dels se, om man har forstået det læste, og dels få testet, om man kan løse praktiske spørgsmål. Svarene på spørgsmålene findes bagerst i bogen. Bogen indeholder til slut en ”ordbog”, hvori man kan finde præcise forklaringer på de vigtigste genetiske begreber, samt udvalgte cellebiologiske begreber.
<br /><br />
Sproget i bogen er nemt at læse og derfor let at gå til. Der er til tider lidt overflødigt historisk stof om genetikken, men det er generelt let at skelne relevant indhold fra det mindre relevante. Bogen indeholder mange faktabokse, der giver et klinisk perspektiv på de forskellige genetiske sygdomme samt et overblik over hvilke teknikker man bruger under genetisk udredning. Nogle faktabokse er over pensum, og kan springes over, hvis læseren synes det er for detaljeret. Derudover findes tabeller og illustrationer, der er med til at gøre teksten lettere forståelig. 
<br /><br />
Med bogen følger adgang til onlinematerialer, hvor du bl.a. finder en E-bogs version af bogen. Derudover findes multiple choice-spørgsmål i onlineudgaven til de enkelte kapitler, så man kan teste sig selv under læsningen og op til eksamen.
<br /><br />
5. udgave af Medical Genetics har primært udviklet sig på layout-fronten i forhold til 4. udgave. For eksempel er alle skemaer og tabeller i farvede bokse og overskrifter og underoverskrifter har fået forskellige farver. Man får således er mere overskueligt indtryk af den nye udgave. Fagligt er der ret minimal forskel på de to udgaver.
<br /><br />
Medical Genetics er som skrevet fuldt ud pensumdækkende. På pædagogisk vis – tekst- såvel som illustrationsmæssigt – føres man sikkert gennem genetikkens verden. 
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
		$r1 = 6; //layout	
		echo '<!-- --rate-layout:6; -->';
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