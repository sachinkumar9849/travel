document.addEventListener('DOMContentLoaded', function () {

    // ── Elements ──
    const mobileToggle = document.getElementById('mobile-toggle');
    const primaryNav = document.getElementById('primary-nav');
    const navOverlay = document.getElementById('nav-overlay');

    // ── Open / Close mobile nav ──
    function openNav() {
        mobileToggle.classList.add('active');
        primaryNav.classList.add('open');
        navOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeNav() {
        mobileToggle.classList.remove('active');
        primaryNav.classList.remove('open');
        navOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (mobileToggle) {
        mobileToggle.addEventListener('click', function () {
            primaryNav.classList.contains('open') ? closeNav() : openNav();
        });
    }

    if (navOverlay) {
        navOverlay.addEventListener('click', closeNav);
    }

    // ── Mobile dropdown toggle ──
    var navItems = document.querySelectorAll('.primary-nav__item');

    navItems.forEach(function (item) {
        var link = item.querySelector('.primary-nav__link');
        var dropdown = item.querySelector('.primary-nav__dropdown');

        if (link && dropdown) {
            link.addEventListener('click', function (e) {
                if (window.innerWidth < 992) {
                    e.preventDefault();
                    navItems.forEach(function (other) {
                        if (other !== item) other.classList.remove('dropdown-open');
                    });
                    item.classList.toggle('dropdown-open');
                }
            });
        }
    });

    // ── Close on resize to desktop ──
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 992) {
            closeNav();
            navItems.forEach(function (item) {
                item.classList.remove('dropdown-open');
            });
        }
    });

    // ── Scroll shadow ──
    var header = document.getElementById('site-header');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 5) {
            header.style.boxShadow = '0 2px 12px rgba(0,0,0,0.12)';
        } else {
            header.style.boxShadow = '';
        }
    });

    // ── Hero Slider Initialization ──
    if (typeof $ !== 'undefined' && $.fn.slick) {
        var $heroSlider = $('#hero-slider');
        var $progressBar = $('.slider-nav-progress-bar');
        var $currentSlideLabel = $('.slider-nav-current');
        var $totalSlidesLabel = $('.slider-nav-total');

        if ($heroSlider.length) {
            // Initial Setup
            $heroSlider.on('init', function (event, slick) {
                var totalSlides = slick.slideCount;
                $totalSlidesLabel.text('0' + totalSlides);
                updateProgress(0, totalSlides);
            });

            // Initialize Slick
            $heroSlider.slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 1000,
                fade: true,
                cssEase: 'cubic-bezier(0.25, 1, 0.5, 1)',
                autoplay: true,
                autoplaySpeed: 6000,
                pauseOnHover: false,
                swipe: true
            });

            // On before slide change
            $heroSlider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                $currentSlideLabel.text('0' + (nextSlide + 1));
                updateProgress(nextSlide, slick.slideCount);
            });

            function updateProgress(currentIndex, totalSlides) {
                var progressHeight = ((currentIndex + 1) / totalSlides) * 100;
                $progressBar.css('height', progressHeight + '%');
            }
        }
    }

    // ── Featured Slider Initialization ──
    if (typeof $ !== 'undefined' && $.fn.slick) {
        var $featuredSlider = $('#featured-slider');
        var $featuredProgress = $('.featured-progress-fill');
        
        if ($featuredSlider.length) {
            $featuredSlider.on('init', function(event, slick){
                updateFeaturedProgress(slick.currentSlide, slick.slideCount, slick.options.slidesToShow);
            });

            $featuredSlider.slick({
                dots: false,
                arrows: true,
                prevArrow: $('.featured-prev'),
                nextArrow: $('.featured-next'),
                infinite: false,
                speed: 600,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            $featuredSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                updateFeaturedProgress(nextSlide, slick.slideCount, slick.options.slidesToShow);
            });

            function updateFeaturedProgress(nextSlide, totalSlides, slidesToShow) {
                var currentSlidesToShow = slidesToShow;
                if(window.innerWidth < 1200) currentSlidesToShow = 3;
                if(window.innerWidth < 992) currentSlidesToShow = 2;
                if(window.innerWidth < 576) currentSlidesToShow = 1;

                var maxSlideIndex = totalSlides - currentSlidesToShow;
                if (maxSlideIndex < 0) maxSlideIndex = 0;
                
                var percentage;
                if(maxSlideIndex === 0) {
                    percentage = 100;
                } else {
                    percentage = (nextSlide / maxSlideIndex) * 100;
                }
                
                percentage = Math.max(0, Math.min(percentage, 100));
                
                var thumbWidth = (currentSlidesToShow / totalSlides) * 100;
                $featuredProgress.css({
                    width: thumbWidth + '%',
                    left: (percentage * (100 - thumbWidth) / 100) + '%'
                });
            }

            window.addEventListener('resize', function() {
                if ($featuredSlider.hasClass('slick-initialized')) {
                    var slick = $featuredSlider.slick('getSlick');
                    updateFeaturedProgress(slick.currentSlide, slick.slideCount, slick.options.slidesToShow);
                }
            });
        }
    }


    if (typeof $ !== 'undefined' && $.fn.slick) {
    var $destSlider = $('.dest-slider');
    var $destProgress = $('.dest-progress-fill'); // use different class
    
    if ($destSlider.length) {

        $destSlider.on('init', function(event, slick){
            updateDestProgress(slick.currentSlide, slick.slideCount, slick.options.slidesToShow);
        });

        $destSlider.slick({
            dots: false,
            arrows: true,
            prevArrow: $('.dest-prev'),
            nextArrow: $('.dest-next'),
            infinite: false,
            speed: 600,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 992, settings: { slidesToShow: 2 } },
                { breakpoint: 576, settings: { slidesToShow: 1 } }
            ]
        });

        $destSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            updateDestProgress(nextSlide, slick.slideCount, slick.options.slidesToShow);
        });

        function updateDestProgress(nextSlide, totalSlides, slidesToShow) {
            var currentSlidesToShow = slidesToShow;

            if (window.innerWidth < 1200) currentSlidesToShow = 3;
            if (window.innerWidth < 992) currentSlidesToShow = 2;
            if (window.innerWidth < 576) currentSlidesToShow = 1;

            var maxSlideIndex = totalSlides - currentSlidesToShow;
            if (maxSlideIndex < 0) maxSlideIndex = 0;

            var percentage = maxSlideIndex === 0 ? 100 : (nextSlide / maxSlideIndex) * 100;
            percentage = Math.max(0, Math.min(percentage, 100));

            var thumbWidth = (currentSlidesToShow / totalSlides) * 100;

            $destProgress.css({
                width: thumbWidth + '%',
                left: (percentage * (100 - thumbWidth) / 100) + '%'
            });
        }

        window.addEventListener('resize', function() {
            if ($destSlider.hasClass('slick-initialized')) {
                var slick = $destSlider.slick('getSlick');
                updateDestProgress(slick.currentSlide, slick.slideCount, slick.options.slidesToShow);
            }
        });
    }
}

    

    // ── Mega Menu Tab Switching ──
    const megaMenuTabs = document.querySelectorAll('.mega-menu__tab-item');
    const megaMenuPanels = document.querySelectorAll('.mega-menu__tab-panel');

    megaMenuTabs.forEach(tab => {
        tab.addEventListener('mouseenter', function () {
            const target = this.getAttribute('data-tab');

            // Update Tabs
            megaMenuTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            // Update Panels
            megaMenuPanels.forEach(panel => {
                if (panel.id === target) {
                    panel.classList.add('active');
                } else {
                    panel.classList.remove('active');
                }
            });
        });
    });

});
