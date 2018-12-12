<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Kirurgi (OBS:neurokirurgi-delen)</h1>
	<p class="subtitle">Arne Borgwardt, Michael Borre m.fl.</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Neurokirurgi/Neurologi</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Neuro; -->
				<p class="semester"><b>Semesterbrug:</b> 6. sem. BA og kandidaten</p>
				<p class="forlag"><b>Forlag:</b> FADL’s Forlag</p>
				<p class="sprog"><b>Sprog:</b> Dansk</p>
				<p class="sider"><b>Sider:</b> 1294 </p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b>2012 </p>
				<p class="isbn"><b>ISBN:</b> 9788777496585</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777496585.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description"> OBS se hele anmeldelsen af “Kirurgi” tidligere i SEMESTERBESKRIVELSER - denne anmeldelse dækker kun brugen til kurset i neurokirurgi på 10. semester. Valget står mellem om du skal erhverve dig “Klinisk neurologi og neurokirurgi”, eller om du kan nøjes med at læse neurologien efter “Medicin” eller “Basisbogen” og neurokirurgidelen efter “Kirurgi”.
<br /><br />
Neurokirurgi-delen udgør blot 58 sider af FADL’s Forlags “Kirurgi”, som er skrevet i et let tilgængeligt sprog og uden for meget fyld. Det begrænsede omfang står i skarp kontrast til “Klinisk neurologi og neurokirurgi” som fylder 769 sider, hvor det meste dog også er udgjort af pensum i neurologien. Til sammenligning fylder afsnittet om tumorer dog 30 sider mod kun 12 sider i “Kirurgi”. Der er skåret på detaljerne, men du lærer den neurokirurgi, som enhver læge skal kunne, hverken mere eller mindre. Det er alt andet lige en fordel, idet man ikke ligefrem har alverdens tid på 10. semester.
<br /><br />
Teksten er godt struktureret med konsekvent underinddeling af sygdommene i definition, forekomst, ætiologi etc., som suppleres af nogle rigtig gode oversigtstabeller. Der står intet overflødigt og kan du indprente de 58 siders neurokirurgi i hukommelsen, er du fint dækket ind i forhold til eksamen og dit videre hverv som læge - undtagen hvis du skal være neurokirurg, så skulle du nok have haft fat i en større bog. Der er gode - omend få - illustrationer af SAH, hjernetumorer etc. med en lille billedtekst, så du for eksempel ved, hvordan et tumor cerebri ser ud på for eksempel en T1-vægtet MR skanning.
<br /><br />
Det må anbefales at læse neurokirurgiafsnittet flere gange for at få det hele med, da det står meget komprimeret og du overser derfor nemt vigtige oplysninger. Det er uden tvivl i den ikke-så-neurokirurgi-interesserede-medicinstuderendes interesse at læse neurokirurgien efter FADL’s Forlags Kirurgi modsat det større alternativ. Kirurgi vurderes at være pensumdækkende i forhold til neurokirurgi og en god tidsbesparelse på et tidspresset semester.
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
		$r1 = 5; //layout
		echo '<!-- --rate-layout:5; -->';
		$r2 = 3; //pedagogy
		echo '<!-- --rate-pedago:3; -->';
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
