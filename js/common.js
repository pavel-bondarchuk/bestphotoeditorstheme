'use strict';

var BREAKPOINTS = {
  lg: 1280,
  md: 992,
  sm: 768,
  xs: 320
};

// if ($(window).width() > 960) {
//   alert('More than 960');
//
// }
// else {
//   alert('Less than 960');
// }

$(document).ready(function () {
  // var $sidebarSticky = $('.js-sidebar-sticky');
  //
  // if (window.width() >= 768) {
  //   $sidebarSticky.stickySidebar({
  //     topSpacing: 0,
  //     bottomSpacing: 0,
  //     stickyClass: 'is-affixed',
  //     minWidth: 250,
  //     resizeSensor: true,
  //
  //   });
  // } else {
  //   $sidebar.destroy();
  // }
  $('.js-sidebar-sticky').stickySidebar({
    topSpacing: 0,
    bottomSpacing: 0,
    stickyClass: 'is-affixed',
    minWidth: 1366,
    resizeSensor: true,

  });


  $('.js-general-slider').slick({
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    // vertical: true,
    fade: true,
    adaptiveHeight: true,
    // verticalSwiping: true,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {}
      },
      {
        breakpoint: 768,
        settings: {
          verticalSwiping: true,
        }
      }

    ]
  });

  $(".js-rating").starRating({
    disableAfterRate: false,
    starSize: 22,
    strokeColor: '#ff6d54',
    activeColor: '#ff6d54',
    strokeWidth: 1,

    readOnly: true,
    useGradient: false,

  });
  $(".js-rating-write").starRating({
    disableAfterRate: false,
    useFullStars: true,
    strokeWidth: 25,
    starSize: 25,
    hoverColor: '#ff6d54',
    activeColor: '#ff6d54',
    ratedColor: '#ff6d54',
    strokeColor: '#ff6d54',
    emptyColor: 'white',
    baseUrl: true,

  });

  var $hamburger = $(".hamburger");
  $hamburger.on("click", function (e) {
    $hamburger.toggleClass("is-open");
    // Do something else, like open/close menu
    $('.header').toggleClass('is-open');
    $(this).closest("body").toggleClass('js-block-scroll');
  });

  $(".btn-toggle-category").click(function () {
    $(this).closest(".sidebar-wrap, .sidebar-blog-wrap").find('.sidebar-list').transition("fade", function () {
    });
    $(this).toggleClass('is-open');

  });
  $(".faq__title, .faq__angle").click(function () {
    $(this).closest(".faq").find('.faq__text').transition("fade", function () {
    });
    $(this).closest(".faq").toggleClass('is-open');

  });

  // var swiper = new Swiper('.js-cards', {
  //   slidesPerView: 'auto',
  //   // cssMode: true,
  //   // spaceBetween: 30,
  //   grabCursor: true,
  //   // loop: true,
  //   // lazy: true,
  //
  // });
  (function () {

    'use strict';

    // breakpoint where swiper will be destroyed
    // and switches to a dual-column layout
    const breakpoint = window.matchMedia('(max-width:767px)');

    // keep track of swiper instances to destroy later
    let mySwiper;

    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////

    const breakpointChecker = function () {

      // if larger viewport and multi-row layout needed
      if (breakpoint.matches === true) {

        // clean up old instances and inline styles when available
        if (mySwiper !== undefined) mySwiper.destroy(true, true);

        // or/and do nothing
        return;

        // else if a small viewport and single column layout needed
      } else if (breakpoint.matches === false) {

        // fire small viewport version of swiper
        return enableSwiper();

      }

    };

    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////

    const enableSwiper = function () {

      mySwiper = new Swiper('.js-cards', {
        slidesPerView: 'auto',
        // cssMode: true,
        // spaceBetween: 30,
        grabCursor: true,
        breakpoints: {

          1920: {
            slidesPerView: 4,
            spaceBetween: 20,
          },
          1366: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
        }
      });

    };

    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////

    // keep an eye on viewport size changes
    // breakpoint.addListener(breakpointChecker);

    // kickstart
    breakpointChecker();


  })(); /* IIFE end */
  // posts
  (function () {

    'use strict';

    // breakpoint where swiper will be destroyed
    // and switches to a dual-column layout
    const breakpoint = window.matchMedia('(max-width:767px)');

    // keep track of swiper instances to destroy later
    let mySwiper;

    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////

    const breakpointChecker = function () {

      // if larger viewport and multi-row layout needed
      if (breakpoint.matches === true) {

        // clean up old instances and inline styles when available
        if (mySwiper !== undefined) mySwiper.destroy(true, true);

        // or/and do nothing
        return;

        // else if a small viewport and single column layout needed
      } else if (breakpoint.matches === false) {

        // fire small viewport version of swiper
        return enableSwiper2();

      }

    };

    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////

    const enableSwiper2 = function () {

      mySwiper = new Swiper('.js-posts-list', {
        slidesPerView: 'auto',
        grabCursor: true,
        navigation: {
          nextEl: '.arrow--left',
          prevEl: '.arrow--right',
        },
        breakpoints: {

          1366: {
            slidesPerView: 3,
            spaceBetween: 30,

          },
        }
      });

    };

    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////

    // keep an eye on viewport size changes
    // breakpoint.addListener(breakpointChecker);

    // kickstart
    breakpointChecker();


  })(); /* IIFE end */

  // posts
  // var sliderPosts = new Swiper('.js-posts-list', {
  //   // slidesPerView: 'auto',
  //   slidesPerView: 'auto',
  //   // spaceBetween: 22,
  //   grabCursor: true,
  //   // lazy: true,
  //
  //   // loop: true,
  //   // pagination: {
  //   //   el: '.swiper-pagination',
  //   //   clickable: true,
  //   // },
  //   navigation: {
  //     nextEl: '.arrow--left',
  //     prevEl: '.arrow--right',
  //   },
  //   // breakpoints: {
  //   //   768: {
  //   //     slidesPerView: 2,
  //   //     spaceBetween: 40,
  //   //   },
  //   //   1440: {
  //   //     slidesPerView: 3,
  //   //     spaceBetween: 50,
  //   //   },
  //   // }
  // });
  // __________________________
// 00000
jQuery(document).ready(function ($) {
  var dropdowns = $(".language-select");

  dropdowns.find(".language-select__current-wrap").click(function () {
    dropdowns.find(".language-select__list").toggle();
    // $(this).next().children().toggle();

  });

  dropdowns.find(".language-select__link").click(function () {
    var leSpan = $(this).parents(".language-select").find(".language-select__current");

    $(this).parents(".language-select").find('.language-select__link').each(function () {
      $(this).removeClass('selected');
    });

    leSpan.html($(this).html());

    if ($(this).hasClass('default')) {
      leSpan.removeClass('selected')
    } else {
      leSpan.addClass('selected');
      $(this).addClass('selected');
    }

    $(this).parents(".language-select__list").hide();
  });

  $(document).bind('click', function (e) {
    if (!$(e.target).parents().hasClass("language-select")) $(".language-select__list").hide();
  });


  $('.btn-close-menu').click(function () {
    $('.header').removeClass('is-open');
    $(this).closest("body").removeClass('js-block-scroll');
  });


  $(".btn-menu").click(function () {
    $(this).closest(".header").toggleClass('open');
    $(this).closest("body").toggleClass('js-block-scroll');
  });
  $("link").on('click', function () {
    var elementClick = $(this).attr("href")
    var destination = $(elementClick).offset().top - 20;
    $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 800);
    return false;
  });

    // $(".anchor").on('click', function(event) {
    //
    //   if (this.hash !== "") {
    //     event.preventDefault();
    //     var hash = this.hash;
    //
    //     $('html, body').animate({
    //       scrollTop: $(hash).offset().top
    //     }, 1500, function() {
    //
    //       window.location.hash = hash;
    //     });
    //   }
    // });
    $(".anchor").on('click', function () {
      var elementClick = $(this).attr("href")
      var destination = $(elementClick).offset().top - 20;
      $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 800);
      return false;
    });
  });

});

$(window).resize(function () {
});
$(window).on('resize orientationchange', function () {
  $('.js-general-slider').slick('resize');
});



var pageOverlay = new (function() {
  this.elSelector = '.el-page-overlay';
	this.$el = $(this.elSelector);

  this.init = function($newOverlay) {
    var _overlay = this;

    $(document).on('click', _overlay.elSelector, function() {
      _overlay.close();
    });
  },

	this.open = function($toEl) {
    var $parent = $toEl.parent();
    var $_overlay = $parent.find(this.elSelector);

    if (!$_overlay.length) {
      $_overlay = this.$el.clone()
        .css('zIndex', $toEl.css('zIndex') - 1);

      $parent.append($_overlay);
      this.init($_overlay);
    };

    $('body').addClass('disabled-scroll');
    $_overlay.addClass('open');
	},

	this.close = function() {
    // this.onClose();
		$(this.elSelector).removeClass('open');
    $('body').removeClass('disabled-scroll');
	}
})();


var formOverlayLoader = new (function() {
  this.elSelector = '.el-form-loader';
	this.$el = $(this.elSelector);

	this.open = function($toEl) {
    var $_overlay = $toEl.find(this.elSelector);
    var toElPosition = $toEl.css('position') || null;

    if ((!toElPosition) || (toElPosition == 'static')) {
      $toEl.css('position', 'relative');
    }

    if (!$_overlay.length) {
      $_overlay = this.$el.clone();

      $toEl.append($_overlay);

      $_overlay = $toEl.find(this.elSelector);
      $_overlay.css('zIndex', getSiblingsMaxIndex($_overlay));
    };

    $_overlay.addClass('open');
	},

	this.close = function() {
		$(this.elSelector).removeClass('open');
	}
})();


// dropdown
// https://github.com/Semantic-Org/Semantic-UI
//-----------------------------------------------------------------------------------
function Dropdown($el, options) {
  this.$el = $el;
  this.options = options || {};
  this.config = $.extend({}, this.defaults, this.options);
};

Dropdown.prototype = {
  defaults: {
    transition: 'fade down'
  },

  init: function() {
    var _this = this;

    this.$el.dropdown( $.extend({}, _this.config, {
      onChange: function(value, text, $choice) {
        var $dropdown = $(this);

        _this.inputValid($dropdown)
      },
      onHide: function() {
        var $dropdown = $(this);
        _this.inputValid($dropdown);
      }
    }) );
  },

  inputValid: function($dropdown) {
    var $input = $dropdown.find('.js-select-val');

    if ($input.length && !$dropdown.hasClass('mod-validate-disabled')) {
      $input.valid();
    }
  }
};

// var select = new Dropdown($('.js-select'));
// select.init();

/*!
 * # Semantic UI 2.4.2 - Tab
 * http://github.com/semantic-org/semantic-ui/
 *
 *
 * Released under the MIT license
 * http://opensource.org/licenses/MIT
 *
 */

;(function ($, window, document, undefined) {

'use strict';

window = (typeof window != 'undefined' && window.Math == Math)
  ? window
  : (typeof self != 'undefined' && self.Math == Math)
    ? self
    : Function('return this')()
;

$.fn.tab = function(parameters) {

  var
    // use window context if none specified
    $allModules     = $.isFunction(this)
        ? $(window)
        : $(this),

    moduleSelector  = $allModules.selector || '',
    time            = new Date().getTime(),
    performance     = [],

    query           = arguments[0],
    methodInvoked   = (typeof query == 'string'),
    queryArguments  = [].slice.call(arguments, 1),

    initializedHistory = false,
    returnedValue
  ;

  $allModules
    .each(function() {
      var

        settings        = ( $.isPlainObject(parameters) )
          ? $.extend(true, {}, $.fn.tab.settings, parameters)
          : $.extend({}, $.fn.tab.settings),

        className       = settings.className,
        metadata        = settings.metadata,
        selector        = settings.selector,
        error           = settings.error,

        eventNamespace  = '.' + settings.namespace,
        moduleNamespace = 'module-' + settings.namespace,

        $module         = $(this),
        $context,
        $tabs,

        cache           = {},
        firstLoad       = true,
        recursionDepth  = 0,
        element         = this,
        instance        = $module.data(moduleNamespace),

        activeTabPath,
        parameterArray,
        module,

        historyEvent

      ;

      module = {

        initialize: function() {
          module.debug('Initializing tab menu item', $module);
          module.fix.callbacks();
          module.determineTabs();

          module.debug('Determining tabs', settings.context, $tabs);
          // set up automatic routing
          if(settings.auto) {
            module.set.auto();
          }
          module.bind.events();

          if(settings.history && !initializedHistory) {
            module.initializeHistory();
            initializedHistory = true;
          }

          module.instantiate();
        },

        instantiate: function () {
          module.verbose('Storing instance of module', module);
          instance = module;
          $module
            .data(moduleNamespace, module)
          ;
        },

        destroy: function() {
          module.debug('Destroying tabs', $module);
          $module
            .removeData(moduleNamespace)
            .off(eventNamespace)
          ;
        },

        bind: {
          events: function() {
            // if using $.tab don't add events
            if( !$.isWindow( element ) ) {
              module.debug('Attaching tab activation events to element', $module);
              $module
                .on('click' + eventNamespace, module.event.click)
              ;
            }
          }
        },

        determineTabs: function() {
          var
            $reference
          ;

          // determine tab context
          if(settings.context === 'parent') {
            if($module.closest(selector.ui).length > 0) {
              $reference = $module.closest(selector.ui);
              module.verbose('Using closest UI element as parent', $reference);
            }
            else {
              $reference = $module;
            }
            $context = $reference.parent();
            module.verbose('Determined parent element for creating context', $context);
          }
          else if(settings.context) {
            $context = $(settings.context);
            module.verbose('Using selector for tab context', settings.context, $context);
          }
          else {
            $context = $('body');
          }
          // find tabs
          if(settings.childrenOnly) {
            $tabs = $context.children(selector.tabs);
            module.debug('Searching tab context children for tabs', $context, $tabs);
          }
          else {
            $tabs = $context.find(selector.tabs);
            module.debug('Searching tab context for tabs', $context, $tabs);
          }
        },

        fix: {
          callbacks: function() {
            if( $.isPlainObject(parameters) && (parameters.onTabLoad || parameters.onTabInit) ) {
              if(parameters.onTabLoad) {
                parameters.onLoad = parameters.onTabLoad;
                delete parameters.onTabLoad;
                module.error(error.legacyLoad, parameters.onLoad);
              }
              if(parameters.onTabInit) {
                parameters.onFirstLoad = parameters.onTabInit;
                delete parameters.onTabInit;
                module.error(error.legacyInit, parameters.onFirstLoad);
              }
              settings = $.extend(true, {}, $.fn.tab.settings, parameters);
            }
          }
        },

        initializeHistory: function() {
          module.debug('Initializing page state');
          if( $.address === undefined ) {
            module.error(error.state);
            return false;
          }
          else {
            if(settings.historyType == 'state') {
              module.debug('Using HTML5 to manage state');
              if(settings.path !== false) {
                $.address
                  .history(true)
                  .state(settings.path)
                ;
              }
              else {
                module.error(error.path);
                return false;
              }
            }
            $.address
              .bind('change', module.event.history.change)
            ;
          }
        },

        event: {
          click: function(event) {
            var
              tabPath = $(this).data(metadata.tab)
            ;
            if(tabPath !== undefined) {
              if(settings.history) {
                module.verbose('Updating page state', event);
                $.address.value(tabPath);
              }
              else {
                module.verbose('Changing tab', event);
                module.changeTab(tabPath);
              }
              event.preventDefault();
            }
            else {
              module.debug('No tab specified');
            }
          },
          history: {
            change: function(event) {
              var
                tabPath   = event.pathNames.join('/') || module.get.initialPath(),
                pageTitle = settings.templates.determineTitle(tabPath) || false
              ;
              module.performance.display();
              module.debug('History change event', tabPath, event);
              historyEvent = event;
              if(tabPath !== undefined) {
                module.changeTab(tabPath);
              }
              if(pageTitle) {
                $.address.title(pageTitle);
              }
            }
          }
        },

        refresh: function() {
          if(activeTabPath) {
            module.debug('Refreshing tab', activeTabPath);
            module.changeTab(activeTabPath);
          }
        },

        cache: {

          read: function(cacheKey) {
            return (cacheKey !== undefined)
              ? cache[cacheKey]
              : false
            ;
          },
          add: function(cacheKey, content) {
            cacheKey = cacheKey || activeTabPath;
            module.debug('Adding cached content for', cacheKey);
            cache[cacheKey] = content;
          },
          remove: function(cacheKey) {
            cacheKey = cacheKey || activeTabPath;
            module.debug('Removing cached content for', cacheKey);
            delete cache[cacheKey];
          }
        },

        set: {
          auto: function() {
            var
              url = (typeof settings.path == 'string')
                ? settings.path.replace(/\/$/, '') + '/{$tab}'
                : '/{$tab}'
            ;
            module.verbose('Setting up automatic tab retrieval from server', url);
            if($.isPlainObject(settings.apiSettings)) {
              settings.apiSettings.url = url;
            }
            else {
              settings.apiSettings = {
                url: url
              };
            }
          },
          loading: function(tabPath) {
            var
              $tab      = module.get.tabElement(tabPath),
              isLoading = $tab.hasClass(className.loading)
            ;
            if(!isLoading) {
              module.verbose('Setting loading state for', $tab);
              $tab
                .addClass(className.loading)
                .siblings($tabs)
                  .removeClass(className.active + ' ' + className.loading)
              ;
              if($tab.length > 0) {
                settings.onRequest.call($tab[0], tabPath);
              }
            }
          },
          state: function(state) {
            $.address.value(state);
          }
        },

        changeTab: function(tabPath) {
          var
            pushStateAvailable = (window.history && window.history.pushState),
            shouldIgnoreLoad   = (pushStateAvailable && settings.ignoreFirstLoad && firstLoad),
            remoteContent      = (settings.auto || $.isPlainObject(settings.apiSettings) ),
            // only add default path if not remote content
            pathArray = (remoteContent && !shouldIgnoreLoad)
              ? module.utilities.pathToArray(tabPath)
              : module.get.defaultPathArray(tabPath)
          ;
          tabPath = module.utilities.arrayToPath(pathArray);
          $.each(pathArray, function(index, tab) {
            var
              currentPathArray   = pathArray.slice(0, index + 1),
              currentPath        = module.utilities.arrayToPath(currentPathArray),

              isTab              = module.is.tab(currentPath),
              isLastIndex        = (index + 1 == pathArray.length),

              $tab               = module.get.tabElement(currentPath),
              $anchor,
              nextPathArray,
              nextPath,
              isLastTab
            ;
            module.verbose('Looking for tab', tab);
            if(isTab) {
              module.verbose('Tab was found', tab);
              // scope up
              activeTabPath  = currentPath;
              parameterArray = module.utilities.filterArray(pathArray, currentPathArray);

              if(isLastIndex) {
                isLastTab = true;
              }
              else {
                nextPathArray = pathArray.slice(0, index + 2);
                nextPath      = module.utilities.arrayToPath(nextPathArray);
                isLastTab     = ( !module.is.tab(nextPath) );
                if(isLastTab) {
                  module.verbose('Tab parameters found', nextPathArray);
                }
              }
              if(isLastTab && remoteContent) {
                if(!shouldIgnoreLoad) {
                  module.activate.navigation(currentPath);
                  module.fetch.content(currentPath, tabPath);
                }
                else {
                  module.debug('Ignoring remote content on first tab load', currentPath);
                  firstLoad = false;
                  module.cache.add(tabPath, $tab.html());
                  module.activate.all(currentPath);
                  settings.onFirstLoad.call($tab[0], currentPath, parameterArray, historyEvent);
                  settings.onLoad.call($tab[0], currentPath, parameterArray, historyEvent);
                }
                return false;
              }
              else {
                module.debug('Opened local tab', currentPath);
                module.activate.all(currentPath);
                if( !module.cache.read(currentPath) ) {
                  module.cache.add(currentPath, true);
                  module.debug('First time tab loaded calling tab init');
                  settings.onFirstLoad.call($tab[0], currentPath, parameterArray, historyEvent);
                }
                settings.onLoad.call($tab[0], currentPath, parameterArray, historyEvent);
              }

            }
            else if(tabPath.search('/') == -1 && tabPath !== '') {
              // look for in page anchor
              $anchor     = $('#' + tabPath + ', a[name="' + tabPath + '"]');
              currentPath = $anchor.closest('[data-tab]').data(metadata.tab);
              $tab        = module.get.tabElement(currentPath);
              // if anchor exists use parent tab
              if($anchor && $anchor.length > 0 && currentPath) {
                module.debug('Anchor link used, opening parent tab', $tab, $anchor);
                if( !$tab.hasClass(className.active) ) {
                  setTimeout(function() {
                    module.scrollTo($anchor);
                  }, 0);
                }
                module.activate.all(currentPath);
                if( !module.cache.read(currentPath) ) {
                  module.cache.add(currentPath, true);
                  module.debug('First time tab loaded calling tab init');
                  settings.onFirstLoad.call($tab[0], currentPath, parameterArray, historyEvent);
                }
                settings.onLoad.call($tab[0], currentPath, parameterArray, historyEvent);
                return false;
              }
            }
            else {
              module.error(error.missingTab, $module, $context, currentPath);
              return false;
            }
          });
        },

        scrollTo: function($element) {
          var
            scrollOffset = ($element && $element.length > 0)
              ? $element.offset().top
              : false
          ;
          if(scrollOffset !== false) {
            module.debug('Forcing scroll to an in-page link in a hidden tab', scrollOffset, $element);
            $(document).scrollTop(scrollOffset);
          }
        },

        update: {
          content: function(tabPath, html, evaluateScripts) {
            var
              $tab = module.get.tabElement(tabPath),
              tab  = $tab[0]
            ;
            evaluateScripts = (evaluateScripts !== undefined)
              ? evaluateScripts
              : settings.evaluateScripts
            ;
            if(typeof settings.cacheType == 'string' && settings.cacheType.toLowerCase() == 'dom' && typeof html !== 'string') {
              $tab
                .empty()
                .append($(html).clone(true))
              ;
            }
            else {
              if(evaluateScripts) {
                module.debug('Updating HTML and evaluating inline scripts', tabPath, html);
                $tab.html(html);
              }
              else {
                module.debug('Updating HTML', tabPath, html);
                tab.innerHTML = html;
              }
            }
          }
        },

        fetch: {

          content: function(tabPath, fullTabPath) {
            var
              $tab        = module.get.tabElement(tabPath),
              apiSettings = {
                dataType         : 'html',
                encodeParameters : false,
                on               : 'now',
                cache            : settings.alwaysRefresh,
                headers          : {
                  'X-Remote': true
                },
                onSuccess : function(response) {
                  if(settings.cacheType == 'response') {
                    module.cache.add(fullTabPath, response);
                  }
                  module.update.content(tabPath, response);
                  if(tabPath == activeTabPath) {
                    module.debug('Content loaded', tabPath);
                    module.activate.tab(tabPath);
                  }
                  else {
                    module.debug('Content loaded in background', tabPath);
                  }
                  settings.onFirstLoad.call($tab[0], tabPath, parameterArray, historyEvent);
                  settings.onLoad.call($tab[0], tabPath, parameterArray, historyEvent);

                  if(settings.loadOnce) {
                    module.cache.add(fullTabPath, true);
                  }
                  else if(typeof settings.cacheType == 'string' && settings.cacheType.toLowerCase() == 'dom' && $tab.children().length > 0) {
                    setTimeout(function() {
                      var
                        $clone = $tab.children().clone(true)
                      ;
                      $clone = $clone.not('script');
                      module.cache.add(fullTabPath, $clone);
                    }, 0);
                  }
                  else {
                    module.cache.add(fullTabPath, $tab.html());
                  }
                },
                urlData: {
                  tab: fullTabPath
                }
              },
              request         = $tab.api('get request') || false,
              existingRequest = ( request && request.state() === 'pending' ),
              requestSettings,
              cachedContent
            ;

            fullTabPath   = fullTabPath || tabPath;
            cachedContent = module.cache.read(fullTabPath);


            if(settings.cache && cachedContent) {
              module.activate.tab(tabPath);
              module.debug('Adding cached content', fullTabPath);
              if(!settings.loadOnce) {
                if(settings.evaluateScripts == 'once') {
                  module.update.content(tabPath, cachedContent, false);
                }
                else {
                  module.update.content(tabPath, cachedContent);
                }
              }
              settings.onLoad.call($tab[0], tabPath, parameterArray, historyEvent);
            }
            else if(existingRequest) {
              module.set.loading(tabPath);
              module.debug('Content is already loading', fullTabPath);
            }
            else if($.api !== undefined) {
              requestSettings = $.extend(true, {}, settings.apiSettings, apiSettings);
              module.debug('Retrieving remote content', fullTabPath, requestSettings);
              module.set.loading(tabPath);
              $tab.api(requestSettings);
            }
            else {
              module.error(error.api);
            }
          }
        },

        activate: {
          all: function(tabPath) {
            module.activate.tab(tabPath);
            module.activate.navigation(tabPath);
          },
          tab: function(tabPath) {
            var
              $tab          = module.get.tabElement(tabPath),
              $deactiveTabs = (settings.deactivate == 'siblings')
                ? $tab.siblings($tabs)
                : $tabs.not($tab),
              isActive      = $tab.hasClass(className.active)
            ;
            module.verbose('Showing tab content for', $tab);
            if(!isActive) {
              $tab
                .addClass(className.active)
              ;
              $deactiveTabs
                .removeClass(className.active + ' ' + className.loading)
              ;
              if($tab.length > 0) {
                settings.onVisible.call($tab[0], tabPath);
              }
            }
          },
          navigation: function(tabPath) {
            var
              $navigation         = module.get.navElement(tabPath),
              $deactiveNavigation = (settings.deactivate == 'siblings')
                ? $navigation.siblings($allModules)
                : $allModules.not($navigation),
              isActive    = $navigation.hasClass(className.active)
            ;
            module.verbose('Activating tab navigation for', $navigation, tabPath);
            if(!isActive) {
              $navigation
                .addClass(className.active)
              ;
              $deactiveNavigation
                .removeClass(className.active + ' ' + className.loading)
              ;
            }
          }
        },

        deactivate: {
          all: function() {
            module.deactivate.navigation();
            module.deactivate.tabs();
          },
          navigation: function() {
            $allModules
              .removeClass(className.active)
            ;
          },
          tabs: function() {
            $tabs
              .removeClass(className.active + ' ' + className.loading)
            ;
          }
        },

        is: {
          tab: function(tabName) {
            return (tabName !== undefined)
              ? ( module.get.tabElement(tabName).length > 0 )
              : false
            ;
          }
        },

        get: {
          initialPath: function() {
            return $allModules.eq(0).data(metadata.tab) || $tabs.eq(0).data(metadata.tab);
          },
          path: function() {
            return $.address.value();
          },
          // adds default tabs to tab path
          defaultPathArray: function(tabPath) {
            return module.utilities.pathToArray( module.get.defaultPath(tabPath) );
          },
          defaultPath: function(tabPath) {
            var
              $defaultNav = $allModules.filter('[data-' + metadata.tab + '^="' + tabPath + '/"]').eq(0),
              defaultTab  = $defaultNav.data(metadata.tab) || false
            ;
            if( defaultTab ) {
              module.debug('Found default tab', defaultTab);
              if(recursionDepth < settings.maxDepth) {
                recursionDepth++;
                return module.get.defaultPath(defaultTab);
              }
              module.error(error.recursion);
            }
            else {
              module.debug('No default tabs found for', tabPath, $tabs);
            }
            recursionDepth = 0;
            return tabPath;
          },
          navElement: function(tabPath) {
            tabPath = tabPath || activeTabPath;
            return $allModules.filter('[data-' + metadata.tab + '="' + tabPath + '"]');
          },
          tabElement: function(tabPath) {
            var
              $fullPathTab,
              $simplePathTab,
              tabPathArray,
              lastTab
            ;
            tabPath        = tabPath || activeTabPath;
            tabPathArray   = module.utilities.pathToArray(tabPath);
            lastTab        = module.utilities.last(tabPathArray);
            $fullPathTab   = $tabs.filter('[data-' + metadata.tab + '="' + tabPath + '"]');
            $simplePathTab = $tabs.filter('[data-' + metadata.tab + '="' + lastTab + '"]');
            return ($fullPathTab.length > 0)
              ? $fullPathTab
              : $simplePathTab
            ;
          },
          tab: function() {
            return activeTabPath;
          }
        },

        utilities: {
          filterArray: function(keepArray, removeArray) {
            return $.grep(keepArray, function(keepValue) {
              return ( $.inArray(keepValue, removeArray) == -1);
            });
          },
          last: function(array) {
            return $.isArray(array)
              ? array[ array.length - 1]
              : false
            ;
          },
          pathToArray: function(pathName) {
            if(pathName === undefined) {
              pathName = activeTabPath;
            }
            return typeof pathName == 'string'
              ? pathName.split('/')
              : [pathName]
            ;
          },
          arrayToPath: function(pathArray) {
            return $.isArray(pathArray)
              ? pathArray.join('/')
              : false
            ;
          }
        },

        setting: function(name, value) {
          module.debug('Changing setting', name, value);
          if( $.isPlainObject(name) ) {
            $.extend(true, settings, name);
          }
          else if(value !== undefined) {
            if($.isPlainObject(settings[name])) {
              $.extend(true, settings[name], value);
            }
            else {
              settings[name] = value;
            }
          }
          else {
            return settings[name];
          }
        },
        internal: function(name, value) {
          if( $.isPlainObject(name) ) {
            $.extend(true, module, name);
          }
          else if(value !== undefined) {
            module[name] = value;
          }
          else {
            return module[name];
          }
        },
        debug: function() {
          if(!settings.silent && settings.debug) {
            if(settings.performance) {
              module.performance.log(arguments);
            }
            else {
              module.debug = Function.prototype.bind.call(console.info, console, settings.name + ':');
              module.debug.apply(console, arguments);
            }
          }
        },
        verbose: function() {
          if(!settings.silent && settings.verbose && settings.debug) {
            if(settings.performance) {
              module.performance.log(arguments);
            }
            else {
              module.verbose = Function.prototype.bind.call(console.info, console, settings.name + ':');
              module.verbose.apply(console, arguments);
            }
          }
        },
        error: function() {
          if(!settings.silent) {
            module.error = Function.prototype.bind.call(console.error, console, settings.name + ':');
            module.error.apply(console, arguments);
          }
        },
        performance: {
          log: function(message) {
            var
              currentTime,
              executionTime,
              previousTime
            ;
            if(settings.performance) {
              currentTime   = new Date().getTime();
              previousTime  = time || currentTime;
              executionTime = currentTime - previousTime;
              time          = currentTime;
              performance.push({
                'Name'           : message[0],
                'Arguments'      : [].slice.call(message, 1) || '',
                'Element'        : element,
                'Execution Time' : executionTime
              });
            }
            clearTimeout(module.performance.timer);
            module.performance.timer = setTimeout(module.performance.display, 500);
          },
          display: function() {
            var
              title = settings.name + ':',
              totalTime = 0
            ;
            time = false;
            clearTimeout(module.performance.timer);
            $.each(performance, function(index, data) {
              totalTime += data['Execution Time'];
            });
            title += ' ' + totalTime + 'ms';
            if(moduleSelector) {
              title += ' \'' + moduleSelector + '\'';
            }
            if( (console.group !== undefined || console.table !== undefined) && performance.length > 0) {
              console.groupCollapsed(title);
              if(console.table) {
                console.table(performance);
              }
              else {
                $.each(performance, function(index, data) {
                  console.log(data['Name'] + ': ' + data['Execution Time']+'ms');
                });
              }
              console.groupEnd();
            }
            performance = [];
          }
        },
        invoke: function(query, passedArguments, context) {
          var
            object = instance,
            maxDepth,
            found,
            response
          ;
          passedArguments = passedArguments || queryArguments;
          context         = element         || context;
          if(typeof query == 'string' && object !== undefined) {
            query    = query.split(/[\. ]/);
            maxDepth = query.length - 1;
            $.each(query, function(depth, value) {
              var camelCaseValue = (depth != maxDepth)
                ? value + query[depth + 1].charAt(0).toUpperCase() + query[depth + 1].slice(1)
                : query
              ;
              if( $.isPlainObject( object[camelCaseValue] ) && (depth != maxDepth) ) {
                object = object[camelCaseValue];
              }
              else if( object[camelCaseValue] !== undefined ) {
                found = object[camelCaseValue];
                return false;
              }
              else if( $.isPlainObject( object[value] ) && (depth != maxDepth) ) {
                object = object[value];
              }
              else if( object[value] !== undefined ) {
                found = object[value];
                return false;
              }
              else {
                module.error(error.method, query);
                return false;
              }
            });
          }
          if ( $.isFunction( found ) ) {
            response = found.apply(context, passedArguments);
          }
          else if(found !== undefined) {
            response = found;
          }
          if($.isArray(returnedValue)) {
            returnedValue.push(response);
          }
          else if(returnedValue !== undefined) {
            returnedValue = [returnedValue, response];
          }
          else if(response !== undefined) {
            returnedValue = response;
          }
          return found;
        }
      };
      if(methodInvoked) {
        if(instance === undefined) {
          module.initialize();
        }
        module.invoke(query);
      }
      else {
        if(instance !== undefined) {
          instance.invoke('destroy');
        }
        module.initialize();
      }
    })
  ;
  return (returnedValue !== undefined)
    ? returnedValue
    : this
  ;

};

// shortcut for tabbed content with no defined navigation
$.tab = function() {
  $(window).tab.apply(this, arguments);
};

$.fn.tab.settings = {

  name            : 'Tab',
  namespace       : 'tab',

  silent          : false,
  debug           : false,
  verbose         : false,
  performance     : true,

  auto            : false,      // uses pjax style endpoints fetching content from same url with remote-content headers
  history         : false,      // use browser history
  historyType     : 'hash',     // #/ or html5 state
  path            : false,      // base path of url

  context         : false,      // specify a context that tabs must appear inside
  childrenOnly    : false,      // use only tabs that are children of context
  maxDepth        : 25,         // max depth a tab can be nested

  deactivate      : 'siblings', // whether tabs should deactivate sibling menu elements or all elements initialized together

  alwaysRefresh   : false,      // load tab content new every tab click
  cache           : true,       // cache the content requests to pull locally
  loadOnce        : false,      // Whether tab data should only be loaded once when using remote content
  cacheType       : 'response', // Whether to cache exact response, or to html cache contents after scripts execute
  ignoreFirstLoad : false,      // don't load remote content on first load

  apiSettings     : false,      // settings for api call
  evaluateScripts : 'once',     // whether inline scripts should be parsed (true/false/once). Once will not re-evaluate on cached content

  onFirstLoad : function(tabPath, parameterArray, historyEvent) {}, // called first time loaded
  onLoad      : function(tabPath, parameterArray, historyEvent) {}, // called on every load
  onVisible   : function(tabPath, parameterArray, historyEvent) {}, // called every time tab visible
  onRequest   : function(tabPath, parameterArray, historyEvent) {}, // called ever time a tab beings loading remote content

  templates : {
    determineTitle: function(tabArray) {} // returns page title for path
  },

  error: {
    api        : 'You attempted to load content without API module',
    method     : 'The method you called is not defined',
    missingTab : 'Activated tab cannot be found. Tabs are case-sensitive.',
    noContent  : 'The tab you specified is missing a content url.',
    path       : 'History enabled, but no path was specified',
    recursion  : 'Max recursive depth reached',
    legacyInit : 'onTabInit has been renamed to onFirstLoad in 2.0, please adjust your code.',
    legacyLoad : 'onTabLoad has been renamed to onLoad in 2.0. Please adjust your code',
    state      : 'History requires Asual\'s Address library <https://github.com/asual/jquery-address>'
  },

  metadata : {
    tab    : 'tab',
    loaded : 'loaded',
    promise: 'promise'
  },

  className   : {
    loading : 'loading',
    active  : 'active'
  },

  selector    : {
    tabs : '.ui.tab',
    ui   : '.ui'
  }

};

})( jQuery, window, document );
