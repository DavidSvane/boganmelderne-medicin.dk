<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Lungesygdomme - i klinisk praksis</h1>
	<p class="subtitle">af Nina Skavian Godtfredsen, Annette Nørgaard.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Lungemedicin</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Lunge; -->
				<p class="semester"><b>Semesterbrug:</b> 6. og kandidaten</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 350</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2016</p>
				<p class="isbn"><b>ISBN:</b> 9788762814608</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762814608.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Lungesygdomme – i klinisk praksis er en ny bog i en serie af specialespecifikke kliniske bøger rettet mod yngre læger i klinikken samt særligt interesserede studerende og fagpersoner.
<br /><br />
Som titlen angiver, har bogen fokus på de kliniske aspekter frem for de teoretiske, hvilket betyder, at bogen ikke er specielt velegnet til at lære lungefysiologi eller teorien bag de forskellige lungesygdomme, som man skal kunne til eksamen og må også anses som en supplerende bog for en medicinstuderende.
<br /><br />
Som bog med fokus på klinikken giver den dog en god introduktion, der ikke altid antager forudgående kendskab til specialet. Der bliver således kort gennemgået både anatomi og fysiologi til lungerne samt forklaring af og baggrund for de hyppigste symptomer så terminologien er på plads og kan anvendes korrekt i klinikken.<br />
Bogen gennemgår desuden de mest almindelige lungeundersøgelser herunder objektiv undersøgelse, billeddiagnostik, samt diverse invasive og non-invasive tests, der kan udføres på hospitalet. Til hver undersøgelse forklares der kort teori, indikation samt grundlag for undersøgelsen samt tolkning af resultaterne, der giver et fint fundament for at kunne vælge den rette undersøgelse til den rette patient og analysere resultaterne. Herefter gennemgår bogen de hyppigste lungesygdomme med et klinisk fokus, hvor der hyppigt anvendes figurer, tabeller samt testresultater der forklares og fortolkes i forhold til den pågældende sygdom der gennemgås, hvilket giver en god kobling til klinikken.
<br /><br />
Bogen er letlæselig og har mange gode illustrationer, tabeller, billeder og grafer undervejs, hvilket fungerer rigtig godt både for variationens skyld samt forståelsen.
<br /><br />
Bogen er som sagt mere rettet mod klinisk forståelse og anvendelse end til eksamenslæsningen, men hvis du har en særlig interesse inden for lungemedicinen eller skal stifte kendskab med den kliniske hverdag på en lungemedicinsk afdeling, giver denne bog et godt fundament for at kunne håndtere de hyppigste problemstillinger, som du vil møde.
<br /><br />
Ved køb af bogen medfølger en I-bog, der findes på Munksgaards hjemmeside.
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
		$r2 = 5; //pedagogy
		echo '<!-- --rate-pedago:5; -->';
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