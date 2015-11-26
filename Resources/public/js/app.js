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

    function FileConvertSize(aSize){
        aSize = Math.abs(parseInt(aSize, 10));
        var def = [[1, 'octets'], [1024, 'ko'], [1024*1024, 'Mo'], [1024*1024*1024, 'Go'], [1024*1024*1024*1024, 'To']];
        for(var i=0; i<def.length; i++){
            if(aSize<def[i][0]) return (aSize/def[i-1][0]).toFixed(2)+' '+def[i-1][1];
        }
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
        if(e.target.files[0].size > 1000000) {
            alert('Attention votre image n\'est certainement pas adapté pour un format web. Poids maximum recommandé 1Mo, votre image pèse '+FileConvertSize(e.target.files[0].size));
        }   
    });

    $('.sidebar-menu>li').each(function(){
       var icon = $(this).attr('icon');
       $(icon).insertBefore($(this).find('span'));
    });

});
