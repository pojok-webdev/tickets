(function($){
    $.fn.showDuration = function(options){
        var settings = $.extend({
            startDate:'',
        },options);
        that = $(this);
        arr = settings.startDate.split(' ');
        dtarr = arr[0].split('-');
        tmarr = arr[1].split(':');
        start = new Date(dtarr[0],dtarr[1],dtarr[2],tmarr[0],tmarr[1],tmarr[2]);
        current = new Date();
        timediff = current - start;
        hari = Math.ceil(timediff/(1000*60*60*24));
        shari = Math.ceil(timediff%(1000*60*60*24));
        jam = Math.ceil(shari/(1000*60*60));
        sjam = Math.ceil(shari%(1000*60*60));
        menit = Math.ceil(sjam/(1000*60));
        smenit = Math.ceil(sjam%(1000*60));
        detik = Math.ceil(smenit/1000);
        tahun = Math.ceil(timediff/(1000*60*60*24*365));
        that.html(hari+' hari '+jam+' jam '+menit+' menit '+detik+' detik');
    }
    $("#tickets").dataTable({
        "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
        "sPaginationType": "bootstrap",
        "oLanguage": {
        "sLengthMenu": "_MENU_ records per page",
        },
        "aoColumns":
        [
            {"bVisible":true},
            {"bVisible":true},
            {"bVisible":true},
            {"bVisible":true},
            {"bVisible":false},
            {"bVisible":true},
            {"bVisible":true},
            {"bVisible":true},
            {"bVisible":true},
            {"bVisible":true}
        ]
    });
    var x = 0;
    setInterval(function(){
        $('#tickets .duration').each(function(){
            $(this).showDuration({
                startDate:$(this).attr('start')
            });
        });
    },3000);
}(jQuery))
