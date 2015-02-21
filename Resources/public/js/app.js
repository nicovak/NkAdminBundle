jQuery(function($) {
    /**
     * Gestion alert animate css
     */
    if($('.alert').length > 0) {
        $('.alert.alert-success, .alert.alert-danger').addClass('animated bounceInRight');
        setTimeout(function () {
            $('.alert.alert-success, .alert.alert-danger').addClass('bounceOutRight');
        },5000);

    }

});