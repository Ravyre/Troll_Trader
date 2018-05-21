/*--------------------------------------------------------------
  Vanilla
--------------------------------------------------------------*/
document.addEventListener("DOMContentLoaded", function() {

  var TROLL = window.TROLL || {};

  /*--------------------------------------------------------------
    Cookie Consent
  --------------------------------------------------------------*/
  TROLL.consent = function() {
    // https://github.com/insites/cookieconsent
    // https://stackoverflow.com/questions/10668292/
    // https://developers.google.com/analytics/devguides/collection/gajs/#disable
    // https://www.sitepoint.com/how-to-deal-with-cookies-in-javascript/

    // https://www.quirksmode.org/js/cookies.html
    // https://stackoverflow.com/questions/8464502/
    // http://www.rawsoft.com/blog/a-complete-guide-to-google-universal-analytics-cookies/

    /* Variables
    ================================================== */
    var gaID = 'UA-70459575-1',
        gaDisable = 'ga-disable-' + gaID,
        consent = document.getElementById('consent'),
        consentHeight = consent.scrollHeight,
        options = document.getElementById('options'),
        optionsHeight = options.offsetHeight,
        accept = document.getElementById('accept'),
        decline = document.getElementById('decline'),
        content = document.getElementById('content');

    function consentToggle() {
      consent.classList.toggle('active');
    }
    function optionsToggle() {
      options.classList.toggle('active');
    }
    function contentToggle() {
      content.classList.toggle('active');
      console.log("content working");
    }

    function createCookie(name, value, days) {
      if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
      }
      else var expires = "";
      document.cookie = name + "=" + value + expires + "; path=/";
    }
    // function readCookie(name) {
    //   var nameEQ = name + "=";
    //   var ca = document.cookie.split(';');
    //   for (var i = 0; i < ca.length; i++) {
    //     var c = ca[i];
    //     while (c.charAt(0) == ' ') c = c.substring(1, c.length);
    //     if (c.indexOf(nameEQ) == 0)
    //     return c.substring(nameEQ.length, c.length);
    //   }
    //   return null;
    // }
    function deleteCookie(name) {
      createCookie(name, "", -1);
      console.log("Cookie will be deleted on refresh.");
    }


    /* Let's a go, Mario!
    ================================================== */
    window.addEventListener('load', function() {

      /* ---------- Are there any cookies? ---------- */
      if (document.cookie.indexOf('consentAccept') >= 0 || document.cookie.indexOf('consentDecline') >= 0) {
        if (!options.classList.contains('active')) {
          options.classList.add('active');
        }
      } else {
        if (!consent.classList.contains('active')) {
          // consent.classList.add('active');
          consent.style.maxHeight = consentHeight + "px";
          content.style.top = consentHeight + "px";
        }
      }

    }); // load


    /* Accepted Consent
    ================================================== */
    accept.addEventListener('click', yesToConsent);

    function yesToConsent() {

      /* ---------- Create Cookies ---------- */
      if (document.cookie.indexOf('consentDecline') >= 0) {
        deleteCookie("consentDecline");
        createCookie("consentAccept", "accept", 365);
      } else {
        createCookie("consentAccept", "accept", 365);
      }

      /* ---------- Google Cookies ---------- */
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-70459575-1');
      // Let's test your nonsense
      console.log("cookies accepted");

      /* ---------- Banner, please leave ---------- */
      // consentToggle();
      // contentToggle();
      consent.style.maxHeight = "0";
      content.style.top = "35px";
      console.log("banner: hiding");

      /* ---------- Tab, do your thing ---------- */
      optionsToggle();
      console.log("tab: showing");
    } // yesToConsent


    /* Declined Consent
    ================================================== */
    decline.addEventListener('click', noToConsent);

    function noToConsent() {

      if (document.cookie.indexOf('consentAccept') >= 0) {
        deleteCookie("consentAccept");
      }

      /* ---------- Delete Cookies ---------- */
      deleteCookie("_ga");
      deleteCookie("_gid");
      deleteCookie("_gat_gtag_UA_70459575_1");

      /* ---------- Google Cookies ---------- */
      // document.cookie = gaDisable + '=true; expires=Thu, 31 Dec 2099 23:59:59 GMT; path=/';
      // window[gaDisable] = true;
      // // Let's test your nonsense
      // console.log("cookies declined");

      /* ---------- Banner, please leave ---------- */
      // consentToggle();
      // contentToggle();
      consent.style.maxHeight = "0";
      content.style.top = "35px";
      console.log("banner: hiding");

      /* ---------- Tab, do your thing ---------- */
      optionsToggle();
      console.log("tab: showing");
    } // noToConsent

    /* Options Tab
    ================================================== */
    options.addEventListener('click', openOptions);

    function openOptions() {
      // consentToggle();
      // contentToggle();
      consent.style.maxHeight = consentHeight + "px";
      content.style.top = consentHeight + "px";
      console.log("banner: showing");
      optionsToggle();
      console.log("tab: hiding");
    } // openOptions

  };
  TROLL.consent();

}); // end
