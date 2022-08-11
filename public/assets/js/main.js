(function () {
	window.onload = function () {
		window.setTimeout(fadeout, 500);
	};
	function fadeout() {
		document.querySelector('.preloader').style.opacity = '0';
		document.querySelector('.preloader').style.display = 'none';
	}
	window.onscroll = function () {
		var header_navbar = document.querySelector('.navbar-area');
		var sticky = header_navbar.offsetTop;
		if (window.pageYOffset > sticky) {
			header_navbar.classList.add('sticky');
		} else {
			header_navbar.classList.remove('sticky');
		}
		var backToTo = document.querySelector('.scroll-top');
		if (
			document.body.scrollTop > 50 ||
			document.documentElement.scrollTop > 50
		) {
			backToTo.style.display = 'flex';
		} else {
			backToTo.style.display = 'none';
		}
	};
	new WOW().init();
	let filterButtons = document.querySelectorAll(
		'.portfolio-btn-wrapper button'
	);
	filterButtons.forEach((e) =>
		e.addEventListener('click', () => {
			let filterValue = event.target.getAttribute('data-filter');
			iso.arrange({ filter: filterValue });
		})
	);
	var elements = document.getElementsByClassName('portfolio-btn');
	for (var i = 0; i < elements.length; i++) {
		elements[i].onclick = function () {
			var el = elements[0];
			while (el) {
				if (el.tagName === 'BUTTON') {
					el.classList.remove('active');
				}
				el = el.nextSibling;
			}
			this.classList.add('active');
		};
	}
	var pageLink = document.querySelectorAll('.page-scroll');
	pageLink.forEach((elem) => {
		elem.addEventListener('click', (e) => {
			e.preventDefault();
			document
				.querySelector(elem.getAttribute('href'))
				.scrollIntoView({ behavior: 'smooth', offsetTop: 1 - 60 });
		});
	});
	let navbarToggler = document.querySelector('.mobile-menu-btn');
	navbarToggler.addEventListener('click', function () {
		navbarToggler.classList.toggle('active');
	});
    var slider = new tns({
        container: '.hero-slider',
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: false,
        controls: true,
        controlsText: [
            '<i class="lni lni-chevron-left"></i>',
            '<i class="lni lni-chevron-right"></i>'
        ],
        responsive: {
            1200: {
                items: 1,
            },
            992: {
                items: 1,
            },
            0: {
                items: 1,
            }

        }
    });
    //========= testimonial
    tns({
        container: '.testimonial-slider',
        items: 3,
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        nav: true,
        controls: false,
        controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 2,
            },
            1170: {
                items: 3,
            }
        }
    });

    //====== counter up
    var cu = new counterUp({
        start: 0,
        duration: 2000,
        intvalues: true,
        interval: 100,
        append: " ",
    });
    cu.start();
    //========= glightbox
    GLightbox({
        'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoplayVideos': true,
    });
    //============== isotope masonry js with imagesloaded
    imagesLoaded('#container', function () {
        var elem = document.querySelector('.grid');
        var iso = new Isotope(elem, {
            // options
            itemSelector: '.grid-item',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item'
            }
        });

        let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
        filterButtons.forEach(e =>
            e.addEventListener('click', () => {

                let filterValue = event.target.getAttribute('data-filter');
                iso.arrange({
                    filter: filterValue
                });
            })
        );
    });
})();
