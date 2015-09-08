$(document).ready(function () {

    $("#save-reg-user").click(function (e) {

        e.stopImmediatePropagation();

        var getResponse = doAjaxRequest({
                requestType: "POST"
              , urlPath: baseUrl() + '/save-record'
              , formId: '#user-reg-form'
              , dataContainer: false
              , dataType: 'json'
            });

        if (getResponse.msg == "success") {

            $("#user-reg-form").find('input').val('');

            alertNotification({
                title: 'Success'
              , message: 'A new record has been successfully created.'
              , type: BootstrapDialog.TYPE_SUCCESS
            });

        } else {

            alertNotification({
                title: 'Failed'
              , message: 'Record creation failed.'
              , type: BootstrapDialog.TYPE_DANGER
            });
        }

    });

});
