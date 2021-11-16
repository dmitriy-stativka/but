require("../sass/style.scss");

require("../fonts/fontello/css/fontello.css");


// require("./vendor/bootstrap-transition");
// require("./vendor/bootstrap-collapse");
require("./custom/main.js");


(function ($) {

    if($('.use_cases_container').length > 0){
        require("./custom/loadmore_cases");
    }

    if($('.budget-video').length > 0){
        require("./custom/start-video");
    }

    if($('.hero-words').length > 0){
        require("./custom/hero-words");
    }
    


})(jQuery);