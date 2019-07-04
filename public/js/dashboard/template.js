var Template = function () {

    // ------------------------------------------------------------------------

    this.__construct = function () {
        console.log('Template created');
    };

    // ------------------------------------------------------------------------

    this.todo = function (obj) {
        var output = '';
        if (obj.completed == 1) {
            output += '<div id="todo_' + obj.todo_id + '" class="todo-completed">';
        } else {
            output += '<div id="todo_' + obj.todo_id + '">';
        }
        output += '<span>' + obj.content + '</span>';

        var data_completed = (obj.completed == 1) ? 0 : 1;
        var data_completed_text = (obj.completed == 1) ? 'Uncomplete' : 'Complete';
        // var data_completed_class = (obj.completed == 1) ? "todo_complete" : "todo_uncomplete";
        output += '<a class="todo_update" data-id="' + obj.todo_id + '" data-completed="'+ data_completed +'" href="api/update_todo">'+ data_completed_text +'</a>';
        // output += '<a class="todo_complete" data-id="' + obj.todo_id + '" data-completed="1" href="api/update_todo">Complete</a>';

        output += '<a data-id="' + obj.todo_id + '" class="todo_delete" href="api/delete_todo">Delete</a>';
        output += '</div>';

        return output;
    };

    // ------------------------------------------------------------------------
    this.note = function (obj) {
        var output = '';
        output += '<div id="note_' + obj.note_id + '">';
        output += '<span>' + obj.title + '</span>';
        output += '<span>' + obj.content + '</span>';
        output += '</div>';

        return output;
    };

    // ------------------------------------------------------------------------

    this.__construct();

};
