(function ($) {
    $(document).on('click', '.load-more-cases', function (e) {

        e.preventDefault();
        var button = $(this),
            data = {
                'action': 'loadmore_cases',
                'query': $(this).data('true_post'),
                'page': $(this).data('cur_page')
            };
       
        $.ajax({ // you can also use $.post here
            url: ajaxurl.url, // AJAX handler
            data: data,
            type: 'POST',
            beforeSend: function (xhr) {

            },
            success: function (data) {
                if (data) {

                    $('.use_cases_container .tab-pane.active .list').append(data); // insert new posts
                    let cur_page = button.data('cur_page') + 1;
                    button.data('cur_page',cur_page);
                    if(button.data('cur_page') == button.data('max_page'))
                        button.hide(); // if last page, remove the button

                    // you can also fire the "post-load" event here if you use a plugin that requires it
                    // $( document.body ).trigger( 'post-load' );
                } else {
                    button.hide(); // if no data, remove the button as well
                }
            }
        });
    });

})(jQuery);