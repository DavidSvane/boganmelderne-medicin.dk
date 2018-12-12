<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Atlas over bevægeapparatet</h1>
	<p class="subtitle">af Michell Lui Kowal og Louise Pil Mørch.</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hoved, hals, bevægeapparatet og det perifere nervesystem.</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Anatomi; -->
				<p class="semester"><b>Semesterbrug:</b> 3.</p>
				<p class="forlag"><b>Forlag:</b> FADL's Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 272</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2013</p>
				<p class="isbn"><b>ISBN:</b> 9788777497025</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_.jpg"/>9788777497025</td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">”Atlas over bevægeapparatet” svarer til et anatomisk pixie-atlas med en simpel tilgang og lettilgængeligt men meget detaljefattigt indhold for den medicinstuderende. Allerede her skal det bemærkes, at bogen er målrettet mod fysioterapistuderende.<br /><br />Illustrationerne i ”Atlas over bevægeapparatet” er flot fremstillede, simple og har en distinkt dybdefornemmelse. Især gennemgangen af muskler er overskuelig – udspring og insertion markeres tydeligt med farver på ét billede og kan sammenlignes med et billede af musklens form ved siden af. Funktionen af musklen står også nævnt. Illustrativt, simpelt, kort og godt. Atlasset har altså bestemt en rolle, når kroppens muskler skal læres, og bogen har en flashcards-i-bogform stemning over sig.<br /><br />MEN! Indholdet er skåret helt ind til/i benet. Her er det vigtigt at bemærke at ”Atlas over bevægeapparatet” ikke redegør for perifere nerver eller kar, hvilket er en stor mangel, da det forventes at man som medicinstuderende kender til disse til eksamen. Overblikket og relationerne imellem forskellige strukturer taber man også meget let, da meget få strukturer vises på billederne samtidigt. I modsætning hertil supplerer andre atlas illustrationerne med udførlige topografiske billeder med alle strukturer i forskellige lag til stede. Ikke at kunne se musklernes relation til hinanden samt karrenes og nervernes forløb omkring disse er store mangler.<br /><br />Strukturen af bogen er sjov og anderledes. Når man studerer anatomi foregår det først og fremmest regionært. Først arm, så ben, så ryg, så hals, så hoved og så videre. Andre atlas (Sobotta, Netter, Thiemes) er opbygget på denne måde. Atlas over bevægeapparatet vælger en anden retning og gennemgår emnerne efter hvilket system de tilhører. Først knogler, så led og ledbånd, så muskler. Denne opdeling kan gøre meget besværligt at læse, når man skal bladre frem og tilbage og gør atlasset besværligt at slå op i.<br /><br />En klar force ved bogen er dens konsekvente brug af danske termer for anatomiske strukturer. Hvor man hurtigt drukner i latin og græsk i andre atlas, vil man her kunne finde sjove navne som hornblæsermusklen. Det er en styrke at kunne begå sig i anatomien på dansk - især i rollen som læge, der kommunikerer med patienten - men oftest virker det overflødigt. Af denne årsag svømmer atlasset desværre også i tekst.<br /><br />”Atlas over bevægeapparatet” finder sin lille atlas-niche som en form for flashcards i bogform over bevægeapparatets muskler med store mangler i form af kar og nerver. Læg et par ekstra skejser oveni for et af de store veletablerede atlas, og så man får hele pakken med.</p>
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
		$r1 = 7; //layout	
		echo '<!-- --rate-layout:7; -->';
		$r2 = 4; //pedagogy
		echo '<!-- --rate-pedago:4; -->';
		$r3 = 1; //pensum
		echo '<!-- --rate-pensum:1; -->';
		
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