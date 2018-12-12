<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Principles of Pharmacology</h1>
	<p class="subtitle">David E. Golan, Armen H. Tashjian, Ehrin J. Armstrong, April Wang Armstrong</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Farmakologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Farmakologi; -->
				<p class="semester"><b>Semesterbrug:</b> Supplerende </p>
				<p class="forlag"><b>Forlag:</b> Lippincott Williams and Wilkins</p>
				<p class="sprog"><b>Sprog:</b> Engelsk </p>
				<p class="sider"><b>Sider:</b> 1008</p>
				<p class="udgave"><b>Udgave:</b> 3</p> <!-- A	lle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2011</p>
				<p class="isbn"><b>ISBN:</b> 9781451118056</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9781451118056.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Principles of Pharmacology (herefter benævnt Golan efter forfatteren) benyttes på femte semester i basal farmakologi og på resten af studiet. Den er skrevet i samspil mellem undervisere og medicinstuderende, hvilket mærkes i det pædagogiske sprog med en samtidig relativt høj detaljeringsgrad.<br /><br />

De indledende kapitler i Golan er basal farmakologi. De er velskrevne, pædagogiske og godt strukturerede. I starten af kapitlerne præsenteres en klinisk case som senere i kapitlet kobles til teorien på en rigtig fin måde. Detaljeringsgraden er høj, men det opvejes ved nogle rigtig gode tabeller, som opsummerer de vigtigste pointer, som f.eks. faktorer med betydning for farmakas halveringstid i plasma. Illustrationerne er en smule pænere end i Basal og klinisk farmakologi, og vigtige begreber og definitioner er enten skrevet i kursiv eller markeret med fed, hvilket alt andet lige er bekvemt.<br /><br />

Kapitlerne, der følger efter den basale farmakologi, er meget detaljerede. Det anbefales, at man læser afsnittene kursorisk og fokuserer på de begreber, som er markeret i kursiv og fed, mens man også lægger vægt på illustrationerne og tabellerne. Det kan ikke anbefales at læse kapitlerne fra A-Z, medmindre man savner forklaring på et spørgsmål eller har en speciel interesse inden for emnet. Kapitlerne afsluttes med et "Drug Summary Table", der summerer den vigtigste viden om de lægemidler, der er blevet gennemgået. Golan er mindre formeltung og ikke særlig overskuelig, idet detaljeringsgraden er en god mængde højere end i den danske lærebog. Dette opvejes af gode tabeller og gode illustrationer med billedtekst, der næsten gør tekstafsnittene overflødige. FADLs Kompendium i farmakologi kan ikke erstatte en bog som Golan, da kompendiet simpelthen mangler nogle farmaka m.m.<br /><br />

Golan er en velstruktureret og uddybende lærebog i farmakologi. Den egner sig fint til førstegangslæsning og kan også benyttes under eksamen pga. de gode tabeller, illustrationer og pga. "Drug Summary Tables" i slutningen af kapitlerne. Det anbefales dog at man også bruger farmakortene, beskrevet under femte semesterbeskrivelse.<br /><br />

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
		$r1 = 5; //layout
		echo '<!-- --rate-layout:5; -->';
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
