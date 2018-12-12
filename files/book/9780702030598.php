<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Ophthalmology - An illustrated colour text</h1>
	<p class="subtitle">Mark Batterbury, Brad Bowling, Conor Murphy</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Oftalmologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Oftalmologi; -->
				<p class="semester"><b>Semesterbrug:</b>11. semester </p>
				<p class="forlag"><b>Forlag:</b>Elsevier </p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 125</p>
				<p class="udgave"><b>Udgave:</b> 2009 </p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b>3 </p>
				<p class="isbn"><b>ISBN:</b> 9780702030598</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780702030598.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Ophthalmology - An illustrated colour text aka “redningen-for-den-travle-studerende- som-skal-lære-oftalmologi” er et godt alternativ til de gængse lærebøger i oftalmologi.
<br /><br />
Bogen er overordnet inddelt i fire dele. Første del beskriver øjets anatomi og fysiologi, anamnese og klinisk undersøgelse af øjet, samt overordnet om øjensygdomme og parakliniske undersøgelser. Det er på alle måder en god investering at lære den basale anatomi førend man søger at forstå sygdommene, så spring ikke kapitlet over, selvom det er fristende - word of advice.
Del to gennemgår alle øjensygdommene. Del tre handler om mere specielle oftalmologiske emner, som korrektion af refraktionsanomalier, fx nærsynethed, samt øjenkirurgi og laserbehandlinger. Del fire er en klinisk case-del, hvor den diagnostiske tankegang ved fx gradvist synstab eller det røde øje gennemgås. Kapitlet er meget velegnet til eksamenslæsningen og giver et godt overblik ift. hvilke sygdomme man skal mistænke ved et givent symptombillede.
Bogen er sådan opbygget at hvert emne dækkes på præcis to sider. Hvert kapitel har også en lille gul boks som ridser nøglepunkterne fra kapitlet op. Opbygningen gør det meget let og overskueligt at slå et emne op og få et hurtigt overblik.
<br /><br />
Bogen er rigt illustreret og der er tekstmæssigt lagt vægt på korte og koncise forklaringer uden nogen udenomssnak om specielle tilfælde, ny forskning etcetera. Dette er et klart plus ved bogen i forhold til de mere traditionelle bøger folk læser efter, hvor essentiel viden nemt blandes sammen med mere “nice-to-know” viden, hvilket ikke er optimalt for den medicinstuderende som første gang stifter bekendtskab med oftalmologien.
<br /><br />
Samlet set vurderes bogen at være pensumdækkende, omend det også kun lige dækker pensum. Bogen er godt indekseret, tekstmæssigt kort og præcis og meget velillustreret. Eneste ulempe kan være at sproget er engelsk, samt at alting præsenteres meget kort, så man som læser måske ikke får det hele med ved første gennemlæsning. En stærk konkurrent til de mere omfattende og, vil nogen mene, unødvendigt snakkende traditionelle lærebøger.
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
		$r1 = 7; //layout
		echo '<!-- --rate-layout:7; -->';
		$r2 = 2; //pedagogy
		echo '<!-- --rate-pedago:2; -->';
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
