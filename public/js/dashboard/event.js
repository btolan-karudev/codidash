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
            console.log('created todo cliked');

            return false;
        })
    };

    // ------------------------------------------------------------------------

    var create_note = function () {
        $('#create_note').submit(function (evt) {
            console.log('created note cliked');

            return false;
        })
    };

    // ------------------------------------------------------------------------

    this.__construct();

};
