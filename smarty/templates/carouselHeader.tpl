<!DOCTYPE html>
<script src="scripts/jquery-1.7.min.js" type="text/javascript" charset="utf-8"></script>
<script src="scripts/jquery.featureCarousel.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var carousel = $("#carousel").featureCarousel({
			  // include options like this:
			  // (use quotes only for string values, and no trailing comma after last option)
			  // option: value,
			  // option: value
			pauseOnHover: true
	});
	$("#but_prev").click(function () {
		carousel.prev();
	});
	$("#but_pause").click(function () {
		carousel.pause();
	});
	$("#but_start").click(function () {
		carousel.start();
	});
	$("#but_next").click(function () {
		carousel.next();
	});
	});
</script>
