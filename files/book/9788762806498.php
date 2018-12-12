<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Praktisk procedure- og diagnoseguide</h1>
	<p class="subtitle">Finn Johannsen, Mikkel Bøgeskov og Amandus Gustafsson.</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kliniske kurser</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Kittelbog; -->
				<p class="semester"><b>Semesterbrug:</b> Kandidaten </p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 346</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2009</p>
				<p class="isbn"><b>ISBN:</b>9788762806498 </p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762806498.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Hvordan er det nu liiiiige man lægger et venflon? Hvad er det nu liiiige de vigtigste differentialdiagnoser hos patienten med nyopstået feber? Hvordan er det nu liiiiige man opbygger en epikrise?
"<br />""<br />"
Praktisk procedure- og diagnoseguide besvarer alle disse spørgsmål og bevarer samtidig en størrelse, så du kan slæbe den rundt i din kittellomme. Bogen dækker ikke noget specifikt fag og må derfor stå i hjørnet med de andre supplerende bøger. Når det er sagt, er den en af de bedste af slagsen. Hvis der er én ting, der gælder for Praktisk procedure- og diagnoseguide, så er det at den er kort og konkret. Det er som om at forfatterne har brugt lige så lang tid på at fjerne ting, som de brugte på at skrive - og det er en rigtig god ting! Utrolig mange emner dækkes i overraskende dyb detalje. Begyndelsen af bogen gennemgår hvordan man agerer på en afdeling, benytter diktafon ordentligt, alle punkterne og formuleringerne ved optag af anamnese samt udførelse af objektiv undersøgelse. Overraskende er disse 20 sider stort set lige så informative som 200 sider er i Subjektiv Objektiv. Vælger man dog at anvende Praktisk procedure- og diagnoseguide på syvende semester, vil man nok føle at der mangler lidt uddybning.
"<br />""<br />"
Herefter fokuserer bogen på de mange praktiske procedurer, man som studerende og yngre læge skal begynde at stifte bekendtskab med. Disse er præsenteret som en punktliste, som man skal følge og, i nogle tilfælde, en illustration. Det er dog stadig en lommebog, så mængden af illustrationer kunne være bedre. Tredje afsnit omhandler differentialdiagnosticering af patienten med overordnede problemstillinger såsom åndenød eller mavesmerter. Det kan være meget lærerigt at læse dette afsnit selvom man ikke aktuelt har behov for det i den givne kliniske situation. Sidste kapitel gennemgår diverse procedurer i skadestuen. Fra knæpunktur til ventrikelaspiration.
"<br />""<br />"
Som sagt er bogen MEGET kortfattet. Den forventer at hvis du ikke allerede har nogen viden på området, så kommer du nok til at slå nogle begreber og medikamenter op. Når du til gengæld har styr på disse faktorer, kan du virkelig få struktureret den viden, som du har erhvervet fra de tykke bøger. Afsnittet om de praktiske procedurer er rigtig godt til forberedelsen til OSCE eksamen på niende semester.
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
		$r1 = 2; //layout
		echo '<!-- --rate-layout:2; -->';
		$r2 = 1; //pedagogy
		echo '<!-- --rate-pedago:1; -->';
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
