// Misc helper scripts for the SIGCOMM web

/* Weverton (04/04/2016) -- Definitive fix to the newslibtn button issue,
 *     which did not behave adequately when coming from another page. Fix
 *     tested on Mozilla Firefox, Google Chrome, and Android's native web
 *     browser and Chrome.
 */

/* Hide news list items on page show. */

$(document).on("pageshow", function() {
    var newslibtn = $.mobile.activePage.find(".newslibtn");
   
    $(newslibtn).siblings().slice(6).hide(); 
    $(newslibtn).find("a").text("Older News");
    $(newslibtn).find("span").toggleClass("ui-icon-plus", true);
    $(newslibtn).find("span").toggleClass("ui-icon-minus", false);
});

/* Show/hide list items on newslibtn click. */

function showall(divname) {
    var newslibtn = $.mobile.activePage.find(".newslibtn");
    
    $(newslibtn).find("span").toggleClass("ui-icon-plus ui-icon-minus");
 
    if ($(newslibtn).find("span").hasClass('ui-icon-minus')) {
      $(newslibtn).siblings().show();
      $(newslibtn).find("a").text("Hide Older News");
    } else {
      $(newslibtn).siblings().slice(6).hide();
      $(newslibtn).find("a").text("Older News");
    }
}
