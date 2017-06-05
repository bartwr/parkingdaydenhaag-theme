<!DOCTYPE html>
<html lang="nl">

  <head> 
    <title>Park[ing] Day Den Haag</title> 

    <meta charset="utf-8">
    <meta name="keywords" content="parkingday, parking day, den haag, parkingdaydenhaag, parkingday den haag, parking day den haag, park day, parkday">
    <meta name="description" content="Parkingday is een internationaal fenomeen, een jaarlijks terugkerende interventie waarbij wereldwijd bewoners, initiatieven, creatieven, ontwerpers en kunstenaars, voor één dag parkeerplekken ombouwen tot kleine publieke parken.">
    <meta name="author" content="Janine Terlouw, Naomi Naus, LusthofXL">

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/menu.css" />

    <meta name="viewport" content="width=device-width">

    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(["setDomains", ["*.parkingdaydenhaag.nl"]]);
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//analytics.tuxion.nl/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', '29']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="//analytics.tuxion.nl/piwik.php?idsite=29" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->

    <script src="https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js"></script>

    <script>

    $(function() {
      $('#menu-toggle').on('click', function(e) {
        if(e) e.preventDefault();

        $('#menu').toggleClass('open');
      });
    });

    </script>

    <?php wp_head();?>

  </head> 
  <body <?php body_class(); ?>>

<wrapper> 
  <div id="menu" class="">
	  <div class="menu-inner"> 
  	 
      <a href="http://www.parkingdaydenhaag.nl" id="menu-logo"> 
        <img src="http://parkingdaydenhaag.nl/wp-content/themes/parkingday/img/logo/Parkingday_Logo_RGB_zwart.png" alt="Parkingday Den Haag logo">
  	  </a>

      <div class="socials">

        <ul id="menu-nav">
          <?php wp_nav_menu(); ?>
          <?php /* wp_list_pages( '&title_li=' ); */ ?>
        </ul>

        <div class="social-icons">
          <a target="_blank" href="https://www.facebook.com/parkingdaydenhaag/" class="icon"><img src="http://parkingdaydenhaag.nl/wp-content/themes/parkingday/img/facebook.svg"></a>
          <a target="_blank" href="https://twitter.com/parkingdayDH" class="icon"><img src="http://parkingdaydenhaag.nl/wp-content/themes/parkingday/img/twitter.svg"></a>
    	    <a target="_blank" href="https://www.instagram.com/parkingdaydenhaag/" class="icon"><img src="http://parkingdaydenhaag.nl/wp-content/themes/parkingday/img/instagram.svg"></a>
        </div>

      </div>      
  
      <a id="menu-toggle">&#9776;</a>

	  </div>	

      </div>

      <div class="page-section">
