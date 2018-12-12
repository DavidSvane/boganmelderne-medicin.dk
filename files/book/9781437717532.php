<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Medical Physiology</h1>
	<p class="subtitle">Boron &amp; Boulpaep</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Fysiologi </p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Fysiologi; -->
				<p class="semester"><b>Semesterbrug:</b> 4.</p>
				<p class="forlag"><b>Forlag:</b> Elsevier</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 1352</p>
				<p class="udgave"><b>Udgave:</b> 2</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9781455743773; -->
				<p class="udgivet"><b>Udgivet:</b> 2012</p>
				<p class="isbn"><b>ISBN:</b> 9781437717532</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9781437717532.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Blåhvalen (nyeste udgave, blå) eller The Hulk (forrige udgave, grøn) – kald den hvad du vil. Medical Physiology er den altdominerende bog indenfor den medicinske fysiologi.<br /><br />

Bogen er særdeles detaljerig, hvilket betyder at man kan være sikker på, at ethvert emne bliver dækket fuldt ud. Samtidig betyder denne dybe grad af detaljer, at førstegangslæsningen kan blive en udfordrende oplevelse. Derudover har forfatterne en tendens til at gentage sig selv. Således bør læseren være klar til at springe til næste paragraf, når en gentagelse opstår. Og når der i forrige paragraf står forfattere i flertal, betyder det også, at der er en vis kvalitetsforskel iblandt kapitlerne alt efter om det var den virkelig velformulerende skribent eller den ikke så pædagogiske forfatter der skrev det givne kapitel.<br /><br />

Man finder desuden faktabokse, som giver kliniske perspektiver til diverse emner og, som nævnt, er der mange gentagelser og opsummeringer.<br />

Bogen skal især komplimenteres for sine fremragende billeder, som er både pæne, illustrative og informative. I mange tilfælde kan billederne være bedre til at forklare et koncept end teksten selv – ikke fordi teksten er ringe, men fordi billeder er så gode.<br />
Det er vigtigt at bemærke, at bogen kan benyttes en utrolig stor del af studiet. Selvom der er andre valgmuligheder i både lunge- og nyrefysiologi, er Medical Physiology fuldt ud så pensumdækkende, som disse andre muligheder. Ofte vil Medical Physiology endda indeholde flere detaljer, samt bedre illustrationer end konkurrenten. Dog vil detaljegraden ofte skyde over kravene som stilles til eksamen.<br /><br />

Når det kommer til fysiologibøger, er Medical Physiology af Boron og Boulpaep den bedste bog for den studerende, som foretrækker detaljerede beskrivelser i stedet for kun at få dækket de mest centrale begreber. Desuden kan det anses som en fordel, at man kun behøver at investere i én bog til alle ens fysiologibehov - som man evt. kan supplere med andre mere korte og konkrete bøger inden for de emner man ønsker.
</p>
	<br />

	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	<!--
		<div class="nyudgave">
			<img src=files/book/cover_9781455743773.jpg/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	-->

	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 5; //layout
		echo '<!-- --rate-layout:5; -->';
		$r2 = 6; //pedagogy
		echo '<!-- --rate-pedago:6; -->';
		$r3 = 6; //pensum
		echo '<!-- --rate-pensum:6; -->';

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
