<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Sundhedsvæsen og sundhedspolitik</h1>
	<p class="subtitle">af Signild Vallgårda &amp; Allan Krasnik</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Medicinsk Sociologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:; -->
				<p class="semester"><b>Semesterbrug:</b> 9.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 248</p>
				<p class="udgave"><b>Udgave:</b> 3</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2016</p>
				<p class="isbn"><b>ISBN:</b> 9788762814356</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762814356.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">“For de fleste er sundhedsvæsenet vanskelligt at gennemskue... Målet med denne bog er at give læseren redskaber til at kunne forstå og vurdere, hvad der foregår i det danske og andre sundhedsvæsener...”. Som medicinstuderende og forhåbentlig senere læge er du en aktør i sundhedsvæsenet - så gør dig selv den tjeneste at erhverve dig bogen her og forstå det system du på godt og ondt er på vej til at blive en del af. I seks kapitler guides du igennem den generelle opbygning af sundhedsvæsener, basal viden om sundhedspolitik, politisk og økonomisk styring af sundhedsvæsenet samt væsentlige reformer i Danmark og hvordan, de har givet os det sundhedsvæsen, vi har i Danmark i dag.
<br /><br />
Hvad er forskelligt fra 2. udgave af bogen? Især kapitel seks om “det danske sundhedsvæsen” er blevet revideret, der er ændret lidt i vægtningen af de gennemgåede teorier om sundhedsvæsenet samt tilføjet nye mere tidssvarende eksempler på teorierne. Du er altså bedst dækket ind med den nyeste udgave af bogen men kan godt nøjes med 2. udgave.
<br /><br />
Layoutmæssigt har man anlagt stilen WOT (wall of text) med få tabeller og endnu færre figurer. Til gengæld er kapitlerne godt underinddelt, der står intet overflødigt, og der er meget konkret og væsentlig viden på lidt plads. Der er en god logisk tråd gennem kapitlerne, så du ikke mangler viden, der kommer senere i bogen eller er nødsaget til at slå begreberne op. Bogen er dermed velegnet til førstegangslæsning.
<br /><br />
Bogen er sammen med “Medicinsk sociologi” pensumdækkende for kursus i medicinsk sociologi og må sammen med alverdens noter medbringes til eksamen. Den må siges at gå lidt udover kernepensum blandt andet med gennemgang af baggrunden for forskellige politiske ideologier, omend disse er relevante for at forstå sundhedspolitik på mere end et overfladisk niveau. Du kan godt klare dig igennem kurset uden bøgerne - men bogen her er velskrevet og giver på sine 248 sider en overkommelig oversigt over det sundhedsvæsen, du som læge senere vil blive en del af. Du gør derfor dig selv en bjørnetjeneste ved at springe denne bog over.</p>
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
		$r1 = 1; //layout	
		echo '<!-- --rate-layout:1; -->';
		$r2 = 4; //pedagogy
		echo '<!-- --rate-pedago:4; -->';
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