<?php
/**
 * @package WordPress
 * @subpackage Frank
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="verify-v1" content="by1MB81PjkQUdjinZJQn73aCwjaV5erxwsvtTP7pTNE=" />
	<meta name="viewport" content="width=device-width" />
	
	<link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAOBJREFUeNrkUbsKwkAQ3Fs0EbVTP05JpSD4iEUKBb9AO/ErDJJgI5bi72gv8e44Hc9Hk1Owdthib4eZG3ZFzfOISFgYY9Az89WCXBAQgJPGgC8XixidpYSBzwyLvOA+lUqtk2TQ75+yDDUMw1UcX5RyCgqYwvuw38+Xy9PxKJhni8VkNHrkdARDpEaphKbTamkpUe1mE08MQeWL30qYPTJorekL4FQhQgYI4N0NAjRRr1f58AnVfb9KtNtsxjY3MI2ibZpCACoveK3VLv65Vrsfz17GfYefD0e/4C8FNwEGAIXxbCAjm60LAAAAAElFTkSuQmCC" rel="icon" type="image/x-icon" />
	<link rel="apple-touch-icon" href="/wp-content/themes/somerandomdude/images/apple-touch-icon.png"/>
	
	<title><?php if (function_exists('is_tag') && is_tag()) { echo 'Tag Archive for &quot;'.$tag.'&quot;&mdash;'; } elseif (is_archive()) { wp_title(''); echo ' Archive&mdash;'; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot;&mdash;'; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo '&mdash;'; } elseif (is_404()) { echo 'Not Found&mdash;'; } bloginfo('name'); ?></title>
	
	<?php 
	if(!frank_devmode()) { frank_srd_enqueue_styles(); }
	else { frank_srd_enqueue_styles_dev(); }
	?>
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds.feedburner.com/somerandomdude" />
	<link rel="pingback" href="/xmlrpc.php" />
	
	<!--[if lte IE 8]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	<!--[if lt IE 7]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
	<![endif]-->
	
	<script type="text/javascript">
		var analyticsFileTypes = [''];
		var analyticsEventTracking = 'enabled';
	</script><script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-645251-1']);
		_gaq.push(['_trackPageview']);
		_gaq.push(['_trackPageLoadTime']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<?php wp_head(); ?>
</head>
<body id="page" <?php body_class($class); ?>>
<div class='container'>
	<div class="row">
	<header id="page_header" class="clearfix">
		<h1 id="title" class='three columns'><a href="/">Some Random Dude</a></h1>
		<nav class='nine columns'>
			<ul id="menu-primary" class="menu"><li><a href="/work/">Work</a></li>
			<li class="last"><a href="/hello/" rel="author">Hello</a></li>
			<li class="rss"><a href="http://feeds.feedburner.com/somerandomdude">RSS</a></li>
			<li class="twitter"><a href="http://twitter.com/somerandomdude">Twitter</a></li>
			</ul>
		</nav>
	</header>
	</div>