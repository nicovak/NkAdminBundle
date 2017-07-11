<?php

namespace Nk\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ImageAdmin extends Admin
{
    /**
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     *
     * @return void
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('titre')
            ->add('slug')
            ->add('description')
            ->add('image')
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     *
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('titre', null, array(
                    'label' => "Titre de l'image"
                ))
                ->add('description', null, array(
                    'label' => "Description de l'image"
                ));

        $subject = $this->getSubject();
        if ($subject && $subject->getImage()) {
            $formMapper->add('file', 'file', array(
                'required' => false,
                'label' => "Fichier",
                'help' => '<strong>Image Actuelle:</strong><br /><img src="'.$subject->show() .'" style="max-width: 150px!important;"/><br />'
            ));
        } else {
            $formMapper->add('file', 'file', array(
                'label' => "Fichier"
            ));
        }
        $formMapper->end()
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     *
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('titre')
            ->add('slug')
            ->add('description')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }
}
