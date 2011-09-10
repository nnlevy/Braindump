<?php

/* Required
-------------------- */
$site_name = "Nightly Labs";
$site_author = "Nir Levy and Giovanni Hobbins";
$page_title = "Nightly Labs - Extraordinary Web Presence from Atlanta.";
$page_type = "book"; // http://ogp.me/#types
$page_description = "We develop beautiful dynamic websites and connect high potential projects with extraordinary talent.";
$page_image = "";

/* Contact
-------------------- */
$contact_email = 'nir@nightlylabs.com';
$contact_phone = '(785) 538-9647';

/* Basic
--------------------------- */ ?>
<meta property="og:site_name" content='<?php echo $site_name; ?>' />
<title><?php echo $page_title; ?></title>
<meta name="author" content='<?php echo $site_author; ?>'>

<meta property="og:type" content='<?php echo $page_type; ?>'>
<meta property="og:title" content="<?php echo $page_title; ?>">
<meta property="og:description" content='<?php echo $page_description; ?>'>
<meta name="description" content='<?php echo $page_description; ?>'>
<meta property="og:image" content="<?php echo $page_image; ?>">

<?php /* Local
--------------------------- */ ?>
<meta property="og:street-address" content="<?php echo $local_address; ?>" />
<meta property="og:locality" content="<?php echo $local_city; ?>" />
<meta property="og:region" content="<?php echo $local_region; ?>" />
<meta property="og:postal-code" content="<?php echo $local_zip; ?>" />
<meta property="og:country-name" content="<?php echo $local_country; ?>" />

<?php /* Contact Info
--------------------------- */ ?>
<meta property="og:email" content="<?php echo $contact_email; ?>" />
<meta property="og:phone_number" content="<?php echo $contact_phone; ?>" />
<meta property="og:fax_number" content="<?php echo $contact_number; ?>" />

<?php /* Mobile Support
--------------------------- 
j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
device-width : Occupy full width of the screen in its current orientation
initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
---------------------------- */ ?>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">