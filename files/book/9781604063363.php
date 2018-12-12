<div class="book">

	<!-- Brug "Programmer's Notepad" eller "Notepad++" til at redigere dokumentet for at få farvet koden for overskuelighed. Vælg PHP som format. Kopier eventuelt inholdet af filen ind i et ny dokument for ikke at overskrive skabelonen. -->
	
	<!-- I nedenstående to felter indsættes i "title" bogens titel og i "subtitle" listen over forfattere eller evt. forlag ved manglende forfatterliste. -->
	<h1 class="title">THIEME Atlas of Anatomy 3 Volume set. (Bind 1)</h1>
	<p class="subtitle">af M Schuenke</p>
	
	<!-- I nedenstående felter indsættes den information, som passer til feltets indhold. Dette indsættes efter mellemrummet mellem </b> og </p>. -->
	<table>
		<tr>
			<td>
				<p class="kursus"><b>Relevant kursus:</b> Hoved, hals, bevægeapparatet og det perifere nervesystem.</p> <!-- Standardiserede tags for kurser indsættes her mellem : og ; her i kommentaren kun adskilt af et , og ingen mellemrum --kurser:Anatomi; -->
				<p class="semester"><b>Semesterbrug:</b> 3., 4. og 5.</p>
				<p class="forlag"><b>Forlag:</b> Thieme Medical Publishers Inc.</p>
				<p class="sprog"><b>Sprog:</b> Latin og engelsk</p>
				<p class="sider"><b>Sider:</b> 1360</p>
				<p class="udgave"><b>Udgave:</b> 1</p> <!-- Alle andre versioners ISBN-numre indsættes her mellem : og ; her i kommentaren kun adkilt af et , og ingen mellemrum --versioner:; -->
				<p class="udgivet"><b>Udgivet:</b> 2010</p>
				<p class="isbn"><b>ISBN:</b> 9781604063363</p>
			</td>
		
	<!-- Bogens coverbillede gemmes med titlen "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. -->
			<td><img class="cover" src="files/book/cover_9781604063363.jpg"/></td>
		</tr>
	</table>
	
	<!-- Beskrivelsen indsættes i et felt herunder mellem <p class="description"> og </p>. Alle unødvendige mellemrum og linjeskift slettes og tjekkes. Ved ønsket linjeskift kopieres og indsættes "<br />" i stedet, og ønskes også mellemrum mellem paragrafferne indsættes "<br />" to gange. -->
	<p class="description">Du skal til at starte på tredje semester og har fået at vide, at du skal købe Bevægeapparatets anatomi og Hovedets, halsens og de indre organers anatomi. Enten synes du, at de ser helt fremragende ud og du køber dem – eller du reflekterer over, om der ikke er andre alternativer med nogle flere illustrationer. Thiemes Atlas of Anatomy tre-binds atlas er netop dette alternativ. Dog et alternativ på den måde, at vi fortsat anbefaler du bruger pensumbøgerne ved første gennemlæsning med Thieme som atlas. Til anden gennemlæsning kan du i stedet benytte Thiemes eksklusivt som tekstbog og atlas.<br /><br />Normalt kendetegner det anatomiske atlas, at de indeholder mange store og flotte illustrationer, men ikke særlig meget tekst. Thiemes Atlas of Anatomy er anderledes, idet der til hvert billede er knyttet en betydelig mængde billedtekst. Effekten bliver at man som læser væsentlig bedre kan forstå hvad der menes, når eksempelvis en nerves forløb beskrives. Derudover indeholder atlasset også meget funktionel og klinisk anatomi, hvilket betyder at områder så som de biomekaniske kræfter i fodens bue er beskrevet.<br /><br />Eksempler på klinisk anatomi er beskrivelse af Colles fraktur og hvilken effekter en læsion i synsnerven vil have. Dog bør det tilføjes, at atlasset er i sin første udgave, hvorfor det indeholder småfejl hist og her. Udover den rigelige tekst, er atlassets billedsamling også suveræn. Det er svært at vurdere, hvorvidt atlasset decideret er det bedste, der er tilgængelig, men det står i hvert fald på lige fod med både Netter og Sobotta. Som det fremgår af titlen, er atlasset opdelt i tre bind, som består af 1) Musculoskeletal Anatomi (bevægeapparatets anatomi), 2) Head and Neuroanatomi og 3) Anatomi of Neck and Inner Organs. Dette betyder, at man investere i netop de områder man har brug for. Dog har man på 3. semester brug for alle tre bøger, da halsens anatomi er en del af semestrets pensum.<br /><br /><u>Vurdering:</u><br />Lærer du bedst af flotte og illustrationer, hvor der er knyttet specifik tekst til hvert enkelt billede, er Thieme Atlas of Anatomy noget for dig. Atlasset er fyldt med information som gør, at det kan fungere som enkeltstående anatomibog på tredje semester for den studerende, som gerne vil prøve noget anderledes.</p>
	<br />
	
	<!-- Hvis bogen findes i en ny udgave, som ikke er anmeldt separat, gemmes denne versions coverbillede som "cover_" efterfulgt af bogens ISBN-nummer i formatet .jpg (brug Paint eller GIMP) og ISBN-nummeret tilføjes efter "cover_" i feltet herunder. Derudover slettes kommentar-klammerne, så teksten bliver vist på hjemmesiden. -->
	<!--
		<div class="nyudgave">
			<img src="files/book/cover_.jpg"/>
			<p>OBS! Ny version ikke anmeldt endnu!</p>
		</div>
	-->
	
	<!-- Bogen vurderes herunder på en skala fra og med 1 til og med 7 på følgende egenskaber i denne rækkefølg: layout ($r1, fra tekstbaseret til illustrativt), pædagogik ($r2, fra kortfattet til uddybende) og detaljegrad ($r3, fra under pensum til over pensum). 4-tallene erstattes med de ønskede verdier, og grafikken skabes automatisk herefter. Indsæt både tallene i variabel-definitionen og mellem det efterfølgende : og ; i meta-værdien. -->
	<?php
		$r1 = 7; //layout	
		echo '<!-- --rate-layout:7; -->';
		$r2 = 3; //pedagogy
		echo '<!-- --rate-pedago:3; -->';
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