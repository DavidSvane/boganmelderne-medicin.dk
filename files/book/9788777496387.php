<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->

	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">Medicin</h1>
	<p class="subtitle">B. Baslund, U. Feldt-Rasmussen, J. Kastrup, P. Soelberg Sørensen</p>

	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Kliniske sygdomsenheder</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Endo,Immunologi,Infektion,Kardiologi,Lunge,Mikrobiologi,Neuro,Nefrologi,Onkologi,Reumatologi,urologi; -->
				<p class="semester"><b>Semesterbrug:</b> 6. semester BA og kandidaten</p>
				<p class="forlag"><b>Forlag:</b>FADLs forlag </p>
				<p class="sprog"><b>Sprog:</b>Dansk </p>
				<p class="sider"><b>Sider:</b> 1207</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:9788777497254; -->
				<p class="udgivet"><b>Udgivet:</b> 2012</p>
				<p class="isbn"><b>ISBN:</b> 9788777496387</p>
			</td>

	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9788777496387.jpg"/></td>
		</tr>
	</table>

	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">
Medicin er det nyeste skud på stammen fra FADLs Forlag og den vil gerne ind i din hjerne og fylde den med viden og klinisk kunnen! Bogen bruges på sjette semester, hvor den er pensumdækkende for alle de medicinske fag. Desuden kan bogen bruges i løbet af resten af studiets medicinske fag.
<br /><br />
Bogen er god til førstegangslæsning, da den giver et fint overblik med en relevant opbygning. Bogen er opdelt efter de medicinske specialer, f.eks. reumatologi. De første underkapitler til et medicinsk speciale er altid indledende med generelle symptomer, klinik og parakliniske undersøgelser. Dette kapitel skaber et rigtig godt overblik med mange tabeller og billeder, og er rigtig godt til opsummering inden eksamen.
<br /><br />
Medicin indeholder mange faktabokse og tabeller, der opremser centrale elementer i diagnosticering, sammenligner sygdomme eller skitserer behandlingsregimer. Billederne og figurerne i bogen er alle relevante, og i de fleste tilfælde er de i høj opløsning.
<br /><br />
Formuleringerne er henvendt til den studerende, og bogen skaber sin egen niche af detaljegrad et sted mellem Basisbogen og Medicinsk Kompendium. Dette er rigtig godt, da studerende førhen havde svært ved at skulle vælge mellem de to ekstremer, netop fordi eksamensniveauer ligger midt imellem disse to ekstremer.
<br /><br />
Bogen har dog et problem: den er meget svag, når det kommer til differentialdiagnosticering. Dette bliver læseren nødt til at læse om i andre bøger.
<br /><br />
Som det ofte er tilfældet ved første udgave af danske lærebøger, optræder der lidt faglige og sproglige fejl. Dette er dog på ingen måde ødelæggende, og bogen er af særdeles høj kvalitet og anbefales til alle medicinstuderende. Hvis man foretrækker amerikanske lærebøger, er Davidson’s Principles of Medicine en mulighed, da den har samme faglige niveau.

</p>
	<br />

	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->

		<div class="nyudgave">
			<img src="files/book/cover_9788777497254.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>


	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølge: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 2; //layout
		echo '<!-- --rate-layout:2; -->';
		$r2 = 5; //pedagogy
		echo '<!-- --rate-pedago:5; -->';
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
