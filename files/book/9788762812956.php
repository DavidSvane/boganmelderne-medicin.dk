<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Basisbog i medicin og kirurgi</h1>
	<p class="subtitle">af Svend Schulze, Jannik Hilsted og Liv Gøtzsche.</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kliniske sygdomsenheder</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Endo,Infektion,Lunge,Mikrobiologi,Ortkir,Reumatologi; -->
				<p class="semester"><b>Semesterbrug:</b> 6.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 803</p>
				<p class="udgave"><b>Udgave:</b> 6.</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2016</p>
				<p class="isbn"><b>ISBN:</b> 9788762812956</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762812956.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Basisbogen i medicin og kirurgi er en bog som beskriver både de kirurgiske
og medicinske sygdomme kort og præcist. Bogen er delt op i kapitler efter de
forskellige specialer og beskriver de fleste sygdomme herunder. Der står ikke ’for meget’ om hver sygdom og bogen kan nogle gange være en smule overfladisk. Næsten hver sygdom beskrives med den samme punktlige opbygning, hvilket er virkelig rart at læse efter, og samtidig gør basisbogen nem at slå op i.
<br /><br />
De fleste undersøgelser og forskellige termer forekommer pludseligt uden nogen forklaringer eller beskrivelser heraf. Det forventes, at man ved, hvad de forskellige ting er, eller selv slår det op. Dette kan gøre bogen svær at læse første gang, netop fordi man bliver nødt til at slå mange ting op i f.eks. Klinisk ordbog, på nettet, mv.
 <br /><br />
Sammenlignet med Medicinsk Kompendium (MK) og Medicin og Kirurgi bøgerne fra FADL, som alle beskriver mange sygdomme meget specifik og detaljeret, får man vha. af Basisbogen en mere overordnet forståelse af forskellige sygdomme, og det opnås hurtigt. Ydermere får man dannet sig et godt overblik over de mest essentielle områder, uden at drukne i for mange detaljer. Basisbogen er derfor god til eksamenslæsning.
Der er specielt nogle kapitler om brystsygdomme og ortopædkirurgi, som er særlig godt beskrevet i denne bog. Sproget og layoutet er godt i femte udgave. Den er meget konkret i sin opdeling og afsnitsopsætning. Mange lidelser er beskrevet kort, men de større og hyppigere forekommende sygdomme er beskrevet mere detaljeret. Det er især godt, at bogen starter hver sygdom med et kort resumé af den pågældende sygdoms kendetegn, således at man får dannet sig et hurtigt overblik. Bogen har desuden store tabeller, hvor bl.a. forskellige lignende sygdommes symptomer stilles op over for hinanden.
<br /><br />
Denne basisbog gør præcis, hvad en basisbog bør gøre: den giver et hurtigt og konkret overblik samt giver muligheden for en hurtig gennemlæsning af de forskellige sygdomme.
<br /><br />
Den nye 6. udgave har fået tilføjet et nyt kapitel om rehabilitering. Generelt er indholdet blevet opdateret og i nogle afsnit skrevet om, men mange af de samme figurer, tabeller og billeder går igen fra tidligere udgaver. Selvom den nye bog overordnet er bedre, er der ikke store essentielle ændringer fra 5. udgave.
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
		$r1 = 2; //layout
		echo '<!-- --rate-layout:2; -->';
		$r2 = 2; //pedagogy
		echo '<!-- --rate-pedago:2; -->';
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
