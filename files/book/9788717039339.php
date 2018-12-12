<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Medicinsk Kompendium Bind 1 og 2</h1>
	<p class="subtitle">af Stig Haunsø og Hendrik Vilstrup.</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kliniske sygdomsenheder</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Endo,Immunologi,Infektion,Kardiologi,Lunge,Mikrobiologi,Neuro,Nefrologi,Onkologi,Reumatologi,urologi; -->
				<p class="semester"><b>Semesterbrug:</b> 6. semester BA og kandidaten</p>
				<p class="forlag"><b>Forlag:</b> Nyt Nordisk Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 2958</p>
				<p class="udgave"><b>Udgave:</b> 17</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9788717042391; -->
				<p class="udgivet"><b>Udgivet:</b> 2009</p>
				<p class="isbn"><b>ISBN:</b> 9788717039339</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788717039339.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">
Medicinsk Kompendium er opdelt i to bind og er guldstandarden indenfor de kliniske bøger. Hvis du skal have alt med, skal du ikke kigge længere end dette værk. Før i tiden var Medicinsk Kompendium “The Book” både for medicinstuderende og læger. I dag er der kommet alternativer for de studerende på både dansk og engelsk. Bogen ligger i den dyre kategori, og må også ses som en investering til fremtidig gavn i lægeerhvervet.
<br /><br />
Når du vurderer Medicinsk Kompendium, er det vigtigt at huske, at de to bøger ikke blot er lærebøger – de er deciderede opslagsværker. At læse hele Medicinsk Kompendium og faktisk huske, hvad der står i den, er en prøvelse for selv dem med den bedste hukommelse. Som førstegangslæsning bliver man overvældet med detaljer, som på det givne tidspunkt kan virke irrelevante eller overflødige. Det er også ofte tilfældet, at detaljedybden er større, end hvad der forventes til eksamen. Bogen har en del illustrationen, men størstedelen af dens viden skal dog stadig erhverves enehændigt fra de flere tusind siders tekst. Detaljegraden kan for nogle studerende virke overvældende, hvilket skyldes, at værket er skrevet, så færdiguddannede læger kan slå op i det og få et overblik over diverse sygdomme og behandlingsprocedurer. Har man derimod anvendt Basisbogen eller Medicin, kan Medicinsk Kompendium være en god eksamenslæsningmulighed for den inkvisitive student, som har god tid og stor læselyst. Ligesom med Basisbogen og Medicin, kan Medicinsk Kompendium anvendes på hele kandidatdelen, samt efter du er blevet færdiguddannet som læge. Alle emner dækkes i allerhøjeste grad.
<br /><br />
Medicinsk Kompendium er et værk af høj kvalitet. Er du den studerende, som bare skal have alle detaljer med, når du læser? Så bør du vælge Medicinsk Kompendium. Er du derimod typen som føler, at du lærer bedst ved ikke at drukne i detaljer, er Basisbogen eller FADL’s Forlags Medicin muligvis bedre valg for dig.
</p>
	<br />

	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->

		<div class="nyudgave">
			<img src="files/book/cover_9788717042391.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>


	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 2; //layout
		echo '<!-- --rate-layout:2; -->';
		$r2 = 5; //pedagogy
		echo '<!-- --rate-pedago:5; -->';
		$r3 = 7; //pensum
		echo '<!-- --rate-pensum:7; -->';

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
