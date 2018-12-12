<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Biokemi</h1>
	<p class="subtitle">Vibeke Diness Borup</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hjerte, kredsløb og lunger + Mave, tarm og lever</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Biokemi; -->
				<p class="semester"><b>Semesterbrug:</b> 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> FADL's Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 950</p>
				<p class="udgave"><b>Udgave:</b> 2</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2014</p>
				<p class="isbn"><b>ISBN:</b> 9788777497605</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777497605.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Biokemi er 4. semesters go-to-biokemi-bog også kendt som “Borups - Den lille røde”. Den er velegnet til den studerende, der ønsker en velformuleret forståelse af biokemien - både på fjerde og femte semester, men også til senere brug.<br /><br />Det er velkendt, at biokemi er et område, som volder mange studerende problemer. Derfor skal Biokemi af Borup komplimenteres for sin håndgribelige og pædagogiske facon. Sproget er koncist uden for meget slinger i valsen, eller gentagelser og snik snak. Der gives et overblik over de mange metaboliske pathways, som det er svært at tilegne sig en forståelse af.<br /><br />Især illustrationerne formår at visualisere førnævnte, således at man som studerende ikke blot skal forlade sig på tekst. Samtidig ligner disse tegninger meget det store oversigtsark ”Human Metabolism” (som man har til eksamen). Derfor kan man bedre få dannet sig et mentalt billede, som senere kan anvendes, når man skal lave opgaver. Desuden anbefales det, at have oversigtsarket ved hånden, når man læser, således at man kan følge med på det store kort, når man studerer de individuelle processer. Bogen er velstruktureret, med overskrifter og underoverskrifter, som sørger for at underinddele bogen, hvilket gør den let at slå op i.<br />Til tider kan de mange kemiske reaktioner blive en kende kedelige, men man holdes frisk og i live af en masse perspektiver til klinikken, hvor molekylære mekanismer (som man lige har læst om) bag sygdomme, samt virkningsmekanismen for lægemidler, uddybes.<br />Hvis man ønsker større detaljerigdom end brødteksten, er der også mange tekstbokse med uddybende information. Samtidig har bogen også relevans som supplement til 5. semesters endokrinologi, da alt fra neurotransmitter og thyroideahormoner til eicosanoider beskrives ud fra et biokemisk perspektiv. Hvad angår forskellen mellem denne bog og den anden populære biokemibog, Principles of Medical Biochemistry af Meisenberg, kan flere ting nævnes. Meisenberg er på engelsk, store figurer med mange forskellige ting på hver, og så har den humor. Biokemi er på dansk og har ingen form for humor, men virker mere pædagogisk. Man bliver taget i hånden fra starten og fulgt pædagogisk igennem pensum. Derudover har Biokemi også mere farverige illustrationer og en bedre fysisk konstruktion, idet den er hardcover modsat paperback ved Meisenberg.<br /><br />Den tidligere udgave af Biokemi er blevet klandret for en del fejl i illustrationerne og uoverensstemmelser med teksen, men med denne 2. udgave skulle de fleste af disse fejl være blevet rettet.<br />”Borups lille røde” er en fremragende bog til at lære biokemi. Den evner at forklare det komplicerede fag på en nogenlunde spiselig facon og ser flot ud, imens den gør det. Hvis man vælger at læse efter denne pensumdækkende danske lærebog, kommer man ikke til at fortryde det.</p>
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
		$r1 = 4; //layout	
		echo '<!-- --rate-layout:4; -->';
		$r2 = 6; //pedagogy
		echo '<!-- --rate-pedago:6; -->';
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