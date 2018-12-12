<div class="standard_width">
	<br /><h1 id="top">5. Semester Bachelor</h1>
	<a href="javascript:toggleTOC()"><h2><b>&#8801;</b> Index</h2></a>
	
	<?php
		$books = array(
			array("Fysiologi", 9788777496981, 9788762806030, 9781437717532),
			array("Anatomi", 9788762805347, 9780443069529, 9781604063363),
			array("Histologi", 9788762803961, 9781451101508, 9788762811164),
			array("Immunologi", 9781455707072, 9788762809482),
			/*array("Patologi", 9781437717815, 9788777494055, 9788762809475, 9781437707922, 9788777496189, 9788777497131),*/
			array("Farmakologi", 9780702053627, 9781451118056, 9788777495526, 9788777497599)
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