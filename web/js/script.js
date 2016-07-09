// Misc helper scripts for the SIGCOMM web

$(document).on("pagebeforeshow", function() {

  try { 
    /* Hide news list items on page show. */
    var newslibtn = $.mobile.activePage.find(".newslibtn");

    if (newslibtn != null) {
      $(newslibtn).siblings().slice(6).hide(); 
      $(newslibtn).find("a").text("Older News");
      $(newslibtn).find("span").toggleClass("ui-icon-plus", true);
      $(newslibtn).find("span").toggleClass("ui-icon-minus", false);
    }

    /* Hack to prevent data-filter from reducing page size and making scrolling buggy. */
    var uicontainer = $.mobile.activePage.find(".ui-content");

    if (uicontainer != null) {
      $(uicontainer).css('min-height', $(uicontainer).height());
    }

    /* Configure sponsor ticker tape */
    var logobar = $.mobile.activePage.find(".logobar");

    if (logobar != null) {
      init_sps();
      resize();
    }
    
  } catch (err) {
    // alert (err);
  }
  
});

$(document).on("pageshow", function() {

  try { 
    /* Hack to prevent data-filter from reducing page size and making scrolling buggy. */
    var uicontainer = $.mobile.activePage.find(".ui-content");
  
    if (uicontainer != null) {
      $(uicontainer).css('min-height', $(uicontainer).height());
    }

    /* Reinitialize program on return */
    var program = $.mobile.activePage.find(".sigcomm-program");
  
    if (program != null) {
      filterProgram(".prog-all");
    }
    
  } catch (err) {
    // alert (err);
  }
  
});

/* Show/hide list items on newslibtn click. */

function showall(divname) {
    var newslibtn = $.mobile.activePage.find(".newslibtn");
    
    if (newslibtn != null) {
      $(newslibtn).find("span").toggleClass("ui-icon-plus ui-icon-minus");
 
      if ($(newslibtn).find("span").hasClass('ui-icon-minus')) {
        $(newslibtn).siblings().show();
        $(newslibtn).find("a").text("Hide Older News");
      } else {
        $(newslibtn).siblings().slice(6).hide();
        $(newslibtn).find("a").text("Older News");
      }
    }
}

/* sponsors ticker tape, adapted from sigcomm 2012 code */

(function(a, b) {
    var c = function(a, c, b) {
        var f;
        return function() {
            var g = this,
                h = arguments;
            f ? clearTimeout(f) : b && a.apply(g, h);
            f = setTimeout(function() {
                b || a.apply(g, h);
                f = null
            }, c || 100)
        }
    };
    jQuery.fn[b] = function(a) {
        return a ? this.bind("resize", c(a)) : this.trigger(b)
    }
})(jQuery, "smartresize");

function resize() {
  try {
    var logobar = $.mobile.activePage.find(".logobar");
    
    scrh = $(window).height();
    scrw = $(window).width();
    logoh = scrh / 12 + 30;
    logow = Math.max(200, scrw / 6);
    lidx = gidx = 0;
    logos = 0.8;
    lcnt = parseInt(scrw / logow, 10);
    $(logobar).html("");
    ticker_tape();
  }
  catch (err) {
    // alert (err);
  }
}

$(window).smartresize(resize);

function shuffle(a) {
    for (var b, c, d = a.length; d; b = parseInt(Math.random() * d, 10), c = a[--d], a[d] = a[b], a[b] = c);
    return a;
}

function init_sps() {
    shuffle(sps);
    for (var a = 1; a < sps.length; a++)
      sps[a][0] = sps[a - 1][0] + sps[a][0];
}

function choose_logo_idx() {
    var a = -1;
    if (gidx < sps.length) a = gidx;
    else {
        for (var b = sps[sps.length - 1][0] + 1, b = parseInt(Math.random() * b, 10), c = 0; c < sps.length; c++)
            if (b <= sps[c][0] && 0 === sps[c][4]) {
                a = c;
                break;
            }
        if (0 > a)
            for (b = 0; b < sps.length; b++)
                if (0 === sps[b][4]) {
                    a = b;
                    break;
                }
    }
    sps[a][4] = 1;
    gidx += 1;
    return a;
}

function onfinish() {
    if (!(lcnt >= sps.length)) {
        var a = lidx % lcnt;
        var mylogo_a = $.mobile.activePage.find("#mylogo" + a);
        var mylink_a = $.mobile.activePage.find("#mylink" + a);
        
        lidx += 1;
        var b = choose_logo_idx(),
            c = parseInt($(mylogo_a).attr("alt"), 10);
        
        $(mylogo_a).fadeOut(500, function() {
            sps[c][4] = 0;
            $(mylogo_a).attr("src", "images/sponsors/" + sps[b][1]);
            $(mylogo_a).attr("alt", b);
            $(mylink_a).attr("href", sps[b][2]);
            var d = logos * logoh,
                e = logos * logow;
            d / e < sps[b][5] / sps[b][6] ? ($(mylogo_a).attr("height", d + "px"), $(mylogo_a).removeAttr("width")) : ($(mylogo_a).removeAttr("height"), $(mylogo_a).attr("width", e + "px"));
            $(mylogo_a).fadeIn(500);
        })
    }
}

function get_logo(a) {
    var b = choose_logo_idx(),
        c = "images/sponsors/" + sps[b][1],
        d = logos * logoh,
        e = logos * logow,
        i = sps[b][5],
        f = sps[b][6],
        a = "<td width='" + parseInt(100 / lcnt, 10) + "%'><a id='mylink" + a + "' href='" + sps[b][2] + "'><img id='mylogo" + a + "' src='" + c + "' alt='" + b + "' style='display:block; margin:auto;' ";
    return a = (d / e < i / f ? a + " height='" + d + "px'>" : a + " width='" + (e - 10) + "px'>") + "</a></td>";
}

function ticker_tape() {
  try {
    var logobar = $.mobile.activePage.find(".logobar");
    var content = $.mobile.activePage.find(".leftnav");
    
    $(logobar).css("height", logoh + "px");
    $(content).css("padding-bottom", 1.25 * logoh + "px");
    $(logobar).append("<table width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' valign='middle'><tr class='logobarrow'></tr></table>");

    var logobarrow = $.mobile.activePage.find(".logobarrow");
    for (var a = 0; a < lcnt; a++)
      nlogo = get_logo(a), $(logobarrow).append(nlogo);
  }
  catch (err) {
    // alert(err);
  }
}

setInterval(function() {
    onfinish()
}, 3E3);

/* conference program filtering */

function filterProgram(progitem) {
  try {
    $(".prog-item").toggleClass('listfirst', false);
    $(".prog-item").toggleClass('listlast', false);
    
    if (progitem == ".prog-all") {
      $('.prog-item').show();
    } else {
      $('.prog-item').hide();
      $(progitem).show();
    }
     $(".prog-item").filter(":visible").first().toggleClass('listfirst', true);
     $(".prog-item").filter(":visible").last().toggleClass('listlast', true);
    
  } catch (err) {
    // alert( err);
  }
}
