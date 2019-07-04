var Evento = function () {

    // ------------------------------------------------------------------------

    this.__construct = function () {
        console.log('Event created');
        Result = new Result();

        create_note();
        create_todo();

        update_note();
        // update_todo();

        delete_note();
        // delete_todo();

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
                    Result.success('test succes');
                    var output = Template.todo(o.data[0]);
                    $('#list_todo').append(output);
                } else {
                    Result.error(o.error);
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

    this.update_todo = function () {
        $(".todo_update").on('click', function (e) {
            e.preventDefault();

            var self = $(this);
            var url = $(this).attr('href');
            var postData = {
                todo_id: $(this).attr('data-id'),
                completed: $(this).attr('data-completed')
            };

            $.post(url, postData, function (o) {
                if (o.result == 1) {
                    Result.success('Saved');
                    if (postData.completed == 1) {
                        self.parent('div').addClass('todo-completed');
                        self.html('Uncomplete');
                        self.attr('data-completed', 0)
                    } else {
                        self.parent('div').removeClass('todo-completed');
                        self.html('Complete');
                        self.attr('data-completed', 1)
                    }

                } else {
                    Result.error('Nothing Updated');
                }
            }, 'json');

        })
    };

    // ------------------------------------------------------------------------

    var update_note = function () {

    };

    // ------------------------------------------------------------------------

    this.delete_todo = function () {

        $(".todo_delete").on('click', function (e) {
            e.preventDefault();
            console.log('je suis la');
            var self = $(this).parent('div');
            var url = $(this).attr('href');
            var postData = {
                'todo_id': $(this).attr('data-id')
            };
            $.post(url, postData, function (o) {
                if (o.result == 1) {
                    Result.success('Item Deleted');
                    self.remove();
                } else {
                    Result.error(o.message);
                }
            }, 'json');
        });
    };

    // ------------------------------------------------------------------------

    var delete_note = function () {

    };

    // ------------------------------------------------------------------------

    this.__construct();

};
