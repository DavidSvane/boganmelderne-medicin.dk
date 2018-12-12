<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Klinisk ordbog</h1>
	<p class="subtitle">Ikke opgivet</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Ingen og alle</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Andet; -->
				<p class="semester"><b>Semesterbrug:</b> supplerende </p>
				<p class="forlag"><b>Forlag:</b> Munksgaard </p>
				<p class="sprog"><b>Sprog:</b> Dansk </p>
				<p class="sider"><b>Sider:</b> 1289 </p>
				<p class="udgave"><b>Udgave:</b> 16. </p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2011 </p>
				<p class="isbn"><b>ISBN:</b> 9788762809345 </p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762809345.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">  Vil du vide, hvad mange af de medicinske termer betyder? Få en kort opfrisker på hvad xanthelasmata nu egentlig lige er? Så grib <i>Klinisk ordbog</i>.
<br /><br />
Bogen falder helt klart under gruppen supplerende bøger. Den henvender sig til alle fag på kandidaten, men er kun et opslagsværk. Navnet “klinisk” refererer som udgangspunkt ikke til muligheden for at have den fysiske udgave med i kliniklommen. Når du køber bogen, finder du dog en kode, som giver dig et års adgang til den digitale version. Dette er noget mere anvendeligt, da du også kan downloade en app til din telefon (iPhone, Windows og Android).
<br /><br />
Beskrivelserne er konkrete, men kan være 5-6 linjer lange, når det er nødvendigt. Ofte er der også en oversættelse af det individuelle ord. Sygdommen pemfigus kan gøres lettere at huske, når man ved at pemfix betyder blære/vabel. Dog må det siges, at på trods af sine utrolig mange opslagsmuligheder, kan man af og til godt rende ind i enkelte begreber, som ikke er oversat. Som supplerende bog er prisen desuden også temmelig høj og der er ingen illustrationer.
<br /><br />
<i>Der hører også en I-bog med, som findes på Munksgaards hjemmeside</i>.
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
		$r1 = 1; //layout
		echo '<!-- --rate-layout:1; -->';
		$r2 = 1; //pedagogy
		echo '<!-- --rate-pedago:1; -->';
		$r3 = 0; //pensum
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
