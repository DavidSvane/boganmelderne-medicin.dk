<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Molecular Biology of the Cell</h1>
	<p class="subtitle">af Keith Roberts, Bruce Alberts, Alexander Johnson, Julian Lewis, Martin Raff,
Peter Walter</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Celle- og vævsbiologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Fysiologi; -->
				<p class="semester"><b>Semesterbrug:</b> 2.</p>
				<p class="forlag"><b>Forlag:</b> Taylor &amp; Francis Inc.</p>
				<p class="sprog"><b>Sprog:</b> Engelsk</p>
				<p class="sider"><b>Sider:</b> 1392</p>
				<p class="udgave"><b>Udgave:</b> 5</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9780815344322; -->
				<p class="udgivet"><b>Udgivet:</b> 2007</p>
				<p class="isbn"><b>ISBN:</b> 9780815341062</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9780815341062.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description"><i>Molecular Biology of the Cell</i> – også kendt som blot “the Cell” i studentermunde, er en flot bog, der ikke undlader nogen detaljer.<br /><br />Uden den store tvivl er <i>The Cell</i> en af de bøger, der kan være hårdest at læse på medicinstudiet. Dette skyldes delvist, at den introducerer utrolig mange nye begreber, men også fordi at bogen simpelthen indeholder utrolig meget viden. Hvis du vælger denne bog, er det et godt hint til førstegangslæsningen, at du holder dig til den meget velskrevne billedtekst, som beskriver de mange illustrationer. Undlad at læse kapitlerne fra A-Z i “første hug” - Du risikerer at “brække nakken på det”. Anden gang du læser, kan du så dykke dybere ned i materialet.<br /><br />Forfatterne har gjort deres bedste for at gøre illustrationerne gode, men materialet de havde at arbejde med – nemlig enzymer og proteiner – gør det svært at lave andet end forskelligtfarvede kugler og firkanter, der mødes. Bogen er fyldt med detaljer og appellerer derfor til den studerende, som gerne vil vide mere, end hvad pensum kræver. Hvis man ikke har interesse i at læse udover pensum eller synes, at cellebiologien virker overvældende nok i forvejen, kan man alternativt vælge <i>Essentials of Cell Biology</i>, som er <i>The Cell's</i> velskrevne lillebror.<br /><br />Vil du have den absolut mest fyldestgørende information om cellebiologien er The Cell noget for dig - og så er den RØD.</p>
	<br />
	
	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	
		<div class="nyudgave">
			<img src="files/book/cover_9780815344322.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	
	
	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 4; //layout	
		echo '<!-- --rate-layout:4; -->';
		$r2 = 7; //pedagogy
		echo '<!-- --rate-pedago:7; -->';
		$r3 = 7; //pensum
		echo '<!-- --rate-pensum:7; -->';
		
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