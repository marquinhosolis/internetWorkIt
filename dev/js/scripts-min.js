$(document).ready(function () {
    // hamburguer menu show/hide
    $(".hamburguerIcon a").click(function (e) {
        e.preventDefault();
        $("body").toggleClass("body--MobileMenuVisible");
        $("#menuMobile").toggleClass("menuMobile--visible");
    });

    // mobile nav sub-menu show/hide
    $("#menuMobile .menu-item-has-children").hover(
        function () {
            $("#menuMobile .sub-menu").stop().slideDown("");
        },
        function () {
            $("#menuMobile .sub-menu").stop().slideUp("");
        }
    );

    // desktop nav sub-menu show/hide
    $("#menuDesktop .menu-item-has-children").hover(
        function () {
            $("#menuDesktop .sub-menu").stop().slideDown();
        },
        function () {
            $("#menuDesktop .sub-menu").stop().slideUp();
        }
    );

    // fix menu on top
    $(window).bind("scroll", function () {
        if ($(window).scrollTop() > 200) {
            $("header").addClass("header--fixed");
        } else {
            $("header").removeClass("header--fixed");
        }
    });

    // blog categories filter show/hide
    $(".searchFiltersDropdownLink").click(function (e) {
        e.preventDefault();
        $(".searchFiltersDropdownList").stop().slideToggle("fast");
    });

    // blog categories filter hide
    $(document).mouseup(function (e) {
        var container = $(".searchFiltersDropdownList");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.slideUp("fast");
        }
    });

    // show more posts
    var count = 0;
    $(".blogArticles .blogPageArticle:gt(3)").hide();
    $(".blogArticles .blogPageArticle").each(function () {
        count++;
        if (count > 4) {
            $(".blogPageArticleLoadMore").show();
        }
    });

    $(".blogPageArticleLoadMore").click(function (e) {
        e.preventDefault();
        $(".blogArticles .blogPageArticle").show();
        $(this).hide();
    });

    // on page package & services, remove class flexslider if vieport is bigger than 768px
    if ($(window).width() >= 1024) {
        $(".packagesBox .packagesSlider").removeClass("flexslider");
    }

    //read more on subpages
    /*if($(window).width() >= 768){
		var divHeight = $('.packageSinglePageBenefits').outerHeight();
		if(divHeight >= 600){
			$('.packageSinglePageBenefits').addClass('packageSinglePageBenefits--hidden');
			$('.packageSinglePageBenefitsReadMore a').click(function(e){
				e.preventDefault();
				$('.packageSinglePageBenefits').removeClass('packageSinglePageBenefits--hidden');
			})
		}
		
	}*/

    // init animation on scroll
    AOS.init();

    // init flexslider
    $(".homePartnershipsSlider .flexslider").flexslider({
        animation: "slide",
        itemWidth: 240,
        itemMargin: 40,
        minItems: 2,
        controlNav: false,
        slideshow: false,
        move: 1,
        animationLoop: true,
    });
    $(".aboutTestimonials .flexslider").flexslider({
        animation: "slide",
        animationLoop: false,
        controlNav: false,
        animationLoop: true,
    });
    $(".packagesBox .flexslider").flexslider({
        animation: "slide",
        animationLoop: false,
        controlNav: false,
        animationLoop: true,
    });
});
