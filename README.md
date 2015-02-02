Admin bundle implementation sonata admin
========================

Default config

    sonata_admin:
        title: ADMIN
        dashboard:
            blocks:
                - { position: left, type: sonata.admin.block.admin_list }
            groups:
                parameters:
                    label: Options
                    items:
                        - nk.admin.parameter
    
        assets:
            stylesheets:
                - /bundles/nkadmin/css/bootstrap.min.css
                - /bundles/nkadmin/css/font-awesome.min.css
                - /bundles/nkadmin/css/styles.css
                - /bundles/nkadmin/css/layout.css
                - /bundles/nkadmin/css/tree.css
                - /bundles/nkadmin/css/AdminLTE.css
        templates:
            layout:  NkAdminBundle::standard_layout.html.twig
            ajax:    SonataAdminBundle::ajax_layout.html.twig
            list:    SonataAdminBundle:CRUD:list.html.twig
            show:    SonataAdminBundle:CRUD:show.html.twig
            edit:    SonataAdminBundle:CRUD:edit.html.twig
            history: SonataAdminBundle:CRUD:history.html.twig
            preview: SonataAdminBundle:CRUD:preview.html.twig
            delete:  SonataAdminBundle:CRUD:delete.html.twig
            batch:   SonataAdminBundle:CRUD:list__batch.html.twig
            acl:     SonataAdminBundle:CRUD:acl.html.twig
            action:  SonataAdminBundle:CRUD:action.html.twig
            select:  SonataAdminBundle:CRUD:list__select.html.twig
            dashboard:           SonataAdminBundle:Core:dashboard.html.twig
            search:              SonataAdminBundle:Core:search.html.twig
            batch_confirmation:  SonataAdminBundle:CRUD:batch_confirmation.html.twig
            inner_list_row:      SonataAdminBundle:CRUD:list_inner_row.html.twig
            base_list_field:     SonataAdminBundle:CRUD:base_list_field.html.twig
            list_block:          SonataAdminBundle:Block:block_admin_list.html.twig
            user_block:          SonataAdminBundle:Core:user_block.html.twig
            add_block:           SonataAdminBundle:Core:add_block.html.twig
            pager_links:         SonataAdminBundle:Pager:links.html.twig
            pager_results:       SonataAdminBundle:Pager:results.html.twig
            history_revision_timestamp:  SonataAdminBundle:CRUD:history_revision_timestamp.html.twig
            short_object_description:    SonataAdminBundle:Helper:short-object-description.html.twig
            search_result_block: SonataAdminBundle:Block:block_search_result.html.twig