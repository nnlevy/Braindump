<?php /* Establishing The Location for Calling Purposes
------------------------------------------------------- */

$site_url = "http://www.nightlylabs.com";
$location = $_SERVER['PHP_SELF'];

$locChars = count_chars($location, 1);
$hostChars = count_chars($site_url, 1);
$find = ord('/');

$numSlash = $locChars[$find];
$startSlash = $hostChars[$find];

for ( $i = $startSlash - 1; $i < $numSlash; $i++ ) {
	$root .= '../';
}

// Head
include($root . '_include/_tpl/head-1-above-meta.php');
include($root . '_include/_tpl/head-2-meta-identity.php');
include($root . '_include/_tpl/head-3-link-rel.php');
include($root . '_include/_tpl/head-4-jquery.inc');
echo "</head>";

// Open Body
include($root . '_include/_tpl/body-1-open.php');
?>

<?php
	// ATTENTION MAIN BODY STARTS HERE
	
	include($root . '_include/cms/home-body.php');

	// ATTENTION: MAIN BODY ENDS HERE
?>

<?php include($root . '_include/_tpl/body-2-close.php'); ?>