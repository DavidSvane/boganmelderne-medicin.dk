<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Neuroanatomi</h1>
	<p class="subtitle">af Carsten Reidies Bjarkam</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Centralnervesystemets struktur og funktion</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Anatomi,Neuro; -->
				<p class="semester"><b>Semesterbrug:</b> 3.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 248</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2004</p>
				<p class="isbn"><b>ISBN:</b> 9788762804951</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762804951.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Til neuroanatomien på tredje semester har man principelt to bøger at vælge imellem. Basal neuroanatomi af Moes-Møller og Neuroanatomi af Bjarkam, hvor den sidstnævnte er den bog, de fleste studerende vælger at læse efter. Neuroanatomi af Bjarkam giver læseren et godt overblik på to måder ift. bogen Basal Neuroanatomi. For det første har den markeret de latinske betegnelser med fed skrift, hvilket gør den nemmere at slå op i, samt hjælper den studerende med at spotte de termer, som er pensum. For det andet har den mange opsummerende tabeller. Herved opnås et hurtigt overblik, og det gør at neuroanatomien, som ellers kan være svært håndgribelig, bliver lidt mere overskuelig.<br /><br />Bogens billeder er desværre i sort/hvid og figurerne er blå/grå farvet hvilket kan gøre bogen lidt uinspirerende at læse i. Sammenlignet med Basal neuroanatomi er billederne nogle gange lidt små. Til gengæld sigter Neuroanatomi ikke over målet og giver i stedet læseren præcis den viden, som forventes til eksamen. Bogen går heller ikke for meget i detaljer, men giver en overordnet forståelse af emnet på en læsevenlig måde. De fleste kapitler afsluttes med et afsnit vedrørende sygdomslæren omkring den anatomi, som er blevet gennemgået i det foregående kapitel.<br /><br />Mht. undervisningen skal man springe meget i siderne, når man skal læse til timerne. Bogen er til gengæld kortere end Basal neuroanatomi, og man kan derfor nå at læse tingene flere gange eller slå det op i de mange tabeller. Bogen mangler dog et separat kapitel om ledningsbaner, som Basal neuroanatomi har.<br /><br />Neuroanatomi af Bjarkam giver et fornuftigt overblik og en basal forståelse af neuroanatomien, som ellers kan være svær at forstå. Den er dog mindre deltaljeret end Basal neuroanatomi bogen af Moes-Møller.</p>
	<br />
	
	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	
		<div class="nyudgave">
			<img src="files/book/cover_9788762812062.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	
	
	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 4; //layout	
		echo '<!-- --rate-layout:4; -->';
		$r2 = 4; //pedagogy
		echo '<!-- --rate-pedago:4; -->';
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