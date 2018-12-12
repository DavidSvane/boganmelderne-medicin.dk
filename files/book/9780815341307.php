<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Essential Cell Biology</h1>
	<p class="subtitle">af Keith Roberts, Dennis Bray, Bruce Alberts, Alexander Johnson, Julian Lewis,
Martin Raff, Peter Walter, Karen Hopkin.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Celle- og vævsbiologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Fysiologi; -->
				<p class="semester"><b>Semesterbrug:</b> 2.</p>
				<p class="forlag"><b>Forlag:</b> Taylor &amp; Francis Inc.</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 860</p>
				<p class="udgave"><b>Udgave:</b> 3</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9780815344551; -->
				<p class="udgivet"><b>Udgivet:</b> 2009</p>
				<p class="isbn"><b>ISBN:</b> 9780815341307</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780815341307.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description"><i>Essential Cell Biology</i> er en velillustreret og pædagogisk opbygget lærebog. Den er amerikansk, hvilket er ensbetydende med, at den til tider kan være lidt snakkende. Detaljeringsgraden er høj – højere end hvad der forventes af dig til eksamen.<br /><br />Essentials (som den kaldes i daglig tale) er en kortere og mere komprimeret udgave af The Cell (se senere anmeldelse). Det er ikke nødvendigt at læse The Cell, da man risikerer at drukne i detaljer. Pensum er ændret fra tidligere tider, til at Essentials er fuldt ud pensumdækkende. Læs kun The Cell hvis du har en særlig interesse for faget – det er en god bog, hvor du får en meget dyb, men initialt ustruktureret, forståelse af cellebiologien. Sproget er nemt forståeligt og i en mere pædagogisk tone, end man ser i andre amerikanske lærebøger. Detaljeringsgraden er høj – men de gode illustrationer hjælper til forståelsen. Fokuser på tegningerne og teksten herunder. I hvert kapitel er der ”How we know” afsnit – disse kan være interessante, men de er sjældent pensumrelevante. Kapitlet afsluttes med ”Essential concepts” – hvor de vigtigste pointer noteret i punktform. Disse er super gode til at tjekke om du fik det hele med. Herefter er der spørgsmål til kapitlets indhold, hvis du vil prøve din viden af.<br /><br />På andet semester er Essentials ”the book”! Vær dog opmærksom på, at bogen ER pensumdækkende... UNDTAGEN I FHT. METODER! Ved SAU/på Absalon udleveres et kompendium i biokemiske metoder – Dette er også en del af pensum, og der spørges tit ind til metoderne til eksamen. Sørg derfor for, at du kan forklare Northern vs. Western blotting, PCR, ELISA med videre.</p>
	<br />
	
	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	
		<div class="nyudgave">
			<img src="files/book/cover_9780815344551.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	
	
	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 5; //layout	
		echo '<!-- --rate-layout:5; -->';
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