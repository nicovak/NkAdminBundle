Admin bundle implementation sonata admin
========================

Default config

    sonata_admin:
        title: ADMIN
        dashboard:
            blocks:
                -
                    position: left
                    type: sonata.admin.block.admin_list
                    settings:
                        groups: [parametres]
            groups:
                parametres:
                    label: Options
                    icon: '<i class="fa fa-cog"></i>'
                    items:
                        - nk.admin.parametre
        templates:
            layout: NkAdminBundle::standard_layout.html.twig
        assets:
            stylesheets:
                - bundles/sonataformatter/markitup/skins/sonata/style.css
                - bundles/sonataformatter/markitup/sets/markdown/style.css
                - bundles/sonataformatter/markitup/sets/html/style.css
                - bundles/sonataformatter/markitup/sets/textile/style.css
                - bundles/nkadmin/css/bootstrap.min.css
                - bundles/nkadmin/css/font-awesome.min.css
                - bundles/sonataadmin/vendor/AdminLTE/css/ionicons.min.css
                - bundles/nkadmin/css/adminLTE.css
                - bundles/sonataadmin/vendor/jqueryui/themes/flick/jquery-ui.min.css
                - bundles/sonataadmin/vendor/select2/select2.css
                - bundles/sonataadmin/vendor/select2/select2-bootstrap.css
                - bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css
                - bundles/nkadmin/css/styles.css
                - bundles/nkadmin/css/layout.css
    
    # Stof\DoctrineExtensionBundle configuration
    stof_doctrine_extensions:
       #default_locale: fr
       #translation_fallback: true
       orm:
           default:
               sluggable: true
               translatable: true