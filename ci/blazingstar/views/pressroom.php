
<div class="content">
	<?php 
				include_once('media/scripts/simple_html_dom.php');
				include('media/magpie/rss_fetch.inc');
				error_reporting(0);
			 	$url = "http://twitter.com/statuses/user_timeline/14626381.rss";
				 
				$feed = fetch_rss($url);		
			
				echo "<p><a>".$feed->items[0]['title']. "</a></p>";
				echo "<ul><li>".$feed->items[0]['guid']. "</li></ul>";
				
				echo "<p><a>".$feed->items[1]['title']. "</a></p>";
				echo "<ul><li>".$feed->items[1]['guid']. "</li></ul>";
				
				echo "<p><a>".$feed->items[2]['title']. "</a></p>";
				echo "<ul><li>".$feed->items[2]['guid']. "</li></ul>";
				
				echo "<p><a>".$feed->items[3]['title']. "</a></p>";
				echo "<ul><li>".$feed->items[3]['guid']. "</li></ul>";
					
				?>
</div>

<div class="content2" style="width: 610px; height: 350px; position: relative;">
	<div id=newsHeader><h2>News And Information</h2></div>
		<div id=newsContent>
			<h3>Van Man of the Year</h3>
				<div id='newsP1'><img src="media/images/andytodd.jpg" width="90" height="90" align="right"/><p>This months Award goes to Andy Todd for clocking up a massive 25000 miles this month, Andy is one of our new drivers and is 	putting in the hard work and dedication that we respect at BSD.
				
				<br>
				
				Our Congratulations go out to Andy and he is awarded with a complimentary meal for 2 at the Zeenat Restaurant. All drinks included.</p></div>
				<div id='newsP2'>
					<h3>The Fuelcard Company</h3>
					<p>The Fuelcard Company is proud to have teamed up with the Blazing Star Delivery to offer the 'Exchange Fuel Card' to you. As the largest fuel card supplier in the UK, The Fuelcard Company uses their buying power in the market to make fuel management easier and more cost effective for you.
						
						Don't let the cost of rising fuel price crush your business, plan ahead, be smart and make every litre count. For more free information on how you could be saving extra in your company contact one of our account managers.</p>
		<div id=banner>
		<embed width="612" height="90" align="top" src="http://www.transportexchangegroup.com/flash/fuelcards/fuelcards_banner-790x90.swf" allowscriptaccess="always" alignsaveembedtags="true" quality="high" wmode="transparent" bgcolor="#ffffff" name="760x90" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></div>
		
		</p>
		</div>
	</div>

</div>


<div id="navBeta">
	
		<div class="menu-item alpha">
		    <div class="menu-item">
		   		<script type="text/javascript"><!--
				google_ad_client = "ca-pub-1532072777147280";
				/* Big Right Nav */
				google_ad_slot = "5016829147";
				google_ad_width = 160;
				google_ad_height = 600;
				//-->
				</script>
				<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
		    </div>
		</div>
	<!--	<script type="text/javascript">
	google_ad_client = "ca-pub-1532072777147280";
Couriers 
	google_ad_slot = "8811024847";
	google_ad_width = 120;
	google_ad_height = 600;
	
	</script>
	<script type="text/javascript"
	src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script> -->
	</div>
