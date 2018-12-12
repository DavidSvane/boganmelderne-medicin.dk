<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title"> Anæstesi</h1>
	<p class="subtitle"> af Lars S. Rasmussen og Jacob Steinmetz</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Anæstesi </p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Anaestesi; -->
				<p class="semester"><b>Semesterbrug:</b> 3. semester og kandidaten</p>
				<p class="forlag"><b>Forlag:</b> FADLs forlag</p>
				<p class="sprog"><b>Sprog:</b> dansk </p>
				<p class="sider"><b>Sider:</b> 397</p>
				<p class="udgave"><b>Udgave:</b> 4</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2014</p>
				<p class="isbn"><b>ISBN:</b> 9788777496974</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777496974.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Anæstesi er en glimrende bog, der dækker anæstesispecialets mange opgaver og er relevant både for den yngre anæstesiolog samt den særligt interesserede medicinstuderende. For os andre dødelige skyder den dog over mål ift., hvad der forventes, at man som studerende formår på ens kliniske anæstesiophold såvel som til eksamen. Det ændrer dog ikke på, at det er en rigtig god bog, og det er næsten ærgerligt, at den anvendes så sjældent blandt de studerende.
<br /><br />
Bogen er principielt pensumbog til 9. semester, hvor den dækker den anæstesiologiske viden, man forventes at kunne til eksamen. De fleste klarer sig dog med indlæringen fra deres kliniske ophold på anæstesiologisk afdeling og evt. noteslæsning, hvilket overflødiggør bogen for mange studerende. Bogen indeholder dog uomtvisteligt meget vigtig viden, uanset om man er aspirerende anæstesiolog eller ej. Den er ligeledes vigtigt at huske på, at man ikke altid skal læse med eksamen i øjemed, men også med henblik på ens senere virke som læge, hvilket bogen bestemt bidrager til.
Bogen kommer omkring mange vigtige aspekter og holder sig samtidig både kort og let forståelig. Der er illustrationer og skemaer, hvor det giver mening, hvilket er med til at lette forståelsen af materialet og giver et indblik i nogle af de praktiske procedurer.
Alt i alt en god bog, men det er forståeligt, at mange klarer sig uden, da der ikke kræves særligt meget vedr. anæstesi til eksamen eller på det kliniske ophold.
<br /><br />
Hvis du brænder for anæstesi eller har det i overvejelserne som fremtidigt speciale, er denne bog en rigtig god investering. Hvis du derimod ikke har den store passion for anæstesi og føler læsebyrden er stor nok i forvejen, så må vi erkende at anæstesiologien er et nemt hjørne at skære. Vær opmærksom på, at på nogle afdelinger får man bogen til låns under opholdet.
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
		$r1 = 6; //layout
		echo '<!-- --rate-layout:6; -->';
		$r2 = 4; //pedagogy
		echo '<!-- --rate-pedago:4; -->';
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
