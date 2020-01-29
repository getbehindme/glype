<?php
/*******************************************************************
* Glype is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Glype
* and/or its licensors, successors and assigners. All rights reserved.
*
* Use of Glype is subject to the terms of the Software License Agreement.
* http://www.glype.com/license.php
********************************************************************
* This theme configuration file allows easy customization of the
* theme without editing the HTML templates.
*******************************************************************
* Theme: Simple
* Author: Glype
* Website: http://www.glype.com/
******************************************************************/

/*****************************************************************
* Themes can use "theme replacements". These are HTML tags of the format
* <!--[tag_name]--> in the template files. To automatically replace
* these placeholders with other text, use the $themeReplace array.
*  e.g.
* <!--[tag_name]--> will be replaced with the value of $themeReplace['tag_name']
******************************************************************/

// Website name $_SERVER['HTTP_HOST'].
$themeReplace['site_name'] = ' Getbehind.me&reg;';

// Meta description
$themeReplace['meta_description'] = <<<OUT
Access blocked websites with Getbehind.me free proxy, a simple way to hide your IP, keep your privacy and browse anonymously
OUT;

// Meta keywords (separate with comma)
$themeReplace['meta_keywords'] = <<<OUT

OUT;

// Proxy description text
$themeReplace['description'] = <<<OUT
   <p>Access blocked websites with Getbehind.me free proxy, a simple way to hide your IP, keep your privacy and browse anonymously</p>
   <p>This is a straightforward anonymizing solution allows for a safe, anonymous and online based browsing.
Use our proxy to surf anonymously online, hide your IP address, secure your internet connection, and protect your online identity</p>
<p>A free Web Proxy that provides security and anonymity while surfing the Web. 
It hides your real IP address, encrypts your traffic communication to the web, hide your internet history and protecting your online identity. </p>
<p>It does not require installation of any 3rd party software or any kind of registration.</p>
<div style="width:240px;text-align:center;margin:0px auto;"><a href='https://play.google.com/store/apps/details?id=me.getbehind.android&hl=en_US&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png' style="width:100%;"/></a></div>
OUT;

// Ad location above the form on the index page
$themeReplace['index_above_form'] = <<<OUT
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- web proxy ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4205835751010395"
     data-ad-slot="5157422095"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
OUT;

// Ad location below the form on the index page
$themeReplace['index_below_form'] = <<<OUT
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- web proxy ad bottom -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4205835751010395"
     data-ad-slot="3744160279"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
OUT;

// Ad location on proxied pages below the url mini-form
$themeReplace['proxied'] = <<<OUT
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- web proxy ad inner pages -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4205835751010395"
     data-ad-slot="5281313664"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
OUT;
