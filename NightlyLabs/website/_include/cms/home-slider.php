<?php $slider_image = 1 ?>
<?php $slider_speed = 750 ?>

<script language="javascript">

$(function() {

$('div.item-button-down').hide();

$('div#slider-img-button-up-<?php echo $slider_image ?>').click(function() {
	$('div#slider-<?php echo $slider_image ?>').animate({
	marginTop: "-114px",
	}, <?php echo $slider_speed ?>, function() {
		$('div#slider-img-button-up-<?php echo $slider_image ?>').hide();
		$('div#slider-img-button-down-<?php echo $slider_image ?>').show();
	} );

});

$('div#slider-img-button-down-<?php echo $slider_image ?>').click(function() {
	$('div#slider-<?php echo $slider_image ?>').animate({
	marginTop: "0px",
	}, <?php echo $slider_speed ?>, function() {
		$('div#slider-img-button-down-<?php echo $slider_image ?>').hide();
		$('div#slider-img-button-up-<?php echo $slider_image ?>').show();
	} );

});

<?php $slider_image = 2 ?>

$('div#slider-img-button-up-<?php echo $slider_image ?>').click(function() {
	$('div#slider-<?php echo $slider_image ?>').animate({
	marginTop: "-114px",
	}, <?php echo $slider_speed ?>, function() {
		$('div#slider-img-button-up-<?php echo $slider_image ?>').hide();
		$('div#slider-img-button-down-<?php echo $slider_image ?>').show();
	} );

});

$('div#slider-img-button-down-<?php echo $slider_image ?>').click(function() {
	$('div#slider-<?php echo $slider_image ?>').animate({
	marginTop: "0px",
	}, <?php echo $slider_speed ?>, function() {
		$('div#slider-img-button-down-<?php echo $slider_image ?>').hide();
		$('div#slider-img-button-up-<?php echo $slider_image ?>').show();
	} );

});

<?php $slider_image = 3 ?>

$('div#slider-img-button-up-<?php echo $slider_image ?>').click(function() {
	$('div#slider-<?php echo $slider_image ?>').animate({
	marginTop: "-114px",
	}, <?php echo $slider_speed ?>, function() {
		$('div#slider-img-button-up-<?php echo $slider_image ?>').hide();
		$('div#slider-img-button-down-<?php echo $slider_image ?>').show();
	} );

});

$('div#slider-img-button-down-<?php echo $slider_image ?>').click(function() {
	$('div#slider-<?php echo $slider_image ?>').animate({
	marginTop: "0px",
	}, <?php echo $slider_speed ?>, function() {
		$('div#slider-img-button-down-<?php echo $slider_image ?>').hide();
		$('div#slider-img-button-up-<?php echo $slider_image ?>').show();
	} );

});

<?php $slider_image = 4 ?>

$('div#slider-img-button-up-<?php echo $slider_image ?>').click(function() {
	$('div#slider-<?php echo $slider_image ?>').animate({
	marginTop: "-114px",
	}, <?php echo $slider_speed ?>, function() {
		$('div#slider-img-button-up-<?php echo $slider_image ?>').hide();
		$('div#slider-img-button-down-<?php echo $slider_image ?>').show();
	} );

});

$('div#slider-img-button-down-<?php echo $slider_image ?>').click(function() {
	$('div#slider-<?php echo $slider_image ?>').animate({
	marginTop: "0px",
	}, <?php echo $slider_speed ?>, function() {
		$('div#slider-img-button-down-<?php echo $slider_image ?>').hide();
		$('div#slider-img-button-up-<?php echo $slider_image ?>').show();
	} );

});

<?php $slider_image = 5 ?>

$('div#slider-img-button-up-<?php echo $slider_image ?>').click(function() {
	$('div#slider-<?php echo $slider_image ?>').animate({
	marginTop: "-114px",
	}, <?php echo $slider_speed ?>, function() {
		$('div#slider-img-button-up-<?php echo $slider_image ?>').hide();
		$('div#slider-img-button-down-<?php echo $slider_image ?>').show();
	} );

});

$('div#slider-img-button-down-<?php echo $slider_image ?>').click(function() {
	$('div#slider-<?php echo $slider_image ?>').animate({
	marginTop: "0px",
	}, <?php echo $slider_speed ?>, function() {
		$('div#slider-img-button-down-<?php echo $slider_image ?>').hide();
		$('div#slider-img-button-up-<?php echo $slider_image ?>').show();
	} );

});

<?php $slider_image = 6 ?>

$('div#slider-img-button-up-<?php echo $slider_image ?>').click(function() {
	$('div#slider-<?php echo $slider_image ?>').animate({
	marginTop: "-114px",
	}, <?php echo $slider_speed ?>, function() {
		$('div#slider-img-button-up-<?php echo $slider_image ?>').hide();
		$('div#slider-img-button-down-<?php echo $slider_image ?>').show();
	} );

});

$('div#slider-img-button-down-<?php echo $slider_image ?>').click(function() {
	$('div#slider-<?php echo $slider_image ?>').animate({
	marginTop: "0px",
	}, <?php echo $slider_speed ?>, function() {
		$('div#slider-img-button-down-<?php echo $slider_image ?>').hide();
		$('div#slider-img-button-up-<?php echo $slider_image ?>').show();
	} );

});

});

</script>

<style>

.slider-button-up {
	width:204px; height: 17px; margin-left: 10px; margin-top: -5px;
	background-image: url('<?php echo $site_url; ?>/_include/_img/body/arrowup.png');
	background-repeat: no-repeat; z-index: 10;
	}
	.slider-button-up:hover {
	background-image: url('<?php echo $site_url; ?>/_include/_img/body/arrowup.png');
	cursor: pointer; background-position-y: -20px; 
	}

.slider-button-down {
	width:204px; height: 38px; margin-top: -36px;
	background-image: url('<?php echo $site_url; ?>/_include/_img/body/arrowdown.png');
	background-repeat: no-repeat;	
	}
	.slider-button-down:hover {background-color: yellow;}


.tempbox {width: 205px; height: 90px;}


#mycarousel li {background-repeat: no-repeat; margin-right: 12px; }
#slider-img-1 { background-image: url('<?php echo $site_url; ?>/_include/_img/header/slider/slides/2.png'); }
#itemunder {background-image: url('<?php echo $site_url; ?>/_include/_img/body/placeholder2.png');}

	.item-container {position: relative; top: 0; left: 0px; }
	.item-over {
		position: absolute; top: 0; left: 0;
		height: 228px; width: 228px; z-index: 20;
		background-image: url(<?php echo $site_url; ?>/_include/_img/header/slider/placeholder.png);
		} .item-over img {margin-left: 10px;}
	
	.item-button-up {
		width:204px; height: 17px; margin-left: 10px; margin-top: -5px;
		background-image: url('<?php echo $site_url; ?>/_include/_img/body/arrowup.png');
		background-repeat: no-repeat; background-position: 0 0;
		} .item-button-up:hover { cursor:pointer; background-position: 0 -20px; }

	.item-button-down {
		width:204px; height: 17px; margin-left: 10px; margin-top: -5px;
		background-image: url('<?php echo $site_url; ?>/_include/_img/body/arrowdown.png');
		background-repeat: no-repeat; background-position: 0 0;
		} .item-button-down:hover { cursor:pointer; background-position: 0 -20px; }
		
	.item-under {
		position: absolute; top: 0; left: 0; z-index: 10;
		height: 228px; width: 228px;
		background-image:url(<?php echo $site_url; ?>/_include/_img/body/placeholder2.png);
		background-repeat: no-repeat;
		}
	.item-below {
		height: 90px; width: 210px; margin-left: 12px; background-position: 0 -105px;
		background-repeat: no-repeat; margin-bottom: 28px;
		}	

</style>

<?php $slider_img = 1; ?>

<li><div class="item-container">
	<div class="item-over" id="slider-<?php echo $slider_img; ?>">
		<img src="<?php echo $site_url; ?>/_include/_img/header/slider/slides/<?php echo $slider_img; ?>.png" width="205" height="202" />
		<div class="item-button-up" id="slider-img-button-up-<?php echo $slider_img; ?>"></div>
		<div class="item-button-down" id="slider-img-button-down-<?php echo $slider_img; ?>"></div>
	</div>
	<div class="item-under">
		<div class="item-below"></div>
                        
		<div id="item-row">
		    <span class="item-label">Project</span>
		    <span class="item-description">Phoenix Element Branding</span>   
		</div>
		<div id="item-row">
		    <span class="item-label">Client</span>
		    <span class="item-description">Element Sports Drink</span>   
		</div>
		<div id="item-row">
		    <span class="item-label">
		    <span class="css" title="Custom Style Sheet Design">CSS</span><br />
		    <span class="html" title="Website Markup">HTML</span><br />
		    <span class="cms" title="Content Management System">CMS</span><br />
		</div>
		<div class="button"><a href=".www.google.com">View Live</a></div>   
			
	 </div>
</div></li>

<?php $slider_img = 2; ?>

<li><div class="item-container">
	<div class="item-over" id="slider-<?php echo $slider_img; ?>">
		<img src="<?php echo $site_url; ?>/_include/_img/header/slider/slides/<?php echo $slider_img; ?>.png" width="205" height="202" />
		<div class="item-button-up" id="slider-img-button-up-<?php echo $slider_img; ?>"></div>
		<div class="item-button-down" id="slider-img-button-down-<?php echo $slider_img; ?>"></div>
	</div>
	<div class="item-under">
		<div class="item-below"></div>
                        
		<div id="item-row">
		    <span class="item-label">Project</span>
		    <span class="item-description">Marketing Infographic</span>   
		</div>
		<div id="item-row">
		    <span class="item-label">Client</span>
		    <span class="item-description">Tensile Consulting</span>   
		</div>
		<div id="item-row">
		    <span class="item-label">
		    <span class="css">Design</span><br />
		    <span class="html">Photoshop</span><br />
		    <span class="cms">Layering</span><br />
		</div>
		<div class="button"><a href=".www.google.com">View Live</a></div>   
			
	 </div>
</div></li>

<?php $slider_img = 3; ?>

<li><div class="item-container">
	<div class="item-over" id="slider-<?php echo $slider_img; ?>">
		<img src="<?php echo $site_url; ?>/_include/_img/header/slider/slides/<?php echo $slider_img; ?>.png" width="205" height="202" />
		<div class="item-button-up" id="slider-img-button-up-<?php echo $slider_img; ?>"></div>
		<div class="item-button-down" id="slider-img-button-down-<?php echo $slider_img; ?>"></div>
	</div>
	<div class="item-under">
		<div class="item-below"></div>
                        
		<div id="item-row">
		    <span class="item-label">Project</span>
		    <span class="item-description">Phoenix Element Branding</span>   
		</div>
		<div id="item-row">
		    <span class="item-label">Client</span>
		    <span class="item-description">Element Sports Drink</span>   
		</div>
		<div id="item-row">
		    <span class="item-label">
		    <span class="css">CSS</span><br />
		    <span class="html">HTML</span><br />
		    <span class="cms">CMS</span><br />
		</div>
		<div class="button"><a href=".www.google.com">View Live</a></div>   
			
	 </div>
</div></li>

<?php $slider_img = 4; ?>

<li><div class="item-container">
	<div class="item-over" id="slider-<?php echo $slider_img; ?>">
		<img src="<?php echo $site_url; ?>/_include/_img/header/slider/slides/<?php echo $slider_img; ?>.png" width="205" height="202" />
		<div class="item-button-up" id="slider-img-button-up-<?php echo $slider_img; ?>"></div>
		<div class="item-button-down" id="slider-img-button-down-<?php echo $slider_img; ?>"></div>
	</div>
	<div class="item-under">
		<div class="item-below"></div>
                        
		<div id="item-row">
		    <span class="item-label">Project</span>
		    <span class="item-description">Wordpress Design</span>   
		</div>
		<div id="item-row">
		    <span class="item-label">Recognition</span>
		    <span class="item-description">Featured on Theme Forest</span>   
		</div>
		<div id="item-row">
		    <span class="item-label">
		    <span class="css">Branding</span><br />
		    <span class="html">Design</span><br />
		    <span class="cms">CMS</span><br />
		</div>
		<div class="button"><a href=".www.google.com">View Live</a></div>   
			
	 </div>
</div></li>

<?php $slider_img = 6; ?>

<li><div class="item-container">
	<div class="item-over" id="slider-<?php echo $slider_img; ?>">
		<img src="<?php echo $site_url; ?>/_include/_img/header/slider/slides/<?php echo $slider_img; ?>.png" width="205" height="202" />
		<div class="item-button-up" id="slider-img-button-up-<?php echo $slider_img; ?>"></div>
		<div class="item-button-down" id="slider-img-button-down-<?php echo $slider_img; ?>"></div>
	</div>
	<div class="item-under">
		<div class="item-below"></div>
                        
		<div id="item-row">
		    <span class="item-label">Project</span>
		    <span class="item-description">Search Engine Optimization</span>   
		</div>
		<div id="item-row">
		    <span class="item-label">Client</span>
		    <span class="item-description">South-Pak, Inc.</span>   
		</div>
		<div id="item-row">
		    <span class="item-label">
		    <span class="css">Keywording</span><br />
		    <span class="html">Targeting</span><br />
		    <span class="cms">Optimization</span><br />
		</div>
		<div class="button"><a href="http://www.south-pak.com">View Live</a></div>   
			
	 </div>
</div></li>

<?php $slider_img = 5; ?>

<li><div class="item-container">
	<div class="item-over" id="slider-<?php echo $slider_img; ?>">
		<img src="<?php echo $site_url; ?>/_include/_img/header/slider/slides/<?php echo $slider_img; ?>.png" width="205" height="202" />
		<div class="item-button-up" id="slider-img-button-up-<?php echo $slider_img; ?>"></div>
		<div class="item-button-down" id="slider-img-button-down-<?php echo $slider_img; ?>"></div>
	</div>
	<div class="item-under">
		<div class="item-below"></div>
                        
		<div id="item-row">
		    <span class="item-label">Project</span>
		    <span class="item-description">University Social Portal</span>   
		</div>
		<div id="item-row">
		    <span class="item-label">Client</span>
		    <span class="item-description">Emory Bubble</span>   
		</div>
		<div id="item-row">
		    <span class="item-label">
		    <span class="css">Design</span><br />
		    <span class="html">Code</span><br />
		    <span class="cms">Incubation</span><br />
		</div>
		<div class="button"><a href="http://www.emorybubble.com">View Live</a></div>   
			
	 </div>
</div></li>

