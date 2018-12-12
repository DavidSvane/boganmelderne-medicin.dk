<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Genesers histologi</h1>
	<p class="subtitle">af Finn Geneser, Jørgen Tranum-Jensen, Erik Ilsø Christensen, Klaus Qvortrup,
Anne-arie Brüel.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Celle- og vævsbiologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:; -->
				<p class="semester"><b>Semesterbrug:</b> 2., 3., 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 761</p>
				<p class="udgave"><b>Udgave:</b> 2</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2012</p>
				<p class="isbn"><b>ISBN:</b> 9788762803961</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762803961.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Bogen er pensumdækkende til den basale histologi på andet semester, samt den organspecifikke histologi på tredje, fjerde og femte semester.<br /><br />Bogen er god til førstegangslæsning, da den er pædagogisk og velskrevet. Kapitlerne starter ofte med en kort indledende gennemgang af kapitlets emne. Derefter beskrives emnets undergrupper, f.eks. brusk og knoglevæv indenfor emnet skeletvæv. Kapitlerne har en god struktur med overskrifter, underoverskrifter og brugen af fed skrift. Bogen er dog meget detaljeret og breder sig ofte ud over histologiens grænser og ind i andre fagområder som anatomi, embryologi, immunologi og fysiologi – og ofte noget mere, end hvad der er relevant ift. den histologiske beskrivelse.<br /><br />Grundet den høje detaljeringsgrad, og det at bogen er så omfangsrig ift. øvrige fagområder, kan den være svær at bruge som opsummering før eksamen. Det anbefales i stedet, at du bruger kompendiet i histologi. Den nye udgave af bogen er blevet opdateret med flere og bedre histologiske billeder i fht. den tidligere udgave, samt tegninger og figurerne som er til stor hjælp for forståelsen af stoffet. Bogen er hård at starte med på andet semester, men bliver bedre på senere semestre.<br /><br />Bogen indeholder ingen tabeller, hvilket ellers kunne have været brugbart til at skabe overblik indenfor forskellige emner. Ligeledes er der heller intet resume, der kunne have opsummeret kapitlets væsentlige pointer – som man evt. kan orientere sig efter ved læsningen. I stedet er der opsummeringsspørgsmål til slut i hvert kapitel.<br /><br />Fin og god pensumdækkende bog, som kan benyttes på mange forskellige semestre. Det anbefales at bruge bogen til førstegangslæsning, men at der suppleres med f.eks. ”Histologi kompendium” til eksamenslæsningen grundet den høje detaljegrad.</p>
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
		$r1 = 4; //layout	
		echo '<!-- --rate-layout:4; -->';
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