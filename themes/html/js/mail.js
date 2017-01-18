jQuery(document).ready(function () {
    jQuery('.main_contato-form').submit(function () {
        $("form button").text('ENVIANDO...');
        var dados = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: "./themes/html/mail/enviar.php",
            data: dados,
            success: function (retorno) {
                $("form button").text('ENVIAR');
                $("form input").val("");
                $("form textarea").val("");
                $("form button[type = submit]").val("ENVIAR");

                $('#titulo-modal').html('E-mail enviado com Sucesso!');
                $('#retorno-email').html('<strong>' + retorno + '</strong> <br>' +
                        'Entraremos em contato com você o mais rápido possível.<br>' +
                        'Fique a vontade para continuar explorando nosso Site!');
                $("#modal").modal();
            },
            error: function (retorno) {
                $("form button").text('ENVIAR');
                $('#retorno-email').text('Email enviado com sucesso!!!' + retorno);
                $("#modal").modal();
            }
        });
        return false;
    });
});