<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Subjektivt og Objektivt</h1>
	<p class="subtitle">af Søren Brostrøm og Niels Saxtrup.</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b>Kliniske kurser </p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Kittelbog; -->
				<p class="semester"><b>Semesterbrug:</b> Kandidaten </p>
				<p class="forlag"><b>Forlag:</b> Munksgaard </p>
				<p class="sprog"><b>Sprog:</b>Dansk </p>
				<p class="sider"><b>Sider:</b> 214</p>
				<p class="udgave"><b>Udgave:</b> 3</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2011</p>
				<p class="isbn"><b>ISBN:</b> 9788762810129</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762810129.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description"> Subjektivt & objektivt er en supplerende bog, der primært kan bruges af syvende semesters studerende, hvor man første gang for alvor stifter bekendtskab med klinikken.
"<br />""<br />"
Bogen gennemgår især koncepterne anamnese, undersøgelser og journalskrivning, der alle er essentielle dele af syvende semester, ens fremtidige kliniske ophold og senere virke som læge.
"<br />""<br />"
Bogen fungerer godt for den studerende, der gerne vil være godt forberedt og have så meget som muligt ud af sit første kliniske ophold.
De fleste emner der beskrives i bogen vil man stifte bekendtskab med i løbet af syvende semester og den viden kan tilegnes uden bogen gennem erfaring. Bogen vil dog uden tvivl være en rigtig god forberedelse til semesteret, hvilket kan betyde, at den studerende hurtigere vil få lov til at have meget patientkontakt og selv kan skrive udkast til journaler, som er de ting, de fleste finder spændende på syvende semester.
"<br />""<br />"
Bogen gennemgår både læge-patient forholdet, journalopbygning/ journalskrivning og kommunikation med patienter, men har også kapitler for organsystemerne, hvor der forklares og illustreres hvad man skal være opmærksom på både angående spørgsmål og objektiv undersøgelse samt eventuelle parakliniske undersøgelser hos de forskellige patienter.
"<br />""<br />"
Bogen har et godt kittelformat og kan være rar at have med første gang, man er i klinikken, så man kan danne sig et overblik og blive mindet om de vigtigste ting, inden man skal ind til en patient.
Bogen har mange illustrationer, samt tekstbokse, der fremhæver de vigtigste punkter til det pågældende emne. Det er med til at hjælpe med indlæringen samt at huske det essentielle.
Bogen er god til førstegangslæsning og kan primært anbefales til studerende, der skal på syvende semester. Man skal ikke være bange for ikke kan kunne følge med i bogen, da den er pædagogisk og forklarer tingene meget basalt, hvor alle kan være med.
"<br />""<br />"
Se også boganmeldelsen af Klinikbogen som er alternativ til denne på syvende semester. Det kan anbefales at bladre lidt i begge bøger i Bogladen for at finde frem til hvilken af de to boger, som vil passe bedst til dig.
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
		$r2 = 6; //pedagogy
		echo '<!-- --rate-pedago:6; -->';
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
