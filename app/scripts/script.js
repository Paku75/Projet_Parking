var EditUser = function () {
    return {
        Onclick: function (el) {
            var tr = $(el).closest('tr');
            var name = $(tr).find('#login').text().trim();
            var date = $(tr).find('#email').text().trim();
            var time = $(tr).find('#mdp').text().trim();

            $(tr).find('#login').replaceWith('<input id="InputName" value="' + name + '" style="width:100%;"/>');
            $(tr).find('#email').replaceWith('<input id="InputName" value="' + name + '" style="width:100%;"/>');

//            $(tr).find('#btn_edit').replaceWith('<a id="btn_check" onclick="return Update.Onclick(this)" class="btn btn-default"><i id="check" class="fa fa-check fa-lg"></i></a>');
//            $(tr).find('#btn_del').replaceWith('<a id="btn_cancel" onclick="return CancelEdit.Onclick(this)" class="btn btn-default"><i id="cancel" class="fa fa-times fa-lg"></i></a>');
        }
    }
};