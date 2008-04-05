	<div id="Sidebar">
      <?php /* If this is a 404 page */ if (is_404()) { ?>
      <?php /* If this is a category archive */ } elseif (is_category()) { ?>
      <p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>
      
      <?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
      <p>You are currently browsing the archives for the day <?php the_time('l, F d, Y'); ?>.</p>
      
      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
      <p>You are currently browsing the archives for <?php the_time('F, Y'); ?>.</p>

      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <p>You are currently browsing the archives for the year <?php the_time('Y'); ?>.</p>
      
     <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
      <p>You have searched the archives for <strong>'<?php echo wp_specialchars($s); ?>'</strong>.
         If you are unable to find anything in these search results, you can try one of these links.</p>

      <?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> archives.</p>

      <?php } ?>

    <h1>Syndicate <a href="http://feeds.feedburner.com/corkboard"><img src="<?php bloginfo('template_directory');?>/images/rss.gif"></a></h1>
    <p>Subscribe to our <a href="http://feeds.feedburner.com/corkboard">RSS feed</a>.</p>
    
		<h1>Current Project</h1>
		<p>We're currently rolling out <a href="http://foodlab.tv">Food Lab</a>, a community cookbook.</p>

    <h1>Past Projects</h1>
    <p>In the past year we've launched <a href="http://yourdailysales.com">Daily Sales</a>, a web application for car dealerships, <a href="http://wiffled.com">Wiffled</a>, the Internet's best Wiffle Ball site, and <a href="http://activebudget.org">ActiveBudget</a>, an open source budgeting application.</p>
    
    <h1><a href="/">Corkboard, Inc.</a></h1>
    <p>Corkboard is Jordan McKible and Joshua Cantara.  We're based in Bow, NH. You can call us at (603) 219-8123 or email <a href="mailto:jordan@mckible.com">jordan@mckible.com</a>.</p>
    
     <h1>Twitter</h1>
     <p><a href="http://twitter.com/jmckible">Jordan</a>: <span id="my_twitter_status"></span></p>
    
    <h1>Archives</h1>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
    
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  
	</div>

