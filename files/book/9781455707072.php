<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Basic Immunology</h1>
	<p class="subtitle">A. Abbas, A. Lichtman, S. Pillai</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Immunologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Immunologi; -->
				<p class="semester"><b>Semesterbrug:</b> 5.</p>
				<p class="forlag"><b>Forlag:</b> Elsevier</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 335</p>
				<p class="udgave"><b>Udgave:</b> 5</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2016</p>
				<p class="isbn"><b>ISBN:</b> 9781455707072</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9781455707072.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Basic Immunology kan anvendes på femte semester til faget Immunologi, som er et komplekst og meget detaljepræget fag. Denne detaljerighed afspejles i bogen på en god og overskuelig måde.<br /><br />

Med fagets kompleksitet taget i betragtning er sproget letlæseligt. Kapitlerne er overskueligt opbygget med mange underafsnit og afsluttes med et resumé opstillet i punktform. Endvidere findes, i slutningen af hvert kapitel, ”review questions”, hvilket giver mulighed for at teste, om man har forstået det læste. <br /><br />

Bogen indeholder mange gode figurer, som overskueligt opsummerer tekstens indhold. Figurerne er gode til udenadslære; dels fordi de ofte bruges i undervisningen, og dels fordi eksamensspørgsmålene ofte tager udgangspunkt i figurerne. Bogen indeholder desuden mange tabeller, som enten opremser ekstra viden eller giver læseren et overblik over et emne. Bogen er dermed, med sine gode illustrationer og tabeller, meget velegnet til eksamenslæsningen.<br /><br />

Basic Immunology er fuldt pensumdækkende hvilket vil sige, at alt i bogen er pensum. Bogen gentager ofte sig selv ift. immunologiens grundpensum, mens specifikke detaljer inden for et emne ofte kun nævnes en enkelt gang. Dette betyder, at man enten skal være meget omhyggelig i sin læsning eller skal læse bogen flere gange. Derudover refereres ofte til andre steder i bogen, hvorfor den fulde forståelse for et emne måske kræver at springe frem og tilbage i bogen under læsningen. <br />
Ud over bogen, skal også kunne gøres rede for børnevaccinationsprogrammet. Dette kan læses på: LINK <br /><br />

Ved køb af Basic Immunology får man adgang til en online version af bogen, forklarende videoer til de centrale emner samt svar på de tidligere omtalte ”review questions”; svar, man ikke kan finde andre steder. Ønskes at bruge tidligere udgaver af bogen er dette fint muligt. Man skal dog være opmærksom på, at nogle af billederne er opdaterede, og der beskrives flere molekyler i den nyeste udgave. <br /><br />

Basic Immunology er en udmærket bog til faget immunologi. Bogen er god til både førstegangslæsning og eksamenslæsning grundet de ovennævnte kvaliteter i form af tabeller og gode illustrationer. Man bør være opmærksom på, at kapitel et og to kan være svære ved første gennemlæsning, da man ikke har en forforståelse for immunologien, og fordi der henvises meget til senere kapitler. </p>
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
		$r2 = 4; //pedagogy
		echo '<!-- --rate-pedago:4; -->';
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
