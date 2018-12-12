<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Mark's Basic Medical Biochemistry</h1>
	<p class="subtitle">af Alisa Peet.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hjerte, kredsløb, lunger &amp; Mave, tarm og lever</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Biokemi; -->
				<p class="semester"><b>Semesterbrug:</b> 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> Lippincott Williams and Wilkins</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 1024</p>
				<p class="udgave"><b>Udgave:</b> 4</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2012</p>
				<p class="isbn"><b>ISBN:</b> 9781451100037</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9781451100037.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Mark’s Basic Medical Biochemistry – A Clinical Approach har anlagt et patientorienteret fokus på biokemien – hermed menes at den forsøger at gøre biokemien så relevant for lægeerhvervet som muligt. Bogen svarer meget til McMurry i sin pædagogik. Den er dog væsentligt bedre end McMurry, idet den sætter en ære i at relatere biokemien til lægelig praksis, og så vidt muligt inddrager fysiologi. Detaljeringsgraden er høj som i så mange andre engelske lærebøger, men denne bog udmærker sig ved de mange små pædagogiske værktøjer som ikonet ”stetoskopet”, hvilket er små kliniske noter. De gør stoffet mere relevant for læseren og sætter komplekse genetisk nedarvede proteindefekter i relation til patienter, man kan møde i klinikken.<br /><br />Hvert kapitel indledes med et resumé/overblik på 1 side over emnet. Dette er langt mere brugbart end de lange historier, som man tit ser i starten af engelske lærebøger, hvor man forsøger at perspektivere emnet – Overblikket her er faktisk brugbart. Kapitlerne indeholder nogle pædagogiske værktøjer: ”The Waiting Room” – Et tænkt eksempel på hvilke patienter, der kunne sidde i venteværelset med lidelser, som relaterer til kapitlets emne. Fx sidder der 4 patienter i venteværelset i kapitlet om proteiner, som fejler forskellige genetisk nedarvede sygdomme, som medfører forskellige protein og enzym lidelser. ”Stetoskop” – Kliniske notater der forklarer begreber du møder i klinikken, fx angina pectoris, perspektiverer indholdet til forskellige sygdomme patienterne kan fejle eller relaterer til patienterne i ”waiting room afsnittet”. De hjælper til at gøre teorien klinisk relevant og med patienterne fra venteværelset i baghovedet gør de kapitlerne lidt mere spændende. ”Questions” + ”Answers” – Spørgsmål stilles til læseren, mens svaret gives på den følgende side. For nogle er dette en god måde at lære på.<br /><br />I forhold til KU pensum for biokemi kurset skyder denne bog lidt for højt. Den er pædagogisk, velillustreret, velskrevet og gør alt for at relatere biokemien til klinikken. Den er dog ikke lige så kort og kontant som Borups Biokemi, ej heller på dansk og en smule for detaljeret. Hvis man synes Borups Biokemi er for basal er denne et godt alternativ helt på højde med Meisenberg.</p>
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
		$r3 = 6; //pensum
		echo '<!-- --rate-pensum:6; -->';
		
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