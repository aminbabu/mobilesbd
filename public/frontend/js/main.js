// global object - MBD
const MBD = {};

// utility interactions
MBD.interActions = function () {};

// bootstrap range slider
MBD.initBootstrapRangeSlider = function (selector, options = {}) {
    if (!$(selector).length) return;

    const bootstrapSlider = $(selector).bootstrapSlider({ ...options });

    return bootstrapSlider;
};

MBD.bootstrapSlider = function () {
    (function () {
        // price range slider
        const priceRangeOptions = {
            range: true,
            id: "priceRangeSlider",
            precision: 0,
            tooltip: "hide",
            handle: "square",
        };
        const priceRangeSlider = MBD.initBootstrapRangeSlider(
            ".price-range-slider",
            priceRangeOptions
        );

        if (priceRangeSlider) {
            priceRangeSlider
                .on("change", function (slider) {
                    const [start, end] = slider.value.newValue;
                    $("#minPrice").val(start);
                    $("#maxPrice").val(end);
                })
                .on("slide", function (slider) {
                    const [start, end] = slider.value;
                    $("#minPrice").val(start);
                    $("#maxPrice").val(end);
                });
        }

        if ($("#minPrice, #maxPrice").length) {
            $("#minPrice, #maxPrice").on("input", function () {
                const start =
                    parseInt($("#minPrice").val()) < 0
                        ? 0
                        : parseInt($("#minPrice").val());
                const end =
                    parseInt($("#maxPrice").val()) < 0
                        ? 0
                        : parseInt($("#maxPrice").val());

                $(this).val() < 0 ? $(this).val(0) : null;
                priceRangeSlider.bootstrapSlider("setValue", [start, end]);
            });
        }
    })();
};

// slick carousel
MBD.initSlick = function (selector = ".mdb-carousel", options = {}) {
    if (!$(selector).length) return;

    $(selector).slick(options);
};

MBD.slickCarousel = function () {
    MBD.initSlick(".product-slider-gallery", {
        nextArrow: ".product-slider-gallery-wrapper .arrows .fa-angle-right",
        prevArrow: ".product-slider-gallery-wrapper .arrows .fa-angle-left",
        infinite: false,
        speed: 1000,
        slidesToShow: 6,
        slidesToScroll: 5,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
        ],
    });
    MBD.initSlick(".upcoming-product-gallery", {
        nextArrow: ".upcoming-product-gallery-wrapper .arrows .fa-angle-right",
        prevArrow: ".upcoming-product-gallery-wrapper .arrows .fa-angle-left",
        infinite: false,
        speed: 1000,
        slidesToShow: 6,
        slidesToScroll: 5,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
        ],
    });
    MBD.initSlick(".sidebar-products-wrapper", {
        nextArrow: ".brand-wrapper .arrows .fa-angle-right",
        prevArrow: ".brand-wrapper .arrows .fa-angle-left",
        infinite: false,
        speed: 500,
    });
};

// show more text
MBD.showmore = function () {
    const readAllBtn = document.querySelector(".readall-button");

    if (!readAllBtn) return;

    readAllBtn.addEventListener("click", function () {
        const wrapper = document.querySelector(".readall-wrapper .readall");
        const content = document.querySelector(".readall-wrapper .readall p");
        let buttonText = document.querySelector(".readall-button .toggle-text");
        let doubleArrow = document.querySelector(".readall-button .fad");

        const wrapplerClasses = wrapper.classList;
        const contentHeight = content.clientHeight;

        if (wrapper.clientHeight === contentHeight) {
            wrapper.style.height = `75px`;
            buttonText.textContent = "More";
            wrapplerClasses.add("readall-hide");
            this.classList.remove("active");
            doubleArrow.classList.remove("active");
        } else {
            wrapper.style.height = contentHeight + "px";
            buttonText.textContent = "Less";
            wrapplerClasses.remove("readall-hide");
            this.classList.add("active");
            doubleArrow.classList.add("active");
        }
    });
};

// header
MBD.header = function () {
    $(".sm-nav-icon").click(function () {
        $(".main-navbar").addClass("active");
    });

    $(".sm-nav-close-icon").click(function () {
        $(".main-navbar").removeClass("active");
    });

    $(".main-navbar .nav-item.drop-menu").click(function () {
        $(this).find(".dropdown-menu").toggleClass("active");
        $(this).find(".fa-angle-right").toggleClass("active");
    });

    $(".comparison-sidebar .offcanvas").on("show.bs.offcanvas", (event) => {
        $(".compare-trigger-btn").addClass("active");
    });

    $(".comparison-sidebar .offcanvas").on("hide.bs.offcanvas", (event) => {
        $(".compare-trigger-btn").removeClass("active");
    });

    $(".sm-search-icon").click(function () {
        $(".search-box").fadeIn();
    });

    $(".search-box, .search-box .close-btn").click(function (e) {
        if (
            ($(e.target).length && $(e.target)[0] === $(".search-box")[0]) ||
            $(e.target).closest(".close-btn")[0] ===
                $(".search-box .close-btn")[0]
        ) {
            $(e.target).closest(".search-box").fadeOut();
        }
    });
};

// sidebar
MBD.sidebar = function () {
    if ($(window).width() < 992) {
        $(".sidebar").addClass("offcanvas offcanvas-start");
    } else {
        $(".sidebar").removeClass("offcanvas offcanvas-start");
    }
};

// dynamic videos
MBD.dynamicVideos = function () {
    if (!$(".optional-videos .video").length) return;

    $(".optional-videos .video").each(function () {
        $(this).click(function () {
            const src =
                $(this).data("ifrLink") || $(this).attr("data-ifr-link");
            $("#featured-video-ifr").attr("src", `${src}?autoplay=1`);
            $(window).scrollTop(0);
        });
    });
};

// product gallery
MBD.xGallery = function () {
    $(".product-gallery-item").click(function () {
        const src = $(this).find("img").attr("src");

        $(this)
            .closest(".product-gallery-grid")
            .find(".featured-img img")
            .attr("src", src);
    });

    $(".product-gallery-grid .featured-img").click(function () {
        const selector =
            $(this).data("bsTarget") || $(this).attr("data-bs-target");
        const src = $(this).find("img").attr("src");

        $(selector).find(".gallery-preview").attr("src", src);
    });
};

// single product
MBD.singleProduct = function () {
    /**
     * scrollspy
     */
    var scrollSpy = new bootstrap.ScrollSpy(document.body, {
        target: "#spyThroughThis",
    });

    /**
     * comment system
     */
    const addCommnetBtns = document.querySelectorAll(
        ".user-reviews .title.foot .comment"
    );

    addCommnetBtns.forEach(function (commentBtn) {
        commentBtn.addEventListener("click", function () {
            const commentField =
                this.parentElement.parentElement.nextElementSibling;

            commentField.classList.toggle("active");
        });
    });

    const toggleCommentBtn = document.querySelectorAll(".comment-triger");

    toggleCommentBtn.forEach(function (btn) {
        btn.addEventListener("click", function () {
            this.nextElementSibling.classList.toggle("active");
        });
    });

    // reply other's comment
    const replyButtons = document.querySelectorAll(".foot .reply-btn");

    replyButtons.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.preventDefault();

            const replyField = this.parentElement.nextElementSibling;

            replyField.classList.toggle("active");
        });
    });

    // report spam comments
    const reportButtons = document.querySelectorAll(".foot .report-btn");

    reportButtons.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.preventDefault();

            alert("Reported spam!");
        });
    });
};

// nice select
MBD.initNiceSelect2 = function () {
    const selectors = Array.from(
        document.getElementsByClassName("nice-select")
    );

    if (!selectors.length) return;

    selectors.forEach((selector) => {
        NiceSelect.bind(selector);
    });
};

// doucment on load
window.addEventListener("DOMContentLoaded", function () {
    MBD.bootstrapSlider();
    MBD.slickCarousel();
    MBD.showmore();
    MBD.header();
    MBD.sidebar();
    MBD.xGallery();
    MBD.dynamicVideos();
    MBD.singleProduct();
    MBD.initNiceSelect2();
    MBD.interActions();
});

// doucment on scroll
window.addEventListener("scroll", function () {});

// doucment on resize
window.addEventListener("resize", function () {
    MBD.sidebar();
});
