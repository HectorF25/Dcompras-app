(function($) {
    "use strict";
    var APP = {},
        $body = $("body"),
        $window = $(window),
        $siteWrapper = $("#site-wrapper"),
        $document = $(document);
    APP.isMobile = function() {
        return window.matchMedia("(max-width: 1200px)").matches;
    };
    APP.headerSticky = {
        scroll_offset_before: 0,
        init: function() {
            this.sticky();
            this.scroll();
            this.resize();
            this.processSticky();
        },
        sticky: function() {
            $(".header-sticky .sticky-area").each(function() {
                var $this = $(this);
                if (!$this.is(":visible")) {
                    return;
                }
                if (!$this.parent().hasClass("sticky-area-wrap")) {
                    $this.wrap('<div class="sticky-area-wrap"></div>');
                }
                var $wrap = $this.parent();
            });
        },
        resize: function() {
            $window.resize(function() {
                APP.headerSticky.sticky();
                APP.headerSticky.processSticky();
            });
        },
        scroll: function() {
            $window.on("scroll", function() {
                APP.headerSticky.processSticky();
            });
        },
        processSticky: function() {
            var current_scroll_top = $window.scrollTop();
            $(".header-sticky .sticky-area").each(function() {
                var $this = $(this);
                if (!$this.is(":visible")) {
                    return;
                }
                var $wrap = $this.parent(),
                    sticky_top = 0,
                    sticky_current_top = $wrap.offset().top,
                    borderWidth = $body.css("border-width");
                if (borderWidth !== "") {
                    sticky_top += parseInt(borderWidth);
                }
                if (sticky_current_top - sticky_top < current_scroll_top) {
                    $this.css("position", "fixed");
                    $this.css("top", sticky_top + "px");
                    $wrap.addClass("sticky");
                } else {
                    if ($wrap.hasClass("sticky")) {
                        $this.css("position", "").css("top", "");
                        $wrap.removeClass("sticky");
                    }
                }
            });
            if (APP.headerSticky.scroll_offset_before > current_scroll_top) {
                $(".header-sticky-smart .sticky-area").each(function() {
                    if ($(this).hasClass("header-hidden")) {
                        $(this).removeClass("header-hidden");
                    }
                });
            } else {
                $(".header-sticky-smart .sticky-area").each(function() {
                    var $wrapper = $(this).parent();
                    if ($wrapper.length) {
                        if (
                            APP.headerSticky.scroll_offset_before >
                            $wrapper.offset().top + $(this).outerHeight() &&
                            !$(this).hasClass("header-hidden")
                        ) {
                            $(this).addClass("header-hidden");
                        }
                    }
                });
            }
            APP.headerSticky.scroll_offset_before = current_scroll_top;
        },
    };
    APP.headerMobile = {
        init: function() {
            $(".nav-link").on("click", function(e) {
                if (!APP.isMobile()) {
                    return;
                }
                var $this = $(this);
                if (
                    $this.attr("href") === "#" ||
                    $(e.target).closest(".caret").length
                ) {
                    e.preventDefault();
                    $this.next(".sub-menu").slideToggle(function() {
                        $(this).toggleClass("show").css("display", "");
                    });
                }
            });
        },
    };
    APP.sidebarSticky = {
        init: function() {
            var header_sticky_height = 0;
            if ($("#site-header.header-sticky").length > 0) {
                header_sticky_height = 60;
            }
            $(".primary-sidebar.sidebar-sticky > .primary-sidebar-inner").hcSticky({
                stickTo: "#sidebar",
                top: header_sticky_height + 30,
            });
        },
    };
    APP.offCanvas = {
        init: function() {
            $("[data-off-canvas-target]").on("click", function() {
                var moveStyle = "from-right";
                if ($($(this).data("off-canvas-target")).hasClass("from-left")) {
                    moveStyle = "from-left";
                }
                $body
                    .toggleClass("gtf-off-canvas-in")
                    .toggleClass("gtf-off-canvas-in-" + moveStyle);
            });
            $(".off-canvas-close").on("click", function() {
                $body
                    .removeClass("gtf-off-canvas-in")
                    .removeClass("gtf-off-canvas-in-from-left")
                    .removeClass("gtf-off-canvas-in-from-right");
            });
            $(".gtf-off-canvas-wrapper > .off-canvas-overlay").on(
                "click",
                function(event) {
                    $body
                        .removeClass("gtf-off-canvas-in")
                        .removeClass("gtf-off-canvas-in-from-left")
                        .removeClass("gtf-off-canvas-in-from-right");
                }
            );
        },
    };
    APP.util = {
        init: function() {
            this.mfpEvent();
            this.backToTop();
            this.tooltip();
            this.toggleIcon();
        },
        mfpEvent: function($elWrap) {
            if ($elWrap === undefined) {
                $elWrap = $("body");
            }
            $elWrap.find("[data-gtf-mfp]").each(function() {
                var $this = $(this),
                    defaults = {
                        type: "image",
                        closeOnBgClick: true,
                        closeBtnInside: false,
                        mainClass: "mfp-zoom-in",
                        midClick: true,
                        removalDelay: 300,
                        callbacks: {
                            beforeOpen: function() {
                                switch (this.st.type) {
                                    case "image":
                                        this.st.image.markup = this.st.image.markup.replace(
                                            "mfp-figure",
                                            "mfp-figure mfp-with-anim"
                                        );
                                        break;
                                    case "iframe":
                                        this.st.iframe.markup = this.st.iframe.markup.replace(
                                            "mfp-iframe-scaler",
                                            "mfp-iframe-scaler mfp-with-anim"
                                        );
                                        break;
                                }
                            },
                            beforeClose: function() {
                                this.container.trigger("gtf_mfp_beforeClose");
                            },
                            close: function() {
                                this.container.trigger("gtf_mfp_close");
                            },
                            change: function() {
                                var _this = this;
                                if (this.isOpen) {
                                    this.wrap.removeClass("mfp-ready");
                                    setTimeout(function() {
                                        _this.wrap.addClass("mfp-ready");
                                    }, 10);
                                }
                            },
                        },
                    },
                    mfpConfig = $.extend({}, defaults, $this.data("mfp-options"));
                var galleryId = $this.data("gallery-id");
                if (typeof galleryId !== "undefined") {
                    var items = [],
                        items_src = [];
                    var $imageLinks = $('[data-gallery-id="' + galleryId + '"]');
                    $imageLinks.each(function() {
                        var src = $(this).attr("href");
                        if (items_src.indexOf(src) < 0) {
                            items_src.push(src);
                            items.push({ src: src });
                        }
                    });
                    mfpConfig.items = items;
                    mfpConfig.gallery = { enabled: true };
                    mfpConfig.callbacks.beforeOpen = function() {
                        var index = $imageLinks.index(this.st.el);
                        switch (this.st.type) {
                            case "image":
                                this.st.image.markup = this.st.image.markup.replace(
                                    "mfp-figure",
                                    "mfp-figure mfp-with-anim"
                                );
                                break;
                            case "iframe":
                                this.st.iframe.markup = this.st.iframe.markup.replace(
                                    "mfp-iframe-scaler",
                                    "mfp-iframe-scaler mfp-with-anim"
                                );
                                break;
                        }
                        if (-1 !== index) {
                            this.goTo(index);
                        }
                    };
                }
                $this.magnificPopup(mfpConfig);
            });
        },
        tooltip: function($elWrap) {
            if ($elWrap === undefined) {
                $elWrap = $("body");
            }
            $elWrap.find('[data-toggle="tooltip"]').each(function() {
                var configs = { container: $(this).parent() };
                if ($(this).closest(".gtf__tooltip-wrap").length) {
                    configs = $.extend({},
                        configs,
                        $(this).closest(".gtf__tooltip-wrap").data("tooltip-options")
                    );
                }
                $(this).tooltip(configs);
            });
        },
        backToTop: function() {
            var $backToTop = $(".gtf-back-to-top");
            if ($backToTop.length > 0) {
                $backToTop.on("click", function(event) {
                    event.preventDefault();
                    $("html,body").animate({ scrollTop: "0px" }, 800);
                });
                $window.on("scroll", function(event) {
                    var scrollPosition = $window.scrollTop(),
                        windowHeight = $window.height() / 2;
                    if (scrollPosition > windowHeight) {
                        $backToTop.addClass("in");
                    } else {
                        $backToTop.removeClass("in");
                    }
                });
            }
        },
        toggleIcon: function() {
            $(".toggle-icon:not(.no-animation)").on("click", function() {
                $(this).toggleClass("in");
            });
            $(".navbar-toggler.toggle-icon").on("click", function() {
                $(this).closest(".main-header").toggleClass("show-menu-dropdown");
            });
        },
    };
    APP.slickSlider = {
        init: function() {
            this.slickSetup();
            $("body").on("breakpoint", function(event, slick, breakpoint) {
                APP.util.mfpEvent(slick.$slider);
                APP.util.tooltip(slick.$slider);
            });
        },
        slickSetup: function() {
            var options_default = {
                slidesToScroll: 1,
                slidesToShow: 1,
                adaptiveHeight: true,
                arrows: true,
                dots: true,
                autoplay: false,
                autoplaySpeed: 3000,
                centerMode: false,
                centerPadding: "50px",
                draggable: true,
                fade: false,
                focusOnSelect: false,
                infinite: false,
                pauseOnHover: false,
                responsive: [],
                rtl: false,
                speed: 300,
                vertical: false,
                prevArrow: '<div class="slick-prev" aria-label="Previous"><i class="fas fa-chevron-left"></i></div>',
                nextArrow: '<div class="slick-next" aria-label="Next"><i class="fas fa-chevron-right"></i></div>',
                customPaging: function(slider, i) {
                    return $("<span></span>");
                },
            };
            $(".slick-slider").each(function() {
                var $this = $(this);
                if (!$this.hasClass("slick-initialized")) {
                    var options = $this.data("slick-options");
                    options = $.extend({}, options_default, options);
                    $this.slick(options);
                    $this.on("setPosition", function(event, slick) {
                        var max_height = 0;
                        slick.$slides.each(function() {
                            var $slide = $(this);
                            if ($slide.hasClass("slick-active")) {
                                if (
                                    slick.options.adaptiveHeight &&
                                    slick.options.slidesToShow > 1 &&
                                    slick.options.vertical === false
                                ) {
                                    if (max_height < $slide.outerHeight()) {
                                        max_height = $slide.outerHeight();
                                    }
                                }
                            }
                        });
                        if (max_height !== 0) {
                            $this.find("> .slick-list").animate({ height: max_height }, 500);
                        }
                    });
                }
            });
        },
    };
    APP.isotope = {
        config_default: { isOriginLeft: true },
        init: function($wrapper) {
            if (typeof $wrapper === "undefined") {
                $wrapper = $body;
            }
            var _that = this;
            $(".isotope", $wrapper).each(function() {
                var $this = $(this);
                $this.imagesLoaded({ background: true }, function() {
                    var config = $.extend({},
                            _that.config_default,
                            $this.data("isotope-options")
                        ),
                        columns_gutter = $this.attr("class").match(/gtf__gutter-(\d{0,2})/);
                    if (columns_gutter !== null) {
                        columns_gutter = parseInt(columns_gutter[1]);
                    } else {
                        columns_gutter = 0;
                    }
                    if (
                        typeof config.masonry !== "undefined" &&
                        typeof config.masonry.columnWidth !== "undefined" &&
                        config.masonry.columnWidth === ".gtf__col-base"
                    ) {
                        if ($this.closest(".g5element__gallery").length) {
                            $this.append(
                                '<div class="g5element__gallery-item gtf__col-base"></div>'
                            );
                        } else {
                            $this.append('<post class="gtf__col-base"></post>');
                        }
                    }
                    if (
                        typeof config.masonry !== "undefined" &&
                        typeof config.masonry.columnWidth !== "undefined" &&
                        typeof config.metro !== "undefined"
                    ) {
                        config = $.extend({}, config, {
                            masonry: {
                                columnWidth: _that.metro_width($this, columns_gutter),
                            },
                            resize: false,
                        });
                    }
                    $this.isotope(config);
                });
            });
            $window.on("resize", function() {
                $(".isotope", $wrapper).each(function() {
                    var $this = $(this),
                        config = $.extend({},
                            _that.config_default,
                            $this.data("isotope-options")
                        ),
                        columns_gutter = $this.attr("class").match(/gtf__gutter-(\d{0,2})/);
                    if (columns_gutter !== null) {
                        columns_gutter = parseInt(columns_gutter[1]);
                    } else {
                        columns_gutter = 0;
                    }
                    if (
                        typeof config.masonry !== "undefined" &&
                        typeof config.masonry.columnWidth !== "undefined" &&
                        typeof config.metro !== "undefined"
                    ) {
                        config = $.extend({}, config, {
                            masonry: {
                                columnWidth: _that.metro_width($this, columns_gutter),
                            },
                            resize: false,
                        });
                        $this.isotope(config);
                    }
                    _that.layout($this);
                });
            });
        },
        layout: function($target) {
            if ($target.data("isotope")) {
                $target.isotope("layout");
            }
            setTimeout(function() {
                if ($target.data("isotope")) {
                    $target.isotope("layout");
                }
            }, 500);
            setTimeout(function() {
                if ($target.data("isotope")) {
                    $target.isotope("layout");
                }
            }, 1000);
        },
        metro_width: function($target, columns_gutter) {
            var _that = this,
                options = $target.data("isotope-options"),
                $container = $target.closest("[data-isotope-wrapper]"),
                baseColumns = 1,
                imageSizeBase = $target.data("image-size-base"),
                ratioBase = 1;
            if (imageSizeBase) {
                imageSizeBase = imageSizeBase.split("x");
                ratioBase =
                    parseInt(imageSizeBase[1], 10) / parseInt(imageSizeBase[0], 10);
                if (isNaN(ratioBase)) {
                    ratioBase = 1;
                }
            }
            $target.find(options.itemSelector).each(function() {
                var $item = $(this),
                    multiplier_w = _that.get_multiplier_width($item),
                    columns = 1;
                if (multiplier_w != 0) {
                    columns = 60 / multiplier_w;
                }
                if (baseColumns < columns) {
                    baseColumns = columns;
                }
            });
            var baseWidth =
                ($container.width() - columns_gutter * (baseColumns - 1)) /
                baseColumns,
                baseHeight = Math.floor(baseWidth * ratioBase);
            $target.find(options.itemSelector).each(function() {
                var $item = $(this),
                    $itemInner = $item.find(" > [data-ratio]"),
                    ratio = $itemInner.data("ratio");
                if (ratio) {
                    ratio = ratio.split("x");
                    var ratioH = ratio[1],
                        height =
                        baseHeight * ratioH + Math.ceil(ratioH - 1) * columns_gutter,
                        $image = $itemInner.find(".gtf__entry-thumbnail");
                    $image.addClass("gtf__thumbnail-size-none").css("height", height);
                }
            });
            return options.masonry.columnWidth;
        },
        get_multiplier_width: function($item) {
            var multiplier_w = 60;
            if ($item.is("[class]") && !$item.hasClass("gtf__col-base")) {
                var _class = $item.attr("class"),
                    multiplier_mb_w = _class.match(/col-(\d{1,2})/),
                    multiplier_xs_w = _class.match(/col-sm-(\d{1,2})/),
                    multiplier_sm_w = _class.match(/col-md-(\d{1,2})/),
                    multiplier_md_w = _class.match(/col-lg-(\d{1,2})/),
                    multiplier_lg_w = _class.match(/col-xl-(\d{1,2})/);
                if (_class.match(/col-12-5/)) {
                    multiplier_w = 12;
                } else if (multiplier_mb_w !== null) {
                    multiplier_w = multiplier_mb_w[1] * 5;
                }
                if (window.matchMedia("(min-width: 576px)").matches) {
                    if (_class.match(/col-sm-12-5/)) {
                        multiplier_w = 12;
                    } else if (multiplier_xs_w !== null) {
                        multiplier_w = multiplier_xs_w[1] * 5;
                    }
                }
                if (window.matchMedia("(min-width: 768px)").matches) {
                    if (_class.match(/col-md-12-5/)) {
                        multiplier_w = 12;
                    } else if (multiplier_sm_w !== null) {
                        multiplier_w = multiplier_sm_w[1] * 5;
                    }
                }
                if (window.matchMedia("(min-width: 992px)").matches) {
                    if (_class.match(/col-lg-12-5/)) {
                        multiplier_w = 12;
                    } else if (multiplier_md_w !== null) {
                        multiplier_w = multiplier_md_w[1] * 5;
                    }
                }
                if (window.matchMedia("(min-width: 1200px)").matches) {
                    if (_class.match(/col-xl-12-5/)) {
                        multiplier_w = 12;
                    } else if (multiplier_lg_w !== null) {
                        multiplier_w = multiplier_lg_w[1] * 5;
                    }
                }
            }
            return multiplier_w;
        },
    };
    APP.animation = {
        delay: 100,
        itemQueue: [],
        queueTimer: null,
        $wrapper: null,
        init: function() {
            var _self = this;
            _self.$wrapper = $body;
            _self.itemQueue = [];
            _self.queueTimer = null;
            if (typeof delay !== "undefined") {
                _self.delay = delay;
            }
            setTimeout(function() {
                _self.registerAnimation();
            }, 200);
        },
        registerAnimation: function() {
            var _self = this;
            $("[data-animate]:not(.animated)", _self.$wrapper).waypoint(
                function() {
                    var _el = this.element ? this.element : this,
                        $this = $(_el);
                    if ($this.is(":visible")) {
                        _self.itemQueue.push(_el);
                        _self.processItemQueue();
                    } else {
                        $this.addClass($this.data("animate")).addClass("animated");
                    }
                }, { offset: "90%", triggerOnce: true }
            );
        },
        processItemQueue: function() {
            var _self = this;
            if (_self.queueTimer) return;
            _self.queueTimer = window.setInterval(function() {
                if (_self.itemQueue.length) {
                    var $item = $(_self.itemQueue.shift());
                    $item.addClass($item.data("animate")).addClass("animated");
                    _self.processItemQueue();
                } else {
                    window.clearInterval(_self.queueTimer);
                    _self.queueTimer = null;
                }
            }, _self.delay);
        },
    };
    APP.counter = {
        init: function() {
            if (typeof Waypoint !== "undefined") {
                $(".counter .counterup").waypoint(
                    function() {
                        var start = $(this.element).data("start");
                        var end = $(this.element).data("end");
                        var decimals = $(this.element).data("decimals");
                        var duration = $(this.element).data("duration");
                        var separator = $(this.element).data("separator");
                        var usegrouping = false;
                        if (separator !== "") {
                            usegrouping = true;
                        }
                        var decimal = $(this.element).data("decimal");
                        var prefix = $(this.element).data("prefix");
                        var suffix = $(this.element).data("suffix");
                        var options = {
                            useEasing: true,
                            useGrouping: usegrouping,
                            separator: separator,
                            decimal: decimal,
                            prefix: prefix,
                            suffix: suffix,
                        };
                        var counterup = new CountUp(
                            this.element,
                            start,
                            end,
                            decimals,
                            duration,
                            options
                        );
                        counterup.start();
                        this.destroy();
                    }, { triggerOnce: true, offset: "bottom-in-view" }
                );
            }
        },
    };
    APP.countdown = {
        init: function() {
            var $countDownEl = $("[data-countdown]");
            if ($countDownEl.length < 1) {
                return;
            }
            var $endTime = $countDownEl.data("countdown-end");
            var countDownDate = new Date($endTime).getTime();
            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor(
                    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                );
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                $(".day").html(days);
                $(".hour").html(("0" + hours).slice(-2));
                $(".minute").html(("0" + minutes).slice(-2));
                $(".second").html(("0" + seconds).slice(-2));
                if (distance < 0) {
                    clearInterval(x);
                }
            }, 1000);
        },
    };
    APP.datepicker = {
        init: function() {
            var $datePickerEl = $("[data-datepicker]");
            if ($datePickerEl.length < 1) {
                return;
            }
            var options = $datePickerEl.data("picker-option");
            $.fn.datepicker.language["my-lang"] = {
                days: [
                    "Sunday",
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                ],
                daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                daysMin: ["S", "M", "T", "W", "T", "F", "S"],
                months: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December",
                ],
                monthsShort: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                today: "Today",
                clear: "Clear",
                dateFormat: "mm/dd/yyyy",
                timeFormat: "hh:ii aa",
                firstDay: 0,
            };
            var option_default = {
                navTitles: { days: "MM yyyy" },
                weekends: [0],
                altField: "#datepicker_send",
            };
            options = $.extend({}, option_default, options);
            $datePickerEl.datepicker(options);
        },
    };
    APP.tinymce = {
        init: function() {
            var $tinyMceEl = $("[data-tinymce]");
            if ($tinyMceEl.length < 1) {
                return;
            }
            tinymce.init({
                selector: "[data-tinymce]",
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table directionality emoticons template paste",
                ],
                toolbar: " styleselect | bold italic underline | bullist numlist blockquote | link unlink",
                menubar: false,
                branding: false,
            });
        },
    };
    APP.uploader = {
        init: function() {
            var $uploadEl = $("[data-uploader='true']");
            if ($uploadEl.length < 1) {
                return;
            }
            var $url = $uploadEl.data("uploader-url");
            var myDrop = new Dropzone("[data-uploader='true']", { url: $url });
        },
    };
    APP.custom = {
        init: function() {
            this.dimisPopup();
            this.closeCampaign();
            this.showUISlider();
            this.circleProgressBar();
            this.changeQuantity();
            this.slickCustomNav();
            this.showFormSearch();
            this.reInitWhenTabShow();
            this.clipboardjsInnit();
            this.removeBottomRadius();
            this.documentSearch();
            this.documentLinkActive();
            this.documentScroll();
        },
        dimisPopup: function() {
            $(".popup-menu-canvas-dismiss").on("click", function(e) {
                e.preventDefault();
                $("#canvas-menu").magnificPopup("close");
            });
            $(".button-close").on("click", function(e) {
                e.preventDefault();
                $("#search-popup").magnificPopup("close");
            });
        },
        closeCampaign: function() {
            $("#campaign-close-button").on("click", function(e) {
                e.preventDefault();
                $(".top-campaign").slideUp();
            });
        },
        showUISlider: function() {
            var defaultOption = { range: true, min: 0, max: 4000, values: [0, 2000] };
            var $slider = $('[data-slider="true"]');
            $slider.each(function() {
                var $this = $(this);
                var options = $this.data("slider-options");
                options = $.extend({}, defaultOption, options);
                options.slide = function(event, ui) {
                    $this
                        .parents(".price-range")
                        .find(".amount")
                        .val("$" + ui.values[0] + " to $" + ui.values[1]);
                };
                $this.slider(options);
                $this
                    .parents(".price-range")
                    .find(".amount")
                    .val(
                        "$" +
                        $this.slider("values", 0) +
                        " to $" +
                        $this.slider("values", 1)
                    );
            });
        },
        percentageToDegrees: function(percentage) {
            return (percentage / 100) * 360;
        },
        circleProgressBar: function() {
            $(".progress").each(function() {
                var $value = $(this).attr("data-value");
                var $left = $(this).find(".progress-left .progress-bar");
                var $right = $(this).find(".progress-right .progress-bar");
                if ($value > 0) {
                    if ($value <= 50) {
                        $right.css(
                            "transform",
                            "rotate(" + APP.custom.percentageToDegrees($value) + "deg)"
                        );
                        $right.addClass("circle");
                    } else {
                        $right.css("transform", "rotate(180deg)");
                        $left.css(
                            "transform",
                            "rotate(" + APP.custom.percentageToDegrees($value - 50) + "deg)"
                        );
                        $left.addClass("circle");
                    }
                }
            });
        },
        displayQuantity: function(quantity, input) {
            if (quantity < 10) {
                input.val("0" + quantity);
            } else {
                input.val(quantity);
            }
        },
        changeQuantity: function() {
            var $formAddCartEl = $(".form-add-cart");
            if ($formAddCartEl.length < 1) {
                return;
            }
            var $buttonUp = $formAddCartEl.find(".input-group-append");
            var $buttonDown = $formAddCartEl.find(".input-group-prepend");
            var $input = $formAddCartEl.find(".form-control");
            $buttonUp.on("click", function(e) {
                e.preventDefault();
                var $value = parseInt($input.val());
                var $newVal = $value + 1;
                APP.custom.displayQuantity($newVal, $input);
            });
            $buttonDown.on("click", function(e) {
                e.preventDefault();
                var $value = parseInt($input.val());
                if ($value === 1) {
                    return;
                }
                var $newVal = $value - 1;
                APP.custom.displayQuantity($newVal, $input);
            });
        },
        slickCustomNav: function() {
            var $slickslider = $(".custom-nav");
            if ($slickslider.length < 1) {
                return;
            }
            $(".arrow").on("click", function(e) {
                e.preventDefault();
                if ($(this).hasClass("slick-prev")) {
                    $slickslider.slick("slickPrev");
                }
                if ($(this).hasClass("slick-next")) {
                    $slickslider.slick("slickNext");
                }
                $slickslider.on("afterChange", function(slick, currentSlide) {
                    if (0 === currentSlide.currentSlide) {
                        $("#previous").addClass("disabled");
                    } else {
                        $("#previous").removeClass("disabled");
                    }
                    if (
                        currentSlide.slideCount - currentSlide.options.slidesToShow ===
                        currentSlide.currentSlide
                    ) {
                        $("#next").addClass("disabled");
                    } else {
                        $("#next").removeClass("disabled");
                    }
                });
            });
        },
        showFormSearch: function() {
            var $formEl = $(".form-search");
            if ($formEl.length < 1) {
                return;
            }
            var $clickEls = $formEl.find(".input-group-append");
            $.each($clickEls, function() {
                $(this).on("click", function(e) {
                    e.preventDefault();
                    $(this).next().toggle();
                });
            });
        },
        reInitWhenTabShow: function() {
            $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
                $($(this).attr("href")).find(".slick-slider").slick("refresh");
                $('[data-toggle="tooltip"]').tooltip("update");
                if ($(e.target).attr("href") !== undefined) {
                    var $target = $($(e.target).attr("href"));
                    APP.util.mfpEvent($target);
                }
                APP.datepicker.init();
                $(".collapsible").removeClass("show");
                $('[data-toggle="collapse"]').addClass("collapsed");
                $($(this).attr("href"))
                    .find('[data-toggle="collapse"]')
                    .removeClass("collapsed");
                $($(this).attr("href")).find(".collapsible").addClass("show");
            });
            $(".collapsible").on("show.bs.collapse", function() {
                var $parent = $(this).parents(".tab-pane");
                $parent.addClass("show active");
                $parent
                    .parents(".collapse-tabs")
                    .find('a[data-toggle="tab"]')
                    .removeClass("active");
                var $id = $parent.attr("id");
                $parent
                    .parents(".collapse-tabs")
                    .find('a[href="#' + $id + '"]')
                    .toggleClass("active");
            });
        },
        clipboardjsInnit: function() {
            var $button = $("[data-clipboard]");
            if ($button.length < 1) {
                return;
            }
            new ClipboardJS("[data-clipboard]");
        },
        removeBottomRadius: function() {
            var $formSearchEl = $(".form-search-ajax");
            if ($formSearchEl.length < 1) {
                return;
            }
            $(".dropdown").on("shown.bs.dropdown", function() {
                var $item = $(this).parents(".form-search-item");
                if ($item.length > 0) {
                    $item.toggleClass("bottom-no-round");
                } else {
                    $(this).toggleClass("bottom-no-round");
                }
            });
        },
        documentSearch: function() {
            var $input = $(".search-input");
            if ($input.length < 1) {
                return;
            }
            var $liResult;
            var liSelected;
            $input.on("keyup", function(e) {
                var $ul = $(".sidebar-menu");
                var $li = $ul.find("li");
                var i;
                var array = [];
                var filter = $(this).val().toUpperCase();
                var $inputGroup = $(this).closest(".input-group");
                var $result = $inputGroup.find(".search-result");
                if (e.which !== 40 && e.which !== 38) {
                    $result.addClass("show");
                    for (i = 0; i < $li.length; i++) {
                        var a = $li[i].getElementsByTagName("a")[0];
                        var txtValue = a.textContent || a.innerText;
                        if (
                            txtValue.toUpperCase().indexOf(filter) > -1 &&
                            filter !== "" &&
                            a.href.indexOf("#") === -1
                        ) {
                            array.push({ link: a.href, text: txtValue });
                            $result.html("");
                        }
                    }
                    $inputGroup.addClass("bottom-no-round");
                    for (i = 0; i < array.length; i++) {
                        $result.append(
                            "<li class='list-group-item'><a href='" +
                            array[i].link +
                            "' class='text-dark text-decoration-none'>" +
                            array[i].text +
                            "</a> </li>"
                        );
                    }
                }
                var selected;
                $liResult = $result.find("li");
                if (e.which === 13) {
                    window.location.href = liSelected.find("a").attr("href");
                }
                if (e.which === 40) {
                    if (!liSelected) {
                        liSelected = $liResult.eq(0);
                        liSelected.addClass("active");
                        selected = $liResult.eq(0).text();
                    } else {
                        liSelected.removeClass("active");
                        var next = liSelected.next();
                        if (next.length > 0) {
                            liSelected = next.addClass("active");
                            selected = next.text();
                        } else {
                            liSelected = $liResult.eq(0).addClass("active");
                            selected = $liResult.eq(0).text();
                        }
                    }
                    if (selected !== "") {
                        $(this).val(
                            selected.replace(/[ {4}\t\n\r]/gm, " ").replace(/\s+/g, " ")
                        );
                    }
                } else if (e.which === 38) {
                    if (liSelected) {
                        liSelected.removeClass("active");
                        next = liSelected.prev();
                        if (next.length > 0) {
                            liSelected = next.addClass("active");
                            selected = next.text();
                        } else {
                            liSelected = $liResult.last().addClass("active");
                            selected = $liResult.last().text();
                        }
                    } else {
                        liSelected = $liResult.last().addClass("active");
                        selected = $liResult.last().text();
                    }
                    if (selected !== "") {
                        $(this).val(
                            selected.replace(/[ {4}\t\n\r]/gm, " ").replace(/\s+/g, " ")
                        );
                    }
                }
            });
            $(document).on("click", function() {
                $(".search-result").removeClass("show");
                $(".input-group").removeClass("bottom-no-round");
            });
        },
        documentLinkActive: function() {
            var $ul = $(".sidebar ul");
            if ($(".sidebar-menu").length < 1) {
                return;
            }
            var $li = $ul.find("li");
            $.each($li, function() {
                var a = $(this).find("a")[0];
                var value_url = window.location.href.substring(
                    window.location.href.lastIndexOf("/") + 1
                );
                var value_href = a.href.substring(a.href.lastIndexOf("/") + 1);
                if (value_url.indexOf(value_href) > -1) {
                    $(this).addClass("active");
                    $(this).parents(".sidebar-menu").collapse("toggle");
                }
            });
        },
        documentScroll: function() {
            var $section = $("#scroll-section");
            var $anchorjs = $(".anchorjs-link");
            if ($section.length < 1 && $anchorjs.length < 1) {
                return;
            }
            $("#scroll-section a,.anchorjs-link")
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function(event) {
                    if (
                        location.pathname.replace(/^\//, "") ===
                        this.pathname.replace(/^\//, "") &&
                        location.hostname === this.hostname
                    ) {
                        var target = $(this.hash);
                        target = target.length ?
                            target :
                            $("[name=" + this.hash.slice(1) + "]");
                        if (target.length) {
                            event.preventDefault();
                            $("html, body").animate({ scrollTop: target.offset().top - 100 },
                                500,
                                function() {}
                            );
                        }
                    }
                });
        },
    };
    if ($.fn.dropzone) {
        Dropzone.autoDiscover = false;
    }
    $document.ready(function() {
        APP.headerSticky.init();
        APP.headerMobile.init();
        APP.sidebarSticky.init();
        APP.offCanvas.init();
        APP.slickSlider.init();
        APP.util.init();
        APP.isotope.init();
        APP.animation.init();
        APP.custom.init();
        APP.counter.init();
        APP.datepicker.init();
        APP.countdown.init();
        APP.tinymce.init();
        APP.uploader.init();
    });
})(jQuery);



function mostrarContrasena() {
    var tipo = document.getElementById("password");
    if (tipo.type == "password") {
        tipo.type = "text";
    } else {
        tipo.type = "password";
    }
}