var App = {
    init: function(){
        App.log('documentReady');
    },
    windowReady: function(){
        App.log('windowReady');
    }
};

$(App.init);
