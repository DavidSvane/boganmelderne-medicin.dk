<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Rang &amp Dale's Pharmacology</h1>
	<p class="subtitle">af H. P. Rang, J. M. Ritter, R. J. Flower, G. Henderson.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Farmakologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Farmakologi; -->
				<p class="semester"><b>Semesterbrug:</b> 5., 6. og kandidaten</p>
				<p class="forlag"><b>Forlag:</b> Elsevier</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 760</p>
				<p class="udgave"><b>Udgave:</b> 8</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2016</p>
				<p class="isbn"><b>ISBN:</b> 9780702053627</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780702053627.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Rang and Dale’s Pharmacology er den nuværende anbefalede lærebog til farmakologikurset på 5. semester. Bogen er som udgangspunkt pensumdækkende, dog skal nogle af emnerne supplereres med forelæsningsslides. 
<br />
Bogen giver et generelt og lettere overfladisk indblik i farmakologien. Hver kapitel er opbygget således, at der indledningsvis er en generel beskrivelse af anatomien og fysiologien, som er relevant for den givne stofgruppe, hvorefter diverse lægemidlers virkningsmekanisme beskrives.
Derudover indeholder bogen kapitler omhandlede farmakodynamik, farmakogenetik og farmakokinetik. 
<br /><br />
Anatomi og fysiologiafsnittene fungerer meget fint, da de giver en genopfriskning af den anatomi, man tidligere har lært på studiet. Samtidig giver det en forståelse af, hvilke lægemiddeltargets der anvendes, samt hvad den ønskede virkning med disse targets er. Dette giver således et godt overblik, inden de enkelte lægemidler gennemgås.
<br /><br />
Lægemidlerne er grupperet overordnet, og de enkelte stoffer gennemgås ikke; stofferne nævnes derimod som eksempler indenfor hver stofgruppe. Dette betyder, at gennemgangen af de enkelte lægemidler er meget kortfattet, og det forklares ikke altid, hvordan anvendelse, årsager og virkninger hænger sammen.
<br /><br />
I kapitlerne er der en del tabeller, der fungerer som oversigter over de forskellige lægemidler indenfor den givne lægemiddelgruppe. Derudover anvendes små bokse med opsummeringer undervejs. Disse giver et rigtigt fint overblik over, hvor de relevante informationer står. 
<br /><br />
Bogen kan til tider virke lidt uoverskuelig, da det kan være svært at finde information om de mange lægemidler, som man skal kunne på dette semester. Det er derfor nødvendigt at anvende eksempelvis pro.medicin for at opnå den tilstrækkelige information.
<br /><br />
Rang and Dale’s Pharmacology er et udmærket valg, hvis man ønsker en kortfattet bog, som ikke indeholder detaljerede forklaringer. Dog anbefales det at anvende farmakort og promedicin.dk som supplering til sin læsning.
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
		$r1 = 3; //layout	
		echo '<!-- --rate-layout:3; -->';
		$r2 = 5; //pedagogy
		echo '<!-- --rate-pedago:5; -->';
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