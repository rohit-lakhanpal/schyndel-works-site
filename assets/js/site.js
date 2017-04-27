$(function() {
    // For SSI
    $(".ssi-result").each(function(idx, ele) {
        var sib = $(ele).parent().siblings();
        if ($(ele).text().trim() == "") {
            // Show warning
            $(sib[2]).removeClass("hide");
        } else {
            // Show success
            $(sib[1]).removeClass("hide");
        }
    });
});