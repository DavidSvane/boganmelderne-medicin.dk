<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Neuroscience</h1>
	<p class="subtitle">
Augustine
Hall
White
FITZPATRICK
PURVES
LAMANTIA</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Neurofysiologi </p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Fysiologi; -->
				<p class="semester"><b>Semesterbrug:</b> 3.</p>
				<p class="forlag"><b>Forlag:</b> Sinauer Associates Inc.,u.S.</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> -</p>
				<p class="udgave"><b>Udgave:</b> 5</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2012</p>
				<p class="isbn"><b>ISBN:</b> 9780878939671</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780878939671.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Neuroscience er et relativt nyt skud på stammen indenfor neurobøgerne. Den minder utrolig meget om en anden bog, som har været anvendt på studiet siden 2006 – nemlig Neuroscience (med undertitlen Exploring the Brain).<br /><br />

I en vurdering af denne bog, er det umuligt ikke at lave sammenligninger med den anden Neurosciencebog (som for overskuelighedens skyld kaldes Exploring the Brain). De to bøger minder nemlig virkelig meget om hinanden. De er begge præget af at været amerikanske lærebøger. Dvs. at de indeholder illustrationer, som både er informative, men også flotte og farverige. Når man læser lidt uhåndgribelige emner, som neuroscience godt kan være, er det rart at teksten derfor er understøttet af disse billeder. Der er desuden mange af dem, hvorfor du sjældent finder hele sider, som kun består af tekst. På det sidste punkt er den nye Neuroscience lidt bedre end Exploring the Brain.
Indholdsmæssigt er bøgerne så tæt på at være ens, som det nu er muligt. De samme processer beskrives.<br />

Den eneste forskel er derfor rækkefølgen, som emnerne præsenteres i. Umiddelbart mener vi, at rækkefølgen i Neuroscience er mere intuitiv end i Exploring the Brain, men da man som studerende sjældent læser alle kapitlerne fra ende til anden, har dette lille praktisk betydning. Begge bøger indeholder desuden faktabokse med interessant information om sygdomme, der er relateret til det pågældende emne.<br />

Sidst i begge bøger findes der desuden forklarende ordliste, som læseren kan slå op i for at få forklaret begreber. Ligeledes har begge bøger en kode, der giver adgang til en række e-learning faciliteter. Som læser kan du nok forstå, hvorfor det er svært at anbefale den ene bog frem for den anden. Deres indhold og detaljeniveau er næsten ens. Dog må der gives point til Neuroscience fordi den simpelthen bare er nyere og derfor indeholder nyligt opdateret materiale. Ultimativt gør dette dog kun en lille forskel for den studerende. Vælg den bog, du synes har de pæneste illustrationer.<br />

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
