var Evento = function () {

    // ------------------------------------------------------------------------

    this.__construct = function () {
        console.log('Event created');
        Result = new Result();
        create_note();
        create_todo();

        update_note();
        update_todo();

        delete_note();
        delete_todo();


    };

    // ------------------------------------------------------------------------
    var create_todo = function () {
        $('#create_todo').submit(function (evt) {
            evt.preventDefault();
            console.log('created todo cliked');

            var url = $(this).attr('action');
            var postData = $(this).serialize();

            $.post(url, postData, function (o) {
                if (o.result == 1) {
                    Result.success();
                } else {
                    Result.error();
                }
            }, 'json');

        });
    };

    // ------------------------------------------------------------------------

    var create_note = function () {
        $('#create_note').submit(function (evt) {
            console.log('created note cliked');

            return false;
        })
    };

    // ------------------------------------------------------------------------

    var update_todo = function() {

    };

    // ------------------------------------------------------------------------

    var update_note = function() {

    };

    // ------------------------------------------------------------------------

    var delete_todo = function() {

    };

    // ------------------------------------------------------------------------

    var delete_note = function() {

    };

    // ------------------------------------------------------------------------

    this.__construct();

};
