<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title"> Akutte kirurgiske tilstande</h1>
	<p class="subtitle"> Morten Laksafoss Lauritsen</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kliniske sygdomsenheder </p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:kittelbog,Akut,Gaskir,Karkir,Ortkir,Thorax; -->
				<p class="semester"><b>Semesterbrug:</b> 6. semester og kandidat </p>
				<p class="forlag"><b>Forlag:</b> Fadls forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 300</p>
				<p class="udgave"><b>Udgave:</b> 2.</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2014 </p>
				<p class="isbn"><b>ISBN:</b> 9788777497117 </p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777497117.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description"> Som læge skal man kunne håndtere akutte situationer og foretage hurtige og meget vigtige valg, som kan have store konsekvenser. Det er meget skræmmende at stå med en akut patient, men der er hjælp at hente i denne kittelbog. Akutte kirurgiske tilstande (aka. AK-bogen) har et lækkert layout og design. Desuden passer størrelsen og vægten på bogen perfekt til kittellommen hvad end du er medicinstuderende, lægevikar eller læge.
<br /><br />
Kittelbogen er opbygget således, at den gennemgår de vigtigste akutte kirurgiske diagnoser man kan møde når man er på vagt i skadestuen eller på en kirurgisk afdeling. Den første del af bogen beskriver hvordan man opbygger en kirurgisk journal. Herefter følger forskellige kapitler om kirurgiske tilstande inden for flere forskellige specialer.
<br /><br />
Inden for kirurgi benytter man sig af mange forskellige modaliteter som CT, RTG og MR og bogen indeholder flere meget fine billeder med angivelser af, hvad man ser på billederne som f.eks. en trykpneumothorax.
<br /><br />
Til hver diagnose angives symptomer, kliniske fund, paraklinik, behandling og prognose. Den er meget let at slå op i og indeholder præcis det man skal bruge i den akutte situation.
Bogen er skrevet af en abdominalkirurg, hvilket også gør at den er ret fokuseret på abdomen og områder som har med abdominalkirurgi at gøre. Bogen har derfor visse mangler inden for nogle specialer som f.eks. ortopædkirurgi, gynækologi og neurokirurgi.
<br /><br />
Eftersom det er en kittelbog og derfor et opslagsværk er bogen kortfattet, præcis og indeholder mange informationer på lidt plads. Du kan derfor ikke anvende den til førstegangslæsning. Er også velegnet til eksamenslæsning eller generel repitition. Dog er den rigtig god til at opsummere diagnoserne og beskrive hvordan man skal håndtere og behandle akutte kirurgiske tilstande.
<br /><br />
En rigtig god ven at have i lommen hvis du skal være lægevikar eller læge på en kirurgisk afdeling eller skadestue.
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
		$r2 = 3; //pedagogy
		echo '<!-- --rate-pedago:3; -->';
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
