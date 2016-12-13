<?php 
/**
 * @file
 * Alpha's theme implementation to display the basic html structure of a single
 * Drupal page.
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
      <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <hr class="banner-separator" />

<!-- The following div contains the Cornell University logo with unit signature -->
<div id="cu-identity-wrap">
	<div id="cu-identity-content">
		<a id="insignia-link" href="http://www.cornell.edu/"><img src="/sites/all/themes/fineartslibrary/images/layout/cu_logo_unstyled.gif" alt="Cornell University" border="0" /></a>
		<div id="unit-signature-links">
			<a id="cornell-link" href="http://www.cornell.edu/">Cornell University</a>
						<a id="unit-link" href="http://library.cornell.edu/">Cornell University Library</a>

		</div>
  

	
	<!-- 
		The search-form div contains a form that allows the user to search 
		either pages or people within cornell.edu directly from the banner.
	-->
	<div id="search-navigation">

			<ul>
				<li><a href="/node/32">Search This Site</a></li>
				<li><a href="http://www.cornell.edu/search/">Search Cornell</a></li>
			</ul>
		</div>
	
	
	</div> <!-- cu-identity-content -->
</div> <!-- cu-identity-wrap -->

<hr class="banner-separator" /> 
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>