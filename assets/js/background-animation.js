$(document).ready(function(){
	colors = ["#000000", "#0000FF"]
	var i = 0;

	animateLoop = function() {
		$('body').animate({
			backgroundColor:colors[(i++)%colors.length]
		}, 3000, "easeInOutCubic", function() {
			animateLoop();
			});
		}
		
	animateLoop();
});