<?php

// This file is part of the Carrington Text Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2009 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

$dragerPage = array(133, 510);

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

$blog_desc = get_bloginfo('description');
(is_home() && !empty($blog_desc)) ? $title_description = ' - '.$blog_desc : $title_description = '';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ).$title_description; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'carrington-text' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'carrington-text' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	
	<link rel="stylesheet" type="text/css" media="screen, print, handheld" href="<?php bloginfo('template_url') ?>/css/carrington-text.css" />
	
	<!--[if lt IE 8]>
<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script>
<![endif]-->

<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" media="screen, print, handheld" href="<?php bloginfo('template_url') ?>/css/ie6.css" />
<![endif]-->


<?php
	wp_head(); 
?>
<!-- GA Tracking Code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-325304-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body <? if(in_array($_GET['page_id'], $dragerPage)) echo "style='background:url(./wp-content/themes/drager_theme/img/pozadib.jpg) repeat left top;font-size:18px;'" ?>>
	<div id="container1">
			<div id="container3">
	<div id="header">
		<a href="<?php bloginfo('url') ?>/" title="Home" rel="home">
		<div style="text-align:right;padding:5px;position:absolute;width:94%;">
		<img style="height:200px;" src="./wp-content/themes/drager_theme/img/logovelke.png" />
		</div>
		</a>
		<div id="header_content">
		
		<div class="header-title">
		
		<a href="<?php bloginfo('url') ?>/" title="Home" rel="home">
		<div style="height:100%;vertical-align:middle;margin-top:15px;">
			<h2 id="blog-description" <? if(in_array($_GET['page_id'], $dragerPage)) echo "style='color:#fff;'" ?>><?php bloginfo('description'); ?></h2>
			<h1 id="blog-title" <? if(in_array($_GET['page_id'], $dragerPage)) echo "style='color:#fff;'" ?>><?php bloginfo('name') ?></h1>
		</div>
		</a>
		
		</div>
		</div>
	</div><!-- #header -->
	<div id="page">
		<div id="inner_page" <? if(in_array($_GET['page_id'], $dragerPage)) echo "style='background: url(./wp-content/themes/drager_theme/img/menu-bg.png) repeat scroll 0 0 transparent;'"; ?>>
		<div id="top_navigation">
			<ul>
				<li class="page_item page-item-2"><a href="<?php bloginfo('url') ?>/" title="Home" rel="home">Aktuality</a></li>
				<?php wp_list_pages('title_li=');?>
				
				<li class="search"><?php //cfct_form('search'); ?></li>
				</ul>
			
	</div>
