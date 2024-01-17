<?php
session_start();
// Set the default language
$defaultLanguage = 'en';
// Check if the language is set in the session, otherwise use the default language
$language = isset($_SESSION['language']) ? $_SESSION['language'] : $defaultLanguage;
// Include language file based on the selected language
include_once('lang/' . $language . '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="wp-content/themes/drake/assets/images/favicon.png">
    <title>Seng &#8211; CV</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://maxst.icons8.com/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel="alternate" type="application/rss+xml" title="Drake &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Drake &raquo; Comments Feed"
        href="comments/feed/index.html" />
    <script>
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/wpriverthemes.com\/drake\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.2" } };
        /*! This file is auto-generated */
        !function (i, n) { var o, s, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === r[t] }) } function u(e, t, n) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff") }return !1 } function f(e, t, n) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"), a = r.getContext("2d", { willReadFrequently: !0 }), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function (e) { o[e] = t(a, e, n) }), o } function t(e) { var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));", r = new Blob([e], { type: "text/javascript" }), a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" }); return void (a.onmessage = function (e) { c(n = e.data), a.terminate(), t(n) }) } catch (e) { } c(n = f(s, u, p)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
    </script>
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='wp-includes/css/dist/block-library/style.mine35d.css?ver=6.3.2' media='all' />
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='redux-extendify-styles-css'
        href='wp-content/plugins/redux-framework/redux-core/assets/css/extendify-utilities4235.css?ver=4.4.5'
        media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='wp-content/plugins/contact-form-7/includes/css/styles41a3.css?ver=5.8' media='all' />
    <link rel='stylesheet' id='line-awesome-css'
        href='wp-content/themes/drake/assets/css/line-awesome.mine35d.css?ver=6.3.2' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='wp-content/themes/drake/assets/css/bootstrap.mine35d.css?ver=6.3.2'
        media='all' />
    <link rel='stylesheet' id='owl-carousel-css'
        href='wp-content/themes/drake/assets/css/owl.carousel.mine35d.css?ver=6.3.2' media='all' />
    <link rel='stylesheet' id='owl-theme-css'
        href='wp-content/themes/drake/assets/css/owl.theme.default.mine35d.css?ver=6.3.2' media='all' />
    <link rel='stylesheet' id='animate-css' href='wp-content/themes/drake/assets/css/animate.mine35d.css?ver=6.3.2'
        media='all' />
    <link rel='stylesheet' id='smooth-scrollbar-css'
        href='wp-content/themes/drake/assets/css/smooth-scrollbare35d.css?ver=6.3.2' media='all' />
    <link rel='stylesheet' id='lightbox-css' href='wp-content/themes/drake/assets/css/lightbox.mine35d.css?ver=6.3.2'
        media='all' />
    <link rel='stylesheet' id='drake-style-css' href='wp-content/themes/drake/assets/css/stylee35d.css?ver=6.3.2'
        media='all' />
    <link rel='stylesheet' id='unit-test-css' href='wp-content/themes/drake/assets/css/unit-teste35d.css?ver=6.3.2'
        media='all' />
    <link rel='stylesheet' id='drake-responsive-css'
        href='wp-content/themes/drake/assets/css/responsivee35d.css?ver=6.3.2' media='all' />
    <link rel='stylesheet' id='drake-fonts-css'
        href='http://fonts.googleapis.com/css?family=Inter%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%26subset%3Dlatin%2Clatin-ext&amp;ver=1.0.0'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.mind618.css?ver=5.21.0' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='wp-content/plugins/elementor/assets/css/frontend-lite.minb73d.css?ver=3.15.3' media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' media='all' />
    <link rel='stylesheet' id='elementor-post-10-css'
        href='wp-content/uploads/elementor/css/post-109e42.css?ver=1693546104' media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='wp-content/uploads/elementor/css/global9e42.css?ver=1693546104' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.3.2'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src='wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0' id='jquery-core-js'></script>
    <script src='wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1' id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/199.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <meta name="generator" content="WordPress 6.3.2" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index5051.html?p=199' />
    <link rel="alternate" type="application/json+oembed"
        href="wp-json/oembed/1.0/embed3876.json?url=https%3A%2F%2Fwpriverthemes.com%2Fdrake%2Fearth-lines-sphere%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed6f6a?url=https%3A%2F%2Fwpriverthemes.com%2Fdrake%2Fearth-lines-sphere%2F&amp;format=xml" />
    <meta name="generator" content="Redux 4.4.5" />
    <meta name="generator"
        content="Elementor 3.15.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style id="wp-custom-css">
        .global-color .setting-toggle {
            border-radius: 5px;
        }

        .global-color .setting-toggle i {
            animation: rotating 3s infinite linear;
        }
    </style>

</head>

<body class="home1-page">
    <video class="body-overlay" muted autoplay loop>
        <source src="wp-content/themes/drake/assets/images/video1.mp4" type="video/mp4">
    </video>
    <div class="page-loader">
        <div class="bounceball"></div>
    </div>

    <span class="icon-menu">
        <span class="bar"></span>
        <span class="bar"></span>
    </span>

    <!-- <div class="global-color">
        <span class="setting-toggle">
            <i class="las la-cog"></i>
        </span>
        <div class="inner">
            <div class="overlay"></div>
            <div class="global-color-option">
                <span class="close-settings">
                    <i class="las la-times"></i>
                </span>
                <h2>Configuration</h2>
                <div class="global-color-option-inner">
                    <p>Colors</p>
                    <div class="color-boxed">
                        <a href="#" onclick="color1();"></a>
                        <a href="#" onclick="color2();"></a>
                        <a href="#" onclick="color3();"></a>
                        <a href="#" class="clr-active"  onclick="color4();"></a>
                        <a href="#" onclick="color5();"></a>
                        <a href="#" onclick="color6();"></a>
                        <a href="#" onclick="color7();"></a>
                        <a href="#" onclick="color8();"></a>
                    </div>

                    <p>THREE DIMENSIONAL SHAPES</p>
                    <ul class="themes">
                        <li><a href="index.html">Earth Lines Sphere</a></li>
                        <li><a href="3d-abstract-ball/index.html">3D Abstract Ball</a></li>
                        <li><a href="water-waves/index.html">Water Waves</a></li>
                        <li><a href="liquids-wavy/index.html">Liquids Wavy</a></li>
                        <li><a href="index.html">Solid Color</a></li>
                        <li><a href="simple-strings/index.html">Simple Strings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>-->

    <div class="responsive-sidebar-menu">
        <div class="overlay"></div>
        <div class="sidebar-menu-inner">
            <div class="menu-wrap">
                <p>Menu</p>
                <ul class="dmenu scroll-nav-responsive d-flex">
                    <li>
                        <a class="scroll-to" href="#home">
                            <i class="las la-home"></i> <span><?php echo $lang["Home"] ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#about">
                            <i class="lar la-user"></i> <span><?php echo $lang["About"] ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#resume">
                            <i class="las la-briefcase"></i> <span><?php echo $lang["Resume"] ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#services">
                            <i class="las la-stream"></i> <span><?php echo $lang["Services"] ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#skills">
                            <i class="las la-shapes"></i> <span><?php echo $lang["Skills"] ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#portfolio">
                            <i class="las la-grip-vertical"></i> <span><?php echo $lang["Portfolio"] ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#testimonial">
                            <i class="lar la-comment"></i> <span><?php echo $lang["Workflow"] ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#contact">
                            <i class="las la-envelope"></i> <span><?php echo $lang["Contact"] ?></span>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="sidebar-social">
                <p>Social</p>
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href="https://web.facebook.com/LFXtrader/" target="_blank"><i class="lab la-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://github.com/Seng555" target="_blank"><i class="lab la-github"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <ul class="dmenu scroll-nav d-flex">
        <li>
            <a class="scroll-to" href="#home">
                <span></span> <i class="las la-home"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#about">
                <span><?php echo $lang["About"] ?></span> <i class="lar la-user"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#resume">
                <span><?php echo $lang["Resume"] ?></span> <i class="las la-briefcase"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#services">
                <span><?php echo $lang["Services"] ?></span> <i class="las la-stream"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#skills">
                <span><?php echo $lang["Skills"] ?></span> <i class="las la-shapes"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#portfolio">
                <span><?php echo $lang["Portfolio"] ?></span> <i class="las la-grip-vertical"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#testimonial">
                <span><?php echo $lang["Workflow"] ?></span> <i class="lar la-comment"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#contact">
                <span><?php echo $lang["Contact"] ?></span> <i class="las la-envelope"></i>
            </a>
        </li>
    </ul>

    <div class="left-sidebar">
        <div class="sidebar-header d-flex align-items-center justify-content-between">
            <img src="wp-content/themes/drake/assets/images/logo.png" alt="Logo">
            <span class="designation">
            <?php if($language == "la"){  ?>
                <a href="JavaScript:;" onclick="changeLanguage('en')"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Flag_of_the_United_Kingdom.png/1200px-Flag_of_the_United_Kingdom.png?20080216232030" alt="Girl in a jacket" width="20"></a>  
           <?php }else{ ?>
                <a href="JavaScript:;" onclick="changeLanguage('la')"><img src="https://seekflag.com/app/uploads/2021/12/Flag-of-Laos-01-2.svg" alt="Girl in a jacket" width="20"></a>  
            <?php } ?>
            </span>
            <!--<span class="designation">Web &amp; Apps Developer</span>-->
        </div>
        <img class="me" src="https://avatars.githubusercontent.com/u/91038988?v=4" alt="Me">
        <h2 class="email"><?php echo $lang["Seng_YANG"] ?></h2>
        <h2 class="address"><?php echo $lang["Based_in"] ?></h2>
        <p class="copyright">&copy; 2022 <?php echo $lang["All_Rights"] ?></p>
        <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
            
            <li>
                <a href="https://web.facebook.com/LFXtrader/"><i class="lab la-facebook"></i></a>
            </li>
            <li>
                <a href="https://github.com/Seng555" target="_blank"><i class="lab la-github"></i></a>
            </li>
        </ul>
        <a href="#contact" class="theme-btn">
            <i class="las la-envelope"></i><?php echo $lang["Hire_Me"] ?> </a>
    </div>

    <main class="drake-main">
        <div id="smooth-wrapper">
            <div id="smooth-content">

                <div class="left-sidebar">
                    <div class="sidebar-header d-flex align-items-center justify-content-between">
                        <img src="wp-content/themes/drake/assets/images/logo.png" alt="Logo">
                        <span class="designation">
                          <?php if($language == "la"){  ?>
                          <a href="JavaScript:;" onclick="changeLanguage('en')"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Flag_of_the_United_Kingdom.png/1200px-Flag_of_the_United_Kingdom.png?20080216232030" alt="Girl in a jacket" width="20"></a>  
                            <?php }else{ ?>
                                    <a href="JavaScript:;" onclick="changeLanguage('la')"><img src="https://seekflag.com/app/uploads/2021/12/Flag-of-Laos-01-2.svg" alt="Girl in a jacket" width="20"></a>  
                                <?php } ?>
                            </span>
                    </div>
                    <img class="me" src="https://avatars.githubusercontent.com/u/91038988?v=4" alt="Me">
                    <h2 class="email"><?php echo $lang["Seng_YANG"] ?></h2>
                    <h2 class="address"><?php echo $lang["Based_in"] ?></h2>
                    <p class="copyright">&copy; 2022 <?php echo $lang["All_Rights"] ?></p>
                    <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
                        <li>
                            <a href="https://web.facebook.com/LFXtrader/"><i class="lab la-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://github.com/Seng555" target="_blank"><i class="lab la-github"></i></a>
                        </li>
                    </ul>
                    <a href="#Contact" class="theme-btn">
                        <i class="las la-envelope"></i><?php echo $lang["Hire_Me"] ?> </a>
                </div>
                <div data-elementor-type="wp-page" data-elementor-id="199" class="elementor elementor-199">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-4008bb0 elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="4008bb0" data-element_type="section" id="home">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-56d535e"
                                data-id="56d535e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-d8d1695 elementor-widget elementor-widget-drakehero"
                                        data-id="d8d1695" data-element_type="widget"
                                        data-widget_type="drakehero.default">
                                        <div class="elementor-widget-container">

                                            <section class="hero-section">

                                                <div class="custom-container">
                                                    <div class="hero-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-home"></i> <?php echo $lang["Introduce"] ?>
                                                            </h4>
                                                            <h1 class="scroll-animation"
                                                                data-animation="fade_from_bottom"><?php echo $lang["Hello"] ?>
                                                                <span><?php echo $lang["Seng_YANG"] ?></span>, </br>
                                                                <span id="wordContainer"></span><span id="display">|</span>
                                                            </h1>
                                                        </div>
                                                        <p class="scroll-animation" data-animation="fade_from_bottom"><?php echo $lang["design_and_code"] ?></p>
                                                        <a href="#portfolio"
                                                            class="go-to-project-btn scroll-to scroll-animation"
                                                            data-animation="rotate_up">
                                                            <img decoding="async"
                                                                src="wp-content/uploads/2023/03/round-text.png"
                                                                alt="Rounded Text">
                                                            <i class="las la-arrow-down"></i>
                                                        </a>

                                                        <div class="facts d-flex">

                                                            <div class="left scroll-animation"
                                                                data-animation="fade_from_left">
                                                                <h1>6+</h1>
                                                                <p><?php echo $lang["Experience"] ?></p>
                                                            </div>


                                                            <div class="right scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <h1>10+</h1>
                                                                <p><?php echo $lang["projects_completed"] ?> <br></p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-51b78d5 elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="51b78d5" data-element_type="section" id="about">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0f928fc"
                                data-id="0f928fc" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-089591c elementor-widget elementor-widget-drakeabout"
                                        data-id="089591c" data-element_type="widget"
                                        data-widget_type="drakeabout.default">
                                        <div class="elementor-widget-container">

                                            <section class="about-area">
                                                <div class="custom-container">
                                                    <div class="about-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="lar la-user"></i> <?php echo $lang["About"] ?>
                                                            </h4>
                                                            <h1 class="scroll-animation"
                                                                data-animation="fade_from_bottom"><?php echo $lang["Every_great"] ?></h1>
                                                        </div>
                                                        <p class="scroll-animation" data-animation="fade_from_bottom">
                                                        <?php echo $lang["Contact_Description"] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-09e57b7 elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="09e57b7" data-element_type="section" id="resume">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e656275"
                                data-id="e656275" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-813d5c5 elementor-widget elementor-widget-drakeresume"
                                        data-id="813d5c5" data-element_type="widget"
                                        data-widget_type="drakeresume.default">
                                        <div class="elementor-widget-container">
                                            <section class="resume-area">
                                                <div class="custom-container">
                                                    <div class="resume-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-briefcase"></i> <?php echo $lang["Resume"] ?>
                                                            </h4>
                                                            <h1 class="scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <?php echo $lang["Education_Experience"] ?>
                                                            </h1>
                                                        </div>

                                                        <div class="resume-timeline">
                                                            <div class="item scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <span class="date">2012 - 2016</span>
                                                                <?php echo $lang["Bachelor_Degree_of"] ?>
                                                            </div>
                                                            <div class="item scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <span class="date">2016 - 2018</span>
                                                                <?php echo $lang["Marketing_Executive"] ?>
                                                            </div>
                                                            <div class="item scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <span class="date">2019 - 2021</span>
                                                                <?php echo $lang["Web_Apps"] ?>
                                                            </div>
                                                            <div class="item scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <span class="date">2021 - Present</span>
                                                                <?php echo $lang["Executive_of_Developer"] ?>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-e2fc89f elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="e2fc89f" data-element_type="section" id="services">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-043c284"
                                data-id="043c284" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-cf421ee elementor-widget elementor-widget-drakeservices"
                                        data-id="cf421ee" data-element_type="widget"
                                        data-widget_type="drakeservices.default">
                                        <div class="elementor-widget-container">

                                            <section class="services-area">
                                                <div class="custom-container">
                                                    <div class="services-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-stream"></i> <?php echo $lang["Services"] ?>
                                                            </h4>
                                                            <h1 class="scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                  <?php echo $lang["My_Specializations"] ?>
                                                            </h1>
                                                        </div>

                                                        <div class="services-items">
                                                            <div class="service-item scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-bezier-curve"></i>
                                                                <?php echo $lang["Website_PC_Mac"] ?>
                                                                <span class="projects"></span>
                                                            </div>
                                                            <div class="service-item scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-code"></i>
                                                                <?php echo $lang["BackEnd_Development"] ?>
                                                                <span class="projects"></span>
                                                            </div>
                                                            <!--<div class="service-item scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-rocket"></i>
                                                                <h2>SEO/Marketing</h2>
                                                                <p>Increase the traffic for your website with SEO
                                                                    optimized</p>
                                                                <span class="projects">8 Projects</span>
                                                            </div>-->
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-a32fcf2 elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="a32fcf2" data-element_type="section" id="skills">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0fa9229"
                                data-id="0fa9229" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-319c9f1 elementor-widget elementor-widget-drakeskill"
                                        data-id="319c9f1" data-element_type="widget"
                                        data-widget_type="drakeskill.default">
                                        <div class="elementor-widget-container">

                                            <section class="skills-area">
                                                <div class="custom-container">
                                                    <div class="skills-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-shapes"></i> <?php echo $lang["My_skills"] ?>
                                                            </h4>
                                                            <h1 class="scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <?php echo $lang["Front_End"] ?>
                                                            </h1>
                                                        </div>
                                                        <div class="row skills text-center">
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://html.com/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/html5-colored.svg"
                                                                                alt="html5" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">HTML</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_left">
                                                                <div class="skill">
                                                                    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript"
                                                                        target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/javascript-colored.svg"
                                                                                alt="javascript" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">javaScript</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://vuejs.org/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/vuejs-colored.svg"
                                                                                alt="vuejs" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Vuejs</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://jquery.com/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/jquery-colored.svg"
                                                                                alt="jquery" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Jquery</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://www.w3schools.com/css/"
                                                                        target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/css3-colored.svg"
                                                                                alt="css3" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">CSS3</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://vitejs.dev/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/vite-colored.svg"
                                                                                alt="vite" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Vite</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://flutter.dev/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/flutter-colored.svg"
                                                                                alt="flutter" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Flutter</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://v4.mui.com/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://v4.mui.com/static/logo_raw.svg"
                                                                                alt="MATERIAL-UI" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">MATERIAL-UI</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="skills-area" style="padding: 0;">
                                                <div class="custom-container">
                                                    <div class="skills-content content-width">
                                                        <div class="section-header">
                                                            <h1 class="scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <?php echo $lang["Back_End"] ?>
                                                            </h1>
                                                        </div>
                                                        <div class="row skills text-center">
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://www.w3schools.com/cs/index.php"
                                                                        target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/csharp-colored.svg"
                                                                                alt="csharp" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Csharp</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://go.dev/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/go-colored.svg"
                                                                                alt="Figma" width="50">
                                                                            <h1 class="golang"></h1>
                                                                        </div>
                                                                        <p class="name">Golang</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_top">
                                                                <div class="skill">
                                                                    <a href="https://www.typescriptlang.org/"
                                                                        target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/typescript-colored.svg"
                                                                                alt="Typescript" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Typescript</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <div class="skill">
                                                                    <a href="https://dart.dev/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/dart-colored.svg"
                                                                                alt="Dart" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Dart</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_left">
                                                                <div class="skill">
                                                                    <a href="https://www.python.org/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/python-colored.svg"
                                                                                alt="python" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Python</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://nodejs.org/en" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/nodejs-colored.svg"
                                                                                alt="nodejs" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Nodejs</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://expressjs.com/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://ajeetchaulagain.com/static/7cb4af597964b0911fe71cb2f8148d64/8d565/express-js.webp"
                                                                                alt="expressJS" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">ExpressJS</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://fastapi.tiangolo.com/"
                                                                        target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/github/explore/5deae0f0b95cec79f799c152535ca275e64595bb/topics/fastapi/fastapi.png"
                                                                                alt="FastAPI" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">FastAPI</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://gin-gonic.com/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/gin-gonic/logo/master/color.png"
                                                                                alt="FastAPI" width="50">
                                                                            <h1 class="Gin"></h1>
                                                                        </div>
                                                                        <p class="name">Gin</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://www.mongodb.com/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://www.tutorialsteacher.com/Content/images/home/mongodb.svg"
                                                                                alt="MongoDB" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">MongoDB</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://www.mysql.com/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://www.freepnglogos.com/uploads/logo-mysql-png/logo-mysql-mysql-logo-png-images-are-download-crazypng-21.png"
                                                                                alt="MYSQL" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">MYSQL</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://www.postgresql.org/"
                                                                        target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://www.postgresql.org/media/img/about/press/elephant.png"
                                                                                alt="Postgresql" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Postgresql</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="skills-area" style="padding: 0;">
                                                <div class="custom-container">
                                                    <div class="skills-content content-width">
                                                        <div class="section-header">
                                                            <h1 class="scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <?php echo $lang["Develop_Tool"] ?>
                                                            </h1>
                                                        </div>
                                                        <div class="row skills text-center">
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://aws.amazon.com/"
                                                                        target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://avatars.githubusercontent.com/u/2232217?s=280&v=4"
                                                                                alt="Amazon Web Services" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">AWS</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://www.nginx.com/"
                                                                        target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/github/explore/85cceaeeaf993ca35664dc37ea24f9237fbbfc14/topics/nginx/nginx.png"
                                                                                alt="Nginx" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Nginx</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://code.visualstudio.com/"
                                                                        target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://cdn.worldvectorlogo.com/logos/visual-studio-code-1.svg"
                                                                                alt="Visual Studio Code" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Visual Studio Code</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <a href="https://git-scm.com/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://git-scm.com/images/logos/logomark-orange@2x.png"
                                                                                alt="Git" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Git</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_top">
                                                                <div class="skill">
                                                                    <a href="https://postman.com/" target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://static-00.iconduck.com/assets.00/postman-icon-497x512-beb7sy75.png"
                                                                                alt="PostMan" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">PostMan</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <div class="skill">
                                                                    <a href="https://www.photoshop.com/en"
                                                                        target="_blank">
                                                                        <div class="skill-inner">
                                                                            <img decoding="async"
                                                                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/photoshop/photoshop-line.svg"
                                                                                alt="photoshop" width="50">
                                                                            <h1 class="percent"></h1>
                                                                        </div>
                                                                        <p class="name">Photoshop</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-2090be3 elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="2090be3" data-element_type="section" id="portfolio">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-77d49c0"
                                data-id="77d49c0" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-ab189bd elementor-widget elementor-widget-drakeportfolio"
                                        data-id="ab189bd" data-element_type="widget"
                                        data-widget_type="drakeportfolio.default">
                                        <div class="elementor-widget-container">

                                            <section class="portfolio-area">
                                                <div class="custom-container">
                                                    <div class="portfolio-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-grip-vertical"></i> <?php echo $lang["Portfolio"] ?>
                                                            </h4>
                                                            <h1 class="scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <?php echo $lang["Featured_Projects"] ?>
                                                            </h1>
                                                        </div>

                                                        <div class="row portfolio-items">

                                                            <div class="col-md-12 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="portfolio-item portfolio-full">
                                                                    <div class="portfolio-item-inner">
                                                                        <a href="wp-content/uploads/2023/03/portfolio1.jpg"
                                                                            data-lightbox="example-1">
                                                                            <img decoding="async"
                                                                                src="wp-content/uploads/2023/03/portfolio1.jpg"
                                                                                alt="Portfolio">
                                                                        </a>

                                                                        <ul class="portfolio-categories">
                                                                            <li>
                                                                                <a href="#">Nodejs</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">MongoDB</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Vuejs</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Flutter</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <h2><a href="https://prpmart.com/" target="_blank">Paymart - payrich</a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="portfolio-item portfolio-full">
                                                                    <div class="portfolio-item-inner">
                                                                        <a href="wp-content/uploads/2023/03/portfolio5.jpg"
                                                                            data-lightbox="example-1">
                                                                            <img decoding="async"
                                                                                src="wp-content/uploads/2023/03/portfolio5.jpg"
                                                                                alt="Portfolio">
                                                                        </a>

                                                                        <ul class="portfolio-categories">
                                                                            <li>
                                                                                <a href="#">Framer</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <h2><a href="#">Lewis Portfolio Framer</a>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-449627b elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="449627b" data-element_type="section" id="testimonial">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-78a9b04"
                                data-id="78a9b04" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-09ec53b elementor-widget elementor-widget-draketestimonial"
                                        data-id="09ec53b" data-element_type="widget"
                                        data-widget_type="draketestimonial.default">
                                        <div class="elementor-widget-container">

                                            <section class="testimonial-area">
                                                <div class="custom-container">
                                                    <div class="testimonial-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="lar la-comment"></i> <?php echo $lang["Workflow"] ?>
                                                            </h4>
                                                            <h1 class="scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <?php echo $lang["Workflow_management"] ?>
                                                            </h1>
                                                        </div>

                                                        <div class="row portfolio-items">

                                                            <div class="col-md-12 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="portfolio-item portfolio-full">
                                                                    <div class="portfolio-item-inner">
                                                                        <a href="wp-content/uploads/2023/03/Full_stack.jpg"
                                                                            data-lightbox="example-1">
                                                                            <img decoding="async"
                                                                                src="wp-content/uploads/2023/03/Full_stack.jpg"
                                                                                alt="Portfolio">
                                                                        </a>

                                                                        <ul class="portfolio-categories">
                                                                            <li>
                                                                                <a href="#">FrontEnd</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">BackEnd</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Databases</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">External API</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <h2><a href="#" target="_blank"><?php echo $lang["Workflow_process"] ?></a></h2>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--<div class="clients-logos">
                                                            <h4 class="scroll-animation"
                                                                data-animation="fade_from_bottom">work with 60+ brands
                                                                worldwide</h4>
                                                            <div class="row align-items-center">
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_left">
                                                                    <img decoding="async"
                                                                        src="wp-content/uploads/2023/03/client-1.png">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_bottom">
                                                                    <img decoding="async"
                                                                        src="wp-content/uploads/2023/03/client-2.png">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_top">
                                                                    <img decoding="async"
                                                                        src="wp-content/uploads/2023/03/client-3.png">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_right">
                                                                    <img decoding="async"
                                                                        src="wp-content/uploads/2023/03/client-4.png">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_left">
                                                                    <img decoding="async"
                                                                        src="wp-content/uploads/2023/03/client-5.png">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_bottom">
                                                                    <img decoding="async"
                                                                        src="wp-content/uploads/2023/03/client-6.png">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_top">
                                                                    <img decoding="async"
                                                                        src="wp-content/uploads/2023/03/client-7.png">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_right">
                                                                    <img decoding="async"
                                                                        src="wp-content/uploads/2023/03/client-8.png">
                                                                </div>
                                                            </div>
                                                        </div>-->

                                                    </div>
                                                </div>
                                            </section>
                                            </br>
                                            </br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-ad41ad6 elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="ad41ad6" data-element_type="section" id="contact">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a93c64b"
                                data-id="a93c64b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-60dfddb elementor-widget elementor-widget-drakecontact"
                                        data-id="60dfddb" data-element_type="widget"
                                        data-widget_type="drakecontact.default">
                                        <div class="elementor-widget-container">

                                            <section class="contact-area">
                                                <div class="custom-container">
                                                    <div class="contact-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-envelope"></i> <?php echo $lang["Contact"] ?>
                                                            </h4>
                                                            <h1 class="scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <?php echo $lang["Let_Work"] ?>
                                                            </h1>
                                                        </div>
                                                        <h3 class="scroll-animation" data-animation="fade_from_bottom">
                                                            eeyang5@gmail.com or +8562057779422</h3>
                                                        <p id="required-msg">* <?php echo $lang["Marked_fields"] ?></p>


                                                        <div class="wpcf7 no-js" id="wpcf7-f172-p199-o1" lang="en-US"
                                                            dir="ltr">
                                                            <div class="screen-reader-response">
                                                                <p role="status" aria-live="polite" aria-atomic="true">
                                                                </p>
                                                                <ul></ul>
                                                            </div>
                                                            <form action="#" id="formct" class="wpcf7-form init"
                                                                aria-label="Contact form" enctype="multipart/form-data"
                                                                novalidate="novalidate" data-status="init">
                                                                <div style="display: none;">
                                                                    <input type="hidden" name="_wpcf7" value="172" />
                                                                    <input type="hidden" name="_wpcf7_version"
                                                                        value="5.8" />
                                                                    <input type="hidden" name="_wpcf7_locale"
                                                                        value="en_US" />
                                                                    <input type="hidden" name="_wpcf7_unit_tag"
                                                                        value="wpcf7-f172-p199-o1" />
                                                                    <input type="hidden" name="_wpcf7_container_post"
                                                                        value="199" />
                                                                    <input type="hidden" name="_wpcf7_posted_data_hash"
                                                                        value="" />
                                                                </div>
                                                                <div class="alert alert-success messenger-box-contact__msg"
                                                                    style="display: none" role="alert">
                                                                    <p><?php echo $lang["Your_message_was"] ?>
                                                                    </p>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <p><label for="full-name"><?php echo $lang["full_Name"] ?>
                                                                                    <sup>*</sup></label><span
                                                                                    class="wpcf7-form-control-wrap"
                                                                                    data-name="full-name">
                                                                                    <input size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-group"
                                                                                        id="full-name"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Your Full Name"
                                                                                        value="" type="text"
                                                                                        name="full-name" /></span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <p><label for="email"><?php echo $lang["Email"] ?>
                                                                                    <sup>*</sup></label><span
                                                                                    class="wpcf7-form-control-wrap"
                                                                                    data-name="email"><input size="40"
                                                                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email input-group"
                                                                                        aria-required="true"
                                                                                        id="email"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Your email adress"
                                                                                        value="" type="email"
                                                                                        name="email" /></span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <p><label for="phone-number"><?php echo $lang["Phone"] ?>
                                                                                    <span><?php echo $lang["optional"] ?></span></label><span
                                                                                    class="wpcf7-form-control-wrap"
                                                                                    data-name="phone">
                                                                                    <input
                                                                                        class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number input-group"
                                                                                        aria-invalid="false"
                                                                                        id="phone"
                                                                                        placeholder="Your number phone"
                                                                                        value="" type="text"
                                                                                        name="phone" /></span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="input-group">
                                                                            <p><label for="message"><?php echo $lang["message"] ?></label><span
                                                                                    class="wpcf7-form-control-wrap"
                                                                                    data-name="message"><textarea
                                                                                        cols="40" rows="2"
                                                                                        class="wpcf7-form-control wpcf7-textarea input-group"
                                                                                        id="message"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Wrire your message here ..."
                                                                                        name="message"></textarea></span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="input-group submit-btn-wrap">
                                                                            <p><button class="theme-btn" type="submit"
                                                                                    name="submit" id="submit">
                                                                                    <?php echo $lang["send_message"] ?></button>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpcf7-response-output" aria-hidden="true">
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


            </div>
        </div>
    </main>
    <script src='wp-content/plugins/contact-form-7/includes/swv/js/index41a3.js?ver=5.8' id='swv-js'></script>
    <script id='contact-form-7-js-extra'>
        var wpcf7 = { "api": { "root": "https:\/\/wpriverthemes.com\/drake\/wp-json\/", "namespace": "contact-form-7\/v1" } };
    </script>
    <script src='wp-content/plugins/contact-form-7/includes/js/index41a3.js?ver=5.8' id='contact-form-7-js'></script>
    <script src='wp-content/themes/drake/assets/js/jquerye35d.js?ver=6.3.2' id='drake-jquery-js'></script>
    <script src='wp-content/themes/drake/assets/js/bootstrap.bundle.mine35d.js?ver=6.3.2'
        id='bootstrap-bundle-js'></script>
    <script src='wp-content/themes/drake/assets/js/owl.carousele35d.js?ver=6.3.2' id='owl-carousel-js'></script>
    <script src='wp-content/themes/drake/assets/js/gsap.mine35d.js?ver=6.3.2' id='gsap-js'></script>
    <script src='wp-content/themes/drake/assets/js/ScrollTrigger.mine35d.js?ver=6.3.2' id='ScrollTrigger-js'></script>
    <script src='wp-content/themes/drake/assets/js/ScrollToPlugin.mine35d.js?ver=6.3.2' id='ScrollToPlugin-js'></script>
    <script src='wp-content/themes/drake/assets/js/lightbox.mine35d.js?ver=6.3.2' id='lightbox-js'></script>
    <script src='wp-content/themes/drake/assets/js/maine35d.js?ver=6.3.2' id='drake-main-js'></script>
    <script src='wp-content/themes/drake/assets/js/ajax-forme35d.js?ver=6.3.2' id='ajax-form-js'></script>
    <script src='wp-content/themes/drake/assets/js/colore35d.js?ver=6.3.2' id='drake-color-js'></script>
    <script src='wp-content/plugins/elementor/assets/js/webpack.runtime.minb73d.js?ver=3.15.3'
        id='elementor-webpack-runtime-js'></script>
    <script src='wp-content/plugins/elementor/assets/js/frontend-modules.minb73d.js?ver=3.15.3'
        id='elementor-frontend-modules-js'></script>
    <script src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'
        id='elementor-waypoints-js'></script>
    <script src='wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2' id='jquery-ui-core-js'></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.15.3", "is_static": false, "experimentalFeatures": { "e_dom_optimization": true, "e_optimized_assets_loading": true, "e_optimized_css_loading": true, "additional_custom_breakpoints": true, "e_swiper_latest": true, "landing-pages": true }, "urls": { "assets": "https:\/\/wpriverthemes.com\/drake\/wp-content\/plugins\/elementor\/assets\/" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 199, "title": "Earth%20Lines%20Sphere%20%E2%80%93%20Drake", "excerpt": "", "featuredImage": false } };
    </script>
    <script src='wp-content/plugins/elementor/assets/js/frontend.minb73d.js?ver=3.15.3'
        id='elementor-frontend-js'></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>




</body>
<script type="text/javascript">
    const container = document.getElementById("wordContainer");
    const displayElement = document.getElementById("display");
    const langsEN =  <?php echo json_encode($langs) ?>;
    (function(){
       const emailPubkey = "qavGOA3X3_X4nInej";
       const serviceID = "service_t5nlq6p"
       emailjs.init(emailPubkey);
       document.getElementById("formct").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission
        //console.log("ssssssss")
        // Retrieve form data
        const fullName = document.getElementById("full-name").value;
        const email = document.getElementById("email").value;
        const phone = document.getElementById("phone").value;
        const message = document.getElementById("message").value;
        //console.log("ssssssss1", fullName, email, phone, message)
        if (!fullName.trim() || !email.trim()) {
           // alert("Full Name and Email are required fields.");
            return; // Stop the form submission if validation fails
        }
        const templateParams = {
                to_name: 'Seng',
                from_name: fullName,
                email: email,
                phone: phone,
                message: message,
            };
       emailjs.send(serviceID, 'template_j4kcxlj', templateParams)
        .then(function(response) {
        //console.log('SUCCESS!', response.status, response.text);
        //alert('SUCCESS!');
        document.getElementById("formct").reset();
        }, function(error) {
        console.log('FAILED...', error);
        });
    });
    // Show and hide the "tigle" text in the display element continuously
    setInterval(function () {
        displayElement.style.visibility = (displayElement.style.visibility === 'hidden') ? 'visible' : 'hidden';
    }, 500); // Adjust the delay (in milliseconds) for showing and hiding
    
    displayWordsWithTypingAndRemoval(langsEN, 0);
    })();
    document.addEventListener('DOMContentLoaded', function() {
        const queryString = window.location.search;
        // Create a URLSearchParams object from the URL
        const urlParams = new URLSearchParams(queryString);
        // Get the value of the "lang" parameter
        const langValue = urlParams.get('lang');
            // Check if the "lang" parameter is present in the URL
            if (langValue !== null) {
                //console.log('Language parameter detected:', langValue);
                // Assuming changeLanguage is a function you've defined elsewhere
                changeLanguage(langValue);
            }
        // Additional code that you want to run when the document is ready can go here
    });
   // Function to simulate typing effect
   function typeText(text, index, callback) {
        if (index < text.length) {
            // Create a new span element
            var span = document.createElement("span");

            // Set the text content of the span to the current character
            span.textContent = text[index];

            // Append the span to the container
            container.appendChild(span);

            // Use setTimeout to call the function with a delay
            setTimeout(function () {
                // Recursively call the function for the next character
                typeText(text, index + 1, callback);
            }, 100); // Adjust the delay (in milliseconds) as needed
        } else {
            // Call the callback function when typing is complete
            callback();
        }
    }

    // Function to remove letters one by one
    function removeText(index, callback) {
        var spans = container.querySelectorAll("span");

        if (index >= 0) {
            // Use setTimeout to call the function with a delay
            setTimeout(function () {
                // Remove the last span element
                spans[index].parentNode.removeChild(spans[index]);

                // Recursively call the function for the previous letter
                removeText(index - 1, callback);
            }, 50); // Adjust the delay (in milliseconds) as needed
        } else {
            // Call the callback function when removal is complete
            callback();
        }
    }

    // Function to display each word with typing effect, wait, and then remove
    function displayWordsWithTypingAndRemoval(words, index) {
       // console.log("words", words)
        if (index < words.length) {
            // Clear the container before typing the next word
            container.innerHTML = '';

            // Call the typeText function for the current word
            typeText(words[index], 0, function () {
                // Use setTimeout to wait for 2 seconds
                setTimeout(function () {
                    // Call the removeText function to remove letters one by one
                    removeText(words[index].length - 1, function () {
                        // Use setTimeout to call the function for the next word
                        setTimeout(function () {
                            // Recursively call the function for the next word
                            displayWordsWithTypingAndRemoval(words, index + 1);
                        }, 25); // Adjust the delay (in milliseconds) for removal
                    });
                }, 2000); // Adjust the wait time (in milliseconds) between typing and removal
            });
        } else {
            // All words have been displayed, restart the process
            setTimeout(function () {
                displayWordsWithTypingAndRemoval(words, 0);
            }, 1000); // Adjust the delay (in milliseconds) before restarting
        }
    }

    function changeLanguage(lang) {
            // Get the selected language
            // Make an AJAX request to setLanguage.php
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'setLanguage.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    window.location.href = "/";
                }
            };
            xhr.send('language=' + lang);
        }
 </script>
</html>