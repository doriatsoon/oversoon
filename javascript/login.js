$doc = $(document);

var GL_LOGIN = (function(module) {
    'use strict';
   
    var self = module;
    var timeout;
    var timeoutMax = 1000;
   
    var _setTimeOutLogic = function (functionName) {
       clearTimeout(timeout);
              timeout = setTimeout(functionName, timeoutMax);
    };
   
    
    var _closeReveal = function (reveal) {
        reveal.foundation('reveal','close');
        reveal.css("display", "none");
    };
    
    var _openReveal = function (reveal) {
        reveal.css("display", "block");
    };
    
    var _handleCloseConnectionReveal = function () {
        _closeReveal($('#authentification'));
        _openReveal($('#forgotten-password'));
    };
    
    var _handleOpenConnectionReveal = function () {
        $('#authentification').css("display", "block");
    };
   
    self.init = function() {
       $doc.on( 'click', '[data-reveal-id=forgotten-password]', _handleCloseConnectionReveal),
       $doc.on( 'click', '[data-reveal-id=authentification]', _handleOpenConnectionReveal);
    };
   
    return self;
   
}(GL_LOGIN || {}));


$doc.ready(function() {
       GL_LOGIN.init();
});