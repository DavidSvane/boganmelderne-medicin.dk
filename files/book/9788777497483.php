<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Akutte medicinsk tilstande</h1>
	<p class="subtitle">af Morten Laksafoss Lauritsen.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kliniske sygdomsenheder</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:; -->
				<p class="semester"><b>Semesterbrug:</b> 6. og kandidaten</p>
				<p class="forlag"><b>Forlag:</b> FADL's Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 345</p>
				<p class="udgave"><b>Udgave:</b> 11</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9788777498985; -->
				<p class="udgivet"><b>Udgivet:</b> 2014</p>
				<p class="isbn"><b>ISBN:</b> 9788777497483</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777497483.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Akutte medicinske tilstande er en glimrende kittelbog, der formår at koge en rigtig stor mængde fagstof ned til de hårde relevante facts, smuktindbundet i en regnbue. Det farverige omslag der oprindeligt var tiltænkt Woodstock festivalen får næsten en til at glemme, hvor mange sene timer man har brugt på læsesalen, for at lære stoffet i første omgang. Desuden er bogen perfekt at have med i kittellommen som stud.med eller læge.
<br /><br />
Bogen holder målet for øje og snakker sjældent uden om, når den på sine 344 sider beskriver de hyppigste og alvorligste medicinske akuttilstande. Bogen er kortfattet og præcis og indeholder mange informationer på lidt plads. Den er ikke særligt velegnet til førstegangslæsning, da den forventer, man har kendskab til tilstandene i forvejen og opsummerer det vigtigste ved de forskellige tilstande, fremfor at forklare dem grundigt. Den er systematisk og åbner næsten hver beskrivelse med en kort forklaring af den pågældende sygdom, symptom eller tilstand, hvorefter der gennemgås punkter som symptomer, differentialdiagnoser, undersøgelser, behandlinger m.m. Bogen starter med et kapitel rettet mod den nye medicinske forvagt, hvorefter de forskellige sygdomsgrupper forklares i separate kapitler. Derudover er der i slutningen af bogen flere nyttige kapitler med information om fx de administrative forhold man skal have styr på, som nyttige telefonnumre og hjemmesider, normalværdier for laboratorieprøver etc. Den er nem at slå op i og har et virkelig lækkert design som må antages at være sponsoreret af Copenhagen Pride. Desuden har hver side i bogen en lille tegning i øverste yderhjørne som illustrerer inden for hvilket område man befinder sig.
<br /><br />
Bogen udtømmer langt fra sygdommene og vil ikke være tilstrækkelig til studielæsning, men er særdeles velegnet til kittellommen hos den medicinstuderende på kliniske ophold eller til den nyuddannede læge. Den holder sig kort og kontant næsten hele vejen igennem og anvender faktabokse, billeder og grafer til at hjælpe med forståelsen.</p>
	<br />
	
	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	
		<div class="nyudgave">
			<img src="files/book/cover_9788777498985.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu! På omslaget af den nye 12. udgave står der 2. udgave. Dette skyldes ny nummerering af denne bog. </p>
		</div>
	
	
	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 3; //layout	
		echo '<!-- --rate-layout:3; -->';
		$r2 = 3; //pedagogy
		echo '<!-- --rate-pedago:3; -->';
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