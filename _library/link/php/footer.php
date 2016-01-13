<?
//echo 'footer.php loaded';

function season(){
	if((date('n') == 9) OR (date('n') == 10) OR (date('n') == 11)){
		$output = 'autumn';
		}
	if((date('n') == 12) OR (date('n') == 1) OR (date('n') == 2)){
		$output = 'winter';
		}
	if((date('n') == 3) OR (date('n') == 4) OR (date('n') == 5)){
		$output = 'spring';
		}
	if((date('n') == 6) OR (date('n') == 7) OR (date('n') == 8)){
		$output = 'summer';
		}
	return $output;	
	}

?>

<?echo $_footerlinks;?>

<div class="copyright">&copy; <?echo date('Y');?> by Nin-yo.com, from scratch. All Rights Reserved.</div>

<script type="text/javascript">
	
/*$(window).scroll(function () {
    parallax();
});

function parallax() {
    var ev = {
        scrollTop: document.body.scrollTop || document.documentElement.scrollTop
    };
    ev.ratioScrolled = ev.scrollTop / (document.body.scrollHeight - document.documentElement.clientHeight);
    render(ev);
}

function render(ev) {
    var t = ev.scrollTop;
    var y = Math.round(t * 1/10) - 100;
    $('#top').css('background-position', '0 ' + y + 'px');
}*/

/* HEAT MAP—————————————————————————————————————————————*/

/*(function() {
var hm = document.createElement('script'); hm.type ='text/javascript'; hm.async = true;
hm.src = ('++u-heatmap-it+log-js').replace(/[+]/g,'/').replace(/-/g,'.');
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(hm, s);
})();*/

/* SLICK SLIDERS—————————————————————————————————————————————*/

$(document).ready(function(){$('.single-item').slick({
		
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 3500,
		
	});});	

/* ANALYTICS—————————————————————————————————————————————*/

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61359501-1', 'auto');
  ga('send', 'pageview');

	
</script>
</body>
</html>

