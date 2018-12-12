<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Menneskets anatomi og fysiologi</h1>
	<p class="subtitle">af Olav Sand, Jan G. Bjålie, Øystein V. Sjaastad, Egil Haug</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Basal humanbiologi og cellens kemiske komponenter</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:fysiologi,anatomi; -->
				<p class="semester"><b>Semesterbrug:</b> 1. semester</p>
				<p class="forlag"><b>Forlag:</b> Gads Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 538</p>
				<p class="udgave"><b>Udgave:</b> 2.</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2008</p>
				<p class="isbn"><b>ISBN:</b> 9788712042983</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788712042983.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Menneskets anatomi og fysiologi er en lærebog i humanbiologi som alternativ til Holes. Det er en velillustreret, pædagogisk og alt i alt god lærebog, som giver den studerende et basalt overblik over menneskets anatomi og fysiologi. Bogen er oprindeligt rettet mod sygeplejestuderende, men er fuldt ud pensumdækkende til kurset i humanbiologi ved KU. Uanset hvilken af de to lærebøger, man vælger, skal hele bogen læses - supplér med eksamensopgaver og lav multiple choice opgaver på dette link: <a href="http://hubeck-graudal.dk/humanbiologi/">Multiple choice opgaver</a>.
<br /><br />
Især illustrationer er gode og teksten er fornuftigt opdelt i afsnit, så den studerende præsenteres for stoffet på en overskuelig måde. Sproget er kort og kontant, vigtige begreber eller pointer er markeret med kursiv.
<br /><br />
<u>Relation til Holes:</u> <br />
Størstedelen af de studerende vælger at læse efter Holes. Det skyldes, at kurset i humanbiologi og selve eksamen er opbygget efter denne. Man kan dog sagtens anvende denne lærebog i stedet, selvom der kan være enkelte detaljer, som kun nævnes i Holes.
<br /><br />
Nogle vil argumentere for, at det er lettere at læse efter en dansk lærebog. Vær dog opmærksom på, at man ikke altid senere hen vil have danske alternativer til de engelske lærebøger.
<br /><br />
Det er en velstruktureret, pædagogisk lærebog uden overflødig snak, som giver den studerende et godt basalt overblik over menneskets anatomi og fysiologi. Fordelen ved at læse efter Holes er, at kurset er opbygget efter denne, samt at eksamensformuleringerne er taget fra Holes. Dog er den danske lærebog mere forklarende end Holes på nogle punkter - det må alt i alt være en smagssag, hvilken bog man læser efter her.</p>
	<br />

	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->

		<div class="nyudgave">
			<img src="files/book/cover_9788712051077.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>


	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 4; //layout
		echo '<!-- --rate-layout:4; -->';
		$r2 = 6; //pedagogy
		echo '<!-- --rate-pedago:6; -->';
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
