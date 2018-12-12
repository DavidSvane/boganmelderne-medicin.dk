<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Regionær anatomi</h1>
	<p class="subtitle">af Martin E. Matthiessen, Ole William Petersen.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hoved, hals, bevægeapparatet og det perifere nervesystem.</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Anatomi; -->
				<p class="semester"><b>Semesterbrug:</b> 3.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 200</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 199</p>
				<p class="isbn"><b>ISBN:</b> 9788762801295</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762801295.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Regionær anatomi er ikke længere pensum på tredje semester, men det er stadig en god supplerende bog.<br/ ><br />Bogen handler overordnet om 2 emner: regionær anatomi og dissektion. Regionær anatomi er læren om anatomiske strukturer i en region. Det vil sige frem for at beskrive en nerve i hele dens forløb, beskriver man strukturenes (nerve, kar, muskler osv.) præcise indbyrdes beliggenhed i legemets forskellige regioner. Man kan derfor sige, at regionær anatomi er mere klinisk relevant for kirurger, da det i kirurgi er vigtigt at vide hvilke strukturer, man kan regne med at finde i det område, man opererer.<br/ ><br />Den anden del af bogen handler om dissektion, som især er relevant, hvis man gerne vil have meget ud af dissektionskurset. I indledningen er der en rigtig god introduktion til udstyr og teknikker, som bruges ved dissektion. Dette kapitel er godt at læse, inden man starter, samt under kurset. Derudover er der beskrivelser af, hvordan hvert område dissekeres bedst. Der er et kort afsnit til hver region, så man kan nøjes med at læse, om det område, man skal arbejde med.<br/ ><br />Til eksamenslæsningen er bogen velegnet til at supplere de andre lærebøger vedr. de emner, som omhandler regioner.<br/ ><br />Bogen er komprimeret, og derfor noget tung at læse, med mange latinske betegnelser. Den kan derfor ikke anbefales som førstegangslæsning. Men det er en rigtig god bog, hvis man gerne vil have meget ud af dissektionskurset. Desuden kan den kan bruges til repetition til eksamen. Bogen har nogle gode tegninger, men der er ikke mange af dem. Det må derfor anbefales at have sit atlas i nærheden.</p>
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
		$r2 = 1; //pedagogy
		echo '<!-- --rate-pedago:1; -->';
		$r3 = 0; //pensum
		echo '<!-- --rate-pensum:0; -->';
		
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