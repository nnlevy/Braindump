 <script type="text/javascript">

jQuery.easing['BounceEaseOut'] = function(p, t, b, c, d) {
	if ((t/=d) < (1/2.75)) {
		return c*(7.5625*t*t) + b;
	} else if (t < (2/2.75)) {
		return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
	} else if (t < (2.5/2.75)) {
		return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
	} else {
		return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
	}
};
jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        easing: 'BounceEaseOut',
        animation: 1000,
        scroll: 1,
    });
});

</script> 

<script>
    $("#boxtest").click(function () {
      $(this).hide(2000);
    });
</script>

<script>
jQuery(document).ready(function() {

$("button").click(function () {
      $("#boxtest").hide("slow");
    }); 

});    
   
</script>

<script type='text/javascript'>
    $(document).ready(function(){
        $(".tweet").tweet({
            username: "nightlylabs",
            count: 1,
            loading_text: "loading tweets..."
        });
    });
</script> 

 <script type="text/javascript">

    $(function(){
      $(".tweet-list").tweet({
        count: 1,
		template: function(i){return i["text"]},
        username: "nightlylabs",
        list: "nightly-labs",
        loading_text: "loading list..."
      });
    });

</script>