/**
 * The following classes are in effect:
 * - is-prioritised (Is added when there are items hidden)
 * - is-demoted (Is for the items that are hidden)
 * - data-priority="n"
 *      - Highest Priority 1
 *      - When no priority is given priority is based on DOM
 *      - If there is a mix, the items with "data-priority" have more priority
 *      - data-priority="0" are always hidden when data is prioritised!
 */

;(function(window, $) {
    function Navigation(element, config) {
        this.element = element;
        this.cache = {};
        this.width = $(window).width();
        this.config = {
            calculate: false
        };

        $.extend(this.config, config);

        this.orderItems();

        $(this.element).addClass('is-prioritised');

        // $(window).on('resize', this.hideElements.bind(this));
        // $(window).trigger('resize');
    }

    Navigation.prototype.orderItems = function() {
        var items = $(this.element).children();

        items = items.sort(function(a, b) {
            var $a = $(a),
                $b = $(b);

            if($a.data('priority') > 0 && $b.data('priority') > 0) {
                return ($a.data('priority') > $b.data('priority') ? 1 : -1);
            }

            return 1;
        });

        $(this.element).html(items);
    };

    Navigation.prototype.getContentWidth = function() {
        var total = 0;

        $(this.element).children().each(function(key, element) {
            if(!$(element).hasClass('is-demoted')) {
                total += parseInt($(element).width());
            }
        });

        return total;
    };

    Navigation.prototype.hideElements = function(event) {
        var contentWidth = this.getContentWidth(),
            elementWidth = $(this.element).width();

        if(contentWidth > elementWidth) {
            $(this.element).find('[data-priority=0]').addClass('is-demoted');

            while (this.getContentWidth() > elementWidth) {
                $(this.element).find('li:not(is-demoted):last').addClass('is-demoted');
            }
        } else {
            if(this.width < $(window).width()) {
                this.width = $(window).width();

                while ((parseInt($(this.element).find('li.is-demoted:first').width()) + contentWidth) < elementWidth && $(this.element).find('li.is-demoted').length > 0) {
                    $(this.element).find('li.is-demoted:last').removeClass('is-demoted');
                }
            }
        }

    };

    $.fn.PriorityNavigation = function(config) {
        $(this).each(function(key, element) {
            var $element = $(element);

            if(!$element.data('prioritised')) {
                $element.data('prioritised', 'set');

                new Navigation(element, config);
            }
        });
    }

})(window, window.jQuery);
