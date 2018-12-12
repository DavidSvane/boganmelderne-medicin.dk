<div class="standard_width">
	<br /><h1 id="top">4. Semester Kandidat</h1>
	<a href="javascript:toggleTOC()"><h2><b>&#8801;</b> Index</h2></a>
	
	<?php
		$books = array(
			array("Klinisk Socialmedicin og Rehabilitering", 9788791980466),
			array("Klinisk Neurologi og Neurokirurgi", 9788777496585),
			array("Neurologisk Undersøgelse", 9788777496035),
			/*array("Psykiatri inklusive Børne og Ungdoms", 9788777497575, 9788762812192, 9788777496332, 9788777498008),
			array("Retsmedicin", 9788777497148, 9788777497551, 9788762810198, 9788777497582)*/
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