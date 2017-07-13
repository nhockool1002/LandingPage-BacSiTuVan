jQuery(document).scroll(function() {

        var documentTop = jQuery(document).scrollTop();
        console.log('this is current top of your document' + documentTop );
        //box top is 891
        if (documentTop > 841) {
            //change the value of the css at this point
            jQuery("#box").addClass("stayfix");
        }
        else        
        {
            jQuery("#box").removeClass("stayfix");
        }

});