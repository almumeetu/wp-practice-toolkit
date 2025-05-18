(function($) {
    $('#wptk-form').on('submit', function(e) {
        e.preventDefault();

        var name = $(this).find('input[name="name"]').val();

        $.post(wptk_ajax_obj.ajax_url, {
            action: 'wptk_submit_form',
            nonce: wptk_ajax_obj.nonce,
            name: name
        }, function(response) {
            if (response.success) {
                $('#wptk-response').text(response.data.message);
            } else {
                $('#wptk-response').text('Something went wrong.');
            }
        });
    });
})(jQuery);