jQuery(document).ready(function () {
    jQuery('.main_contato-form').submit(function () {
        var dados = jQuery(this).serialize();

        jQuery.ajax({
            type: "POST",
            url: "./themes/html/mail/enviar.php",
            data: dados,
            success: function (retorno) {
                alert(retorno);
            },
            error: function (a, c) {
                alert('Erro: ' + a[status] + ' ' + c);
            }
        });

        return false;
    });
});