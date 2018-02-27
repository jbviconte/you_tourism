$(".flexslider_1").ready(function() {
  $('.flexslider_1').flexslider({
    animation: "slide",
    animationSpeed: 500,
    slideshowSpeed: 4000,
    easing: "linear",
  });
});

$(document).on("scroll", function() {

	if($(document).scrollTop()>100) {
		$("header").removeClass("large").addClass("small");
	} else {
		$("header").removeClass("small").addClass("large");
	}

});

// function hamburger_click()
// {
//   var hamburgerElement = document.getElementById("hamburger");
//   var menuElement = document.getElementById("liens");
//
//   hamburgerElement.style.display = "none";
//   menuElement.style.display = "block";
// }
