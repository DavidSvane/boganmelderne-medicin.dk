<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Epidemiologi og evidens</h1>
	<p class="subtitle">af Svend Juul</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kliniske sygdomsenheder</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:; -->
				<p class="semester"><b>Semesterbrug:</b> 6. og kandidaten</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 293</p>
				<p class="udgave"><b>Udgave:</b> 2</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9788762816398; -->
				<p class="udgivet"><b>Udgivet:</b> 2012</p>
				<p class="isbn"><b>ISBN:</b> 9788762810860</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762810860.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Epidemiologi og evidens er en grundbog i basal epidemiologi. Vægten er lagt på at gøre læseren i stand til kritisk at kunne vurdere videnskabelige artikler. Den er derfor ikke regne/formel tung, men lægger vægt på at introducere nøglebegreber og principper i epidemiologien og sætte dem i kontekst via eksempler. Bogen benyttes på 4. sem KU, kan benyttes ved bachelorskrivning på 5. eller 6. semester, og igen på 8. semester.
<br /><br />
Bogen er velstruktureret og går logisk gennem essentielle emner indenfor epidemiologien. Sproget er pædagogisk, men stadig med en god faglig tyngde, så det ikke ender i snak. Teorien kan for mange virke en smule abstrakt, ide det ikke bare er udenadslære – Derfor er det rigtig dejligt, at der er mange gode eksempler fra danske studier, som benyttes til at underbygge teorien og gøre det mere konkret. Teksten er relevant og uden for mange overflødige detaljer eller specielle undtagelser for en given regel. Til gengæld er der fodnoter på siderne, hvori der står ekstra viden, referencer eller lidt tekst om små afvigelser fra de generelle regler – En god måde at adskille need to know i teksten med nice to know i fodnoterne. Undervejs i kapitlerne opsummeres formler og udregninger i tabeller. Kapitlerne afsluttes med ekstra øvelser. 
<br /><br />
Det er en meget pædagogisk bog og især de mange gode eksempler letter til at forstå, hvordan man beregner en odds ratio, hvad der egentlig forstås ved bias og type-1 og type-2 fejl. Vær dog opmærksom på, at bogen IKKE en dækkende ift. statistikken hverken teoretisk eller mht. regneopgaver.
<br /><br />
Tips og ideer:
<br />
Suppler med noter fra effimedicin. Nogle begreber kan være svære at forstå første gang. Mange har fx problemer med odds ratio – Hvis du ikke forstår det ud fra denne bog så læs notesamlinger eller søg på nettet – Prøv ikke at læse det 5 gange til.
</p>
	<br />
	
	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	
		<div class="nyudgave">
			<img src="files/book/cover_9788762816398.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	
	
	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 2; //layout	
		echo '<!-- --rate-layout:2; -->';
		$r2 = 5; //pedagogy
		echo '<!-- --rate-pedago:5; -->';
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