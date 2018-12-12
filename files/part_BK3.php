﻿<div class="standard_width">
	<br /><h1 id="top">3. Semester Kandidat</h1>
	<h3>OBS! Udover boglisten fra 1. og 2. semester kandidat følger nedenstående bøger.</h3>
	<a href="javascript:toggleTOC()"><h2><b>&#8801;</b> Index</h2></a>
	
	<?php
		$books = array(
			array("Statestik og Epidemiologi samt Medicinsk Sociologi", 9788762809444, 9788762814356, 9788762810860, 9788762814998),
			array("Oftalmologi", 9780702030598),
			/*array("Øre-Næse-Hals", 9788762811744, 9788777496653, 9783136712030, 9780702044199),
			array("Dermatologi og Venerologi", 9788762812178, 9788777497100, 9780702044496, 9788777497551),*/
			array("Miljø og Arbejdsmedicin", 9788777495267)
		);
		
		echo '<ul id="toc">';
		for ($iii = 0; $iii < count($books); $iii++) {
			echo '<li><a href="#';
			echo str_replace(str_split(' æøå'), '', strtolower($books[$iii][0]));
			echo '"><p>';
			echo $books[$iii][0];
			echo '</p></a></li>';
		}
		echo '</ul>';
		
		for ($jjj = 0; $jjj < count($books); $jjj++) {
			echo '<h2 id="';
			echo str_replace(str_split(' æøå'), '', strtolower($books[$jjj][0]));
			echo '">';
			echo $books[$jjj][0];
			echo '</h2>';
			for ($kkk = 1; $kkk < count($books[$jjj]); $kkk++) {
				include 'book/' . $books[$jjj][$kkk] . '.php';
				echo '<br /><hr /><br />';
			}
			
			echo '<br /><a href="#top" class="top_knap"><p>Tilbage til toppen</p></a>';
		}
	?>
	
	<br /><br /><br />
</div>