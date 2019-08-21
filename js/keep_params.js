// all <a> tags containing a certain rel=""
/* $("a[rel~='keep-params']").click(function(e) {
    e.preventDefault();

    var params = window.location.search;
    params = params.replace("?", "&");
    var dest = $(this).attr('href') + params;

    //a short timeout has helped overcome browser bugs
    window.setTimeout(function() {
        window.location.href = dest;
    }, 100);
}); */