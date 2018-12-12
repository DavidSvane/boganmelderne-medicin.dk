<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Kirurgi</h1>
	<p class="subtitle">Arne Borgwardt, Michael Borre, Jens Jørgen Elberg, Vibeke E. Hjortdal, Leif Panduro Jensen, Keld Lauritsen, Jens Christian H. Sørensen, Jacob Steinmetz</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kliniske sygdomsenheder</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:;Gaskir,Karkir,Ortkir,Plastik -->
				<p class="semester"><b>Semesterbrug:</b> 6. sem. BA og kandidaten</p>
				<p class="forlag"><b>Forlag:</b> FADLs Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b>1290 </p>
				<p class="udgave"><b>Udgave:</b> 2.</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2016</p>
				<p class="isbn"><b>ISBN:</b> 9788777497261</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777497261.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Kirurgi er nu kommet i en ny 2. udgave fra FADLs Forlag.
 <br /><br />
Kirurgi er en detaljeret lærebog inden for de kirurgiske specialer, som ellers før kun blev dækket af Kirurgisk kompendium, der nu er forældet. Kirurgi har et meget flot design, er i hardback og ser sprød ud på hylden. Specielt ved siden af Medicin-bogen. Før i tiden havde man to bøger at vælge imellem - Basisbogen og Kirurgisk lommekompendium - men nu har FADLs Forlag M- og K-bøgerne (henholdsvis Medicin- og Kirurgibøgerne) på gaden.
 <br /><br />
Bogens indhold er overskueligt og velopbygget. Overskrifterne er store og i farver, og så er afsnittene sat op, så indholdet er behageligt at læse med en konsistent opbygning bogen igennem. Hvert kapitel har to hele sider, hvor specialet er kort forklaret. Derudover har hvert kapitel en indholdsfortegnelse.
 <br /><br />
Strukturen resulterer i, at bogen er nem at finde rundt i og slå op i. Teksten er for det meste skrevet ud i et, hvilket til tider gør, at man skal lede længe efter teksten for at finde det man søger. Det er dog kun til mindre irritation og ødelægger ikke helhedsoplevelsen. Kirurgis billeder og illustrationer er i farver og i god kvalitet. Der forekommer sjældent hele sider kun med tekst hvilket gør læseoplevelsen mindre monoton. De forskellige kirurgiske indgreb og procedurer er beskrevet fyldestgørende med flere dertilhørende billeder. Kirurgi er i forhold til Basisbogen mere uddybende, mens Basisbogen giver et mere konkret og hurtigt overblik.
 <br /><br />
Som en meget (!) tiltrængt tilføjelse kan man nu finde differentialdiagnoser på de forskellige sygdomsenheder i 2. udgave. Af denne simple årsag anbefaler vi at anskaffe sig den nye 2. udgave. Hvis man dog føler at man kan leve uden differentialdiagnoserne ved hånden er en 1. udgave også helt anvendelig.
 <br /><br />
Alt i alt en yderst brugbar bog, som henvender sig til de studerende, der ønsker en detaljeret forklaring af de kirurgiske sygdomme.
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
		$r1 = 4; //layout
		echo '<!-- --rate-layout:4; -->';
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
