<h2>
		<a href="<?php echo base_url() . "news"; ?>"
			title="<?php echo $nav_lang['browse_news']; ?>"
		>
			<?php echo $nav_lang['news']; ?>
		</a>
	</h2>

	<?php
  //print_r($news);
		for($i = 0; $i < sizeof($news); $i ++)
		{
			?>
				<div class="news-item <?php if($i + 1 == sizeof($news)) {echo 'last';} ?>">
					<h3><?php echo $news[$i]["title"]; ?><span> &nbsp;-&nbsp; <?php echo date("jS F Y", strtotime($news[$i]['date'])); ?></span></h3>
					<?php
						echo $this->lib_bbcode->to_html($news[$i]["description"], 160);
					?>
					<p><a href="<?php echo base_url() . "news/view/" . $news[$i]["news_id"]; ?>" title="Read Full Article: <?php echo $news[$i]["title"]; ?>">Read Full Article</a></p>
				</div>

      <?php
        /*if($i + 1 < sizeof($news)) {
          ?><div class="divider"></div><?php
        }*/
		}
	?>

	<!--<div class="divider"></div>-->

<!--<div id="news-options">
		<p><a href="<?php //echo base_url() . "news"; ?>" title="Browse All News Items">Browse All News Items</a></p>
		<p><a href="#" title="Subscribe To News Feed">Subscribe To News Feed</a></p>
		<p><a href="#" title="Customise News Feed">Customise News Feed</a></p>
	</div>
	<div class="clear-both"></div>!-->
</div>
<!-- news-container end -->
