
<!-- ===== START [FOOTER] ===== -->
<div id="footer" class="hasChrome semi">

	<div class="chromeContent">

		<ul>
			<li>
				<strong>About Us</strong>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#" target="_blank">The Team</a></li>
						<li><a href="#">London 2012 Olympics</span></li>
						<li><a href="<?php echo base_url() . 'pressroom'; ?>">PressRoom</span></li>
					</ul>
			</li>
			
			<li>
				<strong>Legal Stuff</strong>
					<ul>
						<li><a href="#">Website Usage</a></li>
						<li><a href="#" target="_blank">Privacy Notice</a></li>
						<li><a href="<?php echo base_url() . 'terms'; ?>">Terms &amp; Conditions</span></li>
					</ul>
			</li>

			<li>
				<strong>Support</strong>
					<ul>
						<li><a href="<?php echo base_url() . 'contactus'; ?>">Contact Us</span></li>
						<li><a href="<?php echo base_url() . 'careersform'; ?>">Careers</span></li>
						<li><a href="<?php echo base_url() . 'sitemap'; ?>">Site Map</span></li>
						<li><a href="#">important Links</span></li>
					</ul>
				</li>	

		<li class="last-child">
			<strong>Blazing Star Email Alerts</strong>
				<p>Sign up for courier news, alerts and work, enter your Email.</p>
				<?php	echo validation_errors(); 
					
						echo form_open("/emailform");
						?>
						   <label for="email"></label>
						   <input type="text" name="email"><br>
						 
						   <input type="submit" name="submit" value="Submit">
						 </form>
		</li>
		</ul>
		<div>
			<strong>Staying Connected</strong>
				<ul class="connected">
					<li class="facebook"><a href="http://www.facebook.com/pages/Blazing-Star-Delivery-LTD/317972411573195#"></a><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.blazingstardelivery.com%2FhomeController&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe></li>
					<li class="twitter"><a href="http://twitter.com/dubaivibe"></a></li>
					<li class="stupidApp"><a href="http://itunes.apple.com/app/stupid-deal-of-the-day/id303679160?mt=8"></a></li>
					<li class="youTube"><a href="http://www.youtube.com/dubaivibe" target="_blank"></a></li>
				</ul>
		</div>
		
		
</div><!-- end chrome container -->
</div>
<!-- end [footer] -->

<div class="clearfix">
		<div id="copyright">
			<p>Entire contents Copyright &copy; 2012 Blazing Star Inc.</p>
			<p>Blazing Star Delivery is a registered trademark of Dubaivibe Inc. All Rights Reserved.</p>
		</div>
	<!--
	 	<ul id="credentials">
			<li><a id="bizrateMedal" href="" target="_blank"><img alt="BizRate Customer Certified (GOLD) Site" src="media/images/c.gif" /></a></li>
			<li>
			<a href="#"target="_blank"><img src="media/images/25210_coe.gif"alt="Bizrate Circle of Excellence Site - MERCHANT Reviews at Bizrate"width="60" height="85" align="top" border="0" ></a>
			</li>
			<li><a href="#"><img alt="PayPal" src="media/images/paypal.png" /></a></li>

			<li><a id="bmlFaq_MF" href="/mf/includes/bmlFaqModal.jsp"><img alt="Bill Me Later" src="media/images/billmelater.png" /></a></li>
		</ul> -->
	</div>

</div>
<!-- end [main container] -->
</body>
</html>