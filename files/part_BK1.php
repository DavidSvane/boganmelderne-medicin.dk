<div class="standard_width">
	<br /><h1 id="top">1. Semester Kandidat</h1>
	<a href="javascript:toggleTOC()"><h2><b>&#8801;</b> Index</h2></a>
	
	<?php
		$books = array(
			array("Temaerne samlet", 9788777496387, 9788777497261, 9788762812956, 9780702050350, 9788762814608, 9788717041318, 9780199232178, 9788717041271, 9788777497483, 9788777497117),
			array("EKG", 9788777497308),
			array("Farmakologi", 9780702053627, 9781451118056, 9788777495526, 9788777497599),
			array("CAMES og Kliniske Færdigheder", 9788762806498, 9788762810129, 9788777496035, 9788762812383),
			array("Laboratorie", 9788762803770),
			array("Blodtypeserologi", 9788762810242)
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