<style>
	.sep-line { height: 1px; background-color: #fefefe; border-top: 1px solid #85A1AA; margin-bottom: 10px; margin-top: 10px; }
</style>

<div id="header">
    
<?php include($root . '_include/_tpl/section-1-stars.inc'); ?>
<style>#slider{margin-top:-10px;}</style>

    <div id="slider">
        <div id="wrap">
            <ul id="mycarousel" class="jcarousel-skin-tango">
                <?php include($root . '_include/cms/home-slider.php'); ?>
            </ul>
    	</div>
	</div>
</div>

<div id="body">
	<div id="bgcontainer">
    	<div id="container">
        	<div id="tier1">
                <div id="intro">
                	<h1>Detail driven perfection.</h1>
                    <span>We develop beautiful dynamic websites and connect high potential projects with extraordinary talent. We provide a range of clients with high end web design, powerful database solutions, effective marketing strategies, and much more. It's the very best in web implementation with "high-result" consulting services thrown in. Wondering how to work with us? Contact us at the bottom of this page. </span>
                    <img src="<?php echo $site_url; ?>/_include/_img/body/graphic.png" height="94" width="560" />                    
                </div>
                <?php include($root . '_include/cms/blog.php'); ?>
            </div>            
            </div> 
            
            <?php include($root . '_include/cms/about-us.php'); ?>
            <?php include($root . '_include/cms/sliders-section.php'); ?> 
            <?php include($root . '_include/cms/footer.php'); ?> 


	</div>
</div>