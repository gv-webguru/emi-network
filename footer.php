<style>
  span.bullets:after {
    content: "•";
    padding-left: 5px;
    padding-right: 5px;
  }

  img.social-img {
    padding-right: 5px;
  }
</style>

<footer class="footer">
	<div class="container">
	<div class="col-lg-8">
    <?php dynamic_sidebar( 'footer-content' ); ?>
    </div>

	<p class="right">© <?php echo date("Y"); ?> All Rights Reserved. <?php bloginfo('name'); ?></p>
	</div>
</footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
<script>
$(document).ready(function(){
    $("#search").click(function(){
      // $("#search-icon form input").toggle();
      $("#search-icon form input").show();
    });
});
</script>

<script>

jQuery(document).ready(function(){
	jQuery('.submenu').css('display','block');
	
	jQuery('.navi li').each(function() {
      if(jQuery(this).has("ul").length){
	   if(jQuery('.submenu').css('display') == 'block'){
        jQuery(this).addClass('arrowdown');
       }
	    jQuery('.submenu li').click(function(){
	     jQuery('.navi > li').removeClass('active');
	    });
      }
    });
	jQuery('.navi li').click(function(){
	 if(!jQuery(this).has("ul").length){
	  jQuery('.submenu li').removeClass('active');
     }
	 jQuery('.submenu').css('display','none');
	 jQuery('.navi li').removeClass('arrowdown');
	 jQuery(this).each(function() {
      if(jQuery(this).has("ul").length){
	   jQuery(this).addClass('arrowdown');
       jQuery('.submenu').css('display','block');
	    jQuery('.submenu li').click(function(){
	     jQuery('.navi > li').removeClass('active');
	    });
      }
     jQuery('.submenu li').click(function(){
	   jQuery('.submenu').css('display','block');
     });
     if(jQuery('.submenu').css('display') == 'none'){
      jQuery(this).removeClass('arrowdown');
     }
    });


});
// if window.location.hash = true, than open the tab where tab x.href == hash
if(window.location.hash) {
    var hash = window.location.hash;
    jQuery('ul.navi a[href="' + hash + '"]').tab('show');

    //go to top of page instead of hashtag location
    window.onload = function(){
        window.scrollTo(0, 0);
    }   
}
if(history.replaceState) {
    history.replaceState(null, null, ' ');
}
else {
    location.hash = ' ';
}
});
</script>

<script type="text/javascript">

    
  // var _gaq = _gaq || [];
  // _gaq.push(['_setAccount', 'UA-59056804-1']);
  // _gaq.push(['_trackPageview']);

  // (function() {
  //   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  //   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  //   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  // })();
$(".emi_video").click(function(){
    $(".emi_video_load_bg").show();
    $(".emi_video_load").show();
});

$(".emi_video_load_bg").click(function(){
    $(".emi_video_load_bg").hide();
    $(".emi_video_load").hide();
});



$(".close_video").click(function(){
    $(".emi_video_load_bg").hide();
    $(".emi_video_load").hide();
});


var iframe = $('#player1')[0];
var player = $(iframe);
$('.close_video').bind('click', function() {
    player.api('unload');
});

$('.emi_video_load_bg').bind('click', function() {
    player.api('unload');
});
  
</script> 


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59056804-1', 'auto');
  ga('send', 'pageview');

</script>


<script type="text/javascript">
piAId = '74252';
piCId = '1374';
 
(function() {
                function async_load(){
                                var s = document.createElement('script'); s.type = 'text/javascript';
                                s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
                                var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
                }
                if(window.attachEvent) { window.attachEvent('onload', async_load); }
                else { window.addEventListener('load', async_load, false); }
})();
</script>

  <?php wp_footer(); ?>
  </body>
</html>

