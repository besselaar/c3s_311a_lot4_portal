(function($) {

/**
 * jQuery debugging helper.
 *
 * Invented for Dreditor.
 *
 * @usage
 *   $.debug(var [, name]);
 *   $variable.debug( [name] );
 */
jQuery.extend({
  debug: function () {
    // Setup debug storage in global window. We want to look into it.
    window.debug = window.debug || [];

    args = jQuery.makeArray(arguments);
    // Determine data source; this is an object for $variable.debug().
    // Also determine the identifier to store data with.
    if (typeof this == 'object') {
      var name = (args.length ? args[0] : window.debug.length);
      var data = this;
    }
    else {
      var name = (args.length > 1 ? args.pop() : window.debug.length);
      var data = args[0];
    }
    // Store data.
    window.debug[name] = data;
    // Dump data into Firebug console.
    if (typeof console != 'undefined') {
      console.log(name, data);
    }
    return this;
  }
});
// @todo Is this the right way?
jQuery.fn.debug = jQuery.debug;

})(jQuery);
;
(function ($) {
  Drupal.behaviors.BioticMenu = {
    attach: function(context, settings) {

    $("nav ul.tb-menu li").each(function() {
        var $this = jQuery(this),
            $win = jQuery(window);

        if ($this.offset().left + 250 > $win.width() + $win.scrollLeft() - $this.width()) {
            $this.addClass("nav-shift");
        }

    });


    // by luca - if ($.browser.msie && $.browser.version.substr(0,1)<7)
    if (navigator.appName == 'Microsoft Internet Explorer' && navigator.userAgent.match(/msie 6/i)) 
    {
      $('li').has('ul').mouseover(function(){
          $(this).children('ul').css('visibility','visible');
          }).mouseout(function(){
          $(this).children('ul').css('visibility','hidden');
          })
    }


    }
  };

})(jQuery);;
