$(document).ready(function () {

function alertNotification(options) {

    BootstrapDialog.show({
        title: options.title
      , message: options.message
      , type: options.type
      , closable: false
      , buttons: [{
            icon: 'glyphicon glyphicon-remove'
          , label: 'Close'
          , cssClass: 'btn-default'
          , action: function (dialog) {
                dialog.close();
            }
        }]
    });

}


    $("#save-reg-user").click(function (e) {

        e.stopImmediatePropagation();

        $.ajax({
            type: "POST"
           , url: "http://localhost/codeigniter/myfunctions/registration"
           , data: {
                firstname: $("#fname").val()
              , middlename: $("#mname").val()
              , lastname: $("#lname").val()
              , username: $("#uname").val()
              , password: $("#password").val()
            }
           , dataType: 'json'
           , cache: false
           , async: true
           , error: function (jqXHR, textStatus, errorThrown) {
                // If the request fails, throw a notification.
                alert(textStatus + ': ' + jqXHR.status + ' ' + errorThrown);
            }
           , success: function (msg) {

                var notification = msg.msg.replace(/^\s*|\s*$/g, '');

               if (notification == "success") {
                    // do something
                    $("#user-reg-form").find('input').val('');

                    alertNotification({
                        title: 'Success'
                      , message: 'A new record has been successfully created.'
                      , type: BootstrapDialog.TYPE_SUCCESS
                    });

               } else {
                    // do something
                    alertNotification({
                        title: 'Failed'
                      , message: 'Record creation failed.'
                      , type: BootstrapDialog.TYPE_DANGER
                    });
               }
            }
        });

    });

});
