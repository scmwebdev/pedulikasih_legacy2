<html>
<head>
<?
if (isset($html_title)) {
	echo '<title>Video Fiesta | '.$html_title.'</title>';
}else {
	echo '<title>Video Fiesta | Video Artis Indonesia</title>';
}
?>

<meta name="description" content="video artis indonesia terupdate" />
<meta name="keywords" content="video artis,artis indonesia,video terbaru,video lagu,lagu indonesia" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="-1" />
<meta http-equiv="Cache-Control" content="no-cache" />
<meta name="author" content="indosiar web team" />
<meta name="robots" content="all" />
<meta name="google-site-verification" content="YCqKTsMAsI6Feo3WXhb5r5zzmOBQ4XSK01PMc-yl6Mk" />
<meta name="msvalidate.01" content="77115FB9ED53BA8A1529A3F0027F1D89" />
<link href="http://www.indosiar.com/css/vfy.css" rel=stylesheet type=text/css>
<style type="text/css">
body {
	background-image: url();
	margin-top: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
</style>
<script type="text/javascript" src="http://www.indosiar.com/js/jquery.js"></script>
<script type="text/javascript" src="http://www.indosiar.com/js/jquery.rater.packed.js"></script>
<script type="text/javascript" src="http://www.indosiar.com/js/jquery.block.js"></script> 
<script type="text/javascript" src="http://www.indosiar.com/js/jquery.form.js"></script>
<link rel="stylesheet" href="http://www.indosiar.com/css/jquery.bettertip.css" type="text/css" />
<script type="text/javascript" src="http://www.indosiar.com/js/jquery.bettertip.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.indosiar.com/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://www.indosiar.com/css/rater.css" media="screen" /> 
<script type="text/javascript">
    $(function(){
       BT_setOptions({openWait:500, closeWait:3000, enableCache:false});
    })
</script>
<script type="text/javascript">
$().ajaxStop($.unblockUI); 
$(function() {     
    $('#cform').ajaxForm({
        beforeSubmit: function(a,f,o) {
			    var theForm = f[0]; 
			    if (!theForm.nama.value || !theForm.komentar.value || !theForm.email.value || !theForm.videoid.value) { 
				        alert('All field must fill!'); 
				        return false; 
				    }
            o.dataType = 'html';
            $.blockUI('<br /><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>loading.gif" /><br /><b>Wait a moment...</b><br /><br />', { backgroundColor: '#fff', color: '#000' }); 
        },
        success: function(data) {			    
						if (typeof data == 'object' && data.nodeType)
				        data = elementToString(data.documentElement, true);
				    else if (typeof data == 'object')
				        data = objToString(data);    

				    $('#cform').clearForm();				        
				    $('#hasilkomentar').html(data);
        }
    });
    $('#kirim').ajaxForm({
        beforeSubmit: function(a,f,o) {
			    var theForm = f[0]; 
			    if (!theForm.email.value) { 
				        alert('All field must fill!'); 
				        return false; 
				    }
            o.dataType = 'html';
            $.blockUI('<br /><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>loading.gif" /><br /><b>Wait a moment...</b><br /><br />', { backgroundColor: '#fff', color: '#000' }); 
        },
        success: function(data) {			    
						if (typeof data == 'object' && data.nodeType)
				        data = elementToString(data.documentElement, true);
				    else if (typeof data == 'object')
				        data = objToString(data);    
				        
				    $('#kirim').clearForm();
				    alert('Email has been sent');	
        }
    });
}); 
</script> 
	<link type="text/css" rel="stylesheet" href="http://www.indosiar.com/css/scroller_video.css" />
	<script type="text/javascript" src="http://www.indosiar.com/js/jquery.scrollTo-min.js"></script>
	<script type="text/javascript" src="http://www.indosiar.com/js/jquery.serialScroll-min.js"></script>
	<script type="text/javascript" src="http://www.indosiar.com/js/jquery.scrollTo.js"></script>
	<script type="text/javascript" src="http://www.indosiar.com/js/jquery.serialScroll.js"></script>
	<script type="text/javascript">	
		$.easing.easeOutQuart = function (x, t, b, c, d) {
			return -c * ((t=t/d-1)*t*t*t - 1) + b;
		};
	
		jQuery(function( $ ){
			$('#screen').serialScroll({
				target:'#sections',
				items:'li', //selector to the items ( relative to the matched elements, '#sections' in this case )
				prev:'img.prev',//selector to the 'prev' button (absolute!, meaning it's relative to the document)
				next:'img.next',//selector to the 'next' button (absolute too)
				axis:'y',//the default is 'y'
				queue:false,//we scroll on both axes, scroll both at the same time.
				event:'click',//on which event to react (click is the default, you probably won't need to specify it)
				stop:false,//each click will stop any previous animations of the target. (false by default)
				lock:true, //ignore events if already animating (true by default)
				duration:700,//length of the animation (if you scroll 2 axes and use queue, then each axis take half this time)
				start: 0, //on which element (index) to begin ( 0 is the default, redundant in this case )
				force:true, //force a scroll to the element specified by 'start' (some browsers don't reset on refreshes)
				cycle:true,//cycle endlessly ( constant velocity, true is the default )
				step:1, //how many items to scroll each time ( 1 is the default, no need to specify )
				jump:false, //if true, items become clickable (or w/e 'event' is, and when activated, the pane scrolls to them)
				lazy:false,//(default) if true, the plugin looks for the items on each event(allows AJAX or JS content, or reordering)
				interval:false, //it's the number of milliseconds to automatically go to the next
				navigation:'#navigation li',
				constant:true,
				onBefore:function( e, elem, $pane, $items, pos ){
					e.preventDefault();
					if( this.blur )
						this.blur();
				},
				onAfter:function( elem ){
				}
			});
						
			$('#slideshow').serialScroll({
				items:'li',
				prev:'#screen2 a.prev',
				next:'#screen2 a.next',
				axis:'x',
				offset:-230, //when scrolling to photo, stop 230 before reaching it (from the left)
				start:1, //as we are centering it, start at the 2nd
				duration:1200,
				force:true,
				stop:true,
				lock:false,
				cycle:false, //don't pull back once you reach the end
				easing:'easeOutQuart', //use this easing equation for a funny effect
				jump: true //click on the images to scroll to them
			});
			
			var $news = $('#news-ticker');//we'll re use it a lot, so better save it to a var.
			$news.serialScroll({
				items:'div',
				duration:700,
				force:true,
				axis:'y',
				lazy:true,//NOTE: it's set to true, meaning you can add/remove/reorder items and the changes are taken into account.
				interval:5000, //yeah! I now added auto-scrolling
				step:2 //scroll 2 news each time
			});	

			$('#add-news').click(function(){
				var 
					$items = $news.find('div'),
					num = $items.length + 1;
					
				$items.slice(-2).clone().find('h4').each(function(i){
					$(this).text( 'News ' + (num + i) );
				}).end().appendTo($news);
			});
			$('#shuffle-news').click(function(){//don't shuffle the first, don't wanna deal with css
				var shuffled = $news.find('div').get().slice(1).sort(function(){
					return Math.round(Math.random())-0.5;//just a random number between -0.5 and 0.5
				});
				$(shuffled).appendTo($news);//add them all reordered
			});
		});
	</script>
</head>
<body>
<table width="996" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" bgcolor="#E81C1B">
<div id="theHeader">
	<?
	echo $this->allfunction->menumainsite("videofiesta");
	?>
</div>
      <table border="0" align="left" cellpadding="0" cellspacing="4">

        <tr>
          <td id="menu"><a href="<?=$this->config->item('URL_VIDEOFIESTA')?>">home</a></td>
<?
$query = $this->db->query("select * from tbl_video_kategori where id<>1 and id<>6 and id<>8 and id<>10 and id<>2 and id<>3 and id<>14 and id<>5 and id<>11 and id<>12 and id<>13 and id<>15");
if ($query->num_rows() > 0) {
			foreach ($query->result() as $row)
			{
?>				          
          <td id="menu"><a href="<?=$this->config->item('URL_VIDEOFIESTA')?><?=$row->kategori_url?>"><?=$row->kategori?></td>
<?
		}
}
$query->free_result();
?>		
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>header_01.gif" width="315" height="19" /></td>
    <td rowspan="2" valign="top" align="center" valign="center" bgcolor="#2F2F2F" style="padding-top:8px;">
		<?	echo	$this->banner_model->getBanner(322); ?>
		</td>
    <td rowspan="2" valign="top" align="right" bgcolor="#2F2F2F"></td>
  </tr>
  <tr>
    <td colspan="3"><a href="<?=site_url('videofiesta')?>"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>header_03.gif" width="315" height="50" border="0" /></a></td>
  </tr>
  <tr>
    <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>header_04.gif" width="315" height="24" /></td>
    <td colspan="2"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>header_05.gif" width="681" height="24" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="10" height="5" /></td>
  </tr>
</table>