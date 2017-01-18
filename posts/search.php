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

get_header();

$s = get_query_var('s');

if (get_option('permalink_structure') != '') {
	$search_title = '<a href="'.trailingslashit(get_bloginfo('url')).'search/'.urlencode($s).'">'.htmlspecialchars($s).'</a>';
}
else {
	$search_title = '<a href="'.trailingslashit(get_bloginfo('url')).'?s='.urlencode($s).'">'.htmlspecialchars($s).'</a>';
}

?>

<div id="content">
<div id="content-top">
</div>
<div id="content-middle">
	<div id="inner-content-middle">

	<h1><?php printf(__('Search Results for: %s', 'carrington-text'), $search_title); ?></h1>

<?php

cfct_loop();
cfct_misc('nav-posts');

?>

</div>
</div>
<div id="content-bottom">
<?php

cfct_misc('nav-posts');

?>
</div>
</div>
<?php

get_sidebar();

get_footer();

?>