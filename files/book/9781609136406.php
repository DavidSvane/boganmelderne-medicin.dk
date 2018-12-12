<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Respiratory physiology – The essentials</h1>
	<p class="subtitle">John B. West.</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Respirationsfysiologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Fysiologi; -->
				<p class="semester"><b>Semesterbrug:</b> 4.</p>
				<p class="forlag"><b>Forlag:</b> Lippincott Williams and Wilkins</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 208</p>
				<p class="udgave"><b>Udgave:</b> 9</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9781496310118; -->
				<p class="udgivet"><b>Udgivet:</b> 2011</p>
				<p class="isbn"><b>ISBN:</b> 9781609136406</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9781609136406.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">John B. Wests ”Respiratory Physiology – The essentials” er en kort og kontant bog. Den er ment som en introduktion til lungefysiologien. Bogen er anbefalet af kursuslederne mhp. intro til lungefysiologi, er oversat til 15 sprog, og dermed lidt af en mini-Bibel inden for sit felt. ”Heroic efforts have been made to keep the book lean, in spite of enormous temptations to fatten it. Occasionally, medical students wonder if the book is too superficial. I disagree.” <br /><br />

Her tager jeg dog studenternes synspunkt – bogen udemærker sig ved at være kort og kontant. Du lærer det vigtigste, og det gentages via teksbokse, illustrationer med videre, så du husker de vigtigste ting. MEN for førstegangsforståelse kan bogen være svær da man konstant må slå forkortelserne, som bogen anvender, op. Derfor anbefales det, at løse de til kapitlerne hørende opgaver.<br /><br />

John B. West’s forelæsninger om lungefysiologi: <a href="http://meded.ucsd.edu/ifp/jwest/">Klik her!</a>
Forelæsningerne følger bogens kapitler, er meget pædagoiske, og kan være en stor hjælp til de svære kapitler. De kan varmt anbefales.<br /><br />


Opbygning
Bogen består af 10 kapitler, et appendix med de basale formler, samt et opslagsværk.
Hvert kapitel indledes med en kort tekst, samt kapitlets hovedemner i punktform. Teksten suppleres af basale kurver og skitser – Basale, men gode nok. En god detalje er, at der opsummeres efter hvert afsnit i kapitlet – altså de vigtigste hovedpunkter, omkring hvad har du lige læst på de sidste 3 sider = God service! Hvert kapitel afsluttes med fremførelse af de koncepter som er vigtigst at forstå og huske samt multiple choice spørgsmål. Igen: Forsøg at løse spørgsmålene – Det er her du lærer noget.<br /><br />

Det er en kort og kontant bog. Fordelen er, at du kan læse det hurtigt og så skal du lave opgaver for at forstå det. MEN Respirationsfysiologi læres især ved at lave opgaver. SÅ læs gerne de svære kapitler flere gange og supplér med opgaver, forelæsninger og andet.
</p>
	<br />

	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	<!--
		<div class="nyudgave">
			<img src=files/book/cover_9781496310118.jpg/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	-->

	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 3; //layout
		echo '<!-- --rate-layout:3; -->';
		$r2 = 3; //pedagogy
		echo '<!-- --rate-pedago:3; -->';
		$r3 = 4; //pensum
		echo '<!-- --rate-pensum:4; -->';

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
