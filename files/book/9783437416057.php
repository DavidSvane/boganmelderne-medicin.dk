<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Atlas der Anatomie</h1>
	<p class="subtitle">af Frank H. Netter</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hoved, hals, bevægeapparatet og det perifere nervesystem.</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Anatomi; -->
				<p class="semester"><b>Semesterbrug:</b> 3., 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> Elsevier</p>
				<p class="sprog"><b>Sprog:</b> Tysk og engelsk</p>
				<p class="sider"><b>Sider:</b> 640</p>
				<p class="udgave"><b>Udgave:</b> 6</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2015</p>
				<p class="isbn"><b>ISBN:</b> 9783437416057</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9783437416057.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Netters atlas er - i sammenligning med Thiemes og Sobotta - det atlas, som er billigst. Sammenlignet med de to førnævnte atlas har Netters kun billeder og latinske navne på strukturer, hvorimod de andre atlas har en del mere tekst og beskrivelse. Netters giver et godt overblik over de enkelte anatomiske strukturer. Bogen forekommer i forhold til de andre i ét bind, så du altid har det hele ved hånden. Dog betyder det også at bogen vejer tungere i tasken.<br /><br />Billederne i bogen er flotte og store. Navnene på de enkelte anatomiske strukturer er skrevet med stor skrift, hvilket bidrager til, at de enkelte billeder bliver meget overskuelige og skaber overblik i anatomien. I forhold til tidligere udgaver er der tilføjet nogle få illustrationer, men man kan sagtens nøjes med at købe atlasset brugt i 5. eller tidligere udgave.<br /><br />Kapitlerne er opbygget, så man føres igennem anatomien på en struktureret måde. Hvert kapitel indledes med et index, hvor man hurtigt kan finde en bestemt tegning eller anatomisk struktur. Atlasset har mange forskellige typer af tegninger. Det har både tegninger af det komplette anatomiske billede, men samtidig har det billeder, hvor enkelte strukturer isoleres og ”forstørres”. Desuden er der simple stregtegninger, hvor det kun er det væsentligste af en struktur, der er tegnet. Det bidrager til forståelsen af den enkelte struktur og dens funktion.<br /><br />I forhold til Sobotta eller Thiemes bærer Netter præg af en tegnet (eller rettere malet) fremstilling af anatomien, som falder i nogens smag. Andre vil have mere gavn af grafiske illustrationer. Vi foreslår derfor, at man tager et kig i alle tre konventionelle og gør sig et overblik over, hvad man synes er mest behageligt at kigge i, for man kommer til at bruge rigeligt med tid sammen med det.</p>
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
		$r2 = 1; //pedagogy
		echo '<!-- --rate-pedago:1; -->';
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