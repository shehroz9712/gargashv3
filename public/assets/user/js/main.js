$(window).on("load", function () {
	console.log("test");
	$(".site-loader").fadeOut(1500);
});

var video = document.getElementById("myVideo");
if (video) {
	var playPauseButton = document.getElementById("playPause");
	playPauseButton.addEventListener("click", function () {
		if (video.paused) {
			video.play();
			playPauseButton.innerHTML = '<i class="fa fa-pause"></i>';
		} else {
			video.pause();
			playPauseButton.innerHTML = '<i class="fa fa-play"></i>';
		}
	});
}

function moveToNext(currentInput, nextInputId) {
	var maxLength = parseInt(currentInput.getAttribute("maxlength"));
	var currentLength = currentInput.value.length;

	currentInput.addEventListener("focus", function () {
		this.value = "";
	});

	if (currentLength >= maxLength) {
		if (nextInputId) {
			document.getElementById(nextInputId).focus();
		} else {
			currentInput.value = "";
		}
	}
}
$(".shop-password").click(function () {
	let currentType = $(this).siblings("input").attr("type");
	if (currentType == "password") {
		$(this).siblings("input").attr("type", "text");
		$(this).children("i").addClass("fa-eye-slash");
		$(this).children("i").removeClass("fa-eye");
	} else {
		$(this).siblings("input").attr("type", "password");
		$(this).children("i").removeClass("fa-eye-slash");
		$(this).children("i").addClass("fa-eye");
	}
});

// Dashboard function
$(".toggler-btn").click(function () {
	let toHide = $(this).attr("to-hide");
	let toShow = $(this).attr("to-show");
	$(toHide).addClass("d-none");
	$(toShow).removeClass("d-none");
});
var $productSlider = $('.my-product_slider_main');
var $logoSlider = $('.logo-slider');

$productSlider.slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: false,
	dots: false,
	loop: true,
	arrows: true,
	prevArrow: "<button type='button' class='slick-prev'></button>",
	nextArrow: "<button type='button' class='slick-next'></button>",
	adaptiveHeight: true,
	asNavFor: '.logo-slider' // Sync with logo slider
});

$logoSlider.slick({
	slidesToShow: 5,
	slidesToScroll: 1,
	asNavFor: '.my-product_slider_main', // Sync with main slider
	autoplay: false,
	loop: true,
	arrows: false,
	centerMode: true,
	focusOnSelect: true,
	responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 3
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2
			}
		}
	]
});
// product detail slider

// counter Jquery
$(".plus").click(function () {
	let currentval = $(this).siblings("input").val();
	currentval++;
	$(this).siblings("input").val(currentval);
});
$(".minus").click(function () {
	let currentval = $(this).siblings("input").val();
	currentval--;
	$(this).siblings("input").val(currentval);
});
// counter Jquery

// header Nav active
var windowUrl = window.location.href;
let urlArray = windowUrl.split("/");
let currentPath = urlArray.length - 1;
// alert();
$(".header-link").each(function () {
	if (urlArray[currentPath] === $(this).attr("href")) {
		$(this).addClass("active");
		// alert($(this).attr("href"));
	}
	// alert(
});

if ($(".dropdown").length) {
	$(document).on("click", ".dropdown-menu .dropdown-item", function (e) {
		e.preventDefault();
		if (!$(this).hasClass("active")) {
			var swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: "btn btn-primary",
					cancelButton: "btn btn-danger me-3",
				},
				buttonsStyling: false,
			});
			swalWithBootstrapButtons
				// .fire({
				// 	title: "Are you sure?",
				// 	text: "Do you really want to change your current language!",
				// 	icon: "warning",
				// 	confirmButtonText:
				// 		"<i class='fas fa-check-circle me-1'></i> Yes, I am!",
				// 	cancelButtonText:
				// 		"<i class='fas fa-times-circle me-1'></i> No, I'm Not",
				// 	showCancelButton: true,
				// 	reverseButtons: true,
				// 	focusConfirm: true,
				// })
				.then((result) => {
					if (result.isConfirmed) {
						if (!$(this).hasClass("active")) {
							$(".dropdown-menu .dropdown-item").removeClass("active");
							$(this).addClass("active");
							$(this)
								.parents(".dropdown")
								.find(".btn")
								.html(
									"<span class='flag-icon flag-icon-us me-1'></span>" +
									$(this).text(),
								);
						}
						// Swal.fire({
						// 	icon: "success",
						// 	title: "Amazing!",
						// 	text: "Your current language has been changed successfully.",
						// 	showConfirmButton: false,
						// 	timer: 1500,
						// });
					}
				});
		}
	});
}


// Wrap each letter with a span element for each .ml14 element
document.querySelectorAll('.ml14 .letters').forEach(function (textWrapper) {
	textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
});

document.querySelectorAll('.ml14').forEach(function (ml14, index) {
	var animation = anime.timeline({
		autoplay: false
	})
		.add({
			targets: ml14.querySelector('.line'),
			scaleX: [0, 1],
			opacity: [0.5, 1],
			easing: "easeInOutExpo",
			duration: 900
		}).add({
			targets: ml14.querySelectorAll('.letter'),
			opacity: [0, 1],
			translateX: [40, 0],
			translateZ: 0,
			scaleX: [0.3, 1],
			easing: "easeOutExpo",
			duration: 800,
			offset: '-=600',
			delay: function (el, i) {
				return 150 + 50 * i;
			}
		}).add({
			targets: ml14,
			opacity: 1,
			duration: 1000,
			easing: "easeOutExpo",
			delay: 500
		});

	function startAnimationOnScroll() {
		var windowHeight = window.innerHeight;
		var scrollOffset = window.pageYOffset;
		var triggerOffset = windowHeight * 0.75;

		if (animation.playState !== "running" && ml14.getBoundingClientRect().top < triggerOffset) {
			animation.play();
			window.removeEventListener('scroll', startAnimationOnScroll);
		}
	}

	window.addEventListener('scroll', startAnimationOnScroll);
});


// Brands Mega Menu Open
$(document).ready(function () {
	let hideTimeout; // Timeout variable for delayed menu hiding

	function resetMenus() {
		$(".category-menu, .all-menu").removeClass("active");
		$(".categoryBtn, .allcategoryBtn").removeClass("active");
	}

	$(".categoryBtn").on("mouseenter", function () {
		clearTimeout(hideTimeout); // Prevent menu from hiding
		resetMenus();
		$(".category-menu").addClass("active");
		$(this).addClass("active");
	});

	$(".allcategoryBtn").on("mouseenter", function () {
		clearTimeout(hideTimeout);
		resetMenus();
		$(".all-menu").addClass("active");
		$(this).addClass("active");
	});

	$(".category-menu, .all-menu, .card").on("mouseenter", function () {
		clearTimeout(hideTimeout); // If inside menu or `.card`, stop hiding
	});

	$(".category-menu, .all-menu, .categoryBtn, .allcategoryBtn, .card").on("mouseleave", function () {
		hideTimeout = setTimeout(() => {
			resetMenus();
		}, 800); // Delay of 1s before hiding
	});
});


// Services Mega Menu Open
$(document).ready(function () {
	let hideTimeout; // Timeout variable for delayed menu hiding

	function resetMenus() {
		$(".category-services-menu, .all-menu").removeClass("active");
		$(".categoryBtn-service, .allcategoryBtn-service").removeClass("active");
	}

	$(".categoryBtn-service").on("mouseenter", function () {
		clearTimeout(hideTimeout); // Prevent menu from hiding
		resetMenus();
		$(".category-services-menu").addClass("active");
		$(this).addClass("active");
	});

	$(".allcategoryBtn-service").on("mouseenter", function () {
		clearTimeout(hideTimeout);
		resetMenus();
		$(".all-menu").addClass("active");
		$(this).addClass("active");
	});

	$(".category-services-menu, .all-menu, .card").on("mouseenter", function () {
		clearTimeout(hideTimeout); // If inside menu or `.card`, stop hiding
	});

	$(".category-services-menu, .all-menu, .categoryBtn-service, .allcategoryBtn-service, .card").on("mouseleave", function () {
		hideTimeout = setTimeout(() => {
			resetMenus();
		}, 800); // Delay of 1s before hiding
	});
});
