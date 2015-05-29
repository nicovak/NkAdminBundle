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
    
    /**
     * Gestion bouton upload
     */
    $(document).on('change','.btn-file', function(e){
        var btn = $(this);
        btn.find('i').removeClass('fa-plus').addClass('fa-check');
        btn.find('strong').html(' Fichier ajouté : ');
        var f = e.target.files[0].name;
        if(f.length > 30) f = f.substr(0,27)+'...';
        btn.parent().parent().find('.text-file').val(f);
    });

    $('.sidebar-menu>li').each(function(){
       var icon = $(this).attr('icon');
       $(icon).insertBefore($(this).find('span'));
    });

});
