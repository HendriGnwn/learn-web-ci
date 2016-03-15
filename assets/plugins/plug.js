$(function(){
    if($('.datepicker').length!=0)
    {
        $(".datepicker").datepicker({
            format:'dd/mm/yyyy'
        });
    }
});

$(".maskdate").livequery(function(){
  $(this).inputmask('d/m/y');
});

$(document).ajaxStart(function(){
    $.blockUI({ message: '<div style="padding:5px 0;">Please wait...</div>' ,css: { backgroundColor: '#fff', color: '#000', fontSize: '12px'} })
}).ajaxStop($.unblockUI);

// $(document).ready(function()
// {
//     $('a').each(function() {
//         var href= $(this).attr('href');
//         $(this).attr('href','javascript:void(0);');
//         $(this).attr('jshref',href);
//     });
//     $('a').bind('click', function(e) 
//     {
//         e.stopImmediatePropagation();           
//         e.preventDefault();
//         e.stopPropagation();
//         var href= $(this).attr('jshref');
//         if ( !e.metaKey && e.ctrlKey )
//             e.metaKey = e.ctrlKey;
//         if(!e.metaKey)
//         {
//             location.href= href;
//         }
//         return false;
//     })
// });
