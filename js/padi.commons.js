$.fn.stairUp = function(options){
    var settings = $.extend({
        level:1,
    },options);
    that = $(this);
    for(c=0;c<settings.level;c++){
        that = that.parent();
    }
    return that;
}
