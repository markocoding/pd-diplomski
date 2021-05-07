


// <!-------------------- WTF IS THIS ------------------>

$(document).ready(function () {
	$(".clickable-row").click(function () {
		window.location = $(this).data("href");
	})
})



// <!-------------------- SCROLL TO TOP ------------------>

$(document).scroll(function () {
	scrollToTop();

});

function scrollToTop() {
	if (document.body.scrollTop >= 650 ){
		document.getElementById("scroll-top").classList.remove("hide-scroll-button") ;
	}else {
		document.getElementById("scroll-top").classList.add("hide-scroll-button") ;
	}

}

// <!-------------------- ADD ANIMATE ------------------>

// $(document).ready(function () {
// 	if (window.innerWidth <= 568) {
//
// 	}
// })


$(document).scroll(function () {
	let niz =  document.querySelectorAll("[data-animate=off]");
	let elZaAnim = Array.from(niz);

	for (let i = 0; i < elZaAnim.length; i++) {
		let element = elZaAnim[i];
		let scroll =  Math.round($(window).scrollTop() + 750) ; // pozicija top ekrana
		let hieghtThreshold = Math.round($(element).offset().top);

		// console.log("ovo je hieghtThreshold " +hieghtThreshold + " ----ovo je scroll " +scroll)

		if (scroll >= hieghtThreshold ) {
			// console.log('DODAO JE KLASU ' + i + ". elementu")
			let animateType = element.getAttribute("data-animate-type");
			element.classList.add('animate__animated', animateType);
			elZaAnim[i].setAttribute("data-animate" , "on");
		}
	}
})

// <!-------------------- COUNTER EFFECT ------------------>
let executed = false;
let url = window.location.href
let res = url.slice(30);

$(document).scroll(function () {

	if(res.length === 0 || res==='#section1'){
		let viewBottom = window.scrollY + window.innerHeight;
		let element =  document.getElementById("numbers")
		let elementBottom = element.getBoundingClientRect().bottom;

		if (elementBottom < viewBottom && executed === false){
			animateNumbers();
			executed = true;
		}
	}
});

function animateNumbers() {
	$('.counter').each(function() {
		var $this = $(this),
			countTo = $this.attr('data-count');
		$({countNum: $this.text()}).animate({countNum: countTo},
			{
				duration: 2000,
				easing: 'linear',
				step: function() {
					$this.text(Math.floor(this.countNum));
				},
				complete: function() {
					$this.text(this.countNum);
					//alert('finished');
				}
			});
	});
}

	// <!-------------------- SHUFFLE EFFECT ------------------>


var myElement = document.getElementById('my-element');
var bounding = myElement.getBoundingClientRect();
var myElementHeight = myElement.offsetHeight;
var myElementWidth = myElement.offsetWidth;

function elementInViewport() {
	var bounding = myElement.getBoundingClientRect();

	if (bounding.top >= -myElementHeight && bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) + myElementHeight){

		let $randomnbr = $('.nbr')
		let $timer = 50
		let $it
		let $data = 0
		let index
		let change
		let letters = ["44°", "46’", "5.80’", "’N", "20°", "28’", "48.431’", "’E"]

		// 44° 46' 5.808'' N
		// 20° 28' 48.432'' E

		$randomnbr.each(function () {
			change = Math.round(Math.random() * 30)
			$(this).attr('data-change', change)
		})

		function random() {
			return Math.round(Math.random() * 20)
		}

		function select() {
			return Math.round(Math.random() * $randomnbr.length + 1)
		}

		function value() {
			$('.nbr:nth-child(' + select() + ')').html('' + random() + '')
			$('.nbr:nth-child(' + select() + ')').attr('data-number', $data)
			$data++

			$randomnbr.each(function () {
				if (parseInt($(this).attr('data-number')) > parseInt($(this).attr('data-change'))) {
					index = $('.ltr').index(this)
					$(this).html(letters[index])
					$(this).removeClass('nbr')
				}
			})
		}

		$it = setInterval(value, $timer)

	}
}


$(document).scroll(function () {
	elementInViewport();

});


// <!-------------------- NAVIGATION EFFECT ------------------>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
		document.getElementById("navbar").classList.add("small-nav") ;
		document.getElementById("logo").classList.add("small-logo");
	} else {
		document.getElementById("navbar").classList.remove("small-nav");
		document.getElementById("logo").classList.remove("small-logo");
	}
}

//<!-------------------- NAVIGATION ACTIVE ON CURRENT PAGE ------------------>

$(document).ready(function () {
	var url = window.location.href
	var res = url.slice(30);
	var classeToAdd = ['active','my-active'];

	if(res.length === 0 || res==='#section1'){
		$("#savez").addClass(classeToAdd);


	}else{
		$("#"+res).addClass(classeToAdd);
	}
//              console.log(res.length);
});

// <!-------------------- GALLERY GSAP ------------------>

gsap.registerPlugin(ScrollTrigger);

let container = document.getElementById("container_gsap");

gsap.to(container, {
	x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
	ease: "none",
	scrollTrigger: {
		trigger: container,
		invalidateOnRefresh: true,
		pin: true,
		scrub: 1.2,
		markers:true,
		end: () => "+=" + container.offsetWidth
	}
});
