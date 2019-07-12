var url = wnm_custom.template_url;
var uri = wnm_custom.admin_url;
var home_url = wnm_custom.url;
var ajaxurl = home_url + '/wp-admin/admin-ajax.php';

$(".contactFeild form").submit(function (e){
        e.preventDefault();
        var name =    $(this).find('input[name=name]').val();
        var header =   $(this).find('input[name=header]').val();
        var email =   $(this).find('input[type=email]').val();
        var message = $(this).find('textarea[name=textQuestion]').val();
     $.ajax({
            type: "POST",
            url: ajaxurl,
            data: {
                action: 'ajax_order',
                name: name,
                header: header,
                email: email,
                message: message
            }
        }).done(function (data) { 
            $('input[name=name]').val('')
            $('input[name=header]').val('');
            $('input[type=email]').val('');
            $('textarea[name=textQuestion]').val('')
            $('#danke').modal('show');
        });
        return false;
    });
