<div class="standard_width">
	<br /><h1 id="top">6. Semester Bachelor</h1>
	<a href="javascript:toggleTOC()"><h2><b>&#8801;</b> Index</h2></a>
	
	<?php
		$books = array(
			/*array("Tema A", 9788777497810, 9788777496356),*/
			array("Tema B C og D", 9788762812956, 9788777496387, 9788777497261, 9780702050350, 9788717041318, 9780199232178),
			array("Lungemedicin", 9788762814608),
			/*array("Ortopædkirurgi", 9788762814974, 9788777497230),
			array("Endokrinologi", 9788762813830),*/
			array("Laboratorie", 9788762803770),
			array("Farmakologi", 9781451118056),
			array("Diagnostiske Fag", 9788762810242),
			/*array("Radiologi", 9787774935592, 9788777493546, 9780674012790, 9781405195140),*/
			array("Epidemiologi og Bachelor projekt", 9788762810617, 9788762814998, 9788762810860)
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