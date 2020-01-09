// --- Config --- //
var purecookieTitle = "Cookies.";
var purecookieDesc = "By continuing on this website, you accept that we use cookies.";
var purecookieLink = '<a href="privacy-policy" target="_blank">Privacy Policy</a>';
var purecookieButton = "Understood";
// ---        --- //


function pureFadeIn(elem2, display) {
  var el2 = document.getElementById(elem2);
  el2.style.opacity = 0;
  el2.style.display = display || "block";

  (function fade2() {
    var val = parseFloat(el2.style.opacity);
    if (!((val += .02) > 1)) {
      el2.style.opacity = val;
      requestAnimationFrame(fade2);
    }
  })();
};

function pureFadeOut(elem2) {
  var el2 = document.getElementById(elem2);
  el2.style.opacity = 1;

  (function fade2() {
    if ((el2.style.opacity -= .02) < 0) {
      el2.style.display = "none";
    } else {
      requestAnimationFrame(fade2);
    }
  })();
};

function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

function eraseCookie(name) {
  document.cookie = name + '=; Max-Age=-99999999;';
}

function cookieConsent() {
  if (!getCookie('purecookieDismiss')) {
      var ck = document.getElementById(cookie);
    cookie.innerHTML += '<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>' + purecookieTitle + '</a></div><div class="cookieDesc"><p>' + purecookieDesc + ' ' + purecookieLink + '</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">' + purecookieButton + '</a><a onclick="gaOptout();checkboxcheck();">Opt-out of analytics cookies<input id="checkboxcheck" type="checkbox"></a></div></div>';
    pureFadeIn("cookieConsentContainer");
  }
}

function purecookieDismiss() {
  setCookie('purecookieDismiss', '1', 7);
  pureFadeOut("cookieConsentContainer");
}

function checkboxcheck() {
    document.getElementById("checkboxcheck").checked = true;
}

window.onload = function() {
  cookieConsent();
};
