/**
 * Custom plugins created for the brickson website.
 */

;(function(window, $) {
    /**
     * Menu toggeler.
     */
    $.fn.navigation = function() {
        $(this).on('click', function(event) {
            var navbar = $(this).closest('ol#menu');

            if($(this).parent().get(0).tagName.toLowerCase() == 'h1') {
                event.preventDefault();

                $(navbar).toggleClass('is-active');
            }
        });
    };

    /**
     * Sourceset plugin.
     */
    $.fn.srcset = function() {
        $(this).each(function(key, element) {
            var img = $(element).find('> .cover__image'),
                source = (img.get(0).currentSrc || img.get(0).src);

            if(img.length && source) {
                img.css('display', 'none');
                $(element).css('background-image', 'url(' + source + ')');
            }
        });
    };

    /**
     * Scroll plugin
     */
    function Scroller(element, config) {
        this.element = element;
        this.currentChild = 0;
        this.scrolling = false;
        this.top = $(window).scrollTop();

        this.config = $.extend({
            sizes: {
                320: 'default',
                768: 'gt-large-handheld',
                1440: 'gt-medium-desktop'
            },
            selector: 'data-collection'
        }, config);

        this.bindEvents();
    }

    Scroller.prototype.bindEvents = function() {
        $(window).on('scroll', function(event) {
            var direction = ($(window).scrollTop() > this.top) ? 'down' : 'up';

            if(this.canScroll(direction)) {
                if(direction == 'down') {
                    this.currentChild++;
                } else if(direction == 'up') {
                    this.currentChild--;
                }

                $(window).off('scroll');
                $('body').stop().animate({
                    scrollTop: this.getChildByIndex(this.currentChild).offset().top
                }, 1500, function () {
                    setTimeout(function() {
                        this.top = $(window).scrollTop();
                        this.bindEvents();
                    }.bind(this), 100);
                }.bind(this));
            }
        }.bind(this));
    };

    Scroller.prototype.canScroll = function(direction) {
        if(direction == 'down' && $(window).scrollTop() + $(window).height() == $(document).height()) {
            return false;
        }

        if(direction == 'up' && $(window).scrollTop() == 0) {
            return false
        }

        return true;
    };

    Scroller.prototype.getChildByIndex = function(index) {
        var $children = $(this.getChildren(this.getSize()));
        return $($children.get(index));
    };

    Scroller.prototype.getSize = function() {
        var width = $(window).width(),
            sizes = this.config.sizes,
            size = null;

        for(var index in sizes) {
            if(sizes.hasOwnProperty(index)) {
                if(width >= index) {
                    size = sizes[index];
                }
            }
        }

        return size;
    };

    Scroller.prototype.getChildren = function(size) {
        return $(this.element).find('[' + this.config.selector + (size ? '=' + size : '') + ']');
    };

    $.fn.scroller = function(config) {
        $(this).each(function(key, element) {
            if(!$(element).data('scroller')) {
                $(element).data('scroller', 'set');

                new Scroller(element, config);
            }
        });
    };

})(window, window.jQuery);