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

?>
	</div><!--#inner_page-->
	</div><!--#page-->
		<div class="clear"></div>
		<div id="footer">
			<div id="footer_content">
				<div id="inside_footer_content">
			<!--<ul>-->
			
			<?php
				//$post = $orig_post;
				//	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar') ) {
			?>

		<!--<li class="widget">
			<h2 class="title"><?php _e('Vyhledávání', 'carrington-text'); ?></h2>
			<?php cfct_form('search'); ?>
		</li>--><!--.widget-->
		<!--<li class="widget">
			<h2 class="title"><?php _e('Stránky', 'carrington-text'); ?></h2>
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</li>--><!--.widget-->
		<!--<li class="widget">
			<h2 class="title"><?php _e('Kategorie', 'carrington-text'); ?></h2>
			<ul>
				<?php wp_list_cats(); ?>
			</ul>
		</li>--><!--.widget-->
		<!--<li class="widget">
			<h2 class="title"><?php _e('Archiv', 'carrington-text'); ?></h2>
			<ul>
				<?php wp_get_archives(); ?>
			</ul>
		</li>--><!--.widget-->
	

<?php
//}
?>
			
			
			<!--</ul>-->
			<div style="text-align:center;height:20px;float:left;">
			<a href="http://drager.skauting.cz/" title="Lk Drager" target="_blank">LK Drager</a>
			 vzniká za spolupráce 
			 <a href="http://kapitanska.skauting.cz/" title="KLŠVS a ILŠVS" target="_blank">KLŠVS a ILŠVS</a>
			 , pod záštitou 
			 <a href="http://vodni.skauting.cz/" title="Hlavní kapitanát vodních skautů" target="_blank">HKVS</a>
			  a v rámci 
			  <a href="http://verejnost.skaut.cz/" title="Skauting pro život!" target="_blank">Junáka - svazu skautů a skautek ČR</a>.
			</div>
			<div style="width:900px;text-align:right;">
				<a href="http://krizovatka.skaut.cz/" title="Skautská křižovatka" target="_blank">
				<img src="./wp-includes/images/junak_logo_bar.png" alt="Skating" />
				</a>
			</div>
			
			
				</div>
			</div>
		</div><!--#footer -->
		</div>	
		</div>
	<?php wp_footer() ?>
</body>
</html>