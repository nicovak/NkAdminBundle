Admin bundle implementation sonata admin
========================

Default config
        sonata_admin:
            title_logo: bundles/nksite/logo_admin.png
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
                        - bundles/nkadmin/css/bootstrap.min.css
                        - bundles/nkadmin/css/font-awesome.min.css
                        - bundles/nkadmin/css/animate.css
                        - bundles/sonataadmin/vendor/AdminLTE/css/ionicons.min.css
                        - bundles/sonataadmin/vendor/jqueryui/themes/flick/jquery-ui.min.css
                        - bundles/sonataadmin/vendor/select2/select2.css
                        - bundles/sonataadmin/vendor/select2/select2-bootstrap.css
                        - bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css
                        - bundles/nksite/css/sonata-translation.css
                        - bundles/nkadmin/css/adminLTE.css
                        - bundles/nkadmin/css/styles.css
                        - bundles/nkadmin/css/layout.css
                     javascripts:
                        - bundles/sonataadmin/vendor/jquery/dist/jquery.min.js
                        - bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js
                        - bundles/sonatacore/vendor/moment/min/moment.min.js
                        - bundles/sonataadmin/vendor/bootstrap/dist/js/bootstrap.min.js
                        - bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js
                        - bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js
                        - bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js
                        - bundles/sonataadmin/jquery/jquery.form.js
                        - bundles/sonataadmin/jquery/jquery.confirmExit.js
                        - bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js
                        - bundles/sonataadmin/vendor/select2/select2.min.js
                        - bundles/sonataadmin/App.js
                        - bundles/sonataadmin/Admin.js
                        - bundles/nkadmin/js/app.js
            
            # Stof\DoctrineExtensionBundle configuration
            stof_doctrine_extensions:
               #default_locale: fr
               #translation_fallback: true
               orm:
                   default:
                       sluggable: true
                       translatable: true
