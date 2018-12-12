<div class="standard_width">
	<br /><h1 id="top">3. Semester Bachelor</h1>
	<a href="javascript:toggleTOC()"><h2><b>&#8801;</b> Index</h2></a>
	
	<?php
		$books = array(
			array("Bevægeapparatets Anatomi", 9780443069529, 9788762809000, 9781604063363, 9788777497025),
			array("Hoved og Halsens Anatomi", 9788762805347, 9781604063363, 9780443069529),
			array("Embryologi", 9788777495991, 9788762809390),
			array("Neuroanatomi", 9788762804951, 9788777495380, 9781604063363),
			array("Neurofysiologi", 9780781760034, 9780878939671),
			array("Histologi", 9788762803961, 9781451101508, 9788762811164),
			array("Atlas", 9780723437314, 9783437416057, 9781604063363),
			array("Dissektion", 9788762801295, 9780702052804),
			array("Supplerende bøger", 9788717038684, 9788762800366)
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