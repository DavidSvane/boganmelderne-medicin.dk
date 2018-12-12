<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Klinikbogen</h1>
	<p class="subtitle">af Kim Bartholdy og Jane Kallesøe.</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b>Kliniske kurser </p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Kittelbog; -->
				<p class="semester"><b>Semesterbrug:</b> 7. semester og andre kliniske semestre</p>
				<p class="forlag"><b>Forlag:</b> Fadls Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 451</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9788777498480; -->
				<p class="udgivet"><b>Udgivet:</b> 2011</p>
				<p class="isbn"><b>ISBN:</b> 9788777496035</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777496035.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description"> En flot, farverig bog der har til formålbeskrive de vigtigste kompetencer man skal tilegne sig på de kliniske ophold igennem medicinstudiet. Bogen er supplerende litteratur, men er trods sit lidt store format stadig velegnet til at have med i kittellommen på især 7. semester.
<br /><br />
Bogen er letlæselig og meget forklarende undervejs, uden at gå for meget i dybden med den bagvedlæggende teori og patologi. I stedet fokuserer bogen meget på det praktiske aspekt, og hvordan man skal gebærde sig i klinikken.
<br /><br />
Undervejs er der en masse gode eksempler på, hvordan man kan implementere bogens indhold i praksis samt eksempler på typiske faldgruber, der skal undgås. En af bogens helt store styrker er insider-tips som... der gives undervejs, som man ellers typisk ikke støder på i fagbøgerne, men normalt vil få fra ældre studerende eller vil tilegne sig gennem egen erfaring. Undervejs er der infobokse og spørgsmål til læseren, der hjælper med at repetere det læste materiale samt at holde de vigtigste ting for øje. Der er mange gode tekstbokse so fx indeholder de vigtigste spørgsmål til patienten med fx brystsmerter eller ondt i maven, oplistning af symptomer relateret til forskellige sygdomme eller organsystemer, oversigterover sygdomme med ligheder og forskelle m.m. De første kapitler fokuserer på hvordan man bedst kan forberede sig på sit klinikophold, hvad man kan forvente at lære og hvad der forventes af dig som studerende på en medicinsk eller kirurgisk afdeling. Der er gode beskrivelser af de vigtigste elementer i en god journal og gode råd til, hvordan man kommunikerer bedst med både patienter og kollegaer.
<br /><br />
Herefter er der et kapitel tilegnet hvert organsystem der gennemgås i varierende detaljegrad med hyppigste sygdomme, undersøgelsesmetoder og eventuelle patologiske fund. Nogle af disse kapitler er overfladiske mens andre er mere dybdegående. Man må dog ikke forvente at de organspecifikke kapitler er fyldestgørende for det, der forventes af den studerendes kunnen over hele semesteret. Suppler derfor organkapitlerne ift. klinikken ud fra de mere tunge fagbøger for at få en dybere forståelse. Bogens opgave – at give et relativt kort overblik over de hyppigste og vigtigste emner/situationer man kan støde på i sit klinikophold – klares rigtig fint og bogen egner sig rigtig godt som en kittelbog, hvor den studerende hurtigt kan danne sig et overblik inden han/hun skal tilse en patient eller deltage i en
undersøgelse.
<br /><br />
Bogen er ikke tilstrækkelig for en dybere forståelse af det man lærer på 7. og især 9. semester, men den er særdeles velegnet som kittelbog, da du får en god basal viden om journaloptagelse, overblik over hyppigste lidelser i hvert organsystem etc.. På 9. semester kan man med fordel også erhverve sig (Den sorte bog, navn?), som forudsætter en basal klinisk viden og kunnen, men til gengæld ruster dig til at håndtere akutte tilstande, skadestue arbejde, stuegang etc.
</p>
	<br />

	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->

		<div class="nyudgave">
			<img src="files/book/cover_9788777498480.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>


	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 0 ; //layout
		echo '<!-- --rate-layout:0; -->';
		$r2 = 0; //pedagogy
		echo '<!-- --rate-pedago:0; -->';
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
