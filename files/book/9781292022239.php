<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Fundamentals of chemistry</h1>
	<p class="subtitle">Carl A. Hoeger, David S. Ballantine, Virginia E. Peterson, John E. McMurry</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Cellens kemiske komponenter</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Biokemi; -->
				<p class="semester"><b>Semesterbrug:</b> 1.</p>
				<p class="forlag"><b>Forlag:</b>Pearson Education </p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 992</p>
				<p class="udgave"><b>Udgave:</b> 7</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9780134048130; -->
				<p class="udgivet"><b>Udgivet:</b> 2013</p>
				<p class="isbn"><b>ISBN:</b> 9781292022239</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9781292022239.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Fundamentals of General, Organic and Biological Chemistry (Herefter benævnt McMurry) er pensumbogen på første semester. Bogen er fuldt ud pensumdækkende. Det er ikke nødvendigt at supplere med andre bøger, bortset fra KDO’en (Kemiske data og oversigter). Der er lagt stor vægt på at gøre faget kemi mere spændende, og på at sætte den kemiske teori i relation til ”the real world”. Det er en meget pædagogisk bog, hvor stoffet forklares grundigt. Vær dog opmærksom på, at man som medicinstuderende ikke er pålagt at kunne recitere samtlige kemiske grupper og former for estre. <br /><br />

Opbygning:<br />
Sproget er let forståeligt, mens indholdet til tider kan gå en smule ud af en tangent og ikke altid er relevant for dit videre erhverv som læge. Du får dog al den nødvendige viden og lidt til serveret på en struktureret måde og underbygget af gode tabeller og illustrationer. Undervejs i kapitlerne er der ”Worked examples”, hvilket er små opgaver til kapitlets teori, samt”Problems”, små spørgsmål til læseren i det gennemgåede stof. Ved eksamenslæsningen kan du med fordel skippe selve hovedteksten og nøjes med at kigge billeder, tabeller og læse teksten under billederne.<br /><br />

I slutningen af kapitlet gives der svar på de mest essentielle ”problems”, nøgleord fra kapitlet opridses, og der gives et velstruktureret resumé. Det er en meget pædagogisk bog, dog vil nogle studerende med stor sandsynlighed føle, at bogen er overpædagogisk. Hører du til sidstnævnte gruppe må du springe ”worked examples” og ”Problems” over, samt lægge fokus på illustrationerne og billedteksten. Så er det hurtigt læst. <br /><br />

Der er ingen alternativer. Bogen er pædagogisk og velegnet til førstegangslæsning. Kemi er de færrestes ynglingsfag, men bogen her formår faktisk at gøre faget spændende og relevant til tider. Mange vælger at købe bogen brugt, da den ikke skal bruges senere på studiet, og derfor sælger mange studerende bogen billigt. Der laves en ny version af bogen årligt uden de store ændringer, så ældre udgaver afviger ikke det store fra de nye.</p>
	<br />

	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	<!--
		<div class="nyudgave">
			<img src=files/book/cover_9780134048130.jpg/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	-->

	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 4; //layout
		echo '<!-- --rate-layout:4; -->';
		$r2 = 6; //pedagogy
		echo '<!-- --rate-pedago:6; -->';
		$r3 = 5; //pensum
		echo '<!-- --rate-pensum:5; -->';

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
