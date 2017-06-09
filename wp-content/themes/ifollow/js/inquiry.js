jQuery(document).ready(function ($) {
    $(document).on('click', '.js-social-account', function () {
        var accountType = $(this).attr('data-type');
        $('input[name="social_account"]').val(accountType);
        return false;
    });

    $(document).on('click', '.js-payment-type', function () {
        var paymentType = $(this).attr('data-type');
        $('input[name="payment_type"]').val(paymentType);
        return false;
    });

    $(document).on('click', '.js-send-form', function () {
        var formData = new FormData($('#paymentForm')[0]);
        formData.append('action', 'inquiry');

        $.ajax({
            url: myajax.url,
            type: 'POST',
            contentType: false,
            processData: false,
            data: formData,
            success: function (data) {
                console.log(data);
            }
        });
        return false;
    });
});


