<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Davidsons Principles and Practice of Medicine</h1>
	<p class="subtitle">af Brian R. Walker, Nicki R. Colledge, Stuart H. Ralston, Ian D. Penman</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kliniske sygdomsenheder</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:; -->
				<p class="semester"><b>Semesterbrug:</b> 6. og kandidaten</p>
				<p class="forlag"><b>Forlag:</b> Elsevier</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 1392</p>
				<p class="udgave"><b>Udgave:</b> 22</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2014</p>
				<p class="isbn"><b>ISBN:</b> 9780702050350</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780702050350.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Davidson’s er en velskrevet anerkendt, engelsk og højt agtet intern medicinsk lærebog som nu findes i  dens 22. udgave hvilket medfører, at den har en fejlrate nær nul og gode illustrationer og tabeller til overblik.
<br /><br />
Davidson’s beskriver samtlige af de intern medicinske specialer og har endvidere en introduktion til det lægefaglige arbejde. Detaljegraden i Davidson’s ligger langt over Basisbogen, lidt over Fadl’s Medicin, men under Medicinsk Kompendium. Bogen er fra England, og sproget er derfor også mindre vævende og mere klart og kontant end i de amerikanske lærebøger. 
<br /><br />
Bogen inddeles efter de interne medicinske specialer. Hvert kapitel indledes af baggrundsviden (f.eks. anatomi, fysiologi og biokemi). Herefter beskrives “nøglesymptomer”, samt om diagnostiske muligheder i forhold til billeddiagnostik og biokemi. Så kommer beskrivelser af de pågældende sygdomme inden for specialet. Beskrivelsen af sygdommene er inddelt på den gængse måde med en kort introduktion, patologi, patofysiologi, symptomer, objektive fund, diagnostik og behandling. 
<br /><br />
Sammenlignet med FADL's Medicin koster Davidson’s det halve og leverer det dobbelte i mængden af viden. Bogen er pædagogisk, men er skrevet på engelsk. Desuden er behandlingen bygget op efter de engelske retningslinjer, som du bør være opmærksom på kan afvige fra dansk klinik. Davidson’s giver dig en dybere og mere fyldestgørende viden om sygdomme modsat f.eks. Basisbogen og Fadl’s Medicin. Den høje detaljegrad kan for nogle læsere være på bekostning af den basale viden og overblikket. Tilhængere af Davidson’s vil nok hævde, at Fadl’s Medicin er mindre overskuelig og lettere mangelfuld i nogle emner, som f.eks. hæmatologi og nefrologi. 
<br /><br />
Davidson’s er fuldt pensumdækkende og kræver ikke supplering andet end, hvis man vil tjekke om den afviger fra dansk klinisk praksis. Dog kan man med fordel overveje Intern Medicin - Et systematisk noteapparat til repetition/eksamenslæsning, da noteapparatet til dels er skrevet ud fra Davidson’s, men mere kortfattet opridser de centrale aspekter af den interne medicin.
<br /><br />
Davidson’s er et fyldestgørende, gennemarbejdet og velillustreret værk i intern medicin, som kan bruges gennem hele kandidatdelen af medicin. Om man har mest gavn af at læse Davidson’s frem for basisbogen eller Fadl’s Medicin er dels en smagssag i forhold til hvilken struktur af stoffet man foretrækker, samt om man foretrækker stor detalje, hvor man kan “pille ud” eller mindre detalje, hvor man må supplere. 
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
		$r2 = 6; //pedagogy
		echo '<!-- --rate-pedago:6; -->';
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