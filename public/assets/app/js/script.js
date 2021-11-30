$(function(){ 'use strict';

    // Font Sizes
    var bodySize = 16;
    $('.btn-font-size').click(function(e){
        e.preventDefault();
        var s = Number($(this).data('size'));
        if(s==0) bodySize = 16;
        else if(s==1 || s==-1) bodySize += s;
        else bodySize = s;
        $('html, body').css('font-size', bodySize+'px');
    });


    // Back to Top
    var backToTop = $('.back-to-top');
    backToTop.click(function(e){
        e.preventDefault();
        $('html, body').stop().animate({ scrollTop: 0 }, 800 );
    });


    // Topnav
    var topnav = $('nav.topnav');

    // Sidenav
    var sidenav = $('nav.sidenav'),
        sidenavToggles = $('nav.topnav .sidenav-toggle, nav.sidenav .sidenav-toggle');
    sidenavToggles.click(function(e){
        e.preventDefault();
        if($('body').hasClass('sidenav-opened')){
            $('html, body').removeClass('sidenav-opened');
            sidenavToggles.find('> *').removeClass('active');
            sidenav.removeClass('active');
        }else{
            $('html, body').addClass('sidenav-opened');
            sidenavToggles.find('> *').addClass('active');
            sidenav.addClass('active');
        }
    });
    $('.sidenav-filter').click(function(e){
        e.preventDefault();
        $('html, body').removeClass('sidenav-opened');
        sidenavToggles.find('> *').removeClass('active');
        sidenav.removeClass('active');
    });

    // Generate Sidenav Menu
    if(topnav.length && sidenav.length){
        var sidenavMenus = sidenav.find('.menu-container');
        sidenavMenus.html( topnav.find('.menu-container').html() );
        sidenavMenus.find('.has-children').each(function(){
            $(this).append('<div class="dropdown-toggle"><em class="zmdi zmdi-chevron-right"></em></div>');
        });
        sidenavMenus.find('.dropdown-toggle').click(function(e){
            e.preventDefault();
            var self = $(this);
            self.toggleClass('active');
            self.prev().slideToggle();
        });
    }

    // Option Nav
    var optionNav = $('nav.option-nav');
    if(optionNav.length){
        optionNav.find('.option-icon').click(function(e){
            e.preventDefault();
            $(this).parent().toggleClass('active');
        });
        var btnSets = optionNav.find('.btn-set a');
        btnSets.click(function(){
            btnSets.removeClass('active');
            $(this).addClass('active');
        });
    }

    // Footer
    var footer = $('nav.footer');
    footer.find('.sep-wrapper').click(function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        footer.find('#footer-sitemap').slideToggle();
    });


    // Section Counter
    var sectionCounter = $('.section-counter'),
        sectionCounters = sectionCounter.find('.counter'),
        counterSections = $('section[data-counter]');
    var sectionIntervals = [];
    sectionCounters.click(function(e, i){
        e.preventDefault();
        var i = $(this).index();
        var target = counterSections.filter('[data-counter="'+i+'"]');
        if(target.length){
            $('html, body').stop().animate({ 
                scrollTop: target.position().top - 4*bodySize
            }, 800 );
        }
    });
    function checkSectionCounter(st){
        if(sectionCounter.length && counterSections.length){
            sectionIntervals = [];
            counterSections.each(function(){
                let p = $(this).position(),
                    h = $(this).height();
                sectionIntervals.push([ 
                    p.top - 8*bodySize, 
                    p.top + h - 8*bodySize,
                    $(this).data('counter')
                ]);
            });

            let activeIndex = null;
            sectionIntervals.forEach(function(d){
                if(d[0] < st && st < d[1]){
                    activeIndex = d[2];
                }
            });
            sectionCounters.removeClass('active');
            if(activeIndex !== null){
                sectionCounters.eq(activeIndex).addClass('active');
            }
        }
    }

    
    // On Scroll
    checkOnScroll( $(window).scrollTop() );
    $(window).scroll(function(){
        checkOnScroll( $(this).scrollTop() );
    });
    function checkOnScroll(st){
        if(st > 400){
            backToTop.addClass('active');
        }else{
            backToTop.removeClass('active');
        }
        checkSectionCounter(st);
    }
    

    // Themes
    $('.btn-theme').click(function(e){
        e.preventDefault();
        $('#css-theme').attr('href', 'public/assets/app/css/color-'+$(this).data('theme')+'.css');
        $('body').removeClass('theme-0 theme-1 theme-2');
        $('body').addClass('theme-'+$(this).data('theme'));
    });


    // Global Search
    var globalSearch = $('.global-search');
    $('.global-search-toggle').click(function(e){
        e.preventDefault();
        globalSearch.toggleClass('active');
        if(globalSearch.hasClass('active')){
            setTimeout(function(){
                globalSearch.find('[name="keywords"]').focus();
            }, 600);
        }
    });
    

    // Quicklink Nav
    var quicklinkNav = $('.quicklink-nav');
    if(quicklinkNav.length){
        quicklinkNav.find('.btn-main').click(function(e){
            e.preventDefault();
            quicklinkNav.toggleClass('active');
        });
    }

    
    // Button Popup
    $('.btn-popup-toggle').click(function(e){
        e.preventDefault();
        $('.popup-container[data-popup="'+$(this).data('popup')+'"]').toggleClass('active');
    });
    $('.btn-popup-close-all').click(function(e){
        e.preventDefault();
        $('.popup-container').removeClass('active');
    });


    // Date Picker
    $('input.date-picker').each(function(){
        new Datepicker($(this)[0], {});
    });


    // Embed Container
    var embedContainers = $('.embed-container'),
        embedReady = true;
    if(embedContainers.length){
        embedContainers.each(function(){
            var self = $(this);
            self.find('> a').click(function(e){
                e.preventDefault();
                self.toggleClass('active');
            });
            self.find('.btn-code-copy').click(function(e){
                e.preventDefault();
                var thisBtn = $(this);
                var target = self.find('textarea');
                if(embedReady && target.length){
                    embedReady = false;
                    thisBtn.html('คัดลอกโค๊ดแล้ว');
                    target[0].select();
                    target[0].setSelectionRange(0, target[0].value.length);
                    document.execCommand('copy');
                    target.blur();
                    setTimeout(function(){
                        embedReady = true;
                        thisBtn.html('คัดลอกโค๊ด');
                        self.removeClass('active');
                    }, 1500);
                }
            });
        });
    }

    // Copy Container
    var copyContainers = $('.copy-container'),
        copyReady = true;
    if(copyContainers.length){
        copyContainers.each(function(){
            var self = $(this);
            self.find('> a').click(function(e){
                e.preventDefault();
                self.addClass('active');
                var target = self.find('textarea');
                if(copyReady && target.length){
                    copyReady = false;
                    target[0].select();
                    target[0].setSelectionRange(0, target[0].value.length);
                    document.execCommand('copy');
                    target.blur();
                    setTimeout(function(){
                        copyReady = true;
                        self.removeClass('active');
                    }, 1500);
                }
            });
        });
    }


    // Tab Container
    var tabContainers = $('.tab-container');
    if(tabContainers.length){
        tabContainers.each(function(){
            var self = $(this),
                tabs = self.find('.tabs > .tab'),
                tabContents = self.find('.tab-contents > .tab-content');
            tabs.click(function(e){
                e.preventDefault();
                var temp = $(this);
                tabs.removeClass('active');
                temp.addClass('active');
                tabContents.removeClass('active in');
                var target = tabContents.filter('[data-tab="'+temp.data('tab')+'"]');
                if(target.length){
                    target.addClass('in');
                    setTimeout(function(){
                        target.addClass('active');
                    }, 100);
                    var s = target.find('.slides');
                    if(s.length){
                        s.slick('setPosition');
                    }
                }
                AOS.refresh();
            });
        });
    }


    // Semantic UI
    $('.ui.dropdown').dropdown({
        clearable: false
    });

    // Button Gallery More
    $('.btn-gallery-more').click(function(e){
        e.preventDefault();
        var self = $(this),
            grids = self.closest('.gallery-grids');
        self.find('.hover-container').remove();
        grids.find('.grid.d-none').removeClass('d-none');
    });


    // Banner 01
    var banner01 = $('.banner-01');
    if(banner01.length){
        banner01.each(function(){
            var self = $(this),
                slideContainer = self.find('.slide-container'),
                previewContainer = self.find('.preview-container');
            if(slideContainer.length){
                slideContainer.find('.slides').slick({
                    centerMode: false, centerPadding: 0, slidesToShow: 1, infinite: true,
                    focusOnSelect: true, autoplay: false, speed: 900,
                    arrows: false, dots: false,
                    adaptiveHeight: true, asNavFor: previewContainer.find('.slides'),
                });
                previewContainer.find('.slides').slick({
                    centerMode: true, centerPadding: 0, slidesToShow: 5, infinite: true,
                    focusOnSelect: true, autoplay: false, speed: 900,
                    arrows: false, dots: false, 
                    asNavFor: slideContainer.find('.slides'),
                    responsive: [
                        { breakpoint: 767.98, settings: { slidesToShow: 3 } },
                    ]
                });
            }
        });
    }


    // Content 01
    var content01 = $('.content-01');
    if(content01.length){
        content01.find('.slide-container').each(function(){
            var self = $(this);
            self.find('.slides').slick({
                centerMode: false, centerPadding: 0, slidesToShow: 5, swipeToSlide: true, 
                focusOnSelect: true, autoplay: false, speed: 600,
                arrows: false, dots: true, appendDots: self.find('.dots'),
                responsive: [
                    { breakpoint: 1199.98, settings: { slidesToShow: 4 } },
                    { breakpoint: 991.98, settings: { slidesToShow: 3 } },
                    { breakpoint: 767.98, settings: { slidesToShow: 2 } },
                    { breakpoint: 575.98, settings: { slidesToShow: 1 } },
                ]
            });
        });
    }

    // Content 02
    var content02 = $('.content-02');
    if(content02.length){
        content02.find('.slide-container').each(function(){
            var self = $(this);
            self.find('.slides').slick({
                centerMode: false, centerPadding: 0, slidesToShow: 2, swipeToSlide: true, 
                focusOnSelect: true, autoplay: false, speed: 600,
                arrows: true, 
                prevArrow: self.find('.arrow-prev'),
                nextArrow: self.find('.arrow-next'),
                dots: true, appendDots: self.find('.dots'),
                responsive: [
                    { breakpoint: 991.98, settings: { slidesToShow: 1, centerPadding: '40px' } },
                    { breakpoint: 767.98, settings: { slidesToShow: 1, centerPadding: '0' } },
                ]
            });
        });
    }

    // Content 03
    var content03 = $('.content-03');
    if(content03.length){
        content03.find('.panels').each(function(){
            var self = $(this),
                subtabs = self.find('.subtab'),
                subtabContents = self.find('.subtab-contents > .subtab-content');
            subtabs.click(function(e){
                e.preventDefault();
                var temp = $(this);
                subtabs.removeClass('active');
                temp.addClass('active');
                subtabContents.removeClass('active in');
                var target = subtabContents.filter('[data-subtab="'+temp.data('subtab')+'"]');
                if(target.length){
                    target.addClass('in');
                    setTimeout(function(){
                        target.addClass('active');
                    }, 100);
                }
                AOS.refresh();
            });
        });
        content03.find('.subtab-contents > .subtab-content').each(function(){
            var self = $(this),
                xtabs = self.find('.xtab'),
                xtabContents = self.find('.xtab-content');
            xtabs.click(function(e){
                e.preventDefault();
                var temp = $(this);
                xtabs.removeClass('active');
                temp.addClass('active');
                xtabContents.removeClass('active in');
                var target = xtabContents.filter('[data-xtab="'+temp.data('xtab')+'"]');
                if(target.length){
                    target.addClass('in');
                    setTimeout(function(){
                        target.addClass('active');
                    }, 100);
                }
                AOS.refresh();
            });
        });
    }


    // Page Loader
    var pageLoader = $('.page-loader');
    if(pageLoader.length){
        window.onload = function(){
            pageLoader.addClass('fade-out');
            setTimeout(function(){
                pageLoader.remove();
                $('body').removeClass('loading');
                AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 15 });
            }, 1350);
        }
    }else{
        $('body').removeClass('loading');
        AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 15 });
    }

    // On Resize
    $(window).on('resize', function(){
        AOS.refresh();
    });

});
