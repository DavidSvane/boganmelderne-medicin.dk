<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Oxford Handbook of Clinical Medicine</h1>
	<p class="subtitle">af Murray Longmore, Ian Wilkinson, Edward Davidson, Alexander Foulkes, and Ahmad Mafi.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kliniske sygdomsenheder</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Kittelbog; -->
				<p class="semester"><b>Semesterbrug:</b> 6. semester og kandidaten</p>
				<p class="forlag"><b>Forlag:</b> Oxford University Press</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 784</p>
				<p class="udgave"><b>Udgave:</b> 8</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9780199609628,9780199689903; -->
				<p class="udgivet"><b>Udgivet:</b> 2010</p>
				<p class="isbn"><b>ISBN:</b> 9780199232178</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780199232178.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Som du nok har fundet ud af så findes der altid et alternativ til alle bøger, og kittelbøger er ikke en undtagelse tvært imod. Denne engelske medicinske kittel lommebog er et virkelig godt alternativ til den danske Medicinsk kompendium lommebog (MKL). Nogen vil sige at den er meget bedre end MKL.
<br /><br />
Bogen er virkelige godt opbygget, og giver et hurtigt overblik over symptomer, differential diagnoser og osv. Bogen er skrevet med henblik på at hjælpe den yngre læge, og fungere derfor mere som et værktøj end et opslagsværk.
<br /><br />
Desuden indeholder bogen en glimrende del: "at the bedside", som er en oversigt over forskellige symptomer og hvordan man kan undersøge for disse.
<br /><br />
Bogen har mange flere udgaver og anvendes af mange flere personer end MKL. Den er derfor rigtig god at have med sig i klinikken, hvad end det er Kirurgisk eller medicinsk.
<br /><br />
Bogen er lige så tyk som MKL, men den er billigere. En ulempe ved bogen er at de medicinske dosis og retningslinjer ikke altid stemmer overens med de danske. Det er derfor vigtig at være meget opmærksom på dette når den bruges. Dog kan den perfekt bruges i samarbejde med de forskellige instrukser som nu findes på alle danske hospitaler.</p>
	<br />
	
	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	
		<div class="nyudgave">
			<img src="files/book/cover_9780199689903.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>

	
	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 1; //layout	
		echo '<!-- --rate-layout:1; -->';
		$r2 = 2; //pedagogy
		echo '<!-- --rate-pedago:2; -->';
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