<style>
	#sliders-section {
		background-image: url('<?php echo $site_url; ?>/_include/_img/body/sliders-section-bg.png');
		width: 100%; height: 229px; margin-top: -20px;
		}
	.sub-sliders-section { width: 930px!important; background-color: red; margin-left: auto; margin-right: auto; }
	.right {float: right}
	.left {float:left}
	.section {width: 480px; margin-left: auto; margin-right: auto; }
	.bottom-sliders-sections { 
		width: 977px; height: 46px; margin-top: -80px;
		background-image: url('<?php echo $site_url; ?>/_include/_img/body/bottom-sliders-sections.png'); 
		}
	@import url("<?php echo $site_url; ?>/_include/_css/slider.css");
</style>

<div id="sliders-section">

<div class="sub-sliders-section">
	<div class="left section slidersection">
		<br />
		<h2>Awarded and Recognized by</h2>
			<div id="sliderleft">
				<ul>
				
					<li><a href="#">
						<img src="<?php echo $site_url; ?>/_include/_img/sliders/-creattica.jpg" alt="-creattica" width="" height="" />
					</a></li>
					
					
					<li><a href="#">
						<img src="<?php echo $site_url; ?>/_include/_img/sliders/-themeforest.jpg" alt="-themeforest" width="" height="" />
					</a></li>
					
					
					<li><a href="#">
						<img src="<?php echo $site_url; ?>/_include/_img/sliders/-pagelove.jpg" alt="-pagelove" width="" height="" />
					</a></li>
					
				</ul>
			</div>
	</div>

	<div class="right section slidersection">
		<br />
		<h2>Clients &amp; Partners</h2>
		<div id="sliderright">
				<ul>
					<li><a href="#">
						<img src="<?php echo $site_url; ?>/_include/_img/sliders/-atelevents.jpg" alt="-atelevents" width="" height="" />
					</a></li>
					<li><a href="#">
						<img src="<?php echo $site_url; ?>/_include/_img/sliders/-authoritylinkbroker.jpg" alt="-authoritylinkbroker" width="" height="" />
					</a></li>
					<li><a href="#">
						<img src="<?php echo $site_url; ?>/_include/_img/sliders/-campusbubble.jpg" alt="-campusbubble" width="" height="" />
					</a></li>
					<li><a href="#">
						<img src="<?php echo $site_url; ?>/_include/_img/sliders/-kanfer.jpg" alt="-kanfer" width="" height="" />
					</a></li>
					<li><a href="#">
						<img src="<?php echo $site_url; ?>/_include/_img/sliders/-minus.jpg" alt="-minus" width="" height="" />
					</a></li>
					<li><a href="#">
						<img src="<?php echo $site_url; ?>/_include/_img/sliders/-nestbar.jpg" alt="-nestbar" width="" height="" />
					</a></li>
					<li><a href="#">
						<img src="<?php echo $site_url; ?>/_include/_img/sliders/-south-pak.jpg" alt="-south-pak" width="" height="" />
					</a></li>
					<li><a href="#">
						<img src="<?php echo $site_url; ?>/_include/_img/sliders/-tedx.jpg" alt="-tedx" width="" height="" />
					</a></li>
					<li><a href="#">
						<img src="<?php echo $site_url; ?>/_include/_img/sliders/-tensile.jpg" alt="-tedx" width="" height="" />
					</a></li>
				</ul>
			</div>
	
	</div>
	
</div>

</div>

<script type="text/javascript" src="<?php echo $site_url; ?>/_include/_lib/js/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo $site_url; ?>/_include/_lib/js/jquery.simpleslider.js"></script>
<script type="text/javascript" src="<?php echo $site_url; ?>/_include/_lib/js/global.js"></script>

<style>
	.slidersection {position: relative;width: 431px;}
		.slidersection { }
	#sliderleft {height: 161px!important;width:431px!important; }
		#sliderleft img {margin-top:20px;}
	#sliderright {height: 161px!important;width:431px!important; }
		#sliderright img {margin-top:20px;}
	#prevBtn1 a,#prevBtn2 a{
		background-image: url(<?php echo $site_url; ?>/_include/_img/images/sliderleft.png);
		background-repeat: no-repeat;
		text-indent: -3000px; height: 98px; width: 43px; display: block;
		position: absolute; left: 3px; top: 86px; z-index: 100;
		}
		#prevBtn:hover{cursor:pointer;background-position-x: -50px;}
	#nextBtn1 a,#nextBtn2 a{
		background-image: url(<?php echo $site_url; ?>/_include/_img/images/sliderright.png);
		background-repeat: no-repeat;
		text-indent: -3000px; height: 98px; width: 43px; display: block;
		position: absolute; right: -2px; top: 86px; z-index: 100;
		}
		#nextBtn:hover{cursor:pointer;background-position-x: -50px;}
		
	
	h2 {
		font-family: 'KrakenThin', Arial, Helvetica, sans-serif;
		font-size: 18px; 
		text-decoration: none;
		text-transform: uppercase;
		text-shadow: #ffffff 1px 1px 0px;
		padding-bottom: 5px;
		border-bottom: 1px solid #97b1b8;
		}
</style>