<div id="front_page">
	<div id="front_page_banner">
		<?php
			function addOne($n, $limit) {
				$new = ++$n;
				if ($new > $limit) { $new = 1; }
				return $new;
			}
			function takeOne($n, $limit) {
				$new = --$n;
				if ($new < 1) { $new = $limit; }
				return $new;
			}
			
			$texts = array('Hvilken bog skal jeg vælge?<br />Se vores bogkalatog!',
				'Send os ris og ros <a href="mailto:boganmelderne@gmail.com?Subject=Feedback%20til%20Boganmelderne%20-%20Medicin" target="_blank">boganmelderne@gmail.com</a>',
				'Livet som stud.med. er forvirrende...<br />Få overblik her!');
			
			$number_of_banners = 3;
			for ($i = 1; $i <= $number_of_banners; $i++) {
				echo '<div id="front_image_' . $i . '">';
				echo '<a href="javascript:showBanner(' . takeOne($i, $number_of_banners) . ', true)" class="arrows">&#60;</a>';
				echo '<a href="javascript:showBanner(' . addOne($i, $number_of_banners) . ', true)" class="arrows">&#62;</a>';
				echo '<h1>' . $texts[$i-1] . '</h1>';
				echo '<p>';
				for ($j = 1; $j <= $number_of_banners; $j++) {
					if ($j == $i) { echo '&#9899;';
					} else { echo '<a href="javascript:showBanner(' . $j . ', true)">&#9898;</a>'; }
				}
				echo '</p>';
				echo '</div>';
			}
			
			echo '<script>
				var numberOfBanners = ' . $number_of_banners . ';
				var bannerNumber = 2;
				window.setInterval(function(){
					showBanner(bannerNumber, false);
					bannerNumber++;
					if (bannerNumber > numberOfBanners) {bannerNumber = 1;}
				}, 5000);
				
				function showBanner(n, wait) {
					var bans = document.querySelectorAll("#front_page_banner div");
					for (var ii = 1; ii < bans.length + 1; ii++) {
						if (ii < n) {
							bans[ii-1].classList.add("moved_banner_left");
							bans[ii-1].classList.remove("moved_banner_center");
							bans[ii-1].classList.remove("moved_banner_right");
						} else if (ii == n) {
							bans[ii-1].classList.add("moved_banner_center");
							bans[ii-1].classList.remove("moved_banner_right");
							bans[ii-1].classList.remove("moved_banner_left");
						} else {
							bans[ii-1].classList.add("moved_banner_right");
							bans[ii-1].classList.remove("moved_banner_left");
							bans[ii-1].classList.remove("moved_banner_center");
						}
					}
					if (wait == true) {
						bannerNumber = n;
						if (bannerNumber == 0) { bannerNumber = numberOfBanners; }
					}
				}
			</script>';
		?>
	</div>
	<div class="front_page_info">
		<h2>Download PDF'er her</h2><br />
		<div id="bogkataloger">
			<a href="https://drive.google.com/open?id=0B09s4NaduIZPNmlobEc5eERwRVk" target="_blank"><img src="files/pdf_kb.png"/><br />Bogkatalog Bachelor</a>
			<a href="https://drive.google.com/open?id=0B09s4NaduIZPZ25rZG0tZE1UVWs" target="_blank"><img src="files/pdf_bb.png"/><br />Bogkatalog Kandidat</a>
			<a href="https://drive.google.com/open?id=0B09s4NaduIZPLVBSOEp4X2lVZW8" target="_blank"><img src="files/pdf_bs.png"/><br />Semesterbeskrivelse Bachelor</a>
			<a href="https://drive.google.com/open?id=0B09s4NaduIZPeVhuR19HcXN4aGM" target="_blank"><img src="files/pdf_ks.png"/><br />Semesterbeskrivelse Kandidat</a>
		</div><br />
	</div>
	<div class="front_page_info">
		<h2>Kontakt</h2>
		<br />
		<p>Find os på facebook: <a href="https://www.facebook.com/Boganmelderne" target="_blank">Boganmelderne - Medicin</a></p>
		<p>Send os en mail: <a href="mailto:boganmelderne@gmail.com?Subject=Feedback%20til%20Boganmelderne%20-%20Medicin">boganmelderne@gmail.com</a></p>
	</div>
	<!--<div class="front_page_info"></div>
	<div class="front_page_info"></div>
	<div class="front_page_info"></div>-->
<br /><br />
</div>