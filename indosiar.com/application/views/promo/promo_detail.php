<?
$HTMLPageTitle = $promoData['promo_judul'].' - INDOSIAR Promo';
$HTMLMetaDescription = $promoData['promo_ringkasan'];
$HTMLMetaKeywords = "promo";

include (APPPATH."views/inc_header.php");

echo '
	<h1>'.$promoData['promo_judul'].'</h1>
	<p>&nbsp;</p>';
	
if ($promoData['promo_image'] != "") {				
		echo '
		<p align="center"><img src="'.URL_STATIC.'images/promo/'.$promoData['promo_image'].'" alt="'.$promoData['promo_judul'].'" title="'.$promoData['promo_judul'].'" /></p>
		<p>&nbsp;</p>
		';
}
	
echo $promoData['promo_isi'].'
	<p>&nbsp;</p>';

include (APPPATH."views/inc_footer.php");
?>