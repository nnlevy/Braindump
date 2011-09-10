<style>
.tiny-row {
	background-image: url('<?php echo $site_url; ?>/_include/_img/body/tiny-row-above-footer.png');
	height: 29px; width: 100%; 
	}

#footer{ background-image:url('<?php echo $site_url; ?>/_include/_img/rahul/footerbg.png'); width:100%; height:231px; background-repeat:repeat-x; }
#bottom_seperator{ background-image: url('<?php echo $site_url; ?>/_include/_img/rahul/bottom_rect_seperator.png'); background-repeat:repeat-x; width:100%; height:23px; }
.clearing{ clear:both }
.logo_address
{
	float:left;
	clear:right;
	padding:50px 0px 0px 130px;
	font-family:Arial, Helvetica, sans-serif;
	color:#707B82;
	font-size:11px;
	text-align:right;
	margin-left: -160px;
}
.vert_line
{
	float:left;
	clear:right;
	padding:50px 0px 0px 30px;
}

.map_location
{
	float:left;
	clear:right;
	padding:50px 0px 0px 30px;
}
.contact_form
{
	float:left;
	clear:right;
	padding:50px 0px 0px 30px;
}

.contact_form input.myname
{
	float:left;
	clear:right;
	width:100px;
	border:none;
	color:#4d6579; 
	background-color:#212c34;
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;
	border: 1px solid #344654; border-radius: 5px;
}

.contact_form input.email
{
	float:left;
	clear:none;
	width:100px;
	margin-left: 10px;
	color:#4d6579;
	border:none;
	background-color:#212c34;
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;
	border: 1px solid #344654; border-radius: 5px;
}

textarea#comments
{
    width:215px;	
	height:80px;
	color:#4d6579;
    background-color:#212c34;
	border:none;
	font-family:Arial, Helvetica, sans-serif;	
	font-size:11px;
	border: 1px solid #344654; border-radius: 5px;
}

input.submit
{
	color:#405568;
	border:none;
	background-color:#212c34;
	font-family:Arial, Helvetica, sans-serif;	
	font-size:11px;
    float:right;
	margin-top:5px;
	padding: 5px;
	border: 1px solid #344654; border-radius: 5px;
}

input.submit:hover { background-color: #707B82; color: #212c34; cursor: pointer;  }
.forum {line-height: 25px; padding-left: 5px;}
.footer-cont {margin-left: 140px;}
.forum:focus { border: 1px dashed #707B82; }

.footerwidth {
	width: 1150px; margin-left: auto; margin-right: auto;
	}
</style>

	<div id="footer-bar"></div>

	<div id="bottom_seperator"></div>
	
	<div class="clearing"></div>

<div id="footer">

<style>.footerwidth { margin-left: auto; margin-right: auto; padding-left: 70px; } </style>

<div class="footerwidth">

<div class="footer-cont">
	
	<div class="logo_address">
		
		<img src="<?php echo $site_url; ?>/_include/_img/rahul/nightly_logo.png" />
		
		<br />
		404-647-4465
		<br /><br />
		2410 LaVista Road Atlanta,
		<br /> 
		GA 30329
		
	</div>
	
	<div class="vert_line">
		<img src="<?php echo $site_url; ?>/_include/_img/rahul/vert_line.png" />
	</div>

	<div class="map_location">
		<img src="<?php echo $site_url; ?>/_include/_img/rahul/map_location.png" />
	</div>

	<div class="vert_line">
		<img src="<?php echo $site_url; ?>/_include/_img/rahul/vert_line.png" />
	</div>

	<div class="contact_form">
		<form method="post" action="<?php echo $site_url; ?>/_include/_php/contact-form.php" name="contact">
			<input type="text" name="name" value="name" class="myname forum" />
			<input type="text" name="email" value="email" class="email forum" />
			<br /><br />
			<textarea id="comments" class="forum" name="body">Message </textarea><br />
			<input type="submit" value="Send" name="submit" class="submit" />
		</form>
	</div>
	
</div>
	
</div>

