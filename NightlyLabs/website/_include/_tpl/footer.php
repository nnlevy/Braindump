<style>
.logo_address
{
	float:left;
	clear:right;
	padding:50px 0px 0px 130px;
	font-family:Arial, Helvetica, sans-serif;
	color:#707B82;
	font-size:11px;
	text-align:right;
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
 color:#707B82; 
 background-color:#212c34;
 font-family:Arial, Helvetica, sans-serif;
	
	font-size:11px;
}

.contact_form input.email
{
	float:left;
	clear:none;
	width:100px;
	margin-left: 10px;
	color:#707B82;
	border:none;
	background-color:#212c34;
	font-family:Arial, Helvetica, sans-serif;
	
	font-size:11px;
}

textarea#comments
{
    width:210px;	
	height:80px;
	color:#707B82;
    background-color:#212c34;
	border:none;
	font-family:Arial, Helvetica, sans-serif;	
	font-size:11px;
}

input.submit
{
color:#707B82;
	border:none;
	background-color:#212c34;
	font-family:Arial, Helvetica, sans-serif;
	
	font-size:11px;
    float:right;
	margin-top:5px;
}
</style>

<div id="footer">

	<div class="logo_address">
		<img src="<?php echo $site_url; ?>/_include/_img/rahul/nightly_logo.png" />
		<br />
		404-647-4465<br />
		<br />
		2410 LaVista Road Atlanta,<br /> 
		GA 30329</div>
		<div class="<?php echo $site_url; ?>/_include/_img/rahul/vert_line">
		<img src="<?php echo $site_url; ?>/_include/_img/rahul/vert_line.png" />
	</div>

	<div class="contact_form">
		<form method="post">
			<input type="text" name="name" value="name" class="myname" /> <input type="text" name="email" value="email" class="email" />
			<br /><br />
			<textarea id="comments">Message </textarea><br />
			<input type="submit" value="Send" name="submit" class="submit" />
		</form>
	</div>
</div>