<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Basal nyrefysiologi</h1>
	<p class="subtitle">Finn Michael Karlsen m.fl.</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Nyrer og urinveje</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Fysiologi; -->
				<p class="semester"><b>Semesterbrug:</b> 5.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 288</p>
				<p class="udgave"><b>Udgave:</b> 2</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2009</p>
				<p class="isbn"><b>ISBN:</b> 9788762806030</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762806030.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Basal nyrefysiologi har en kvantitativ tilgang til nyrefysiologi – du præsenteres altså for formler, tal, skemaer og figurer med omtrentlige værdier frem for lange kvalitative forklaringer. I nyrefysiologi kommer du til at lave en del regneopgaver, før du forstår stoffet. Bogens tilgang er derfor fornuftig og passer godt til eksamen, som typisk består af en 4-5 regneopgaver og 1-2 forklaringsspørgsmål. <br /><br />

Bogen er forklarende og pædagoisk skrevet og er derfor god til førstegangslæsning. Man kan vælge udelukkende at læse efter denne bog, da den er fuldt ud pensumdækkende. Det anbefales dog, at man supplerer med SAU, internet og evt. youtube videoer, eller andre fysiologibøger, f.eks. Guyton & Hall til de afsnit eller emner man finder vanskelige. F.eks. har mange gavn af at få forklaret modstrømsforstærkning eller Renin-Angiotensin-Systemet (RAS) på andre måder end det står i denne bog. <br /><br />

Stikordregistret er godt, og bogen fungerer dermed fint til eksamenslæsning. De første kapitler er noget basale og der lægges til tider et lidt for stort fokus på metode til måling af nyrefysiologi. Bogen forklarer dog formlerne fint og introducerer stoffet i en logisk rækkefølge. Stoffet er velillustreret, skitserne er ikke så flotte som i de engelske lærebøger, men de er fint dækkende. Hvert kapitel opsummeres i et kort og godt tekst resumé.<br /><br />

Sammenlignet med Medical Physiology af Boron &amp; Boulpaep, så er Boron et godt alternativ for den studerende, som gerne vil have mange flere detaljer end eksamen kræver. For andre som gerne vil have en bog, som er fokuseret på hvad der er eksamensrelevant, bør Medical Physiology fravælges til nyredelen.<br /><br />

Bogens tilgang passer desuden godt til de mange regneopgaver til eksamen. Med et skeptisk blik er bogen til tider lidt snakkende, idet vigtige pointer eller formler ligger gemt i store tekstafsnit, hvor de måske burde være fremhævet i fed eller skrevet ud i punktform som et ”key concept”. Du kan dog selv rette op på dette og understrege/highlighte/whatnot de vigtigste begreber, så du senere ved eksamen nemt kan finde det vigtigste i teksten.  <br /><br />
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
