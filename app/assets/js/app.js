var App = {
    log: function( m ){
        console.log('>>',m);
    },
    init: function(){
        App.log('Init');
    }
};

$(document).ready(App.init);
