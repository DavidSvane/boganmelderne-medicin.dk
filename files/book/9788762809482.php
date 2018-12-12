<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Immunologi</h1>
	<p class="subtitle">Bent Aasted, Ralf Agger, Graham Leslie, Claus Henrik Nielsen</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Immunologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Immunologi; -->
				<p class="semester"><b>Semesterbrug:</b> 5.</p>
				<p class="forlag"><b>Forlag:</b> Munksgaard</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 495</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> -</p>
				<p class="isbn"><b>ISBN:</b> 9788762809482</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788762809482.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Underviserne i immunologi på femte semester siger, at Basic Immunology er den eneste bog, man bør overveje at erhverve sig. På universitetsniveau bør der dog altid være frit bogvalg, hvilket er årsagen til, at denne fremragende bog også præsenteres.<br /><br />

Bogen dækker hele pensum for immunologi på femte semester. Den er dobbelt så lang som Basic Immunology, og det giver mulighed for at gå mere i dybden med koncepter som immundefekter, transplantation, tolerans og hypersensibilitet, vaccination og immunterapi - emner som dækkes på meget basalt niveau i Basic Immunology. Et eksempel herpå er børnevaccinationsprogrammet i Danmark, som der tidligere er blevet spurgt ind til ved eksamen, men som ikke dækkes tilstrækkeligt i Basic Immunology. Dog er disse emner ikke en stor del af kernepensum på femte semester. Så bogen henvender sig altså  til den nysgerrige studerende, der gerne vil have information, som bliver relevant for deres senere karriere, men som ikke nødvendigvis er voldsomt relevant i forhold til eksamen til femte semesters immunulogikursus. <br /><br />

Udover disse ekstra tilføjelser, er bogen Immunologi fuldt ud så pensumdækkende som Basic Immunology. Dog er det essentielt, at den studerende er klar over, at der ikke sjældent forekommer direkte billeder fra Basic Immunology ved eksamen, hvilket gør det anbefalelsesværdigt at kigge billederne i Basic Immunology igennem inden eksamen.<br /><br />

Til forskel fra Basic Immunology, er bogen skrevet på dansk og er fyldt med mange informative illustrationer. Illustrationerne har et bredt farveskema, som benyttes til at simplificere det ellers ofte komplicerede stof. Bogens ekstra længde betyder også, at visse koncepter bliver beskrevet med større uddybelse, men at der selvfølgelig som konsekvens heraf, skal læses flere sider.
Hvis du er frisk på at prøve en bog, der ikke anbefales af kursusledelsen, men som er fuldt ud lige så god som - og måske endda endnu bedre end - Basic Immunology, kan Immunologi varmt anbefales. Ligeledes er bogen god til den studerende, som foretrækker at læse danske lærebøger, eller som bare ønsker en bog, der har flere detaljer om den kliniske immunologi.
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
		$r1 = 4; //layout
		echo '<!-- --rate-layout:4; -->';
		$r2 = 6; //pedagogy
		echo '<!-- --rate-pedago:6; -->';
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
