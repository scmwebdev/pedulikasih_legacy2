<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Video from You!</title>
<link href="http://www.indosiar.com/css/vfy.css" rel=stylesheet type=text/css>

<style type="text/css">
<!--
body {
	background-image: url();
	margin-top: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
-->
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
            $.blockUI('<br /><img src="http://www.indosiar.com/videofiesta/img/loading.gif" /><br /><b>Wait a moment...</b><br /><br />', { backgroundColor: '#fff', color: '#000' }); 
        },
        success: function(data) {			    
						if (typeof data == 'object' && data.nodeType)
				        data = elementToString(data.documentElement, true);
				    else if (typeof data == 'object')
				        data = objToString(data);    

				    $('#cform').clearForm();				        
				    $('#hasil').html(data);
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
            $.blockUI('<br /><img src="http://www.indosiar.com/videofiesta/img/loading.gif" /><br /><b>Wait a moment...</b><br /><br />', { backgroundColor: '#fff', color: '#000' }); 
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
		//easing equation, borrowed from jQuery easing plugin
		//http://gsgd.co.uk/sandbox/jquery/easing/
		$.easing.easeOutQuart = function (x, t, b, c, d) {
			return -c * ((t=t/d-1)*t*t*t - 1) + b;
		};
	
		jQuery(function( $ ){
			/**
			 * Most jQuery.serialScroll's settings, actually belong to jQuery.ScrollTo, check it's demo for an example of each option.
			 * @see http://flesler.webs.com/jQuery.ScrollTo/
			 * You can use EVERY single setting of jQuery.ScrollTo, in the settings hash you send to jQuery.serialScroll.
			 */
			
			/**
			 * The plugin binds 6 events to the container to allow external manipulation.
			 * prev, next, goto, start, stop and notify
			 * You use them like this: $(your_container).trigger('next'), $(your_container).trigger('goto', [5]) (0-based index).
			 * If for some odd reason, the element already has any of these events bound, trigger it with the namespace.
			 */		
			
			/**
			 * IMPORTANT: this call to the plugin specifies ALL the settings (plus some of jQuery.ScrollTo)
			 * This is done so you can see them. You DON'T need to specify them all.
			 * A 'target' is specified, that means that #screen is the context for target, prev, next and navigation.
			 */
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
					/**
					 * 'this' is the triggered element 
					 * e is the event object
					 * elem is the element we'll be scrolling to
					 * $pane is the element being scrolled
					 * $items is the items collection at this moment
					 * pos is the position of elem in the collection
					 * if it returns false, the event will be ignored
					 */
					 //those arguments with a $ are jqueryfied, elem isn't.
					e.preventDefault();
					if( this.blur )
						this.blur();
				},
				onAfter:function( elem ){
					//'this' is the element being scrolled ($pane) not jqueryfied
				}
			});
			
			/**
			 * No need to have only one element in view, you can use it for slideshows or similar.
			 * In this case, clicking the images, scrolls to them.
			 * No target in this case, so the selectors are absolute.
			 */
			
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
			
			/**
			 * The call below, is just to show that you are not restricted to prev/next buttons
			 * In this case, the plugin will react to a custom event on the container
			 * You can trigger the event from the outside.
			 */
			
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
			
			/**
			 * The following you don't need to see, is just for the "Add 2 Items" and "Shuffle"" buttons
			 * These exemplify the use of the option 'lazy'.
			 */
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
    <td colspan="2" bgcolor="#E81C1B">
<div id="theHeader">
	<?
	menumainsite("videofiesta");
	?>
</div>
      <table border="0" align="right" cellpadding="0" cellspacing="4">

        <tr>
          <td id="menu"><a href="<?=URL_VIDEO?>">home</a></td>
<?
$query = $this->db->query("select * from tbl_video_kategori where id<>11");
if ($query->num_rows() > 0) {
			foreach ($query->result() as $row)
			{
?>				          
          <td id="menu"><a href="<?=URL_VIDEO?><?=$row->kategori_url?>"><?=$row->kategori?></td>
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
    <td><img src="<?=URL_VIDEO_IMG?>header_01.gif" width="315" height="19" /></td>
    <td rowspan="2" valign="top" align="right" bgcolor="#2F2F2F">
	<form name="form1" method="post" action="<?=site_url("search")?>" style="padding-top:2px;">
      <input name="vsearch" type="text" size="15">
      <input type="submit" name="Submit" value="search">
	</form></td>
  </tr>
  <tr>
    <td><a href="http://www.indosiar.com/videofiesta/"><img src="<?=URL_VIDEO_IMG?>header_03.gif" width="315" height="50" border="0" /></a></td>
  </tr>
  <tr>
    <td><img src="<?=URL_VIDEO_IMG?>header_04.gif" width="315" height="24" /></td>
    <td><img src="<?=URL_VIDEO_IMG?>header_05.gif" width="681" height="24" /></td>
  </tr>
  <tr>
    <td colspan="2"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="10" height="5" /></td>
  </tr>
</table>