<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Rationel klinik</h1>
	<p class="subtitle">af Henrik R. Wulff og Peter C. Gøtzshe.</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Videnskabsteori</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Forskning,Andet; -->
				<p class="semester"><b>Semesterbrug:</b> 8. semester</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b>Dansk </p>
				<p class="sider"><b>Sider:</b> 380</p>
				<p class="udgave"><b>Udgave:</b> 5</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2006</p>
				<p class="isbn"><b>ISBN:</b> 9788762805903</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762805903.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Kan man stole på en diagnostisk test bare fordi den har en høj sensitivitet? Har medicinen haft effekt eller er der tale om placeboeffekt eller spontan remission? Rationel klinik sætter de videnskabsteoretiske begreber på plads. Du gør dig selv en bjørnetjeneste ved at springe denne bog over, da den giver dig en forståelse af grundlaget for de beslutninger vi træffer i klinikken. Med mange gode eksempler fra den kliniske hverdag illustreres værdien i at forstå, hvad positiv prædiktiv værdi dækker over, eller hvorfor man som læge risikerer at lægge for stor vægt på en blodprøve uden at forstå normalfordeling og usikkerhed, samt risikerer at overfortolke diagnostiske tests ud fra manglende viden om prædiktive værdier. Til Boganmelderne - Medicins viden er der ikke alternativer til denne bog, dog kan den interesserede læser supplere med Medicinsk filosofi af den ene af Rationel kliniks forfattere Henrik Wullf eller Epidemiologi og evidens af Svend Juul.
<br /><br />
Rationel klinik er supplerende litteratur til videnskabsteori på 8. semester, hvor der undervises efter et kompendium som findes på Absalon. Bogen har dog også nogle kapitler om basal statistik og brugen heraf i artikler, hvilket hjælper dig til at læse videnskabelig litteratur og forholde dig kritisk til denne, så du ikke drager fejlslutninger ud fra forkerte statiske opgørelser, studier af lav kvalitet etc. I bogens 5. udgave er der tilføjet et kapitel om den humanistiske side af at være læge og skulle træffe svære beslutninger på en etisk forsvarlig måde.
<br /><br />
Layoutmæssigt er bogen teksttung, men dog illustreret, når det giver mening. Det kan blive noget tørt omkring prædiktiv værdi, normalfordeling med mere – Men hæng i, for pointen er værd at nå frem til. Sproget i bogen kan af og til virke bombastisk, da der kommer mange påstande undervejs i kapitlerne. Disse er dog velunderbyggede teoretisk og et stort plus ved bogen, er de mange gode eksempler fra den kliniske hverdag, der afspejler pointerne og understreger, hvorfor den teoretiske overvejelse er vigtigt at gøre sig.
<br /><br />
Rationel klinik har en god logisk tråd undervejs i kapitlerne og lærer dig at analysere og forholde dig kritisk til grundlaget for de beslutninger, man som læge træffer i klinikken. Der er skåret ind til benet med det essentielle, men det er anderledes læsning ift. det du er vant til.
<br /><br />
Der hører også en I-bog med, som findes på Munksgaards hjemmeside.
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
		$r1 = 1; //layout
		echo '<!-- --rate-layout:1; -->';
		$r2 = 6; //pedagogy
		echo '<!-- --rate-pedago:6; -->';
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
