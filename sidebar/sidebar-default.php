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

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

$dragerPage = array(133, 510);

?>

<div id="sidebar">
	<div id="sidebar-top">
	</div>
	<div id="primary-sidebar">
	
		<div id="inner-primary-sidebar">
		
		<!--<div style="height:16px;"></div>-->
<?php
$post = $orig_post;
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary Sidebar') ) {
?>


		</div>

<div class="widget" <? if(!in_array($_GET['page_id'], $dragerPage)) echo "style='display:none;'"; else echo "style='padding-top:50px;padding-bottom:50px;'"; ?>>
		<div style="text-align:center;"><img src="./wp-content/themes/drager_theme/img/pribeh_dragera-mini.jpg" /></div>	
</div>
<div class="widget" <? if(!in_array($_GET['page_id'], $dragerPage)) echo "style='display:none;'"; else echo "style='padding-top:50px;padding-bottom:50px;'"; ?>>
		<div style="text-align:center;"><img src="./wp-content/themes/drager_theme/img/pribeh_dragera-mini2.jpg" /></div>	
</div>
<div class="widget" <? if(!in_array($_GET['page_id'], $dragerPage)) echo "style='display:none;'"; else echo "style='padding-top:50px;padding-bottom:50px;'"; ?>>
		<div style="text-align:center;"><img src="./wp-content/themes/drager_theme/img/pribeh_dragera-mini3.jpg" /></div>	
</div>
<div class="widget" <? if(!in_array($_GET['page_id'], $dragerPage)) echo "style='display:none;'"; else echo "style='padding-top:50px;padding-bottom:50px;'"; ?>>
		<div style="text-align:center;"><img src="./wp-content/themes/drager_theme/img/pribeh_dragera-mini4.jpg" /></div>	
</div>

<div class="widget" <? if(in_array($_GET['page_id'], $dragerPage)) echo "style='display:none;'"; ?>>
	<a href="<?php bloginfo('url') ?>/?page_id=133"><h2 class="title">Příběh Dragera</h2></a>
		<a href="<?php bloginfo('url') ?>/?page_id=133">
		<div style="text-align:center;"><img src="./wp-content/themes/drager_theme/img/pribeh_dragera-mini.jpg" /></div>
		</a>	
</div>

<div class="widget" <? if(in_array($_GET['page_id'], $dragerPage)) echo "style='display:none;'"; ?>>
	<a href="<?php bloginfo('url') ?>/?page_id=510"><h2 class="title">Posádka "První"</h2></a>
		<a href="<?php bloginfo('url') ?>/?page_id=510">
		<div style="text-align:center;"><img src="./wp-content/themes/drager_theme/img/pribeh_dragera-mini2.jpg" /></div>
		</a>	
</div>

<div class="widget" <? if(in_array($_GET['page_id'], $dragerPage)) echo "style='display:none;'"; ?>>
	<a href="<?php bloginfo('url') ?>/?page_id=489&amp;forumaction=showforum&amp;forum=1"><h5>posádka lodi Horizont</h5></a>
	<a href="<?php bloginfo('url') ?>/?page_id=491&amp;forumaction=showforum&amp;forum=3"><h5>posádka lodi Antoinetta</h5></a>
	<a href="<?php bloginfo('url') ?>/?page_id=495&amp;forumaction=showforum&amp;forum=4"><h5>posádka lodi Zlatá cesta</h5></a>
	<a href="<?php bloginfo('url') ?>/?page_id=493&amp;forumaction=showforum&amp;forum=2"><h5>posádka lodi Jiskra přátelství</h5></a>
	<a href="<?php bloginfo('url') ?>/?page_id=602&amp;forumaction=showforum&amp;forum=5"><h5>Záchranný člun</h5></a>
</div>

<!--.widget-->
<div class="widget" <? if(in_array($_GET['page_id'], $dragerPage)) echo "style='display:none;'"; ?>>
			<h2 class="title">Žijeme na Internetu</h2>
			<ul>
			<li style="display:inline;">
				<a href="http://www.facebook.com/home.php?sk=group_205540832789651&ap=1" target="_blank"><img src="./wp-content/themes/drager_theme/img/facebook.png" alt="Facebook" name="facebook" width="30" height="30" id="facebook" /></a>
			</li>
			<li style="display:inline;">
				<a href="<?php bloginfo('rss2_url'); ?>" target="_blank"><img src="./wp-content/themes/drager_theme/img/rss.png" alt="RSS" name="rss" width="30" height="30" id="rss" /></a>
			</li>
			</ul>
</div>
<!--<div class="widget">
			<h2 class="title"><?php //_e('Stránky', 'carrington-text'); ?></h2>
			<ul>
				<?php //wp_list_pages('title_li='); ?>
			</ul>-->
<!--.widget-->
<div class="widget" <? if(in_array($_GET['page_id'], $dragerPage)) echo "style='display:none;'"; ?>>
			<h2 class="title"><?php if(!in_array($_GET['page_id'], $dragerPage)) _e('Archiv', 'carrington-text'); ?></h2>
			<ul>
				<?php if(!in_array($_GET['page_id'], $dragerPage)) wp_get_archives(); ?>
			</ul>
</div>
<!--.widget-->
<div class="widget" <? if(in_array($_GET['page_id'], $dragerPage)) echo "style='display:none;'"; ?>>
			<h2 class="title"><?php if(!in_array($_GET['page_id'], $dragerPage)) _e('Kategorie', 'carrington-text'); ?></h2>
			<ul>
				<?php if(!in_array($_GET['page_id'], $dragerPage)) wp_list_cats(); ?>
			</ul>
</div>
<!--.widget-->
<div class="widget" style="display:none;">
			<h2 class="title"><?php if(!in_array($_GET['page_id'], $dragerPage)) _e('Štítky', 'carrington-text'); ?></h2>
			<?php if(!in_array($_GET['page_id'], $dragerPage)) wp_tag_cloud('smallest=10&largest=18&unit=px'); ?>
</div>
<!--.widget-->
<!--<div class="widget under meta">
			<?php if(!in_array($_GET['page_id'], $dragerPage)) wp_register('<p>', '</p>'); ?> 
			<p><?php if(!in_array($_GET['page_id'], $dragerPage)) wp_loginout(); ?></p>
</div>-->
<!--.widget-->


<?php
}
?>	
		
	</div><!--#primary-sidebar-->
	<div id="sidebar-bottom" <? if(in_array($_GET['page_id'], $dragerPage)) echo "style='display:none;'"; ?>>
	<p><!--Designed by <a href="http://www.bramblingdesign.com">Brambling Design</a> | -->&copy; Copyright <?php if(!in_array($_GET['page_id'], $dragerPage)) echo date("Y") ?> <a href="<?php if(!in_array($_GET['page_id'], $dragerPage)) bloginfo('url') ?>/" title="Home" rel="home"><?php if(!in_array($_GET['page_id'], $dragerPage)) bloginfo('name') ?></a></p>
	
	
	
	</div>
</div>
<!--#sidebar-->