// document is ready to go
(function ($) {
  console.log("hiya");

    $(document).ready(function(){
        pathname = $(location).attr('pathname').split("/");
    
        utmCampaign = pathname[2];
    
        pieces = utmCampaign.split("-");
        utmSource = pieces[0];
    
        $('a.newsletterLink').each(function(){
          var oldUrl = $(this).attr("href");
          var newUrl = oldUrl +'&utm_campaign='+ utmCampaign +'&utm_source=' + utmSource;
          console.log(newUrl);
          $(this).attr("href", newUrl);
        });
    
      });
})(jQuery); 