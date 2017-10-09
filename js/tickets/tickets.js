(function($){
    jsDate = function(options){
        var settings = $.fn.extend({
            sqlDate:'',
        },options);
        obj = sqlDate.split(' ');
        dtstr = obj[0].split('-');
        year = dtstr[0];
        month = dtstr[1] - 1;
        day = dtstr[2];
        tmstr = obj[1].split(':');
        hour = tmstr[0];
        minute = tmstr[1];
        second = tmstr[2];
        return new Date(year,month,day,hour,minute,second);
    }    
    $("#tickets").dataTable({
        "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
        "sPaginationType": "bootstrap",
        "oLanguage": {
        "sLengthMenu": "_MENU_ records per page"
        }
    });
    $('#tickets .duration').html('test');
    var x = 0;
    setInterval(function(){
        curDate = new Date();
        x += 1;
        $('#tickets tr').each(function(){
            that = $(this);
            start = that.find('.start').html();
            start_ = jsDate(that.find('.start').html());
            that.find('.duration').html(start+' '+start+' '+curDate);
            });
    },1000);
}(jQuery))
