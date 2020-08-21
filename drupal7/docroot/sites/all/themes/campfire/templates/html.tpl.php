<!doctype html>

<?php if ($show_scripts): ?>

<html class="no-js" xml:lang="<?php print $language->language;?>" lang="<?php print $language->language;?>" dir="<?php print $language->dir;?>" <?php print $rdf_namespaces;?>>
  <head>
  <title><?php print $head_title;?> Cornell Arts & Sciences</title>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KWFHLFH');</script>
    <!-- End Google Tag Manager -->
    <meta charset='utf-8'>
    <meta name="google-site-verification" content="O9L06AHQnWXwYZ_ZBm47p75B67ADm7LNWQbexWy2nvw" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <?php print $head;?>
    <?php print $styles;?>
    <link href="/sites/all/themes/campfire/css/print.css" media="print" rel="stylesheet" type="text/css" />

    <script src="https://use.typekit.net/fde2wmo.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    
    <?php print $scripts;?>
<!-- cu emergency banner -->
<script src="//embanner.univcomm.cornell.edu/OWC-emergency-banner.js" type="text/javascript" async></script>
<script type="text/javascript" src="/sites/all/themes/campfire/js/build/campAS-plugins.js">
</script>


</head>
  <!-- body in -->
  <body class="<?php print $classes;?>" <?php print $attributes;?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWFHLFH"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <?php print $page_top;?>
    <?php print $page;?>
    <?php print $page_bottom;?>
  <!-- body out -->
  <script type="text/javascript" src="/sites/all/themes/campfire/js/build/campAS-scripts.js"></script>
  
  </body>

<?php else: ?>

<?php // newsletter template ?>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html" />
            <meta charset='utf-8'>
            <meta name="viewport" content="width=device-width"/>
            <title><?php print $head_title;?></title>
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
            <?php print $page;?>
        </body>

<?php endif;?>

</html>
