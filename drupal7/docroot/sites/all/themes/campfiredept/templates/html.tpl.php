<!doctype html>
<?php if ($show_scripts) : ?>
<html class="" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>" <?php print $rdf_namespaces; ?>> <!--<![endif]-->
  <head>
  <title><?php print $head_title; ?> Cornell Arts & Sciences</title>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="/sites/all/themes/campfiredept/js/modernizr-custom.js"></script>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <?php print $styles; ?>
    <link href="/sites/all/themes/campfiredept/css/print.css" media="print" rel="stylesheet" type="text/css" />


    <script src="https://use.typekit.net/fde2wmo.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!-- cu emergency banner -->
    <script src="//embanner.univcomm.cornell.edu/OWC-emergency-banner.js" type="text/javascript" async></script>
    <!-- recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <?php print $scripts; ?>
   

    <!--<link rel="stylesheet" href="/sites/all/themes/campfiredept/css/as-build.css">
    <link rel='stylesheet' href="/sites/all/themes/campfiredept/css/dept-ie.css">-->
    </head>


  <!-- body in -->
  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  <!-- body out -->



  <!--<script type="text/javascript" src="/sites/all/themes/campfiredept/js/build/campAS-plugins.js"></script>
  <script type="text/javascript" src="/sites/all/themes/campfiredept/js/build/campAS-scripts.js">
  </script>-->


<script type="text/javascript">
        /*<![CDATA[*/
        (function() {
            var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
            sz.src = '//siteimproveanalytics.com/js/siteanalyze_6120104.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
        })();
        /*]]>*/
        </script>   

  </body>

  <?php else: ?>
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
        <title><?php print $head_title; ?></title>
        <style>
        a{
            color: #b31b1b;
            text-decoration: none;
        }
        p{
            margin-bottom: 20px;
        }
        </style>
    </head>
    <body style="font-family: helvetica, arial, sans-serif;width: 100% !important;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;margin: 0;padding: 0;min-width: 100%;color: #222222;font-weight: normal;text-align: left;line-height: 27px;font-size: 18px;">
        <?php // all newsletter output in node--newsletter ?>
        <?php print $page; ?>
    </body>

<?php endif; ?>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<!-- <script type="text/javascript" src="/sites/all/themes/campfiredept/js/build/campAS-plugins.js">
</script> -->
<script type="text/javascript" src="/sites/all/themes/campfiredept/js/plugins/jquery.imagesLoaded.js"></script>
<script type="text/javascript" src="/sites/all/themes/campfiredept/js/plugins/jquery.nav.js"></script>
<script type="text/javascript" src="/sites/all/themes/campfiredept/js/plugins/jquery.pin.js"></script>
<script type="text/javascript" src="/sites/all/themes/campfiredept/js/plugins/list.min.js"></script>
<script type="text/javascript" src="/sites/all/themes/campfiredept/js/plugins/lodash.min.js"></script>
<script type="text/javascript" src="/sites/all/themes/campfiredept/js/plugins/magnific-popup.js"></script>
<script type="text/javascript" src="/sites/all/themes/campfiredept/js/build/campAS-scripts.js">
</script>
  </html>
