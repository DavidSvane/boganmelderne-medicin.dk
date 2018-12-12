<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Bevægeapparatets anatomi</h1>
	<p class="subtitle">af Finn Bojsen-Møller &amp; Jørgen Tranum-Jensen</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hoved, hals, bevægeapparatet og det perifere nervesystem.</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Anatomi; -->
				<p class="semester"><b>Semesterbrug:</b> 3. og 4.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 392</p>
				<p class="udgave"><b>Udgave:</b> 13</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2014</p>
				<p class="isbn"><b>ISBN:</b> 9788762809000</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762809000.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Bevægeapparatets anatomi har været pensumbogen på tredje semester i mange år og den har nu fået et meget tiltrængt opgradering på den grafiske side med 13. udgave. <br /><br />Bevægeapparatets anatomi definerer pensum og beskriver anatomien inden for bevægeapparatet med hensyn til knogler, muskler, nerver og kar. Tidligere har designet og illustrationerne været kedelige og gammeldags, men de er nu grafisk animeret og farvekodede. Sprødt design med relevante strukturer har nu fået en mere prominerende plads. Vi anbefaler dog at man stadig har et solidt anatomisk atlas ved sin side, da ikke alle strukturer illustreres. <br /><br />Kapitlerne i bogen er godt strukturerede og i en meningsfuld rækkefølge. Bogen indleder med et overblik over anatomien og dens terminologi, derefter gennemgås anatomien bag kroppens forskellige dele hver for sig. Hvert kapitel starter indefra med knogler og led og spreder sig ud til muskler, kar og nerver. Denne opstilling af pensum er fornuftig og giver en god fornemmelse af placeringen af de forskellige strukturer i forhold til hinanden. <br /><br />Selve teksten er svær at læse, idet der er mange fagtermer, som falder i et med brødteksten. Som noget nyt er der nu ordforklaringer med fodnoter, som hjælper til at forstå de til tider ukendte latinske/græske betegnelser. En super tilføjelse, som man ikke finder i de tidlige udgaver! Den sidste del af bogen indeholder et muskelskema, som giver et godt overblik. I dette skema kan man hurtigt danne sig et overblik over musklerne, deres funktion, udspring, tilhæftning og nerveforsyning.<br /><br />Af alternative bøger kan nævnes Grays Anatomi for Students, men denne er på engelsk og med engelsk nomenklatur modsat latin i Finn B. Der findes desuden Thiemes 3 binds-atlas som man til dels også kan læse efter. Dog skal det nævnes, at de ikke er med til at definere pensum, og at der er nogle få uoverensstemmelser med Finn B.<br /><br />Hvis man beslutter sig for at købe en ældre udgave er man dog ikke på herrens mark. Indholdet fra 12. til 13. udgave er uændret, men hvis man ønsker et mere moderne design og sprøde billeder som ledsager til de mange timer på læsesalen anbefaler vi at anskaffe sig 13. udgave.<br /><br />Der hører også en I-bog med, som findes på Munksgaards hjemmeside.</p>
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
		$r1 = 3; //layout	
		echo '<!-- --rate-layout:3; -->';
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