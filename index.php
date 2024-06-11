<?php require __DIR__ . '/filter.php' ?>

<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Brow game &#8211; integrate out-of-the-box action-items</title>
<meta name='robots' content='max-image-preview:large' />

<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Brow game &raquo; Feed" href="feed" />
<link rel="alternate" type="application/rss+xml" title="Brow game &raquo; Comments Feed" href="comments/feed" />
<script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
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
	<link rel='stylesheet' id='wp-block-library-css'  href='wp-includes/css/dist/block-library/style.min.css?ver=6.0' media='all' />
<style id='wp-block-library-theme-inline-css'>
.wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:hsla(0,0%,100%,.65)}.wp-block-code{border:1px solid #ccc;border-radius:4px;font-family:Menlo,Consolas,monaco,monospace;padding:.8em 1em}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:hsla(0,0%,100%,.65)}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:hsla(0,0%,100%,.65)}.wp-block-pullquote{border-top:4px solid;border-bottom:4px solid;margin-bottom:1.75em;color:currentColor}.wp-block-pullquote__citation,.wp-block-pullquote cite,.wp-block-pullquote footer{color:currentColor;text-transform:uppercase;font-size:.8125em;font-style:normal}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;position:relative;font-style:normal}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.is-style-plain{border:none}.wp-block-search .wp-block-search__label{font-weight:700}:where(.wp-block-group.has-background){padding:1.25em 2.375em}.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table thead{border-bottom:3px solid}.wp-block-table tfoot{border-top:3px solid}.wp-block-table td,.wp-block-table th{padding:.5em;border:1px solid;word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-template-part.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}
</style>
<style id='global-styles-inline-css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<link rel='stylesheet' id='newz-google-fonts-css'  href='wp-content/fonts/ccc79b442f593b02ea4996c06476deb3.css?ver=1.1.2' media='all' />
<link rel='stylesheet' id='sidr-nav-css'  href='wp-content/themes/newz/assets/lib/sidr/css/jquery.sidr.dark.css?ver=6.0' media='all' />
<link rel='stylesheet' id='slick-css'  href='wp-content/themes/newz/assets/lib/slick/css/slick.min.css?ver=6.0' media='all' />
<link rel='stylesheet' id='newz-style-css'  href='wp-content/themes/newz/style.css?ver=1.1.2' media='all' />
<script src='wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<script src='wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<link rel="https://api.w.org/" href="wp-json/" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 6.0" />
          <meta name="keywords" content="shibashootout"/>
          
		<script>document.documentElement.className = document.documentElement.className.replace( 'no-js', 'js' );</script>
	
	<style type='text/css' media='all'>
    .site-logo .custom-logo-link{
        max-width:  300px;
    }

    @media (min-width: 1200px) {
    .header-titles .custom-logo-name{
    font-size: 100px;
    }
    }

    body, input, select, optgroup, textarea{
    color: #404040;
    }

    a,
    .widget-title,
    .block-title-wrapper .block-title{
    color: #000000;
    }

    .theme-block-spacer {
    background: rgba(0,0,0,0.1);
    }

    .theme-spacer-dark {
    background: #000000;
    }

    .header-navbar,
    .megamenu-recent-article,
    .widget_recent_entries ul li,
    .widget_categories ul li,
    .widget_pages ul li,
    .widget_archive ul li,
    .widget_meta ul li,
    .widget_recent_comments ul li,
    .widget_block .wp-block-latest-posts li,
    .widget_block .wp-block-categories li,
    .widget_block .wp-block-archives li,
    .widget_block .wp-block-latest-comments li{
    border-bottom-color: rgba(0,0,0,0.1);
    }
    .theme-svg-seperator{
    color: rgba(0,0,0,0.2);
    }
    </style></head>

<body class="home blog wp-embed-responsive hfeed left-sidebar twp-archive-full">

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.4980392156862745" /><feFuncG type="table" tableValues="0 0.4980392156862745" /><feFuncB type="table" tableValues="0 0.4980392156862745" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.5490196078431373 0.9882352941176471" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.7176470588235294 0.2549019607843137" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.2784313725490196" /><feFuncB type="table" tableValues="0.592156862745098 0.2784313725490196" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.6470588235294118" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.7803921568627451 1" /><feFuncG type="table" tableValues="0 0.9490196078431372" /><feFuncB type="table" tableValues="0.35294117647058826 0.47058823529411764" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.6509803921568628 0.403921568627451" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.4470588235294118 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.09803921568627451 1" /><feFuncG type="table" tableValues="0 0.6627450980392157" /><feFuncB type="table" tableValues="0.8470588235294118 0.4196078431372549" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content">Skip to the content</a>

    
    
    
<header id="site-header" class="theme-header " role="banner">

    <div class="header-navbar">
        <div class="wrapper header-wrapper">
                        <div class="header-item header-item-center">
                <div class="site-navigation">
                    <nav class="primary-menu-wrapper" aria-label="Horizontal" role="navigation">
                        <ul class="primary-menu theme-menu">
                            <li class="page_item page-item-14"><a href="cookies/index.html">Cookie policy</a></li>
<li class="page_item page-item-12"><a href="privacy-policy/index.html">Privacy policy</a></li>
<li class="page_item page-item-13"><a href="terms-of-use/index.html">Terms of use</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header-item header-item-right">
                        <div class="navbar-controls hide-no-js">

            <button type="button" class="navbar-control navbar-control-search">
                <span class="navbar-control-trigger" tabindex="-1">
                    <span class="screen-reader-text">Search</span>
                    <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 20"><path fill="currentColor" d="M1148.0319,95.6176858 L1151.70711,99.2928932 C1152.09763,99.6834175 1152.09763,100.316582 1151.70711,100.707107 C1151.31658,101.097631 1150.68342,101.097631 1150.29289,100.707107 L1146.61769,97.0318993 C1145.07801,98.2635271 1143.12501,99 1141,99 C1136.02944,99 1132,94.9705627 1132,90 C1132,85.0294372 1136.02944,81 1141,81 C1145.97056,81 1150,85.0294372 1150,90 C1150,92.1250137 1149.26353,94.078015 1148.0319,95.6176858 Z M1146.04139,94.8563911 C1147.25418,93.5976949 1148,91.8859456 1148,90 C1148,86.1340067 1144.86599,83 1141,83 C1137.13401,83 1134,86.1340067 1134,90 C1134,93.8659933 1137.13401,97 1141,97 C1142.88595,97 1144.59769,96.2541764 1145.85639,95.0413859 C1145.88271,95.0071586 1145.91154,94.9742441 1145.94289,94.9428932 C1145.97424,94.9115423 1146.00716,94.8827083 1146.04139,94.8563911 Z" transform="translate(-1132 -81)" /></svg>                </span>
            </button>

            <button type="button" class="navbar-control navbar-control-offcanvas">
                <span class="navbar-control-trigger" tabindex="-1">
                    Menu                    <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="currentColor" d="M1 3v2h18V3zm0 8h18V9H1zm0 6h18v-2H1z" /></svg>                </span>
            </button>

        </div>
                    <button type="button" class="navbar-control navbar-control-trending-news">
                <span class="navbar-control-trigger" tabindex="-1">
                    Trending News                </span>
            </button>
                        </div>
        </div>
        
            <div class="trending-news-main-wrap">
               <div class="wrapper">
                    <div class="column-row">

                        <a href="javascript:void(0)" class="newz-skip-link-start"></a>

                        <div class="column column-12">
                            <button type="button" id="trending-collapse">
                                <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><polygon fill="currentColor" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102" /></svg>                            </button>
                        </div>

                                                    <div class="column column-4 column-sm-6 column-xs-12">

                                <article id="theme-post-10" class="news-article mb-30 post-10 post type-post status-publish format-standard has-post-thumbnail hentry category-browgame">
                                    <div class="column-row column-row-small">

                                        
                                            <div class="column column-4">
                                                <div class="data-bg data-bg-thumbnail" data-background="wp-content/uploads/2024/04/thumb10.jpg">
                                                    <a class="img-link" href="post/10/index.html" aria-label="Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants" tabindex="0"></a>
                                                </div>
                                            </div>

                                        
                                        <div class="column column-8">
                                            <div class="article-content">

                                                <h3 class="entry-title entry-title-small entry-title-primary">
                                                    <a href="post/10/index.html" tabindex="0" rel="bookmark" title="Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants">Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants</a>
                                                </h3>

                                                <div class="entry-meta">
                                                    <div class="entry-meta-item entry-meta-date"><span class="entry-meta-icon calendar-icon"> <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="currentColor" d="M4.60069444,4.09375 L3.25,4.09375 C2.47334957,4.09375 1.84375,4.72334957 1.84375,5.5 L1.84375,7.26736111 L16.15625,7.26736111 L16.15625,5.5 C16.15625,4.72334957 15.5266504,4.09375 14.75,4.09375 L13.3993056,4.09375 L13.3993056,4.55555556 C13.3993056,5.02154581 13.0215458,5.39930556 12.5555556,5.39930556 C12.0895653,5.39930556 11.7118056,5.02154581 11.7118056,4.55555556 L11.7118056,4.09375 L6.28819444,4.09375 L6.28819444,4.55555556 C6.28819444,5.02154581 5.9104347,5.39930556 5.44444444,5.39930556 C4.97845419,5.39930556 4.60069444,5.02154581 4.60069444,4.55555556 L4.60069444,4.09375 Z M6.28819444,2.40625 L11.7118056,2.40625 L11.7118056,1 C11.7118056,0.534009742 12.0895653,0.15625 12.5555556,0.15625 C13.0215458,0.15625 13.3993056,0.534009742 13.3993056,1 L13.3993056,2.40625 L14.75,2.40625 C16.4586309,2.40625 17.84375,3.79136906 17.84375,5.5 L17.84375,15.875 C17.84375,17.5836309 16.4586309,18.96875 14.75,18.96875 L3.25,18.96875 C1.54136906,18.96875 0.15625,17.5836309 0.15625,15.875 L0.15625,5.5 C0.15625,3.79136906 1.54136906,2.40625 3.25,2.40625 L4.60069444,2.40625 L4.60069444,1 C4.60069444,0.534009742 4.97845419,0.15625 5.44444444,0.15625 C5.9104347,0.15625 6.28819444,0.534009742 6.28819444,1 L6.28819444,2.40625 Z M1.84375,8.95486111 L1.84375,15.875 C1.84375,16.6516504 2.47334957,17.28125 3.25,17.28125 L14.75,17.28125 C15.5266504,17.28125 16.15625,16.6516504 16.15625,15.875 L16.15625,8.95486111 L1.84375,8.95486111 Z" /></svg></span><span class="posted-on"><a href="post/date/2024/05/28/index.html" rel="bookmark"><time class="entry-date published updated" datetime="2024-05-28T03:56:42+00:00">May 28, 2024</time></a></span></div>                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </article>
                            </div>
                            
                        <a href="javascript:void(0)" class="newz-skip-link-end"></a>

                    </div>
               </div>
            </div>

                </div>

    <div class="header-mainbar  "  >
        <div class="wrapper header-wrapper">
            <div class="header-item header-item-center">
                <div class="header-titles">
                    <h1 class="site-title"><a href="" class="custom-logo-name">Brow game</a></h1><div class="site-description"><span>integrate out-of-the-box action-items</span></div><!-- .site-description -->                </div>
            </div>
        </div>
    </div>

    
            <div id="theme-extrabar" class="theme-navextras">
                
                
            <div class="wrapper header-wrapper">
                <div class="header-item header-item-left">
                                            <div class="theme-navextras-item theme-navextras-date">
                            <span class="theme-navextras-icon"><svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="currentColor" d="M18.5 2h-2.5v-0.5c0-0.276-0.224-0.5-0.5-0.5s-0.5 0.224-0.5 0.5v0.5h-10v-0.5c0-0.276-0.224-0.5-0.5-0.5s-0.5 0.224-0.5 0.5v0.5h-2.5c-0.827 0-1.5 0.673-1.5 1.5v14c0 0.827 0.673 1.5 1.5 1.5h17c0.827 0 1.5-0.673 1.5-1.5v-14c0-0.827-0.673-1.5-1.5-1.5zM1.5 3h2.5v1.5c0 0.276 0.224 0.5 0.5 0.5s0.5-0.224 0.5-0.5v-1.5h10v1.5c0 0.276 0.224 0.5 0.5 0.5s0.5-0.224 0.5-0.5v-1.5h2.5c0.276 0 0.5 0.224 0.5 0.5v2.5h-18v-2.5c0-0.276 0.224-0.5 0.5-0.5zM18.5 18h-17c-0.276 0-0.5-0.224-0.5-0.5v-10.5h18v10.5c0 0.276-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M7.5 10h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M10.5 10h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M13.5 10h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M16.5 10h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M4.5 12h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M7.5 12h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M10.5 12h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M13.5 12h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M16.5 12h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M4.5 14h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M7.5 14h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M10.5 14h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M13.5 14h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M16.5 14h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M4.5 16h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M7.5 16h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M10.5 16h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M13.5 16h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path><path fill="currentColor" d="M16.5 16h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path></svg></span>
                            <span class="theme-navextras-label">Tuesday, May 28th, 2024</span>
                        </div>
                                                            <div class="theme-navextras-item theme-navextras-clock">
                        <span class="theme-navextras-icon"><svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="currentColor" d="M16.32 17.113c1.729-1.782 2.68-4.124 2.68-6.613 0-2.37-0.862-4.608-2.438-6.355l0.688-0.688 0.647 0.646c0.098 0.098 0.226 0.146 0.353 0.146s0.256-0.049 0.353-0.146c0.195-0.195 0.195-0.512 0-0.707l-2-2c-0.195-0.195-0.512-0.195-0.707 0s-0.195 0.512 0 0.707l0.647 0.646-0.688 0.688c-1.747-1.576-3.985-2.438-6.355-2.438s-4.608 0.862-6.355 2.438l-0.688-0.688 0.646-0.646c0.195-0.195 0.195-0.512 0-0.707s-0.512-0.195-0.707 0l-2 2c-0.195 0.195-0.195 0.512 0 0.707 0.098 0.098 0.226 0.146 0.354 0.146s0.256-0.049 0.354-0.146l0.646-0.646 0.688 0.688c-1.576 1.747-2.438 3.985-2.438 6.355 0 2.489 0.951 4.831 2.68 6.613l-2.034 2.034c-0.195 0.195-0.195 0.512 0 0.707 0.098 0.098 0.226 0.147 0.354 0.147s0.256-0.049 0.354-0.147l2.060-2.059c1.705 1.428 3.836 2.206 6.087 2.206s4.382-0.778 6.087-2.206l2.059 2.059c0.098 0.098 0.226 0.147 0.354 0.147s0.256-0.049 0.353-0.147c0.195-0.195 0.195-0.512 0-0.707l-2.034-2.034zM1 10.5c0-4.687 3.813-8.5 8.5-8.5s8.5 3.813 8.5 8.5c0 4.687-3.813 8.5-8.5 8.5s-8.5-3.813-8.5-8.5z"></path><path fill="currentColor" d="M15.129 7.25c-0.138-0.239-0.444-0.321-0.683-0.183l-4.92 2.841-3.835-2.685c-0.226-0.158-0.538-0.103-0.696 0.123s-0.103 0.538 0.123 0.696l4.096 2.868c0.001 0.001 0.002 0.001 0.002 0.002 0.009 0.006 0.018 0.012 0.027 0.017 0.002 0.001 0.004 0.003 0.006 0.004 0.009 0.005 0.018 0.010 0.027 0.015 0.002 0.001 0.004 0.002 0.006 0.003 0.010 0.005 0.020 0.009 0.031 0.014 0.006 0.003 0.013 0.005 0.019 0.007 0.004 0.001 0.008 0.003 0.013 0.005 0.007 0.002 0.014 0.004 0.021 0.006 0.004 0.001 0.008 0.002 0.012 0.003 0.007 0.002 0.014 0.003 0.022 0.005 0.004 0.001 0.008 0.002 0.012 0.002 0.007 0.001 0.014 0.002 0.021 0.003 0.005 0.001 0.010 0.001 0.015 0.002 0.006 0.001 0.012 0.001 0.018 0.002 0.009 0.001 0.018 0.001 0.027 0.001 0.002 0 0.004 0 0.006 0 0 0 0-0 0-0s0 0 0.001 0c0.019 0 0.037-0.001 0.056-0.003 0.001-0 0.002-0 0.003-0 0.018-0.002 0.036-0.005 0.054-0.010 0.002-0 0.003-0.001 0.005-0.001 0.017-0.004 0.034-0.009 0.050-0.015 0.003-0.001 0.006-0.002 0.008-0.003 0.016-0.006 0.031-0.012 0.046-0.020 0.004-0.002 0.007-0.004 0.011-0.006 0.005-0.003 0.011-0.005 0.016-0.008l5.196-3c0.239-0.138 0.321-0.444 0.183-0.683z"></path></svg></span>
                        <span class="theme-navextras-label">
                            <div id="twp-time-clock"></div>
                        </span>
                    </div>
                                    </div>


                <div class="header-item header-item-right">
                    
                    
                </div>
            </div>
            <div class="wrapper">
                <div class="theme-block-spacer"></div>
            </div>
        
            </div>

        
    <div class="header-news-ticker hidden-xs-element">
        <div class="wrapper header-wrapper">
            <div class="header-item header-item-left">
                
            <div class="theme-ticker-area hide-no-js">
                                    <div class="theme-ticker-components theme-ticker-left">
                        <div class="theme-ticker-title">
                            <span class="ticker-title-part ticker-title-label">Breaking News</span>
                        </div>
                    </div>
                
                
                    <div class="theme-ticker-component theme-ticker-right">
                        <div class="ticker-slides" data-slick='{"autoplay": true'>
                        

                                        <a class="ticker-slides-item" href="post/10/index.html" tabindex="0" rel="bookmark" title="Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants">
                                                                                            <span class="data-bg ticker-data-bg" data-background="wp-content/uploads/2024/04/thumb10.jpg"></span>
                                                                                        <span class="ticker-title">Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants</span>
                                        </a>


                                                        </div>
                    </div>

                                </div>

                    </div>
            <div class="header-item header-item-right">
                <div class="ticker-controls">
                    <button type="button" class="slide-btn theme-aria-button slide-prev-ticker">
                        <span class="btn__content" tabindex="-1">
                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" /></path></svg>                        </span>
                    </button>

                    <button type="button" class="slide-btn theme-aria-button ticker-control ticker-control-play">
                        <span class="btn__content" tabindex="-1">
                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 28"><path fill="currentColor" d="M21.625 14.484l-20.75 11.531c-0.484 0.266-0.875 0.031-0.875-0.516v-23c0-0.547 0.391-0.781 0.875-0.516l20.75 11.531c0.484 0.266 0.484 0.703 0 0.969z" /></svg>                        </span>
                    </button>

                    <button type="button" class="slide-btn theme-aria-button ticker-control ticker-control-pause pp-button-active">
                        <span class="btn__content" tabindex="-1">
                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 28"><path fill="currentColor" d="M24 3v22c0 0.547-0.453 1-1 1h-8c-0.547 0-1-0.453-1-1v-22c0-0.547 0.453-1 1-1h8c0.547 0 1 0.453 1 1zM10 3v22c0 0.547-0.453 1-1 1h-8c-0.547 0-1-0.453-1-1v-22c0-0.547 0.453-1 1-1h8c0.547 0 1 0.453 1 1z" /></svg>                        </span>
                    </button>

                    <button type="button" class="slide-btn theme-aria-button slide-next-ticker">
                        <span class="btn__content" tabindex="-1">
                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path></svg>                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="theme-block-spacer"></div>
        </div>
    </div>

</header>

    
    
    <div id="content" class="site-content">
                <div id="theme-block-1" class="theme-block theme-main-banner">
            <div class="wrapper">
                <div class="column-row">
                    <div class="column column-6 column-md-12 column-sm-12 mb-md-20 column-order-2">
                                                                                    <header class="block-title-wrapper">
                                                                            <h2 class="block-title">
                                            Column Title Two                                        </h2>
                                                                    </header>
                                                        <div class="theme-slider-wrapper">
                                                                    <div class="theme-heading-controls">
                                        <button type="button" class="slide-btn slide-btn-small slide-prev-banner">
                                            <span class="screen-reader-text">Previous Slide</span>
                                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" /></path></svg>                                        </button>
                                        <button type="button" class="slide-btn slide-btn-small slide-next-banner">
                                            <span class="screen-reader-text">Next Slide</span>
                                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path></svg>                                        </button>
                                    </div>
                                
                                <div class="theme-main-slider-block" data-slick='{"autoplay": true, "dots": false, "rtl": false}'>
                                                                            <div class="theme-slider-item">
                                            <article id="theme-post-10" class="news-article news-article-panel post-10 post type-post status-publish format-standard has-post-thumbnail hentry category-browgame">
                                                <div class="data-bg data-bg-large" data-background="wp-content/uploads/2024/04/thumb10.jpg">
                                                    <a class="img-link" href="post/10/index.html" aria-label="Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants" tabindex="0"></a>
                                                </div>

                                                <div class="article-content mt-15">
                                                    <div class="entry-meta">
                                                        <div class="entry-meta-item entry-meta-categories"><span class="cat-links">
                            <a  href="post/category/browgame/index.html" rel="category tag">
                                <span>Brow game</span>
                            </a>

                        </span></div>                                                    </div>
                                                    <h2 class="entry-title entry-title-large">
                                                        <a href="post/10/index.html" tabindex="0"
                                                           rel="bookmark" title="Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants">
                                                            Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants                                                        </a>
                                                    </h2>
                                                    <div class="entry-footer">
                                                        <div class="entry-meta">
                                                            <div class="entry-meta-inline"><div class="entry-meta-item entry-meta-byline"> <span class="author vcard"><a class="url fn n" href="post/author/EmilyTannenbaum/index.html">Emily Tannenbaum</a></span></div><div class="entry-meta-separator"></div><div class="entry-meta-item entry-meta-date"><span class="posted-on"><a href="post/date/2024/05/28/index.html" rel="bookmark"><time class="entry-date published updated" datetime="2024-05-28T03:56:42+00:00">May 28, 2024</time></a></span></div></div>                                                                                                                    </div>
                                                    </div>

                                                    <div class="entry-content hidden-xs-element entry-content-muted">
                                                        <p>Blake Lively went in a completely different sartorial direction.</p>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                                                    </div>
                            </div>
                                                </div>
                    <div class="column column-3 column-md-6 column-sm-6 column-xs-12 mb-md-20 column-order-3">
                        <header id="theme-banner-navs">
                            <ul>
                                <li class="active">
                                    <a href="#banner-tab-1">
                                        Popular                                    </a>
                                </li>
                                <li>
                                    <a href="#banner-tab-2">
                                        latest                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="main-banner-right">
                            <div id="banner-tab-1" class="twp-banner-tab">
                                                                        <article id="theme-post-10" class="news-article news-article-instant post-10 post type-post status-publish format-standard has-post-thumbnail hentry category-browgame">
                                                <div class="entry-meta">
                                                    <div class="entry-meta-item entry-meta-categories"><span class="cat-links">
                            <a  href="post/category/browgame/index.html" rel="category tag">
                                <span>Brow game</span>
                            </a>

                        </span></div>                                                </div>
                                                                                                    <div class="data-bg data-bg-small" data-background="wp-content/uploads/2024/04/thumb10.jpg">
                                                        <a class="img-link" href="post/10/index.html" aria-label="Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants" tabindex="0"></a>
                                                    </div>
                                                
                                                <div class="article-content mt-10">
                                                    <h3 class="entry-title entry-title-small mb-15">
                                                        <a href="post/10/index.html" tabindex="0" rel="bookmark" title="Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants">
                                                            Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants                                                        </a>
                                                    </h3>
                                                    <div class="entry-meta entry-meta-default">
                                                        <div class="entry-meta-item entry-meta-date"><span class="entry-meta-icon calendar-icon"> <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="currentColor" d="M4.60069444,4.09375 L3.25,4.09375 C2.47334957,4.09375 1.84375,4.72334957 1.84375,5.5 L1.84375,7.26736111 L16.15625,7.26736111 L16.15625,5.5 C16.15625,4.72334957 15.5266504,4.09375 14.75,4.09375 L13.3993056,4.09375 L13.3993056,4.55555556 C13.3993056,5.02154581 13.0215458,5.39930556 12.5555556,5.39930556 C12.0895653,5.39930556 11.7118056,5.02154581 11.7118056,4.55555556 L11.7118056,4.09375 L6.28819444,4.09375 L6.28819444,4.55555556 C6.28819444,5.02154581 5.9104347,5.39930556 5.44444444,5.39930556 C4.97845419,5.39930556 4.60069444,5.02154581 4.60069444,4.55555556 L4.60069444,4.09375 Z M6.28819444,2.40625 L11.7118056,2.40625 L11.7118056,1 C11.7118056,0.534009742 12.0895653,0.15625 12.5555556,0.15625 C13.0215458,0.15625 13.3993056,0.534009742 13.3993056,1 L13.3993056,2.40625 L14.75,2.40625 C16.4586309,2.40625 17.84375,3.79136906 17.84375,5.5 L17.84375,15.875 C17.84375,17.5836309 16.4586309,18.96875 14.75,18.96875 L3.25,18.96875 C1.54136906,18.96875 0.15625,17.5836309 0.15625,15.875 L0.15625,5.5 C0.15625,3.79136906 1.54136906,2.40625 3.25,2.40625 L4.60069444,2.40625 L4.60069444,1 C4.60069444,0.534009742 4.97845419,0.15625 5.44444444,0.15625 C5.9104347,0.15625 6.28819444,0.534009742 6.28819444,1 L6.28819444,2.40625 Z M1.84375,8.95486111 L1.84375,15.875 C1.84375,16.6516504 2.47334957,17.28125 3.25,17.28125 L14.75,17.28125 C15.5266504,17.28125 16.15625,16.6516504 16.15625,15.875 L16.15625,8.95486111 L1.84375,8.95486111 Z" /></svg></span><span class="posted-on"><a href="post/date/2024/05/28/index.html" rel="bookmark"><time class="entry-date published updated" datetime="2024-05-28T03:56:42+00:00">May 28, 2024</time></a></span></div>                                                    </div>
                                                </div>
                                        </article>
                                                                    </div>
                            <div id="banner-tab-2" class="twp-banner-tab">
                                                                                                            <article id="theme-post-10" class="news-article news-article-instant post-10 post type-post status-publish format-standard has-post-thumbnail hentry category-browgame">
                                            <div class="entry-meta">
                                                <div class="entry-meta-item entry-meta-categories"><span class="cat-links">
                            <a  href="post/category/browgame/index.html" rel="category tag">
                                <span>Brow game</span>
                            </a>

                        </span></div>                                            </div>
                                                                                            <div class="data-bg data-bg-small " data-background="wp-content/uploads/2024/04/thumb10.jpg">
                                                    <a class="img-link" href="post/10/index.html" aria-label="Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants" tabindex="0"></a>
                                                </div>
                                            
                                                <div class="article-content mt-10">
                                                    <h3 class="entry-title entry-title-small mb-15">
                                                        <a href="post/10/index.html" tabindex="0" rel="bookmark" title="Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants">
                                                            Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants                                                        </a>
                                                    </h3>
                                                    <div class="entry-meta entry-meta-default">
                                                        <div class="entry-meta-item entry-meta-date"><span class="entry-meta-icon calendar-icon"> <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="currentColor" d="M4.60069444,4.09375 L3.25,4.09375 C2.47334957,4.09375 1.84375,4.72334957 1.84375,5.5 L1.84375,7.26736111 L16.15625,7.26736111 L16.15625,5.5 C16.15625,4.72334957 15.5266504,4.09375 14.75,4.09375 L13.3993056,4.09375 L13.3993056,4.55555556 C13.3993056,5.02154581 13.0215458,5.39930556 12.5555556,5.39930556 C12.0895653,5.39930556 11.7118056,5.02154581 11.7118056,4.55555556 L11.7118056,4.09375 L6.28819444,4.09375 L6.28819444,4.55555556 C6.28819444,5.02154581 5.9104347,5.39930556 5.44444444,5.39930556 C4.97845419,5.39930556 4.60069444,5.02154581 4.60069444,4.55555556 L4.60069444,4.09375 Z M6.28819444,2.40625 L11.7118056,2.40625 L11.7118056,1 C11.7118056,0.534009742 12.0895653,0.15625 12.5555556,0.15625 C13.0215458,0.15625 13.3993056,0.534009742 13.3993056,1 L13.3993056,2.40625 L14.75,2.40625 C16.4586309,2.40625 17.84375,3.79136906 17.84375,5.5 L17.84375,15.875 C17.84375,17.5836309 16.4586309,18.96875 14.75,18.96875 L3.25,18.96875 C1.54136906,18.96875 0.15625,17.5836309 0.15625,15.875 L0.15625,5.5 C0.15625,3.79136906 1.54136906,2.40625 3.25,2.40625 L4.60069444,2.40625 L4.60069444,1 C4.60069444,0.534009742 4.97845419,0.15625 5.44444444,0.15625 C5.9104347,0.15625 6.28819444,0.534009742 6.28819444,1 L6.28819444,2.40625 Z M1.84375,8.95486111 L1.84375,15.875 C1.84375,16.6516504 2.47334957,17.28125 3.25,17.28125 L14.75,17.28125 C15.5266504,17.28125 16.15625,16.6516504 16.15625,15.875 L16.15625,8.95486111 L1.84375,8.95486111 Z" /></svg></span><span class="posted-on"><a href="post/date/2024/05/28/index.html" rel="bookmark"><time class="entry-date published updated" datetime="2024-05-28T03:56:42+00:00">May 28, 2024</time></a></span></div>                                                    </div>
                                                </div>

                                        </article>
                                                                                                        </div>
                        </div>
                    </div>
                                            <div class="column column-3 column-md-6 column-sm-6 column-xs-12 column-order-1">
                                                            <header class="block-title-wrapper">
                                                                            <h2 class="block-title">
                                            Column Title One                                        </h2>
                                                                    </header>
                                                        <div class="main-banner-left">
                                                                    <article id="theme-post-10" class="news-article news-article-instant post-10 post type-post status-publish format-standard has-post-thumbnail hentry category-browgame">
                                        <div class="entry-meta">
                                            <div class="entry-meta-item entry-meta-categories"><span class="cat-links">
                            <a  href="post/category/browgame/index.html" rel="category tag">
                                <span>Brow game</span>
                            </a>

                        </span></div>                                        </div>

                                        
                                        <div class="article-content mt-10">

                                            <h3 class="entry-title entry-title-medium ">
                                                <a href="post/10/index.html" tabindex="0" rel="bookmark" title="Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants">Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants</a>
                                            </h3>
                                            <div class="entry-meta-wrapper">
                                                <div class="entry-meta">
                                                    <div class="entry-meta-inline"><div class="entry-meta-item entry-meta-byline"> <span class="author vcard"><a class="url fn n" href="post/author/EmilyTannenbaum/index.html">Emily Tannenbaum</a></span></div><div class="entry-meta-separator"></div><div class="entry-meta-item entry-meta-date"><span class="posted-on"><a href="post/date/2024/05/28/index.html" rel="bookmark"><time class="entry-date published updated" datetime="2024-05-28T03:56:42+00:00">May 28, 2024</time></a></span></div></div>                                                                                                    </div>
                                            </div>
                                        </div>
                                    </article>
                                                                </div>
                        </div>
                                        </div>
            </div>

            <div class="wrapper">
                <div class="theme-block-spacer theme-spacer-dark"></div>
            </div>
        </div>
            <div id="theme-block-4" class="theme-block theme-block-archive">
            <div class="wrapper">
                <div class="column-row">
                    <div id="primary" class="content-area theme-top-sticky">
                        <main id="main" class="site-main" role="main">

                                
                                    <div class="article-wraper archive-layout archive-layout-full">
                                        
<div class="theme-article-area">
    <article id="post-10" class="news-article post-10 post type-post status-publish format-standard has-post-thumbnail hentry category-browgame">

        
        <div class="post-thumbnail data-bg data-bg-large" data-background="wp-content/uploads/2024/04/thumb10.jpg">


        </div>

        <div class="post-content">

            <header class="entry-header">

                
                    <div class="entry-meta">

                        <div class="entry-meta-item entry-meta-categories"><span class="cat-links">
                            <a  href="post/category/browgame/index.html" rel="category tag">
                                <span>Brow game</span>
                            </a>

                        </span></div>
                    </div>

                                <h2 class="entry-title entry-title-large">

                    <a href="post/10/index.html" rel="bookmark" title="Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants">Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants</a>
                                    </h2>

            </header>



            <div class="entry-content entry-content-muted">
                <p>Blake Lively went in a completely different sartorial direction.</p>

            </div>

            

            <div class="entry-footer">
                <div class="entry-meta">
                    <div class="entry-meta-inline"><div class="entry-meta-item entry-meta-byline"> <span class="author vcard"><a class="url fn n" href="post/author/EmilyTannenbaum/index.html">Emily Tannenbaum</a></span></div><div class="entry-meta-separator"></div><div class="entry-meta-item entry-meta-date"><span class="posted-on"><a href="post/date/2024/05/28/index.html" rel="bookmark"><time class="entry-date published updated" datetime="2024-05-28T03:56:42+00:00">May 28, 2024</time></a></span></div></div>                </div>

            </div>

            
        </div>

    </article>
</div>                                    </div>

                                    
                        </main><!-- #main -->
                    </div>

                    
<aside id="secondary" class="widget-area theme-top-sticky">
	<div id="block-2" class="widget widget_block widget_search"><form role="search" method="get" action="" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search"><label for="wp-block-search__input-1" class="wp-block-search__label">Search</label><div class="wp-block-search__inside-wrapper " ><input type="search" id="wp-block-search__input-1" class="wp-block-search__input " name="s" value="" placeholder=""  required /><button type="submit" class="wp-block-search__button  "  >Search</button></div></form></div><div id="block-3" class="widget widget_block"><div class="wp-container-1 wp-block-group"><div class="wp-block-group__inner-container"><h2>Recent posts</h2><ul class="wp-block-latest-posts__list wp-block-latest-posts"><li><a class="wp-block-latest-posts__post-title" href="post/10/index.html">Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants</a></li>
</ul></div></div></div><div id="block-4" class="widget widget_block"><div class="wp-container-2 wp-block-group"><div class="wp-block-group__inner-container"><h2>Recent comments</h2><div class="no-comments wp-block-latest-comments">No comments to show.</div></div></div></div></aside><!-- #secondary -->
                </div>
            </div>
            <div class="wrapper">
                <div class="theme-block-spacer theme-spacer-dark"></div>
            </div>
        </div>

            
        
            <div id="theme-block-7" class="theme-block theme-block-recommended">
                <div class="wrapper">
                    <div class="column-row">

                        
                            <div class="column column-12 column-sm-12">
                                <header class="block-title-wrapper">

                                    
                                        <h2 class="block-title">
                                            You May Also Like                                        </h2>

                                    
                                    
                                </header>

                            </div>

                        

                        
                                <div class="column column-4 column-sm-6 column-xs-12">
                                    <article id="theme-post-10" class="news-article news-article-panel post-10 post type-post status-publish format-standard has-post-thumbnail hentry category-browgame">
                                        <div class="entry-meta">
                                            <div class="entry-meta-item entry-meta-categories"><span class="cat-links">
                            <a  href="post/category/browgame/index.html" rel="category tag">
                                <span>Brow game</span>
                            </a>

                        </span></div>                                        </div>

                                        <div class="data-bg data-bg-medium" data-background="wp-content/uploads/2024/04/thumb10.jpg">

                                            <a class="img-link" href="post/10/index.html" aria-label="Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants" tabindex="0"></a>
                                        </div>

                                        <div class="article-content mt-15">
                                            <h3 class="entry-title entry-title-medium">
                                                <a href="post/10/index.html" tabindex="0" rel="bookmark" title="Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants">Gigi Hadid shibashootout Celebrated Her Birthday in a Sheer Lace Corset and Matching Pants</a>
                                            </h3>

                                            <div class="entry-meta">
                                                <div class="entry-meta-inline"><div class="entry-meta-item entry-meta-byline"> <span class="author vcard"><a class="url fn n" href="post/author/EmilyTannenbaum/index.html">Emily Tannenbaum</a></span></div><div class="entry-meta-separator"></div><div class="entry-meta-item entry-meta-date"><span class="posted-on"><a href="post/date/2024/05/28/index.html" rel="bookmark"><time class="entry-date published updated" datetime="2024-05-28T03:56:42+00:00">May 28, 2024</time></a></span></div></div>                                                                                            </div>
                                        </div>
                                    </article>

                                </div>

                                                </div>
                </div>
                <div class="wrapper">
                    <div class="theme-block-spacer theme-spacer-dark"></div>
                </div>
            </div>

        
    </div>




        <div class="header-searchbar">
            <div class="header-searchbar-inner">
                <div class="wrapper">
                    <div class="header-searchbar-panel">

                        <div class="header-searchbar-area">
                            <a class="skip-link-search-top" href="javascript:void(0)"></a>
                            <form role="search" method="get" class="search-form" action="">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
			</form>                        </div>

                        <button type="button" id="search-closer" class="close-popup">
                            <span class="screen-reader-text">Close Search</span>
                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><polygon fill="currentColor" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102" /></svg>                        </button>
                    </div>
                </div>
            </div>
        </div>

    
        <div id="offcanvas-menu">
            <div class="offcanvas-wraper">

                <div class="close-offcanvas-menu">

                    <a class="skip-link-off-canvas" href="javascript:void(0)"></a>

                    <div class="offcanvas-close">



                        <button type="button" class="button-offcanvas-close">

                            <span class="offcanvas-close-label">
                                Close                            </span>

                            <span class="bars">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>

                        </button>

                    </div>
                </div>

                <div id="primary-nav-offcanvas" class="offcanvas-item offcanvas-main-navigation">
                    <nav class="primary-menu-wrapper">
                        <ul class="primary-menu theme-menu">

                            <li class="page_item page-item-14"><div class="submenu-wrapper"><a href="cookies/index.html">Cookie policy</a></div></li>
<li class="page_item page-item-12"><div class="submenu-wrapper"><a href="privacy-policy/index.html">Privacy policy</a></div></li>
<li class="page_item page-item-13"><div class="submenu-wrapper"><a href="terms-of-use/index.html">Terms of use</a></div></li>

                        </ul>
                    </nav>
                </div>

                
                <a class="skip-link-offcanvas screen-reader-text" href="javascript:void(0)"></a>
                
            </div>
        </div>

    

<footer id="site-footer" role="contentinfo">
            <div class="site-info">


             <div class="wrapper">
                <div class="column-row">
                    
                </div>
             </div>
            <div class="wrapper">
                <div class="theme-block-spacer"></div>
            </div>
            <div class="wrapper">
                <div class="column-row">
                    <div class="column column-8 column-sm-12">
                        <div class="footer-copyright">
                            Copyright &copy 2024 <a href="" title="Brow game" ><span>Brow game. </span></a> All rights reserved.<br>Theme: Newz By <a href="https://www.themeinwp.com/theme/newz"  title="Themeinwp" target="_blank" rel="author"><span>Themeinwp. </span></a>Powered by <a href="https://wordpress.org" title="WordPress" target="_blank"><span>WordPress.</span></a>                        </div>
                    </div>



                </div>
            </div>
            
            <div class="hide-no-js">
                <button type="button" class="scroll-up">
                    <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path></svg>                </button>
            </div>

                    </div>

    
</footer>


</div>
<style>.wp-container-1 > .alignleft { float: left; margin-inline-start: 0; margin-inline-end: 2em; }.wp-container-1 > .alignright { float: right; margin-inline-start: 2em; margin-inline-end: 0; }.wp-container-1 > .aligncenter { margin-left: auto !important; margin-right: auto !important; }</style>
<style>.wp-container-2 > .alignleft { float: left; margin-inline-start: 0; margin-inline-end: 2em; }.wp-container-2 > .alignright { float: right; margin-inline-start: 2em; margin-inline-end: 0; }.wp-container-2 > .aligncenter { margin-left: auto !important; margin-right: auto !important; }</style>
<script src='wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
<script src='wp-content/themes/newz/assets/lib/sidr/js/jquery.sidr.min.js?ver=6.0' id='jquery-sidr-js'></script>
<script src='wp-content/themes/newz/assets/lib/slick/js/slick.min.js?ver=6.0' id='slick-js'></script>
<script id='newz-ajax-js-extra'>
var newz_ajax = {"ajax_url":"\/wp-admin\/admin-ajax.php","ajax_nonce":"ce5bbf9ece"};
</script>
<script src='wp-content/themes/newz/assets/lib/custom/js/ajax.js?ver=6.0' id='newz-ajax-js'></script>
<script id='newz-custom-js-extra'>
var newz_custom = {"single_post":"1","newz_ed_post_reaction":"","next_svg":"<svg class=\"svg-icon\" aria-hidden=\"true\" role=\"img\" focusable=\"false\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\"><path fill=\"currentColor\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"><\/path><\/svg>","prev_svg":"<svg class=\"svg-icon\" aria-hidden=\"true\" role=\"img\" focusable=\"false\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\"><path fill=\"currentColor\" d=\"M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z\" \/><\/path><\/svg>","play":"<svg class=\"svg-icon\" aria-hidden=\"true\" role=\"img\" focusable=\"false\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"22\" height=\"22\" viewBox=\"0 0 22 28\"><path fill=\"currentColor\" d=\"M21.625 14.484l-20.75 11.531c-0.484 0.266-0.875 0.031-0.875-0.516v-23c0-0.547 0.391-0.781 0.875-0.516l20.75 11.531c0.484 0.266 0.484 0.703 0 0.969z\" \/><\/svg>","pause":"<svg class=\"svg-icon\" aria-hidden=\"true\" role=\"img\" focusable=\"false\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"22\" height=\"22\" viewBox=\"0 0 24 28\"><path fill=\"currentColor\" d=\"M24 3v22c0 0.547-0.453 1-1 1h-8c-0.547 0-1-0.453-1-1v-22c0-0.547 0.453-1 1-1h8c0.547 0 1 0.453 1 1zM10 3v22c0 0.547-0.453 1-1 1h-8c-0.547 0-1-0.453-1-1v-22c0-0.547 0.453-1 1-1h8c0.547 0 1 0.453 1 1z\" \/><\/svg>","mute":"<svg class=\"svg-icon\" aria-hidden=\"true\" role=\"img\" focusable=\"false\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"22\" height=\"22\" viewBox=\"0 0 448.075 448.075\"><path fill=\"currentColor\" d=\"M352.021,16.075c0-6.08-3.52-11.84-8.96-14.4c-5.76-2.88-12.16-1.92-16.96,1.92l-141.76,112.96l167.68,167.68V16.075z\" \/><path fill=\"currentColor\" d=\"M443.349,420.747l-416-416c-6.24-6.24-16.384-6.24-22.624,0s-6.24,16.384,0,22.624l100.672,100.704h-9.376 c-9.92,0-18.56,4.48-24.32,11.52c-4.8,5.44-7.68,12.8-7.68,20.48v128c0,17.6,14.4,32,32,32h74.24l155.84,124.48 c2.88,2.24,6.4,3.52,9.92,3.52c2.24,0,4.8-0.64,7.04-1.6c5.44-2.56,8.96-8.32,8.96-14.4v-57.376l68.672,68.672 c3.136,3.136,7.232,4.704,11.328,4.704s8.192-1.568,11.328-4.672C449.589,437.131,449.589,427.019,443.349,420.747z\" \/><\/svg>","unmute":"<svg class=\"svg-icon\" aria-hidden=\"true\" role=\"img\" focusable=\"false\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"22\" height=\"22\" viewBox=\"0 0 480 480\"><path fill=\"currentColor\" d=\"M278.944,17.577c-5.568-2.656-12.128-1.952-16.928,1.92L106.368,144.009H32c-17.632,0-32,14.368-32,32v128 c0,17.664,14.368,32,32,32h74.368l155.616,124.512c2.912,2.304,6.464,3.488,10.016,3.488c2.368,0,4.736-0.544,6.944-1.6 c5.536-2.656,9.056-8.256,9.056-14.4v-416C288,25.865,284.48,20.265,278.944,17.577z\" \/><path fill=\"currentColor\" d=\"M368.992,126.857c-6.304-6.208-16.416-6.112-22.624,0.128c-6.208,6.304-6.144,16.416,0.128,22.656 C370.688,173.513,384,205.609,384,240.009s-13.312,66.496-37.504,90.368c-6.272,6.176-6.336,16.32-0.128,22.624 c3.136,3.168,7.264,4.736,11.36,4.736c4.064,0,8.128-1.536,11.264-4.64C399.328,323.241,416,283.049,416,240.009 S399.328,156.777,368.992,126.857z\" \/><path fill=\"currentColor\" d=\"M414.144,81.769c-6.304-6.24-16.416-6.176-22.656,0.096c-6.208,6.272-6.144,16.416,0.096,22.624 C427.968,140.553,448,188.681,448,240.009s-20.032,99.424-56.416,135.488c-6.24,6.24-6.304,16.384-0.096,22.656 c3.168,3.136,7.264,4.704,11.36,4.704c4.064,0,8.16-1.536,11.296-4.64C456.64,356.137,480,299.945,480,240.009 S456.64,123.881,414.144,81.769z\" \/><\/svg>","play_text":"Play","pause_text":"Pause","mute_text":"Mute","unmute_text":"Unmute"};
</script>
<script src='wp-content/themes/newz/assets/lib/custom/js/custom.js?ver=6.0' id='newz-custom-js'></script>
<script id='newz-pagination-js-extra'>
var newz_pagination = {"paged":"1","maxpage":"1","nextLink":"","ajax_url":"\/wp-admin\/admin-ajax.php","loadmore":"Load More Posts","nomore":"No More Posts","loading":"Loading...","pagination_layout":"numeric","ajax_nonce":"ce5bbf9ece"};
</script>
<script src='wp-content/themes/newz/assets/lib/custom/js/pagination.js?ver=6.0' id='newz-pagination-js'></script>
</body>
</html>
