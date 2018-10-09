//Drupal.behaviors.myViewsRefresh = {
    //attach: function( context , settings) {
        var viewName = 'slideshow';

        // Your views should be Ajax enabled
        var instances = Drupal.views.instances;
        var myViews;

        // then simply need to iterate through the various
        // views instances name to find the view
        $.each( instances , function getInstance( index, element){
            if(element.settings.view_name == viewName ){
                myViews = '.js-view-dom-id-' + element.settings.view_dom_id;
            }
        });

            //if(typeof myViews !== 'undefined'){
                $setTimeout((myViews).trigger('RefreshView'), 3000);
            //}
        //);

    //}
//}
