Admin bundle implementation sonata admin
========================


##composer.json##


    "sonata-project/admin-bundle": "2.4.*@dev",
    "sonata-project/doctrine-orm-admin-bundle": "2.4.*@dev",


##Default config##

    twig:
        globals:
            home_route_name: home
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
            layout: NkAdminBundle::base.html.twig
            edit:   MvSiteBundle:CRUD:edit.html.twig
        assets:
            stylesheets:
                - bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css
                - bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css
                - bundles/sonatacore/vendor/ionicons/css/ionicons.min.css
                - bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css
                - bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css
                - bundles/sonataadmin/vendor/iCheck/skins/flat/blue.css
                - bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css
                - bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css
                - bundles/sonatacore/vendor/select2/select2.css
                - bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css
                - bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css
                - bundles/sonataadmin/css/styles.css
                - bundles/sonataadmin/css/layout.css
                - bundles/sonataadmin/css/tree.css
                - bundles/nkadmin/css/bootstrap.min.css
                - bundles/nkadmin/css/font-awesome.min.css
                - bundles/nkadmin/css/animate.css
                - bundles/nkadmin/css/nkmvadmin.css
            javascripts:
                - bundles/sonatacore/vendor/jquery/dist/jquery.min.js
                - bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js
                - bundles/sonatacore/vendor/moment/min/moment.min.js
                - bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js
                - bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js
                - bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js
                - bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js
                - bundles/sonataadmin/vendor/jquery-form/jquery.form.js
                - bundles/sonataadmin/jquery/jquery.confirmExit.js
                - bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js
                - bundles/sonatacore/vendor/select2/select2.min.js
                - bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js
                - bundles/sonataadmin/vendor/iCheck/icheck.min.js
                - bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js
                - bundles/sonataadmin/Admin.js
                - bundles/sonataadmin/treeview.js
                - http://maps.google.com/maps/api/js?sensor=false
                - bundles/nkadmin/js/app.js                
        
    # Stof\DoctrineExtensionBundle configuration
    stof_doctrine_extensions:
       #default_locale: fr
       #translation_fallback: true
       orm:
           default:
               sluggable: true
               translatable: true
