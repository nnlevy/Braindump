$(function() {

$('div.item-button-down').hide();

$('div.item-button-up').click(function() {
	$('div#slider-1').animate({
	marginTop: "-114px",
	}, 1500, function() {
		$('div.item-button-down').show();
		$('div.item-button-up').hide();
	} );

});


$('div.item-button-down').click(function() {
	$('div#slider-1').animate({
	marginTop: "0px",
	}, 1500, function() {
		$('div.item-button-down').hide();
		$('div.item-button-up').show();
	} );

});

});