<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Klinisk elektrokardiologi</h1>
	<p class="subtitle">Bjarne Sigurd, Peter Steen Hansen og Steen Pehrson</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kardiologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Kardiologi; -->
				<p class="semester"><b>Semesterbrug:</b> Kandidaten</p>
				<p class="forlag"><b>Forlag:</b> FADLs forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk </p>
				<p class="sider"><b>Sider:</b> 518</p>
				<p class="udgave"><b>Udgave:</b> 3</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2014</p>
				<p class="isbn"><b>ISBN:</b> 9788777497285</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777497285.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Klinisk elektrokardiologi er kort fortalt den litterære Rittersport – kvadratisk, pseudopraktisk, god. Bogen giver et særdeles omfattende og dybdegående indblik i nærmest alle aspekter relateret til elektrokardiologi.
"<br />" "<br />"
Bogen er supplerende litteratur og er således ikke påkrævet at læse på et specifikt semester. Bogen er altså ikke pensumdækkende for fjerde semesters hjerte, kredsløb og lunger og ej heller for ottende semesters kardiologi, men den er et godt supplement.
"<br />" "<br />"
Den dækker utrolig mange sider af elektrokardiologien og går langt over, hvad der forventes af en medicinstuderende i mange henseender. Bogen er derfor mere velegnet til den særligt kardiologisk interesserede studerende eller læge end til den almene medicinstuderende, der gerne vil få styr på sin elektrokardiologi.
Bogens mange detaljer gør den desuden mere velegnet til læseren der har styr på de basale ting i elektrokardiologi og EKG analyse.
Selvom de basale ting også gennemgås er der rigtig mange detaljer med, som man nemt kan miste overblikket i, hvis man ikke har styr på de mere basale ting.
Man må dog også rose bogen for sin detaljegrad og omfang af emner. Den gennemgår utrolig mange ting indenfor elektrokardiologien og medtager også emner som anatomi, praktiske procedurer, farmakoterapi, behandlinger m.m. i det omfang det har relation til elektrokardiologien. Sproget er desuden meget pædagogisk, så hvis du har interesse for kardiologi og ikke er typen, der nemt drukner i detaljer, kan du anvende denne bog.
Layoutet er klassisk og rimelig overskueligt og bogen indeholder rigtig mange illustrationer og tekstbokse til hjælp for læseren undervejs.
"<br />" "<br />"
Hvis du er en aspirerende kardiolog eller du bare ikke kan få nok af elektrokardiologi, så kan du være sikker på, at denne bog vil dække dine behov rigtig langt hen ad vejen. Med udtømmende viden om EKG og et godt stikordsregister bag i bogen er den velegnet til den kardiologiinteresserede studerende, da den er brugbar både på studie samt i senere lægegerning. For den medicinstuderende, der gerne vil have styr på sin EKG-analyse til eksamen eller på et klinisk ophold vil dette være lidt af et overkill og med de relativt mange EKG bøger der findes, vil man nok være bedre tjent med et andet valg. Du kan bl.a. overveje EKG let at se, dog bør det nævnes at denne ikke gennemgår alle anomalier i EKG’et, som du forventes at kunne til eksamen på ottende semester – Se separat anmeldelse. </p>
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
		$r2 = 6; //pedagogy
		echo '<!-- --rate-pedago:6; -->';
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
