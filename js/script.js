      /*<![CDATA[*/
function darkMode() {
  var mainCont = document.querySelector("#mainCont");
  var webMode = localStorage.getItem("webMode");
  
  if (webMode === "drK") {
    mainCont.classList.remove("syD", "lgT");
    mainCont.classList.add("drK");
    localStorage.setItem("webMode", "lgT");
  } else {
    mainCont.classList.remove("drK", "syD");
    mainCont.classList.add("lgT");
    localStorage.setItem("webMode", "drK");
  }
  
  themeColor("themeC");
}

function headScroll() {
  var e = window.pageYOffset || document.documentElement.scrollTop;
  var header = document.querySelector("#header");
  var mobileMenu = document.querySelector("#mobile-menu");
  
  if (e > 20) {
    header.classList.add("stick");
    mobileMenu.classList.add("slide");
  } else {
    header.classList.remove("stick");
    mobileMenu.classList.remove("slide");
  }
}

window.addEventListener("scroll", headScroll);

if (isPrivateBlog === "true") {
  toastNotif('<i class="check"></i>' + blogTitle + " Blog is Private.");
}

(function() {
  var imgElements = document.querySelectorAll('img.imgThm, .sImg .im, .cmAv .im, .pIm .im, .admIm .im, .sldC .sldIm');
  
  for (var i = 0; i < imgElements.length; i++) {
    var img = imgElements[i];
    var dataSrc = img.getAttribute('data-src');
    var src = img.getAttribute('src');
    var dataStyle = img.getAttribute('data-style');
    
    if (dataSrc) {
      var updatedDataSrc = dataSrc.replace('-nu', '-nu-rw-e30').replace('-pd', '-pd-rw-e30');
      img.setAttribute('data-src', updatedDataSrc);
    } else if (src) {
      var updatedSrc = src.replace('-nu', '-nu-rw-e30');
      img.setAttribute('data-src', updatedSrc);
      img.setAttribute('src', 'data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=');
      img.classList.add('lazy');
    } else if (dataStyle) {
      var updatedDataStyle = dataStyle.replace('w60', 'w60-rw-e30').replace('-nu', '-nu-rw-e30').replace(/\/s[0-9]+(\-c)?/, '/s1280-rw-e30').replace(/\=s[0-9]+(\-c)?/, '=s1280-rw-e30');
      img.setAttribute('data-style', updatedDataStyle);
    }
  }
})();

Defer.dom('.lazy', 100, 'loaded', null, { rootMargin: '1px' });

if (typeof infinite_scroll !== 'undefined') {
  infinite_scroll.on('load', function() {
    Defer.dom('.lazy', 100, 'loaded', null, { rootMargin: '1px' });
  });
}

pushAds();

function lazyCustomJs() {
  if (document.getElementById('HTML2') !== null) {
    ctgryPst(ctgryLb1, '#HTML2 .ctgry', 6, 600, 200, true);

    if (document.getElementById('HTML3') !== null) {
      ctgryPst(ctgryLb2, '#HTML3 .ctgry', 6, 600, 200, true);
    }
  }
}

function scrollCustomJs() {
  // YOUR CUSTOM JS
}

      /*]]>*/