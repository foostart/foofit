 $(document).ready(function () {     
    //Initiate equalize on load     
    equalize();  
    sizenews();
    });     
    //Equalize on resizing of window        
    $(window).resize(function () {      
        removeHeights();        
        equalize();     
    });     
    function equalize() {       
        $(".container .row").each(function () {      
            var heights = $(this).find(".img-responsive ").map(function () {        
                return $(this).height();        
            }).get(),       
            minHeight = Math.min.apply(null, heights);      
            $(this).find(".img-responsive").height(minHeight);     
        });     
    }       
    function removeHeights() {      
        $(".container .row").each(function () {      
            $(this).find(".img-responsive").height("auto");        
        });     
    } 
    
    function sizenews() {       
        $(".container .row").each(function () {      
            var heights = $(this).find(".top_news_block").map(function () {        
                return $(this).height();        
            }).get(),       
           maxHeight = Math.max.apply(null, heights);      
            $(this).find(".top_news_block").height(maxHeight);     
        });     
    } 
    
    
    