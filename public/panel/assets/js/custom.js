let host = $('meta[name="host_url"]').attr("content");
overlayForm = (url, title) => {
    $.ajax({
        url: host + "/" + url,
        dataType: "html",
        success: function(response) {
           
                $("#modal-title").html(title);
                $("#modal-body").html(response);
                $("#modal-sm").modal('show');
                
        },
        error: function() {
            notif("warning", 'Gagal');
        }
    });

};