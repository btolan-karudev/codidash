var Dashboard = function () {

    // ------------------------------------------------------------------------

    this.__construct = function () {
        console.log('Dashboard Created');
        Template = new Template();
        Evento = new Evento();
        // Result = new Result();
        load_todo();
        load_note();
    };

    // ------------------------------------------------------------------------

    var load_todo = function () {
        $.get('api/get_todo', function (o) {

            var output = '';
            for (var i = 0; i < o.length; i++) {
                output += Template.todo(o[i]);
            }
            $('#list_todo').html(output);
            Evento.delete_todo();
            Evento.update_todo();
        }, 'json');

    };

    // ------------------------------------------------------------------------

    var load_note = function () {
        $.get('api/get_note', function (o) {
            var output = '';
            for (var i = 0; i < o.length; i++) {
                output += Template.note(o[i]);
            }
            $('#list_note').html(output);
            Evento.create_note();
        }, 'json');
    };

    // ------------------------------------------------------------------------

    this.__construct();

};

