/*** loading order --- you can search these list items to find each section
 1. IE8 modernizr test
 2. global variables
 2. global namespace function
 3. 'click' events
 4. global functions 
 5. page specific functions
 6. form functions
 ***/

//temporary for dev purposes
//This applies the class 'need-page' to any link which has the host below in the if statment
$('a').each(function () {
    var host = this.hostname;
    if (host === 'cfp-dc.org' || host === 'catalogueforphilanthropy-dc.org') {
        $(this).addClass('need-page');
    }
});

//1. IE8 modernizr test
//ie8 test
Modernizr.load({
    test: Modernizr.textshadow,
    nope: ['resources/css/ie.css', 'assets/js/html5shiv.js', 'assets/js/respond.js', 'resources/js/ie.js']
});

//2. global variables
/*** global variables ***/
var $root = $('html, body'),
        liveTextRegion = $('#liveText-polite').find('p'),
        navTrigger = $('.navbar-toggle'),
        mobileMenu = $('.mobile-nav'),
        bodyElement = document.body,
        pageName = bodyElement.getAttribute("data-page-id");


var global = {
    addNonprofitNameToButton: function () {
        var nonprofitListing = $('.nonprofit-listing'),
                nonprofitName = $('.nonprofit-listing h2');
        nonprofitListing.each(function (index) {
            var nonprofit = $(this),
                    nonprofitTitleRaw = nonprofit.find('.name').contents().filter(
                    function () {
                        return this.nodeType === 3;
                    }),
                    nonprofitChildRemove = nonprofitTitleRaw.text(),
                    nonprofitTitle = $.trim(nonprofitChildRemove).split(' ').join('_'),
                    learnMoreButton = nonprofit.find('.learn-more'),
                    learnMoreButtonLink = learnMoreButton.attr('href'),
                    donateButton = nonprofit.find('.donate-nonprofit'),
                    donateButtonLink = donateButton.attr('href');

            //appand sr only info for each button and add parameter for 'donateButtonPrefill' function
            learnMoreButton.append('<span/>').children('span').addClass('sr-only').text(' about ' + nonprofitChildRemove);
            donateButton.append('<span/>').children('span').addClass('sr-only').text(' to ' + nonprofitChildRemove);
            //check each href of learn more and donate buttons to see if parameters exist
            if (learnMoreButtonLink.indexOf('?') !== -1) {
                learnMoreButton.attr("href", learnMoreButtonLink + "&np_title=" + nonprofitTitle);
            } else {
                learnMoreButton.attr("href", learnMoreButtonLink + "?np_title=" + nonprofitTitle);
            }
            if (donateButtonLink.indexOf('?') !== -1) {
                donateButton.attr("href", donateButtonLink + "&np_title=" + nonprofitTitle);
            } else {
                donateButton.attr("href", donateButtonLink + "?np_title=" + nonprofitTitle);
            }

        });
    },
    carouselPlayPause: function () {
        var button = $(this).attr('id');
    },
    calendar: function () {
        if ($('.fc').length) {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: '2015-09-12',
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                eventStartEditable: false,
                //events: '/myfeed.php', // uncomment this and replace with calendar feed
                //remove this calendar array as it is for example only
                events: [{
                        title: 'All Day Event',
                        start: '2015-02-01'
                    }, {
                        title: 'Long Event',
                        start: '2015-09-07',
                        end: '2015-09-10'
                    }, {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2015-09-09T16:00:00'
                    }, {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2015-09-16T16:00:00'
                    }, {
                        title: 'Conference',
                        start: '2015-09-11',
                        end: '2015-09-13'
                    }, {
                        title: 'Meeting',
                        start: '2015-09-12T10:30:00',
                        end: '2015-09-12T12:30:00'
                    }, {
                        title: 'Lunch',
                        start: '2015-09-12T12:00:00'
                    }, {
                        title: 'Meeting',
                        start: '2015-09-12T14:30:00'
                    }, {
                        title: 'Happy Hour',
                        start: '2015-09-12T17:30:00'
                    }, {
                        title: 'Dinner',
                        start: '2015-09-12T20:00:00'
                    }, {
                        title: 'Birthday Party',
                        start: '2015-09-13T07:00:00'
                    }, {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2015-09-28'
                    }],
                eventColor: '#487896'
            });
            $('.fc-prev-button').prepend('<span class="sr-only">Select to for previous calendar</span>');
            $('.fc-next-button').prepend('<span class="sr-only">Select to for next calendar</span>');
        }
    },
    //concatenates values for volunteer search page filtering
    concatValues: function (allObjects) {
        var concatedValues = allObjects[0];

        function groupCreator(a, b) {
            var tempObject = [];
            for (var j = 0; j < b.length; j++) {
                for (var k = 0; k < a.length; k++) {
                    tempObject.push(a[k] + '.' + b[j]);
                }
            }
            return tempObject;
        }

        for (var i = 0; i < concatedValues.length; i++) {
            concatedValues[i] = '.' + concatedValues[i];
        }

        for (var i = 1; i < allObjects.length; i++) {
            concatedValues = groupCreator(concatedValues, allObjects[i]);
        }

        $('.vol-list-listing').hide();
        for (var i = 0; i < concatedValues.length; i++) {
            if ($('.vol-list-listing').is(concatedValues[i])) {
                $('.vol-list-listing' + concatedValues[i]).show();
            }
        }
        concatedValues = concatedValues.join();
        return concatedValues;
    },
    currentPageLink: function (e) {
        if ($('a.current').length) {
            var $this = $('a.current'),
                    currentPage = '<span class="sr-only">Currently viewing: </span>';
            $this.prepend(currentPage);
            //send current page to sr live text region to announce to screen reader if current page exists
            $('#liveText-polite').find('p').html($this.text());
            setTimeout(function () {
                $('#liveText-polite').find('p').html('');
            }, 3000);

        }
    },
    donateButtonPrefill: function () {
        //replace checkout page org name to the name of the org which the user clicks on by the substring '?np_title=, if none exists, then do nothing
        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                    results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

        function getQueryVariable(variable) {
            var query = window.location.search.substring(1);
            var vars = query.split("&");
            for (var i = 0; i < vars.length; i++) {
                var pair = vars[i].split("=");
                if (pair[0] === variable) {
                    return pair[1];
                }
            }
            return (false);
        }
        var substringTitle = 'np_title',
                prodId = getParameterByName(substringTitle),
                prodIdInput = $.trim(getParameterByName(substringTitle)).split('_').join(' '),
                orgInput = $('#org-name'),
                orgInputValue = orgInput.val(),
                orgLabel = $("label[for='" + orgInput + "']"),
                substringAmount = getQueryVariable('np_amount'),
                amountId = substringAmount,
                amountIdInput = substringAmount,
                amountInput = $('#amount'),
                amountInputValue = amountId,
                amountLabel = $("label[for='" + amountInput + "']");
        if (window.location.search.indexOf(substringTitle) > -1) {

            if ($(orgInput)[0]) {
                $('<p class="np-selected-name" id="np-selected" />').insertBefore(orgInput).text(prodIdInput);
                $(orgInput).addClass('sr-only').attr({
                    'tabindex': '-1',
                    'value': prodIdInput
                }).siblings(orgLabel).attr('aria-describedby', 'np-selected');

            }
        } else if (orgInput.length && orgInput.val().length) {
            $('<p class="np-selected-name" id="np-selected" />').insertBefore(orgInput).text(orgInputValue);
            $(orgInput).addClass('sr-only').attr({
                'tabindex': '-1',
                'value': prodIdInput
            }).siblings(orgLabel).attr('aria-describedby', 'np-selected');

        } //if an amount is passed by parameter add a 'p' tag and with the value given and add the value to the input while hiding the input
        if (window.location.search.indexOf(amountId) > -1) {

            if ($(amountInput)[0]) {
                $('<p class="np-selected-name" id="np-selected-amount" />').insertBefore(amountInput).text('$' + amountIdInput);
                $(amountInput).addClass('sr-').attr({
                    'tabindex': '-1',
                    'value': amountIdInput
                }).siblings(amountLabel).attr('aria-describedby', 'np-selected-amount');
            }
        } else if (amountInput.length && amountInput.val().length) {
            $('<p class="np-selected-name" id="np-selected-amount" />').insertBefore(amountInput).text('$' + amountInputValue);
            $(amountInput).addClass('sr-').attr({
                'tabindex': '-1',
                'value': amountIdInput
            }).siblings(amountLabel).attr('aria-describedby', 'np-selected-amount');

        }
    },
    faqSetup: function () {
        if ($('#faq-list a[data-target]')) {
            var list = $('#faq-list');

            if (list.length > 0) {
                list.find('a[data-target]').each(function () {
                    var $this = $(this),
                            question = $this.attr('data-target').replace("#", ""),
                            questionText = $(this).text(),
                            backTopTarget = '#' + question + '-question',
                            targetId = $this.attr('data-target'),
                            targetParent = $(targetId).parent(),
                            backTopLink = targetParent.next(),
                            backTopSrText = '<span class="sr-only"> - Returns to ' + questionText + ' in list of F A Q questions</span>',
                            titleText = questionText.replace("?", ""),
                            backTopTitle = 'Go back to ' + titleText + ' in the list of questions',
                            backTopAfterEl = '<span class="back-top-border" aria-hidden="true"></span>',
                            lsatBackTopEl;

                    //take each data-target in list of questions and make id for linking for back to top links
                    $this.attr('id', question + '-question');
                    //change each back to top link to return to each question
                    backTopLink.attr({
                        'data-target': backTopTarget,
                        'tabindex': '0',
                        'title': backTopTitle
                    }).append(backTopSrText);
                    $(backTopAfterEl).insertAfter(backTopLink);
                });
                if (list.length > 0) {
                    //after links are updated, remove last question bottom border
                    $('.back-top-border').last().hide();
                }
            }
        }
    },
    filterExpandPageLoad: function () {
        var categoryToggle = $('.category-toggle');
        categoryToggle.each(function () {
            var toggle = $(this),
                    expandContainer = toggle.next(),
                    list = expandContainer.children('ul'),
                    id = expandContainer.attr('id'),
                    inputChecked = '.filter-parameter:checked';
            if (list.find(inputChecked).length) {
                toggle.click();
            } else if (id === 'areasServed') {
                $('#' + id).find('.collaspingSection').each(function () {
                    if ($(this).find(inputChecked).length) {
                        toggle.click();
                        $(this).find('.state-collapse').click();

                    }
                });
            }
        });
    },
    globalImageCheck: function (img) {
        //call this in another function by naming variable. See homeImageCheck() for reference
        setTimeout(function () {
            img.each(function () {
                if (this.naturalWidth === 0 || this.naturalHeight === 0 || this.complete === false) {
                    $(this).attr('src', '../resources/images/clear.gif');
                }
            });
        }, 500);
    },
    homeGridSetup: function () {
        //isotope must load after images are loaded or the height of the element will be wrong
        var $gridHome = $('.subcategories').isotope({
            itemSelector: '.subcat-grid-item',
            layoutMode: 'fitRows',
            sortBy: 'random'
        });
    },
    homeImageCheck: function () {
        var img = $('.subcategories .img-responsive');
        this.globalImageCheck(img);
    },
    homeSearchActiveToggle: function () {
        var $gridHome = $('.subcategories').isotope({
            itemSelector: '.subcat-grid-item',
            layoutMode: 'fitRows',
            sortBy: 'random'
        });
        $('.home-search').on('click', 'button', function (e) {
            global.gridFilterToggle($gridHome, e);
        });
    },
    jumplink: function () {
        $('.jumplink').on('click', function () {
            var target = $(this).attr('data-target');
            $(target).attr('tabindex', '0');
            $root.animate({
                scrollTop: $(target).offset().top
            }, 'slow');
            $(target).focus();
        });
    },
    navTriggerToggle: function (e) {
        var srText = $('#expandText');
        mobileMenu.attr({
            'aria-expanded': 'false'
        });
        srText.text('Expand navigation');

        //toggle aria attributes for mobile screens
        navTrigger.on('click', function () {
            if (mobileMenu.is(':hidden')) {
                srText.text('Collapse navigation');
                mobileMenu.attr({
                    'aria-expanded': 'true'
                });
            } else {
                srText.text('Expand navigation');
                mobileMenu.attr({
                    'aria-expanded': 'false'
                });
            }
        });
        //if mobile menu is open and user clicks on body close menu update hidden text
        $('body').on('click', function (e) {
            if ($('.mobile-nav').hasClass('in')) {
                if (mobileMenu.is(':hidden')) {
                    srText.text('Collapse navigation');
                    mobileMenu.attr({
                        'aria-expanded': 'true'
                    });
                } else {
                    srText.text('Expand navigation');
                    mobileMenu.attr({
                        'aria-expanded': 'false'
                    });
                    global.mobileNavClose(e);
                }
            }
        });
    },
    mobileNavTrigger: function () {
        var mobileNav = $('.mobile-nav').find('a:first'),
                liveText = 'The mobile menu has opened';
        $('#liveText-polite').find('p').html(liveText);
        setTimeout(function () {
            $('#liveText-polite').find('p').html('');
        }, 3000);
        setTimeout(function () {
            mobileNav.focus();
        }, 50);
    },
    mobileNavClose: function (e) {
        var liveText = 'The mobile menu has closed';

        if ($('.mobile-nav').hasClass('in') && e.keyCode === 9) {
            mobileMenu.offcanvas('hide');
            $('#liveText-polite').find('p').html(liveText);
            setTimeout(function () {
                $('#liveText-polite').find('p').html('');
            }, 3000);
            setTimeout(function () {
                navTrigger.focus();
            }, 50);

        }
    },
    navMenu: function () {
        //add empty sub nav div for alignment purposes. This is needed if there is no dropdown.
        $('.nav-item.last').append('<div class="sub-nav hidden"></div>');
        $(".nav-primary-nav").accessibleMegaMenu({
            /* prefix for generated unique id attributes, which are required 
             to indicate aria-owns, aria-controls and aria-labelledby */
            uuidPrefix: "accessible-megamenu",

            /* css class used to define the megamenu styling */
            menuClass: "nav-menu",

            /* css class for a top-level navigation item in the megamenu */
            topNavItemClass: "nav-item",

            /* css class for a megamenu panel */
            panelClass: "sub-nav",

            /* css class for a group of items within a megamenu panel */
            panelGroupClass: "sub-nav-group",

            /* css class for the hover state */
            hoverClass: "hover",

            /* css class for the focus state */
            focusClass: "focus",

            /* css class for the open state */
            openClass: "open"
        });
    },
    /**
     * @description  Nonprofit search page - checks parameters in url on page load and 
     *                                        applies checked items or select all button to be toggled 
     */
    parameterUpdate: function () {
        //
        var urlList = window.location.href.split("?");
        if (urlList.length > 1 && urlList[1] !== null) {
            $.each(urlList[1].split("&"), function (i, item) {
                if (item) {
                    $('input[data-paramvalue="' + item.split("=")[1] + '"]').prop('checked', true);
                }
            });
            $.each($('div.selections'), function () {
                if ($(this).find("input:checked").length === $(this).find("input").length) {
                    $(this).find(".select-all").text("Unselect All").attr('data-type', 'checked');
                } else {
                    $(this).find(".select-all").text("Select All").attr('data-type', 'unchecked');
                }
            });
        }
    },
    pressReleaseLink508: function () {
        if ($('a').closest('.url_press_release').length > 0) {
            $('.url_press_release').find('a[target="_blank"]').each(function () {
                var $this = $(this),
                        parent = $this.parent('.url_press_release'),
                        parentLink = parent.prev('.press-release').children('a:first'),
                        textToAdd = parentLink.text(),
                        srAppendText = '<span class="sr-only"> to learn more about ' + textToAdd + '</span>';
                $this.append(srAppendText);
            });
        }
    },
    relatedCarousel: function () {
        if ($(".carousel[data-class]").length) {

            //nonprofit details page carousel
            var carouselWidth = $('#carouselwrapper').width(),
                    carouselItem = $('#related-carousel li');

            A11y.carousel();
            //dont make carousel unless page is specific width
            if (carouselWidth > 486) {

                if (carouselItem.parent().is('ul.item')) {
                    carouselItem.unwrap();
                }
                do {
                    $(carouselItem.slice(0, 3)).wrapAll('<ul class="item row" role="presentation "></ul>');
                } while ((carouselItem = carouselItem.slice(3)).length > 0);
                $('#related-carousel ul.item').first().addClass('active');
            } else {
                carouselItem.unwrap();
                carouselItem.wrapAll('<ul class="carousel-inner" role="list"></ul>');
                $('.left.carousel-control').hide();
                $('.right.carousel-control').hide();
            }
        }
    },
    scrollToTop: function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 250) {
                $('.scrollup').fadeIn(300);
            } else {
                $('.scrollup').fadeOut(300);
            }
        });
    },
    searchGridSetup: function () {
        //isotope must load after images are loaded or the height of the element will be wrong
        var $gridNp = $('.grid.nonprofits').isotope({
            itemSelector: '.iso-item',
            layoutMode: 'fitRows',
            getSortData: {
                category: '[data-category]',
                name: '.name',
                region: '[data-region]',
                year: '[data-year]'
            },
            sortBy: 'random'
        });
    },
    searchPageActiveToggle: function () {
        //results page change toggle view active class
        $('.display-group').on('click', 'button', function () {
            var activeEl = this,
                    liveText = $(this).attr('data-original-title');
            $('.display-group button.active').not(this).removeClass('active');
            $(this).addClass('active');

            $('#liveText-polite').find('p').html(liveText);
            setTimeout(function () {
                $('#liveText-polite').find('p').html('');
            }, 3000);
        });
    },
    setGetParameter: function (paramName, paramValue, dataType) {
        var url = window.location.href.split("?")[0] + "?",
                queryStr = window.location.href.split("?")[1];
        if (queryStr) {
            if (queryStr.indexOf(paramValue) > -1) {
                var arr = jQuery.grep(queryStr.split("&"), function (value) {
                    return !(value.indexOf(paramValue) > -1);
                });
                window.location.href = url + arr.join("&");
            } else {
                queryStr += "&" + paramName + "=" + paramValue;
                window.location.href = url + queryStr;
            }
        } else {
            window.location.href = url + paramName + "=" + paramValue;
        }
    },
    setHeight: function () {
        var maxHeight = -1,
                container = ($('main').is('.search-results')) ? $('.search-results .caption') : $('.volunteer-search-main .caption');
        container.css('height', '');
        container.each(function () {
            maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
        });
        var heightSet = container.selector === '.volunteer-search-main .caption' ? maxHeight + 15 : maxHeight + 40;
        container.each(function () {
            $(this).height(heightSet);
        });

    },

    skipNav: function () {
        //skip nav prevent hashtag in url
        $('.skip-navigation-link').each(function () {
            var focusedElement = $(this).attr('data-target').replace("#", ""),
                    newFocusElement = $('header').next(),
                    focusAnchor = '<a href="javascript:void(0)" class="sr-only" id="' + focusedElement + '"></a>';
            $(focusAnchor).insertBefore(newFocusElement).attr('tabindex', '-1');
            //set a tabindex of -1 to make the element focusable for the skip nav but is not focusable for tabbing on page, this is only needed if the target is not a normally focusable element like a div container.
        }).on('click', function (event) {
            var focusedElement = $(this).attr('data-target');

            //prevent the hash and element id to show in url
            event.preventDefault();

            // set focus to element for skip nav
            $(focusedElement).focus();
        });
    },
    switchGridOrList: function (listView) {
        var url = location.href;
        var paramList = url.split('?');
        var params = [];
        var otherParamsStr;
        $('.vol-views').find('.active').removeClass('active');
        if (paramList.length > 1) {
            var otherParams = [];
            var tempParams = paramList[1].split('&');
            for (var i = 0; i < tempParams.length; i++) {
                if (tempParams[i].indexOf('list=') !== 0) {
                    otherParams.push(tempParams[i]);
                }
            }
            otherParamsStr = otherParams.join('&');
        }
        if (otherParamsStr !== '') {
            params.push(otherParamsStr);
        }
        if (listView === 'true') {
            //add parma list=true
            params.push('list=true');

            //add list-view class to main section
            $('.volunteer-search-main').addClass('list-view');
        } else {
            //add parma list=false
            params.push('list=false');
            //remove list-view class to main section
            $('.volunteer-search-main').removeClass('list-view');
            var $gridNarrowVolunteer = $('.grid').isotope({
                itemSelector: '.iso-item',
                layoutMode: 'fitRows'
            });
        }

        var paramStr = params.join('&');
        paramStr = paramStr.replace(/[.]/g, '');
        var finalHref = paramStr ? paramList[0] + '?' + paramStr : paramList[0];
        //update url without reloading DOM
        if (history.pushState) {
            window.history.pushState({path: finalHref}, '', finalHref);
        }
    },
    valid: function () { //all form validation must be in .ready
        $.validator.setDefaults({
            debug: true,
            errorElement: "strong",
            focusInvalid: false

        });
        var submitted = false;
        //only accepts US phone numbers
        $.validator.addMethod('phoneUS', function (phone_number, element) {
            phone_number = phone_number.replace(/\s+/g, "");
            return this.optional(element) || phone_number.length === 12 && phone_number.match(/\d{10}|(([\(]?([0-9]{3})[\)]?)?[ \.\-]?([0-9]{3})[ \.\-]([0-9]{4}))$/);
        }, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Please specify a valid phone number');

        //allows you to specify a zip code range to accept
        $.validator.addMethod("ziprange", function (value, element) {
            return this.optional(element) || (/^2[0101-4658]/).test(value);
        }, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Please enter a Virginia Zip Code');

        $.validator.addMethod("lettersonly", function (value, element) {
            return this.optional(element) || (/^[a-z]+$/i).test(value);
        }, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Letters only please');

        $.validator.addMethod("letterswithbasicpunc", function (value, element) {
            return this.optional(element) || (/^[a-z\-.,()'"\s]+$/i).test(value);
        }, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Letters or punctuation only please');

        $.validator.addMethod('require-one', function (value, element) {
            return $('.require-one:checked').size() > 0;
        }, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please check at least one box.');
    },

    /**
     * gridFilterToggle
     * @description            event setup for home page and volunteer page grid toggling
     * @param {object} grid     returns isotope grid in view
     * @param {object} e        returns current event
     */
    gridFilterToggle: function (grid, e) {
        var activeEl = e.target,
                liveText = 'Showing all categories';
        //var selBtn = activeEl.attr('class').replace('btn btn-link ', '');
        var selBtn = activeEl.classList.value.replace('btn btn-link ', '');
        $(activeEl).closest('ul').find('.active').removeClass('active');
        switch (selBtn) {
            case 'nature-btn':
                grid.isotope({
                    filter: '.nature-cat',
                    sortBy: 'random'
                });
                liveText = 'Showing only nature volunteer opportunities category';
                break;
            case 'culture-btn':
                grid.isotope({
                    filter: '.culture-cat',
                    sortBy: 'random'
                });
                liveText = 'Showing only culture volunteer opportunities category';
                break;
            case 'education-btn':
                grid.isotope({
                    filter: '.education-cat',
                    sortBy: 'random'
                });
                liveText = 'Showing only education volunteer opportunities category';
                break;
            case 'human-services-btn':
                grid.isotope({
                    filter: '.human-services-cat',
                    sortBy: 'random'
                });
                liveText = 'Showing only human volunteer opportunities category';
                break;
            case 'international-btn':
                grid.isotope({
                    filter: '.international-cat',
                    sortBy: 'random'
                });
                liveText = 'Showing only international volunteer opportunities category';
                break;
            case 'view-all-btn':
                grid.isotope({
                    filter: '*',
                    sortBy: 'random'
                });
                break;
            default:
                break;
        }
        $(activeEl).addClass('active');
        $('#liveText-polite').find('p').html(liveText);
        setTimeout(function () {
            $('#liveText-polite').find('p').html('');
        }, 3000);
    },
    //added for volunteer page
    volunteerSearchActiveToggle: function () {
        var $gridVolunteer = $('.volunteer-subcategories').isotope({
            itemSelector: '.subcat-grid-item',
            layoutMode: 'fitRows',
            sortBy: 'random'
        });
        $('.volunteer-search').on('click', 'button', function (e) {
            global.gridFilterToggle($gridVolunteer, e);
        });
    },
    //added for volunteer page
    volunteerImageCheck: function () {
        var img = $('.volunteer-subcategories .img-responsive');
        this.globalImageCheck(img);
    },
    multiSelectSearch: function () {
        var myCombo2, myCombo3, myCombo4;
        myCombo2 = dhtmlXComboFromSelect("location");
        myCombo3 = dhtmlXComboFromSelect("time");
        myCombo4 = dhtmlXComboFromSelect("volunteers");
    },
    volunteerNarrowSearch: function () {
        var $gridNarrowVolunteer = $('.grid').isotope({
            itemSelector: '.iso-item',
            layoutMode: 'fitRows'
        });

        var $checkboxes = $('.vol-filters input');
        $checkboxes.on('change', function () {
            // map input values to an array
            var inclusives = [];
            // inclusive filters from checkboxes

            $checkboxes.each(function (i, elem) {
                // if checkbox, use value if checked
                if (elem.checked) {
                    inclusives.push(elem.dataset.filter);
                }
            });

            //check the checkboxes in the array of parameters
            var filterValue = inclusives.length ? global.concatValues(inclusives) : '*';
            $gridNarrowVolunteer.isotope({filter: filterValue});

        });
    },

    volunteerFilterResultHandler: function () {
        var allFilters = [];
        if ($('.all-loc-dca').is(':checked')) {
            var object = {
                'key': '.all-loc-dca',
                'text': $('.all-loc-dca').parent().text()
            };
            allFilters.push(object);
        } else {
            $('[data-filter-group="dca"]').each(function (index, element) {
                if (this.checked) {
                    var object = {
                        'key': $(this).data('filter'),
                        'text': this.labels[0].innerText
                    };
                    allFilters.push(object);
                }
            });
        }
        if ($('.all-loc-mda').is(':checked')) {
            var object = {
                'key': '.all-loc-mda',
                'text': $('.all-loc-mda').parent().text()
            };
            allFilters.push(object);
        } else {
            $('[data-filter-group="mda"]').each(function (index, element) {
                if (this.checked) {
                    var object = {
                        'key': $(this).data('filter'),
                        'text': this.labels[0].innerText
                    };
                    allFilters.push(object);
                }
            });
        }
        if ($('.all-loc-vaa').is(':checked')) {
            var object = {
                'key': '.all-loc-vaa',
                'text': $('.all-loc-vaa').parent().text()
            };
            allFilters.push(object);
        } else {
            $('[data-filter-group="vaa"]').each(function (index, element) {
                if (this.checked) {
                    var object = {
                        'key': $(this).data('filter'),
                        'text': this.labels[0].innerText
                    };
                    allFilters.push(object);
                }
            });
        }

        $('[data-filter-group="time"]').each(function (index, element) {
            if (this.checked) {
                var object = {
                    'key': $(this).data('filter'),
                    'text': this.labels[0].innerText
                };
                allFilters.push(object);
            }
        });
        $('[data-filter-group="group"]').each(function (index, element) {
            if (this.checked) {
                var object = {
                    'key': $(this).data('filter'),
                    'text': this.labels[0].innerText
                };
                allFilters.push(object);
            }
        });

        $("#idcResults").empty();

        $.each(allFilters, function (index, element) {
            var htmlBtn = '<button class="vol-filter-result-btn btn-link" data-filter-btn="' + element.key + '">' + element.text + '</button>';
            $('#idcResults').append(htmlBtn);
        });

    },
    /* 
     *@description        Handles adding/removing parameters if filters are selected
     *@param {object}      e
     *returns parameters   for URL and updates URL without refreshing the DOM
     */
    volunteerFilterUrlHandler: function () {
        var search = location.search.substring(1);
        var params = search.split('&');
        var inclusives = [];
        var $gridNarrowVolunteer = $('.grid').isotope({
            itemSelector: '.iso-item',
            layoutMode: 'fitRows'
        });

        var listView = false;
        inclusives = [];
        for (var i = 0; i < params.length; i++) {
            var param = params[i];
            if (param.indexOf('list=') >= 0) {
                listView = param.substring(5);
            } else if (param.indexOf('loc=') >= 0) {
                var loc = param.substring(4);
                var locations = loc.split(',');
                inclusives.push(locations);

                for (var l = 0; l < locations.length; l++) {
                    $('.vol-filter-input[data-filter=".' + locations[l] + '"]').prop('checked', true);
                }
            } else if (param.indexOf('time=') >= 0) {
                var time = param.substring(5);
                var times = time.split(',');
                inclusives.push(times);

                for (var t = 0; t < times.length; t++) {
                    $('.vol-filter-input[data-filter=".' + times[t] + '"]').prop('checked', true);
                }
            } else if (param.indexOf('group=') >= 0) {
                var group = param.substring(6);
                var groups = group.split(',');
                inclusives.push(groups);

                for (var g = 0; g < groups.length; g++) {
                    $('.vol-filter-input[data-filter=".' + groups[g] + '"]').prop('checked', true);
                }
            }
        }

        if (listView === 'true' || listView === true) {
            global.switchGridOrList(listView);
            $('.vol-views .list-view').addClass('active');
        } else {
            $('.vol-views .grid-view').addClass('active');
        }

        var filterValue = '*';
        if (inclusives.length) {
            filterValue = global.concatValues(inclusives);
        } else {
            $('.vol-list-listing').show();
            filterValue = '*';
        }

        //check the checkboxes in the array of parameters
        //var filterValue = inclusives.length > 0 ? global.concatValues(inclusives) : '*';
        $gridNarrowVolunteer.isotope({filter: filterValue});

        var checkAllLocation = ['dca', 'mda', 'vaa'];

        for (var i = 0; i < checkAllLocation.length; i++) {
            if ($('.' + checkAllLocation[i] + ':checked').length === $('.' + checkAllLocation[i]).length) {
                $('.all-loc-' + checkAllLocation[i]).prop("checked", true);
            } else {
                $('.all-loc-' + checkAllLocation[i]).prop("checked", false);
            }
        }
        global.volunteerFilterResultHandler();

        $('.vol-filter-result-btn').off('click').on('click', function (e) {
            var checkBoxClickInput = e.currentTarget.dataset.filterBtn;
            if (checkBoxClickInput === '.all-loc-dca' || checkBoxClickInput === '.all-loc-mda' || checkBoxClickInput === '.all-loc-vaa') {
                $(checkBoxClickInput).trigger("click");
            } else {
                $('[data-filter="' + checkBoxClickInput + '"]').trigger("click");
            }
            //$('#idcResults').children($(e.currentTarget)).detach();
            $(this).detach();
        });
    },

    getUrlParameter: function (paramKey) {
        paramKey = paramKey.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var regexS = "[\\?&]" + paramKey + "=([^&#]*)";
        var regex = new RegExp(regexS);
        var results = regex.exec(window.location.href);
        if (results === null) {
            return "";
        } else {
            return results[1];
        }
    },
    
   volunteerSearchFilter: function (e){     
        var url = location.href;
        var paramList = url.split('?');
        var otherParamsStr = '';
        var params = [];
        //loc = time = group =
        if (paramList.length > 1) {
            var otherParams = [];
            var tempParams = paramList[1].split('&');
            for (var i = 0; i < tempParams.length; i++) {
                if (tempParams[i].indexOf('loc=') === -1 && tempParams[i].indexOf('time=') === -1 && tempParams[i].indexOf('group=') === -1) {
                    otherParams.push(tempParams[i]);
                }
            }
            otherParamsStr = otherParams.join('&');
        }
        if (otherParamsStr !== '') {
            params.push(otherParamsStr);
        }

        if ($(e.currentTarget).is('.all-loc-dca, .all-loc-mda, .all-loc-vaa')) {
            var allLocation = $(e.target).data('filter-group');
            $('.' + allLocation).prop("checked", this.checked);
        } else if ($(e.currentTarget).is('.dca, .mda, .vaa')) {
            var allLocation = $(e.target).data('filter-group').toLowerCase();
            if ($('.' + allLocation + ':checked').length === $('.' + allLocation).length) {
                $('.all-loc-' + allLocation).prop("checked", true);

            } else {
                $('.all-loc-' + allLocation).prop("checked", false);
            }
        }

        var locationList = [], timeList = [], groupList = [];

        $('.dca:checked,  .mda:checked, .vaa:checked').each(function (index, element) {
            locationList.push($(this).data('filter'));
        });
        $('[data-filter-group="time"]').each(function (index, element) {
            if (this.checked) {
                timeList.push($(this).data('filter'));
            }
        });
        $('[data-filter-group="group"]').each(function (index, element) {
            if (this.checked) {
                groupList.push($(this).data('filter'));
            }
        });

        if (locationList.length > 0) {
            var locationStr = 'loc=' + locationList.join(',');
            params.push(locationStr);
        }

        if (timeList.length > 0) {
            var timeStr = 'time=' + timeList.join(',');
            params.push(timeStr);
        }

        if (groupList.length > 0) {
            var groupStr = 'group=' + groupList.join(',');
            params.push(groupStr);
        }

        //remove last '&' on string
        var paramStr = params.join('&');
        paramStr = paramStr.replace(/[.]/g, '');
        var finalHref = paramStr ? paramList[0] + '?' + paramStr : paramList[0];
        //update url without reloading DOM
        if (history.pushState) {
            window.history.pushState({path: finalHref}, '', finalHref);
        }

        global.volunteerFilterUrlHandler();
    }
};
//namespace to keep form functions short
var formHandlers = {
    highlight: function (element, errorClass, validClass) {
        $(element.form).find("label[for=" + element.id + "]").addClass("error");
        $(element.form).find("input[id=" + element.id + "]").addClass("error");
        $(element.form).find("input[id=" + element.id + "], select[id=" + element.id + "]").closest('div').addClass("error");
    },
    unHighlight: function (element, errorClass, validClass) {
        $(element.form).find("label[for=" + element.id + "]").removeClass("error");
        $(element.form).find("input[id=" + element.id + "]").removeClass("error");
        $(element.form).find("input[id=" + element.id + "], select[id=" + element.id + "]").closest('div').removeClass("error");
    },
    showError: function (errorMap, errorList) {
        if (submitted && errorList) {
            var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
                    $errorFormClass = $errorFormClass1.split(' ')[0];

            //Reset and remove error messages if the form
            //has been validated once already
            var summary = "";
            $('label .error', $(this.currentForm)).remove();

            //Create our container if one doesnt already exits
            //better than an empty div being in the HTML source
            if ($('.' + $errorFormClass).length === 0) {
                $('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
            }

            //Generate our error summary list
            for (this.error in errorList) {
                //get associated label text to be used for the error summary
                var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
                summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
            }

            //Output our error summary and place it in the error container
            //$('.' + $errorFormClass).html('<h4 class="error-heading"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ul class="summary-list">' + summary + '</ul>');

            //Focus on the error container
            //Alternatively, you might want to use the Validation default option (focusInvalid)
            $('.errors-' + $(this.currentForm).attr('class')).focus();

            //Move the focus to the associated input when error message link is triggered
            //a simple href anchor link doesnt seem to place focus inside the input
            $('.' + $errorFormClass + ' a').click(function () {
                $($(this).attr('href')).focus();
                return false;
            });

            //removes exclamation icon from error summary list
            if ($('.summary-list li a span').hasClass('Exclamation')) {
                $('.summary-list li a span').removeClass('fa fa-exclamation-circle');
            }

            //removes adobeBlank text from error summary list
            $('.summary-list li a span span').remove('.adobeBlank');
        }
        this.defaultShowErrors();
        submitted = false;
    },
    errorPosition: function (error, element) {
        if (element.prop('nodeName').toLowerCase() === 'select') {
            if ($(element).parent().hasClass('custom-style')) {
                error.insertAfter($(element).parent('.custom-style'));
            } else {
                error.insertAfter(element);
            }
        } else {
            error.insertAfter(element);
        }
    }
};

//list view page - run only if the class 'nonprofit-listing' is present to prevent loading on all pages
var listViewResults = {
    nonprofitCollapse: function () {
        if ($('.nonprofit-list').length > 0) {
            $(".listing").each(function (index) {
                var npListing = $(this),
                        npHeader = npListing.find('.media-heading'),
                        npName = $.trim(npHeader.clone().children().remove().end().text()).replace(/ /g, ''),
                        npContent = npListing.find('.content');
                npContent.attr({
                    'id': '_' + npName
                });
                npHeader.attr({
                    'aria-controls': '_' + npName,
                    'data-target': '#_' + npName,
                    'tabindex': '0'
                });
            });
        }
    }
};


//load assets responsive for screen size detection
A11yResp.Core();
A11y.ieDetect();

//Set media query for resize functionality
var lastDeviceState = A11yResp.getScreenWidth();
$(window).resize(_.debounce(function () {

    var state = A11yResp.getScreenWidth();
    if (state !== lastDeviceState) {
        // Save the new state as current
        lastDeviceState = state;
        performMediaQueries(state);

    }
    //if user changes width of browser this script picks up the change and changes height of nonprofit search listings
    global.setHeight();
}, 20));

//Do custom Media query logic
function performMediaQueries(state) {
    if (state === 'screen-sm-max' || state === 'screen-xs-max' || state === 'screen-xs-min') {
        if (pageName !== 'volunteer-search') {

            $('#asideFilter').addClass('collapse');
            global.relatedCarousel();
        }
    } else {
        $('#asideFilter').removeClass('collapse');
        global.relatedCarousel();
    }
}

//begin isotop script
//sort button functionality with isotope - do not load isotope for ie8
$(window).load(function () {
    if (!$('html').hasClass('lt-ie9')) {
        global.homeGridSetup();
        global.searchGridSetup();

        //get value of select option and sort results by 
        $('.sort-by-select').on('change', function () {
            var $gridNp = $('.grid.nonprofits'),
                    sortByValue = $(this).val(),
                    liveTextRegion = $('#liveText-polite').children('p');
            $gridNp.isotope({
                sortBy: sortByValue
            });
            //update screen reader with current selection

            liveTextRegion.html('Results have been sorted by: ' + sortByValue);
            setTimeout(function () {
                liveTextRegion.html('');
            }, 1000);
        });

    }
});
//end isotope script
if ($('body').hasClass('mac') && ($('body').hasClass('ipad') || $('body').hasClass('iphone'))) {
    if (mobileMenu.hasClass('in')) {
        $('body').css('overflow', 'hidden');
    } else {
        $('body').css('overflow', 'auto');
    }
}
;

//help iOS work properly with offcanvas
if ($('body').hasClass('windows')) {
    navTrigger.attr('data-disable-scrolling', 'false');
}
;
//3. 'click' events
navTrigger.on('click', function () {
    global.mobileNavTrigger();
});
$('.mobile-nav-close').on('click', function () {
    mobileMenu.offcanvas('hide');
    var liveText = 'The mobile menu has closed';

    mobileMenu.offcanvas('hide');
    $('#liveText-polite').find('p').html(liveText);
    setTimeout(function () {
        $('#liveText-polite').find('p').html('');
    }, 3000);
    setTimeout(function () {
        navTrigger.focus();
    }, 50);
});

//closing mobile menu --- not working yet
$('.mobile-nav').find('a:last').on('keydown', function (e) {
    global.mobileNavClose(e);
});


// events calendar button -- navigate to the calendar page
$('.event-button, .all-event-button').on('click', function () {
    location.href = '/events-calendar.php';
});

//checkout page checkbox toggle functions
var expressCheckout = $('.express-checkout-section'),
        checkoutButton = $('.checkout-section'),
        expressHeading = $('.express-checkout-heading'),
        checkoutHeading = $('.checkout-heading'),
        expressUser = $('.userName');

$('.checkout-form .toggle-check').on('click', function () {
    if ($(this).is(':checked')) {
        expressCheckout.show(); //show express checkout
        checkoutButton.hide(); //hide normal checkout button
        expressHeading.show(); //show express heading
        checkoutHeading.hide(); //hide normal heading

        setTimeout(function () {
            expressUser.focus(); //focus on name input after 1 millisecond
        }, 100);
    } else {
        expressHeading.hide(); //hide express heading
        checkoutHeading.show(); //show normal heading
        expressCheckout.hide(); //hide express checkout
        checkoutButton.show(); //show normal checkout button
    }
});

$('.carouselButtons').on('click', 'button', function () {
    var button = $(this),
            buttonFocus = button.siblings(),
            liveText = $.trim($(this).siblings().text());
    button.delay(500).addClass('hide').siblings().removeClass('hide');
    buttonFocus.focus();
    $('#liveText-polite').find('p').html(liveText);
    setTimeout(function () {
        $('#liveText-polite').find('p').html('');
    }, 3000);
});

//make all anchor tags 'clickable' by enter key except if anchor tag is the 'back to top' anchor on FAQ page
$('a').on('keydown', function (event) {
    if (!$(this).hasClass('back-top')) {
        if (event.keyCode === 13) {
            $(this).click();
        }
        return true;
    }
});


//when user clicks the select all link, check the appropriate checkboxes and update text
$('.select-all').on('click', function () {
    var rootDiv = $(this).parent(),
            btnDataType = $(this).data("type");
    $(rootDiv).find("input").prop("checked", (btnDataType === 'checked') ? false : true);
    btnDataType === 'checked' ? $(this).data('type', 'unchecked').text("Select All") : $(this).data('type', 'checked').text("Unselect All");

    var params = "?";
    $("input:checked").each(function () {
        params += $(this).data("paramname") + "=" + $(this).data("paramvalue") + "&";
    });
    window.location.href = window.location.href.split("?")[0] + params;
});
//set parameter for filter on nonprofit search page
$('.filter-parameter').on('click', function () {
    var paramName = $(this).attr('data-paramname'),
            paramValue = $(this).attr('data-paramvalue');
    global.setGetParameter(paramName, paramValue);
});

//On click scroll to top of page t = 1000ms
$('.scrollup').on('click', function (e) {
    $("html, body").animate({
        scrollTop: 0
    }, 1000);
    e.preventDefault();
});
/**
 * @param {param} e 
 */


$('.vol-views').on('click', 'button', function (e) {
    var listView = e.currentTarget.dataset.list;
    global.switchGridOrList(listView);
    $(e.currentTarget).addClass('active');
});

$('.vol-filter-input').on('click', function (e) {
    
    setTimeout(function(){ 
        global.volunteerSearchFilter(e); 
    }, 100);

});

//4. global functions 
$(function () {
    //script to detect highcontrast mode and user defined stylesheets
    HCDetect.init();
    //Accessibility function to take care of generic 508 house keeping
    A11y.Core();
    //handle scroll to top button 
    global.scrollToTop();

    //Do initial check for media state
    var state = A11yResp.getScreenWidth();
    if (state !== 'desktop') {
        performMediaQueries(state);
    }

    //change sr only text on toggle and control focus with user input
    global.navTriggerToggle();
    global.navMenu();

    /*Get current page link, append sr only 
     * text for readability then take entire
     * text block of current page link to live
     * region to announce current page to screen reader
     */
    global.currentPageLink();

    //handle skip nav link before header/create target for skip nav link to focus
    global.skipNav();

    global.jumplink();
    global.donateButtonPrefill();
    global.addNonprofitNameToButton();

    //bootstrap tooltips activated on page load
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });

    //5. page specific functions
    //page specific functions
    switch (pageName) {
        case 'index':
            //home page functions

            //check for missing images in the home page grid
            global.homeImageCheck();

            //filters out selection base on user selecting grid filters
            global.homeSearchActiveToggle();


            $('#Mycarousel').carousel({
                pause: "hover"
            });
            $('#playButton').on('click', function () {
                $('#myCarousel').carousel('cycle');
                $('#pauseButton').focus();
            });
            $('#pauseButton').on('click', function () {
                $('#myCarousel').carousel('pause');
                $('#playButton').focus();
            });
            break;
        case 'events-calendar':
            //JS for adding functionality of the calendar widget
            global.calendar();
            break;
        case 'nonprofits-grid':
        case 'our-nonprofits':
            //.ready for global functions- only for grid nonprofit listing page
            global.setHeight();

            //nonprofit listings list and grid view functions
            global.searchPageActiveToggle();

            //check parameters on nonprofit search page and update filters
            global.parameterUpdate();


            //open collapsed sections of filtering on results/search page
            global.filterExpandPageLoad();
            break;
        case 'our-nonprofits-list':
        case 'nonprofits-list':
            //collapse listings of nonprofits in list view
            listViewResults.nonprofitCollapse();

            //nonprofit listings list and grid view functions
            global.searchPageActiveToggle();

            //check parameters on nonprofit search page and update filters
            global.parameterUpdate();

            //open collapsed sections of filtering on results/search page
            global.filterExpandPageLoad();
            break;
        case 'faq':
            //faq list add jumplink attributes
            if ($('.faq-questions').length > 0) {
                global.faqSetup();

                //remove tabindex if user clicks on FAQ question and is focused on the 'dt' element, but only when tabbing off of the 'dt'element.
                $('dt').on('keydown', function (event) {
                    if ((event.keyCode === 9) || (event.shiftKey && event.keyCode === 9)) {
                        $(this).removeAttr('tabindex');
                    }
                    return true;
                });
            }
            break;
        case 'nonprofit-detail':
            //JS to control functionality of nonprofit detail 'similar nonprofits' carousel
            global.relatedCarousel();
            break;
        case 'press':
            //add sr only text to each 'connect here' link on press page
            global.pressReleaseLink508();
            break;
        case 'styles':
        case null:
            //scroll spy for styleguide
            $('body').scrollspy({
                target: '.bs-docs-sidebar'
            });
            var nav = $(".push-down");
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();

                if (scroll >= 105) {
                    nav.addClass("scrolling");
                } else {
                    nav.removeClass("scrolling");
                }
            });
            break;
        case 'volunteer':
            global.volunteerSearchActiveToggle();
            break;
        case 'volunteer-search':
            global.setHeight();
            //global.volunteerNarrowSearch();
            global.volunteerFilterUrlHandler();
            break;
        default:
            break;
    }

    //6. form functions
    //form functions
    if ($('.request-catalogue').length) {
        global.valid();
        $('.request-catalogue').validate({
            focusCleanup: false,
            errorClass: 'error',
            rules: {
                fname: {
                    required: true,
                    minlength: 2,
                    lettersonly: true
                },
                lname: {
                    required: true,
                    minlength: 2,
                    letterswithbasicpunc: true
                },
                street: {
                    required: true
                },
                city: {
                    required: true,
                    lettersonly: true
                },
                state: {
                    required: true
                },
                zip: {
                    required: true,
                    digits: true,
                    ziprange: true,
                    minlength: 5,
                    maxlength: 5
                },
                email: {
                    required: true,
                    email: true,
                    minlength: 7
                },
                captcha_code: {
                    required: true
                }
            },

            messages: {
                fname: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
                    lettersonly: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid first name'
                },
                lname: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
                    letterswithbasicpunc: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid last name'
                },
                street: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required'
                },
                city: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    lettersonly: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid city'
                },
                state: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required'
                },
                zip: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    digits: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid Virginia zip code',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
                    maxlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter no more than {0} characters.')
                },
                email: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
                },
                captcha_code: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter the verification code'
                }
            },

            //Create our error summary that will appear before the form
            showErrors: function (errorMap, errorList) {
                //formHandlers.showError(errorMap, errorList);
                if (submitted && errorList) {
                    var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
                            $errorFormClass = $errorFormClass1.split(' ')[0];

                    //Reset and remove error messages if the form
                    //has been validated once already
                    var summary = "";
                    $('label .error', $(this.currentForm)).remove();

                    //Create our container if one doesnt already exits
                    //better than an empty div being in the HTML source
                    if ($('.' + $errorFormClass).length === 0) {
                        $('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
                    }

                    //Generate our error summary list
                    for (this.error in errorList) {
                        //get associated label text to be used for the error summary
                        var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
                        summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
                    }

                    //Output our error summary and place it in the error container
                    $('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
                    $('.' + $errorFormClass).addClass('col-xs-12');

                    //Focus on the error container
                    //Alternatively, you might want to use the Validation default option (focusInvalid)
                    $('.errors-' + $(this.currentForm).attr('class')).focus();

                    //Move the focus to the associated input when error message link is triggered
                    //a simple href anchor link doesnt seem to place focus inside the input
                    $('.' + $errorFormClass + ' a').on('click', function () {
                        $($(this).attr('href')).focus();
                        return false;
                    });

                    //removes exclamation icon from error summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a span').removeClass('fa fa-exclamation-circle');
                    }
                    //remove required text from summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a:contains(" (required)")').each(function () {
                            $(this).html($(this).html().split(" (required)").join(":"));
                        });
                    }
                    //removes adobeBlank text from error summary list
                    $('.summary-list li a span span').remove('.adobeBlank');
                }
                this.defaultShowErrors();
                submitted = false;
            },
            errorPlacement: function (error, element) {
                formHandlers.errorPosition(error, element);
            },
            highlight: function (element, errorClass, validClass) {
                formHandlers.highlight(element, errorClass, validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                formHandlers.unHighlight(element, errorClass, validClass);

            },

            invalidHandler: function (form, validator) {
                submitted = true;
            },

            //Removed the error summary upon successful completion of form
            submitHandler: function (form) {
                $('.errors-' + $(this.currentForm).attr('class')).remove();

                $(form).submit();
            }
        });
    }
    if ($('.sign-up').length) {
        global.valid();
        //signup form
        $('.sign-up').validate({
            focusCleanup: false,
            errorClass: 'error',
            rules: {
                fname: {
                    required: true,
                    minlength: 2,
                    lettersonly: true
                },
                lname: {
                    required: true,
                    minlength: 2,
                    letterswithbasicpunc: true
                },
                password: {
                    required: true
                },
                password2: {
                    required: true,
                    equalTo: '#password'
                },
                email: {
                    required: true,
                    email: true,
                    minlength: 7
                },
                captcha_code: {
                    required: true
                }
            },

            messages: {
                fname: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
                    lettersonly: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid first name'
                },
                lname: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
                    letterswithbasicpunc: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid last name'
                },

                password: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a password'
                },
                password2: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a password',
                    equalTo: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Passwords do not match'
                },
                email: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
                },
                captcha_code: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter the verification code'
                }
            },

            //Create our error summary that will appear before the form
            showErrors: function (errorMap, errorList) {
                //formHandlers.showError(errorMap, errorList);
                if (submitted && errorList) {
                    var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
                            $errorFormClass = $errorFormClass1.split(' ')[0];

                    //Reset and remove error messages if the form
                    //has been validated once already
                    var summary = "";
                    $('label .error', $(this.currentForm)).remove();

                    //Create our container if one doesnt already exits
                    //better than an empty div being in the HTML source
                    if ($('.' + $errorFormClass).length === 0) {
                        $('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
                    }

                    //Generate our error summary list
                    for (this.error in errorList) {
                        //get associated label text to be used for the error summary
                        var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
                        summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
                    }

                    //Output our error summary and place it in the error container
                    $('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
                    $('.' + $errorFormClass).addClass('col-xs-12');

                    //Focus on the error container
                    //Alternatively, you might want to use the Validation default option (focusInvalid)
                    $('.errors-' + $(this.currentForm).attr('class')).focus();

                    //Move the focus to the associated input when error message link is triggered
                    //a simple href anchor link doesnt seem to place focus inside the input
                    $('.' + $errorFormClass + ' a').on('click', function () {
                        $($(this).attr('href')).focus();
                        return false;
                    });

                    //removes exclamation icon from error summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a span').removeClass('fa fa-exclamation-circle');
                    }
                    //remove required text from summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a:contains(" (required)")').each(function () {
                            $(this).html($(this).html().split(" (required)").join(":"));
                        });
                    }

                    //removes adobeBlank text from error summary list
                    $('.summary-list li a span span').remove('.adobeBlank');
                }
                this.defaultShowErrors();
                submitted = false;
            },
            errorPlacement: function (error, element) {
                formHandlers.errorPosition(error, element);
            },
            highlight: function (element, errorClass, validClass) {
                formHandlers.highlight(element, errorClass, validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                formHandlers.unHighlight(element, errorClass, validClass);

            },

            invalidHandler: function (form, validator) {
                submitted = true;
            },

            //Removed the error summary upon successful completion of form
            submitHandler: function (form) {
                $('.errors-' + $(this.currentForm).attr('class')).remove();

                $(form).submit();
            }
        });
    }
    if ($('.donor-form-container').length) {
        global.valid();
        //login form
        $('.donor-form-container').validate({
            focusCleanup: false,
            errorClass: 'error',
            rules: {
                username1: {
                    required: true,
                    email: true,
                    minlength: 7
                },
                password1: {
                    required: true
                }
            },

            messages: {
                username1: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
                },
                password1: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a password'
                }
            },

            //Create our error summary that will appear before the form
            showErrors: function (errorMap, errorList) {
                //formHandlers.showError(errorMap, errorList);
                if (submitted && errorList) {
                    var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
                            $errorFormClass = $errorFormClass1.split(' ')[0];

                    //Reset and remove error messages if the form
                    //has been validated once already
                    var summary = "";
                    $('label .error', $(this.currentForm)).remove();

                    //Create our container if one doesnt already exits
                    //better than an empty div being in the HTML source
                    if ($('.' + $errorFormClass).length === 0) {
                        $('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
                    }

                    //Generate our error summary list
                    for (this.error in errorList) {
                        //get associated label text to be used for the error summary
                        var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
                        summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
                    }

                    //Output our error summary and place it in the error container
                    $('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
                    $('.' + $errorFormClass).addClass('col-xs-12');

                    //Focus on the error container
                    //Alternatively, you might want to use the Validation default option (focusInvalid)
                    $('.errors-' + $(this.currentForm).attr('class')).focus();

                    //Move the focus to the associated input when error message link is triggered
                    //a simple href anchor link doesnt seem to place focus inside the input
                    $('.' + $errorFormClass + ' a').on('click', function () {
                        $($(this).attr('href')).focus();
                        return false;
                    });

                    //removes exclamation icon from error summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a span').removeClass('fa fa-exclamation-circle');
                    }
                    //remove required text from summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a:contains(" (your email address)")').each(function () {
                            $(this).html($(this).html().split(" (your email address)").join(":"));
                        });
                    }

                    //removes adobeBlank text from error summary list
                    $('.summary-list li a span span').remove('.adobeBlank');
                }
                this.defaultShowErrors();
                submitted = false;
            },
            errorPlacement: function (error, element) {
                formHandlers.errorPosition(error, element);
            },
            highlight: function (element, errorClass, validClass) {
                formHandlers.highlight(element, errorClass, validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                formHandlers.unHighlight(element, errorClass, validClass);

            },

            invalidHandler: function (form, validator) {
                submitted = true;
            },

            //Removed the error summary upon successful completion of form
            submitHandler: function (form) {
                $('.errors-' + $(this.currentForm).attr('class')).remove();

                $(form).submit();
            }
        });
    }
    if ($('.login-form-container').length) {
        global.valid();
        //login form
        $('.login-form-container').validate({
            focusCleanup: false,
            errorClass: 'error',
            rules: {
                username2: {
                    required: true,
                    email: true,
                    minlength: 7
                },
                password: {
                    required: true
                }
            },

            messages: {
                username2: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
                },

                password: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a password'
                }
            },

            //Create our error summary that will appear before the form
            showErrors: function (errorMap, errorList) {
                //formHandlers.showError(errorMap, errorList);
                if (submitted && errorList) {
                    var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
                            $errorFormClass = $errorFormClass1.split(' ')[0];

                    //Reset and remove error messages if the form
                    //has been validated once already
                    var summary = "";
                    $('label .error', $(this.currentForm)).remove();

                    //Create our container if one doesnt already exits
                    //better than an empty div being in the HTML source
                    if ($('.' + $errorFormClass).length === 0) {
                        $('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
                    }

                    //Generate our error summary list
                    for (this.error in errorList) {
                        //get associated label text to be used for the error summary
                        var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
                        summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
                    }

                    //Output our error summary and place it in the error container
                    $('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
                    $('.' + $errorFormClass).addClass('col-xs-12');

                    //Focus on the error container
                    //Alternatively, you might want to use the Validation default option (focusInvalid)
                    $('.errors-' + $(this.currentForm).attr('class')).focus();

                    //Move the focus to the associated input when error message link is triggered
                    //a simple href anchor link doesnt seem to place focus inside the input
                    $('.' + $errorFormClass + ' a').on('click', function () {
                        $($(this).attr('href')).focus();
                        return false;
                    });

                    //removes exclamation icon from error summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a span').removeClass('fa fa-exclamation-circle');
                    }
                    //remove required text from summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a:contains(" (required)")').each(function () {
                            $(this).html($(this).html().split(" (required)").join(":"));
                        });
                    }

                    //removes adobeBlank text from error summary list
                    $('.summary-list li a span span').remove('.adobeBlank');
                }
                this.defaultShowErrors();
                submitted = false;
            },
            errorPlacement: function (error, element) {
                formHandlers.errorPosition(error, element);
            },
            highlight: function (element, errorClass, validClass) {
                formHandlers.highlight(element, errorClass, validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                formHandlers.unHighlight(element, errorClass, validClass);

            },

            invalidHandler: function (form, validator) {
                submitted = true;
            },

            //Removed the error summary upon successful completion of form
            submitHandler: function (form) {
                $('.errors-' + $(this.currentForm).attr('class')).remove();

                $(form).submit();
            }
        });
    }
    if ($('.subscribe-form').length) {
        global.valid();
        //subscribe form
        var checkboxes = $('.require-one');
        var checkbox_names = $.map(checkboxes, function (e, i) {
            return $(e).attr("name");
        }).join(" ");

        $('.subscribe-form').validate({
            focusCleanup: false,
            errorClass: 'error',
            groups: {
                checks: checkbox_names
            },
            rules: {
                email: {
                    required: true,
                    email: true,
                    minlength: 7
                }
            },

            messages: {
                email: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
                }
            },

            //Create our error summary that will appear before the form
            showErrors: function (errorMap, errorList) {
                //formHandlers.showError(errorMap, errorList);
                if (submitted && errorList) {
                    var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
                            $errorFormClass = $errorFormClass1.split(' ')[0];

                    //Reset and remove error messages if the form
                    //has been validated once already
                    var summary = "";
                    $('label .error', $(this.currentForm)).remove();

                    //Create our container if one doesnt already exits
                    //better than an empty div being in the HTML source
                    if ($('.' + $errorFormClass).length === 0) {
                        $('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
                    }

                    //Generate our error summary list
                    for (this.error in errorList) {
                        //get associated label text to be used for the error summary
                        var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
                        summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
                    }

                    //Output our error summary and place it in the error container
                    $('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
                    $('.' + $errorFormClass).addClass('col-xs-12');

                    //Focus on the error container
                    //Alternatively, you might want to use the Validation default option (focusInvalid)
                    $('.errors-' + $(this.currentForm).attr('class')).focus();

                    //Move the focus to the associated input when error message link is triggered
                    //a simple href anchor link doesnt seem to place focus inside the input
                    $('.' + $errorFormClass + ' a').on('click', function () {
                        $($(this).attr('href')).focus();
                        return false;
                    });

                    //removes exclamation icon from error summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a span').removeClass('fa fa-exclamation-circle');
                    }
                    //remove required text from summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a:contains(" (required)")').each(function () {
                            $(this).html($(this).html().split(" (required)").join(":"));
                        });
                    }

                    //removes adobeBlank text from error summary list
                    $('.summary-list li a span span').remove('.adobeBlank');
                }
                this.defaultShowErrors();
                submitted = false;
            },
            errorPlacement: function (error, element) {
                formHandlers.errorPosition(error, element);
            },
            highlight: function (element, errorClass, validClass) {
                formHandlers.highlight(element, errorClass, validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                formHandlers.unHighlight(element, errorClass, validClass);

            },

            invalidHandler: function (form, validator) {
                submitted = true;
            },

            //Removed the error summary upon successful completion of form
            submitHandler: function (form) {
                $('.errors-' + $(this.currentForm).attr('class')).remove();

                $(form).submit();
            }
        });
    }
    if ($('.checkout-form').length) {
        global.valid();
        //checkout form
        $('.checkout-form').validate({
            focusCleanup: false,
            errorClass: 'error',
            debug: true,
            rules: {
                name: {
                    required: true,
                    minlength: 2,
                    lettersonly: true
                },
                amount: {
                    required: true,
                    minlength: 2,
                    number: true
                },
                street: {
                    required: true
                },
                city: {
                    required: true,
                    lettersonly: true
                },
                state: {
                    required: true
                },
                zip: {
                    required: true,
                    digits: true,
                    ziprange: true,
                    minlength: 5,
                    maxlength: 5
                },
                email: {
                    required: true,
                    email: true,
                    minlength: 7
                }
            },

            messages: {
                name: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
                    lettersonly: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid name'
                },
                amount: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    number: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid dollar amount'
                },
                street: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required'
                },
                city: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    lettersonly: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid city'
                },
                state: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required'
                },
                zip: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    digits: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid Virginia zip code',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
                    maxlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter no more than {0} characters.')
                },
                email: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
                }
            },

            //Create our error summary that will appear before the form
            showErrors: function (errorMap, errorList) {
                //formHandlers.showError(errorMap, errorList);
                if (submitted && errorList) {
                    var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
                            $errorFormClass = $errorFormClass1.split(' ')[0];

                    //Reset and remove error messages if the form
                    //has been validated once already
                    var summary = "";
                    $('label .error', $(this.currentForm)).remove();

                    //Create our container if one doesnt already exits
                    //better than an empty div being in the HTML source
                    if ($('.' + $errorFormClass).length === 0) {
                        $('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
                    }

                    //Generate our error summary list
                    for (this.error in errorList) {
                        //get associated label text to be used for the error summary
                        var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
                        summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
                    }

                    //Output our error summary and place it in the error container
                    $('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
                    $('.' + $errorFormClass).addClass('col-xs-12');

                    //Focus on the error container
                    //Alternatively, you might want to use the Validation default option (focusInvalid)
                    $('.errors-' + $(this.currentForm).attr('class')).focus();

                    //Move the focus to the associated input when error message link is triggered
                    //a simple href anchor link doesnt seem to place focus inside the input
                    $('.' + $errorFormClass + ' a').on('click', function () {
                        $($(this).attr('href')).focus();
                        return false;
                    });

                    //removes exclamation icon from error summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a span').removeClass('fa fa-exclamation-circle');
                    }
                    //remove required text from summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a:contains(" (required)")').each(function () {
                            $(this).html($(this).html().split(" (required)").join(":"));
                        });
                    }
                    //removes adobeBlank text from error summary list
                    $('.summary-list li a span span').remove('.adobeBlank');
                }
                this.defaultShowErrors();
                submitted = false;
            },
            errorPlacement: function (error, element) {
                formHandlers.errorPosition(error, element);
            },
            highlight: function (element, errorClass, validClass) {
                formHandlers.highlight(element, errorClass, validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                formHandlers.unHighlight(element, errorClass, validClass);

            },

            invalidHandler: function (form, validator) {
                submitted = true;
            },

            //Removed the error summary upon successful completion of form
            submitHandler: function (form) {
                $('.errors-' + $(this.currentForm).attr('class')).remove();

                $(form).submit();
            }
        });
    }
    if ($('.gift-card-form').length) {
        global.valid();
        /*gift card checkout form*/
        $('.gift-card-form').validate({
            focusCleanup: false,
            errorClass: 'error',
            rules: {
                name: {
                    required: true,
                    minlength: 2,
                    letterswithbasicpunc: true
                },
                street: {
                    required: true
                },
                city: {
                    required: true,
                    lettersonly: true
                },
                state: {
                    required: true
                },
                zip: {
                    required: true,
                    digits: true,
                    ziprange: true,
                    minlength: 5,
                    maxlength: 5
                },
                to: {
                    required: true,
                    minlength: 2,
                    letterswithbasicpunc: true
                },
                from: {
                    required: true,
                    minlength: 2,
                    letterswithbasicpunc: true
                },
                amount: {
                    required: true,
                    minlength: 1
                },
                send: {
                    required: true,
                    minlength: 1
                }
            },

            messages: {
                name: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
                    letterswithbasicpunc: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid name'
                },
                street: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required'
                },
                city: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    lettersonly: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid city'
                },
                state: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required'
                },
                zip: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    digits: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid Virginia zip code',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
                    maxlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter no more than {0} characters.')
                },
                to: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
                    letterswithbasicpunc: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid name'
                },
                from: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
                    letterswithbasicpunc: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid name'
                },
                amount: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please select 1 item',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please select {0} option.')
                },
                send: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please select 1 item',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please select {0} option.')
                }
            },

            //Create our error summary that will appear before the form
            showErrors: function (errorMap, errorList) {
                //formHandlers.showError(errorMap, errorList);
                if (submitted && errorList) {
                    var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
                            $errorFormClass = $errorFormClass1.split(' ')[0];

                    //Reset and remove error messages if the form
                    //has been validated once already
                    var summary = "";
                    $('label .error', $(this.currentForm)).remove();

                    //Create our container if one doesnt already exits
                    //better than an empty div being in the HTML source
                    if ($('.' + $errorFormClass).length === 0) {
                        $('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
                    }

                    //Generate our error summary list
                    for (this.error in errorList) {
                        //get associated label text to be used for the error summary
                        var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
                        summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
                    }

                    //Output our error summary and place it in the error container
                    $('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
                    $('.' + $errorFormClass).addClass('col-xs-12');

                    //Focus on the error container
                    //Alternatively, you might want to use the Validation default option (focusInvalid)
                    $('.errors-' + $(this.currentForm).attr('class')).focus();

                    // Replace the group label for the fields. Alternative label is picked up from data-validatorLabel attr that is set in html dom
                    $('a[href="#recurring_period_0"], a[href="#recurring_period_5"]').html(function () {
                        return $(this).html().replace($('label[for="' + $(this).attr('href').replace('#', '') + '"]').text(), $('label[for="' + $(this).attr('href').replace('#', '') + '"]').attr('data-validatorLabel'));
                    });


                    //Move the focus to the associated input when error message link is triggered
                    //a simple href anchor link doesnt seem to place focus inside the input
                    $('.' + $errorFormClass + ' a').on('click', function () {
                        $($(this).attr('href')).focus();
                        return false;
                    });

                    //removes exclamation icon from error summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a span').removeClass('fa fa-exclamation-circle');
                    }
                    //remove required text from summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a:contains(" (required)")').each(function () {
                            $(this).html($(this).html().split(" (required)").join(":"));
                        });
                    }
                    //removes adobeBlank text from error summary list
                    $('.summary-list li a span span').remove('.adobeBlank');
                }
                this.defaultShowErrors();
                submitted = false;
            },
            errorPlacement: function (error, element) {
                if (element.attr("name") === "amount") {
                    error.insertAfter('.other-amount');
                } else if (element.attr("name") === "send") {
                    error.insertAfter('#recurring_period_8');
                } else {
                    formHandlers.errorPosition(error, element);
                }
            },
            highlight: function (element, errorClass, validClass) {
                formHandlers.highlight(element, errorClass, validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                formHandlers.unHighlight(element, errorClass, validClass);

            },

            invalidHandler: function (form, validator) {
                submitted = true;
            },

            //Removed the error summary upon successful completion of form
            submitHandler: function (form) {
                $('.errors-' + $(this.currentForm).attr('class')).remove();

                $(form).submit();
            }
        });
    }
    if ($('.comment-form').length) {
        global.valid();
        //blog reply form
        $('.comment-form').validate({
            focusCleanup: false,
            errorClass: 'error',
            rules: {
                author: {
                    required: true,
                    minlength: 2,
                    lettersonly: true
                },
                email: {
                    required: true,
                    email: true,
                    minlength: 7
                },
                comment: {
                    required: true
                }
            },

            messages: {
                author: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
                    lettersonly: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid first name'
                },
                email: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
                    email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
                    minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
                },
                comment: {
                    required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a comment'
                }
            },

            //Create our error summary that will appear before the form
            showErrors: function (errorMap, errorList) {
                //formHandlers.showError(errorMap, errorList);
                if (submitted && errorList) {
                    var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
                            $errorFormClass = $errorFormClass1.split(' ')[0];

                    //Reset and remove error messages if the form
                    //has been validated once already
                    var summary = "";
                    $('label .error', $(this.currentForm)).remove();

                    //Create our container if one doesnt already exits
                    //better than an empty div being in the HTML source
                    if ($('.' + $errorFormClass).length === 0) {
                        $('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
                    }

                    //Generate our error summary list
                    for (this.error in errorList) {
                        //get associated label text to be used for the error summary
                        var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
                        summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
                    }

                    //Output our error summary and place it in the error container
                    $('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
                    $('.' + $errorFormClass).addClass('col-xs-12');

                    //Focus on the error container
                    //Alternatively, you might want to use the Validation default option (focusInvalid)
                    $('.errors-' + $(this.currentForm).attr('class')).focus();

                    //Move the focus to the associated input when error message link is triggered
                    //a simple href anchor link doesnt seem to place focus inside the input
                    $('.' + $errorFormClass + ' a').on('click', function () {
                        $($(this).attr('href')).focus();
                        return false;
                    });

                    //removes exclamation icon from error summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a span').removeClass('fa fa-exclamation-circle');
                    }
                    //remove required text from summary list
                    if ($('.summary-list li a span').hasClass('Exclamation')) {
                        $('.summary-list li a:contains(" (required)")').each(function () {
                            $(this).html($(this).html().split(" (required)").join(":"));
                        });
                    }

                    //removes adobeBlank text from error summary list
                    $('.summary-list li a span span').remove('.adobeBlank');
                }
                this.defaultShowErrors();
                submitted = false;
            },
            errorPlacement: function (error, element) {
                formHandlers.errorPosition(error, element);
            },
            highlight: function (element, errorClass, validClass) {
                formHandlers.highlight(element, errorClass, validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                formHandlers.unHighlight(element, errorClass, validClass);

            },

            invalidHandler: function (form, validator) {
                submitted = true;
            },

            //Removed the error summary upon successful completion of form
            submitHandler: function (form) {
                $('.errors-' + $(this.currentForm).attr('class')).remove();

                $(form).submit();
            }
        });
    }
});