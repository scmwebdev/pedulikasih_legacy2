<?
$HTMLPageTitle = "INDOSIAR Promo";
$HTMLMetaDescription = "INDOSIAR TV Promo";
$HTMLMetaKeywords = "promo";

include (APPPATH."views/inc_header.php");

echo '
	<div class="content-container">
		<h1>Programme Promo</h1>
		<p>&nbsp;</p>';

if (count($promoList) > 0) {
		foreach($promoList as $row) {
				echo '
				<div class="ContentJenisList RoundedBox8px">
					';
					
				if ($row['promo_image'] != "") {				
						echo '<a href="'.site_url('promo/'.$row['promo_slug']).'.html" title="'.$row['promo_judul'].'"><img width="150" height="170" src="'.URL_STATIC.'images/promo/th_'.$row['promo_image'].'" align="left" alt="'.$row['promo_judul'].'" title="'.$row['promo_judul'].'" border="0" style="margin-right:10px" /></a>';
				}
				
				echo '
					<h2><a href="'.site_url('promo/'.$row['promo_slug']).'.html" title="'.$row['promo_judul'].'">'.$row['promo_judul'].'</a></h2>'.
					$row['promo_ringkasan'].'
					<div style="clear:both"></div>
				</div>';
		}
}

echo '
	<p>&nbsp;</p>';

		echo '
			</div>
			<div class="side-container">';
	
include (APPPATH."views/inc_sidecontent.php");

echo '
	</div>
	<div style="clear:both"></div>';
	
include (APPPATH."views/inc_footer.php");
?>