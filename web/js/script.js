// Misc helper scripts for the SIGCOMM web

/* Collapse/hide list items. */
function showall(divname) {
    $.mobile.activePage.find(".newslibtn").find("span").toggleClass("ui-icon-plus");
    $.mobile.activePage.find(".newslibtn").find("span").toggleClass("ui-icon-minus");

    if ($.mobile.activePage.find(".newslibtn").siblings().slice(-1).css("display") == "none") {
        $.mobile.activePage.find(".newslibtn").siblings().show();
        $.mobile.activePage.find(".newslibtn").find("a").text("Hide Older News");
    } else {
        $.mobile.activePage.find(".newslibtn").siblings().slice(5).hide();
        $.mobile.activePage.find(".newslibtn").find("a").text("Older News");
    }
}
