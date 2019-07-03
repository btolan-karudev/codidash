var Result = function () {

    // ------------------------------------------------------------------------

    this.__construct = function () {
        console.log('Result Created');
    };

    // ------------------------------------------------------------------------

    this.success = function (msg) {
        var dom = $("#success");
        if (typeof msg === 'undefined') {
            dom.html('Succes Undifined').show();
        }
        dom.html(msg).show();

        setTimeout(function () {
            dom.fadeOut();
        }, 5000)
    };

    // ------------------------------------------------------------------------

    this.error = function (msg) {
        var dom = $("#error");
        if (typeof msg === 'undefined') {
            dom.html('error Undifined').show();
        }
        if (typeof msg === 'object') {
            var output = '<ul>';
            for (var key in msg) {
                output += '<li>' + msg[key] + '</li>';
            }
            output += '</ul>';

            dom.html(output).show();
        } else {
            dom.html(msg).show();
        }


        setTimeout(function () {
            dom.fadeOut();
        }, 5000)
    };

    // ------------------------------------------------------------------------
    this.__construct();

};
