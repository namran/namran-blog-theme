<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="https://www.facebook.com/2008/fbml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="copyright" content="Creative Common (CC)" />
<meta name="distribution" content="global" />
<meta name="language" content="en, my" />
<meta name="author" content="Namran Hussin" />

<?php if(is_archive()) { ?>
  <meta name="robots" content="noarchive,noodp" />
<?php } ?>
<?php if(is_search() || is_404()) { ?>
  <meta name="robots" content="noindex,noarchive" />
<?php } ?>
<title><?php if (is_home () ) { bloginfo('name'); echo " - "; bloginfo('description');
} elseif (is_category() ) {single_cat_title(); echo " - "; bloginfo('name');
} elseif (is_single() || is_page() ) {single_post_title(); echo " - "; bloginfo('name');
} elseif (is_search() ) {bloginfo('name'); echo " search results: "; echo wp_specialchars($s);
} else { wp_title('Namran Hussin',true); }?></title>
<link rel="stylesheet" href="/wp-content/themes/talian-10/style.css" type="text/css" media="screen" />
<style type="text/css" media="screen">
<!-- @import url( /wp-content/themes/talian-10/style.css ); -->
</style>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds2.feedburner.com/HawkeyeExpression"  />
<link rel="alternate" type="text/xml" title="RSS .92" href="/feed/rss/"  />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="/feed/atom/" />

<!-- WP head Start -->
<?php wp_head(); ?>
<!-- WP head end -->
</head>
<?php flush(); ?>
<body>

<div id="wrap_talia">
  <div id="container_talia">
    <div id="header_talia">
	  <div class="header_site_desc">
      <h1><a href="/"><?php bloginfo('name'); ?></a></h1>
      <p><?php echo " - "; bloginfo('description'); ?> </p>
	  </div>
	  <div class="header_nav_box">
            <div id="searchform">		
               <?php livesearchpopup_searchbox() ?> 
            </div>
<div class="navigators">	
       <ul>
<li><a href="/">Home</a></li>
<li class="page_item page-item-112"><a href="/about/" title="About">About</a></li>
<li class="page_item page-item-1575"><a href="/archives/" title="Archives">Archives</a></li>
<li class="page_item page-item-932"><a href="/subscribe/" title="Subscribe">Subscribe</a></li>
<li class="page_item page-item-1579"><a href="/downloads/" title="Downloads">Downloads</a></li>
		</ul>
		</div>
	  </div>
    </div>